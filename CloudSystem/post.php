<?php
   	// include('../Connections/iot.php');	//使用資料庫的呼叫程式
		//	Connection() ;
   	
  	//  mysql_select_db($database_iot, $iot);

	$s01=$_POST["s01"];		//取得POST參數 : sid
	$s02=$_POST["s02"];		//取得POST參數 : sname
	$s03=$_POST["s03"];		//取得POST參數 : sdatetime
	$s04=$_POST["s04"];		//取得POST參數 : lat
	$s05=$_POST["s05"];		//取得POST參數 : lon
	$s06=$_POST["s06"];		//取得POST參數 : hight
	$s07=$_POST["s07"];		//取得POST參數 : wdir
	$s08=$_POST["s08"];		//取得POST參數 : wspeed
	$s09=$_POST["s09"];		//取得POST參數 : temp
	$s10=$_POST["s10"];		//取得POST參數 : humid
	$s11=$_POST["s11"];		//取得POST參數 :bar
	$s12=$_POST["s12"];		//取得POST參數 : rain
	$s13=$_POST["s13"];		//取得POST參數 : cid
	$s14=$_POST["s14"];		//取得POST參數 : cname
	$s15=$_POST["s15"];		//取得POST參數 : tid
	$s16=$_POST["s16"];		//取得POST參數 : tname

    echo $s01."_".$s02."_".$s03."_".$s04."_".$s05."_".$s06 ;

    
?>