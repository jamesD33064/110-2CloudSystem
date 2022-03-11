<?php
  
  $username="";
  $password="";
  $dbname="fcu";

  $link = mysqli_connect("localhost" , "fcu" , "A123456789" , "fcu") 
          or die("break");
  echo "successful";
   
  $username=$_POST["email"];
  $password=$_POST["password"];
  
  echo $username;
  echo $password;

?>

