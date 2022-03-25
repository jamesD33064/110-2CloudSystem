<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"

$hostname_iot = "localhost";
$database_iot = "1102CloudSystem";
$username_iot = "1102CloudSystem";
$password_iot = "123";
$iot = mysqli_connect($hostname_iot, $username_iot, $password_iot) or trigger_error(mysql_error(),E_USER_ERROR); 
		mysqli_query($iot,"SET NAMES UTF8");
		session_start();
		mysqli_select_db($iot,$database_iot);
?>