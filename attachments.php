<?php

define("PATH_ROOT", dirname(__FILE__));
require PATH_ROOT."/config/config.php";

date_default_timezone_set( 'Europe/Moscow' );

$username=$config["esoTalk.database.user"];
$password=$config["esoTalk.database.password"];
$db_name=$config["esoTalk.database.dbName"];
$url=$config["esoTalk.baseURL"];


function sanitizeHTML($value)
{
	$value=preg_replace('(\[[ \t]*spoiler[ \t]*\].*\[[ \t]*/spoiler[ \t]*\])u', '*spoiler*', $value);
	return preg_replace('(\[[^]]*\])u', '', $value);
}

function postURL($postId)
{
	return "conversation/post/".$postId;
}
$con = mysql_connect("localhost", $username, $password)
    or die ("Can't connect to db:" . mysql_error());
mysql_select_db($db_name) or die ('Cant select database.');
mysql_set_charset('utf8');

$result = mysql_query("SELECT a.postId,a.filename FROM et_attachment a")
    or die ("Can't do select." . mysql_error());
echo ("<html>");
echo ("<body>");
while (list($postId,$filename) = mysql_fetch_row($result)) {
      if (!mysql_fetch_row(mysql_query("SELECT p.postId FROM et_post p where p.postId = $postId"))){
	     echo("<a href='$url".postURL($postId)."'>".$filename."</a> - orphan deleted<br/>\n");
	     mysql_query("DELETE FROM et_attachment WHERE postId = $postId");
      } else {
	      echo("<a href='$url".postURL($postId)."'>".$filename."</a><br/>\n");
      }

}
echo ("</body>");
echo ("</html>");
mysql_close($con);
