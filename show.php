<?php
function Connection(){
	$server="localhost";
	$user="root";
	$pass="hctr77hd";
	$db="hydro";

	$connection = mysql_connect($server, $user, $pass);

	if (!$connection) {
		die('MySQL ERROR: ' . mysql_error());
	}

	mysql_select_db($db) or die( 'MySQL ERROR: '. mysql_error() );

	return $connection;
}
	$link=Connection();

	//$result=mysql_query("SELECT * FROM tempLog ORDER BY timeStamp DESC",$link);
	$result = mysql_query("SELECT timeStamp, temperature, humidity, light, pH, pump, fog FROM tempLog ORDER BY id DESC LIMIT 1") or die("ไม่สามารถเลือกฐานข้อมูลได้");

	if($result!==FALSE){
		while($row = mysql_fetch_array($result)) {
 printf("%s,%s,%s,%s,%s,%s,%s",$row["timeStamp"], $row["temperature"], $row["humidity"], $row["light"], $row["pH"], $row["pump"], $row["fog"]);
		 }
		 mysql_free_result($result);
		 mysql_close();
		}
?>
