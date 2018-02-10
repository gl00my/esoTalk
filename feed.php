<?php

define("PATH_ROOT", dirname(__FILE__));
require PATH_ROOT."/config/config.php";

date_default_timezone_set( 'Europe/Moscow' );

$username=$config["esoTalk.database.user"];
$password=$config["esoTalk.database.password"];
$db_name=$config["esoTalk.database.dbName"];

$url="http://instead.syscall.ru/talk/";

/**
 * Removes invalid XML
 *
 * @access public
 * @param string $value
 * @return string
 */
function stripInvalidXml($value)
{
	$ret = "";
	$current;
	if (empty($value)) {
		return $ret;
	}

	$length = strlen($value);
	for ($i=0; $i < $length; $i++) {
		$current = ord($value{$i});
		if (($current == 0x9) || ($current == 0xA) ||
			($current == 0xD) || (($current >= 0x20) && ($current <= 0xD7FF)) ||
			(($current >= 0xE000) && ($current <= 0xFFFD)) ||
			(($current >= 0x10000) && ($current <= 0x10FFFF))) {
			$ret .= chr($current);
		} else {
			$ret .= " ";
		}
	}
	return $ret;
}
function sanitizeHTML($value)
{
	$value = stripInvalidXml($value);
	$value=preg_replace('(\[[ \t]*spoiler[ \t]*\](.|\n)*\[[ \t]*/spoiler[ \t]*\])u', '*spoiler*', $value);
	return preg_replace('(\[[^]]*\])u', '', $value);
}

function postURL($postId)
{
	return "conversation/post/".$postId;
}

header("Content-Type: text/xml");

$xml = xmlwriter_open_memory();
xmlwriter_set_indent ($xml, true);
xmlwriter_start_document ($xml, '1.0', 'UTF-8');
xmlwriter_start_element ($xml, 'rss');
xmlwriter_start_attribute ($xml, 'version');
xmlwriter_text ($xml, '2.0');
xmlwriter_end_attribute ($xml);
xmlwriter_start_element ($xml, 'channel');
xmlwriter_start_element ($xml, 'title');
xmlwriter_text ($xml, str_replace (' &#149; ', '-', "INSTEAD"));
xmlwriter_end_element ($xml);
xmlwriter_start_element ($xml, 'link');
xmlwriter_text ($xml, "http://instead.syscall.ru/talk");
xmlwriter_end_element ($xml);
xmlwriter_start_element ($xml, 'description');
xmlwriter_text ($xml, "Сообщения с форума");
xmlwriter_end_element ($xml);
xmlwriter_start_element ($xml, 'language');
xmlwriter_text ($xml, "ru");
xmlwriter_end_element ($xml);

 $con = mysql_connect("localhost", $username, $password)
    or die ("Can't connect to db:" . mysql_error());
 mysql_select_db($db_name) or die ('Cant select database.');
 mysql_set_charset('utf8');

$result = mysql_query("SELECT t.postId, t.title, t.username, t.content, t.time FROM (SELECT p.postId, c.title, m.username, p.content, p.time FROM et_post p LEFT JOIN et_conversation c USING (conversationId) INNER JOIN et_member m ON (m.memberId=p.memberId) WHERE c.private=0 AND c.countPosts>0 AND p.deleteMemberId IS NULL ORDER BY p.time DESC LIMIT 200) t GROUP BY t.title ORDER BY t.time DESC LIMIT 20")
    or die ("Can't do select." . mysql_error());

while (list($postId, $title, $member, $content, $time) = mysql_fetch_row($result)) {
    xmlwriter_start_element ($xml, 'item');
    xmlwriter_start_element ($xml, 'name'); xmlwriter_text ($xml, $member); xmlwriter_end_element ($xml);
    xmlwriter_start_element ($xml, 'title'); xmlwriter_text ($xml, sanitizeHTML($title)); xmlwriter_end_element ($xml);
    xmlwriter_start_element ($xml, 'link'); xmlwriter_text ($xml, $url.postURL($postId)); xmlwriter_end_element ($xml);
    xmlwriter_start_element ($xml, 'description'); xmlwriter_text ($xml, sanitizeHTML($content)); xmlwriter_end_element ($xml);
    xmlwriter_start_element ($xml, 'pubDate'); xmlwriter_text ($xml, date("D, d M Y H:i:s O", $time)); xmlwriter_end_element ($xml);
    xmlwriter_start_element ($xml, 'author'); xmlwriter_text ($xml, sanitizeHTML($member)); xmlwriter_end_element ($xml);
    xmlwriter_start_element ($xml, 'guid'); xmlwriter_text ($xml, sanitizeHTML($postId)); xmlwriter_end_element ($xml);
    xmlwriter_end_element ($xml);
}
mysql_close($con);
 
xmlwriter_end_element ($xml);
xmlwriter_end_document ($xml);
header("Content-Type: text/xml");

echo xmlwriter_output_memory ($xml);
