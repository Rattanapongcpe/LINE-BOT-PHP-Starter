<?php
function Connection(){
	$server="http://49.231.30.115";
	$user="root";
	$pass="hctr77hd";
	$db="hydro";
	$connection = mysql_connect($server, $user, $pass);
  echo "ok";
// 	if (!$connection) {
// 		die('MySQL ERROR: ' . mysql_error());
// 	}
// 	mysql_select_db($db) or die( 'MySQL ERROR: '. mysql_error() );
// 	return $connection;
// }
// 	$link=Connection();
// 	$result = mysql_query ("SELECT * FROM sensor_data ORDER BY timeStamp DESC",$link) or die("ไม่สามารถเลือกฐานข้อมูลได้");
// 	$row = mysql_fetch_array($result);
	
// 	echo $row['pH']
?>
