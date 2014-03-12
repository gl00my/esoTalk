<?php

define("PATH_ROOT", dirname(__FILE__));
require PATH_ROOT."/config/config.php";

date_default_timezone_set( 'Europe/Moscow' );

$username=$config["esoTalk.database.user"];
$password=$config["esoTalk.database.password"];
$db_name=$config["esoTalk.database.dbName"];
$url=$config["esoTalk.baseURL"];


$con = mysql_connect("localhost", $username, $password)
    or die ("Can't connect to db:" . mysql_error());
mysql_select_db($db_name) or die ('Cant select database.');
mysql_set_charset('utf8');

$result = mysql_query("SELECT m.username,m.memberId,m.lastActionTime FROM et_member m ORDER BY m.joinTIme DESC")
    or die ("Can't do select." . mysql_error());
echo ("<html>");
echo ("<head><meta charset='utf-8'></head>");
echo ("<body>");
while (list($username,$memberId,$lastActionTime) = mysql_fetch_row($result)) {
	if ($lastActionTime) {
		$lastActionTime="";
	} else {
		$lastActionTime=" <b>[no activity]</b>";
	}
	 echo("<a href='$url"."index.php/member/$memberId"."'>".$username."</a>"."$lastActionTime"."<br/>\n");
}
echo ("</body>");
echo ("</html>");
mysql_close($con);
