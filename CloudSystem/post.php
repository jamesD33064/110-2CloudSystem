<?php
    $dbname="1102CloudSystem";

    $link = mysqli_connect("localhost" , $dbname , "123" , $dbname) or die("fault");
    echo "successful<br>";


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

    // echo $s01."_".$s02."_".$s03."_".$s04."_".$s05."_".$s06."_".$s07."_".$s08."_".$s09."_".$s10."_".$s11."_".$s12."_".$s13."_".$s14."_".$s15."_".$s16 ;

    $check_0 = "SELECT * FROM weather WHERE locationName = '".$s02."'" ;
    $check_1 = "SELECT * FROM weather WHERE time_obsTime = '".$s03."'";
    
    if(mysqli_num_rows(mysqli_query($link,$check_1)) && mysqli_num_rows(mysqli_query($link,$check_0))){
        echo "data error";
    }else{
        $result = "INSERT INTO `weather` (`stationId`, `locationName`, `time_obsTime`, `lat`, `lon`, `elementValue_0`, `elementValue_1`, `elementValue_2`, `elementValue_3`, `elementValue_4`, `elementValue_5`, `elementValue_6`, `parameterValue_1`, `parameterValue_0`, `parameterValue_3`, `parameterValue_2`) VALUES ('".$s01."','".$s02."','".$s03."','".$s04."','".$s05."','".$s06."','".$s07."','".$s08."','".$s09."','".$s10."','".$s11."','".$s12."','".$s13."','".$s14."','".$s15."','".$s16."')";
        mysqli_query($link, $result);
    }

    mysqli_close($link);

?>