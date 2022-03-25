<?php
	function Connection() 
	{

		$server="localhost";		//mysql資料庫的ip or域名
		$user="fcu";			//連線mysql帳號
		$pass="12345678";			//連線mysql帳號密碼
		$db="fcu";				//連線mysql主要運作的資料庫名稱
   		//echo "cnn is ok 01"."<br>" ;	   	
		$connection = mysqli_connect($server, $user, $pass);	//連線到資料庫
   		//echo "cnn is ok 02"."<br>" ;	   	

		if (!$connection) //不連線成功
		{
	    	die('MySQL ERROR: ' . mysql_error());		//連線失敗，idle(dead) here
			// idle  here(Dead)
		}
		
   		//echo "cnn is ok 03"."<br>" ;	   	
//		   mysqli_select_db($connection,$db); or die( 'MySQL ERROR: '. mysqli_error() );
		   mysqli_select_db($connection,$db); 	//切換目前資料庫
   		//echo "cnn is ok 04"."<br>" ;	   	
		mysqli_query($connection,"SET NAMES UTF8");	//切換目前語系
   		//echo "cnn is ok 05"."<br>" ;	   	
		session_start();	//啟動session
   		//echo "cnn is ok 06"."<br>" ;	   	
	
		return $connection  ;	//將連線回傳
	}
	
?>