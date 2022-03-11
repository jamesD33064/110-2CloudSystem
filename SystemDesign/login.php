<?php
  
    $username="";
    $password="";
    $dbname="fcu";

    $link = mysqli_connect("localhost" , $dbname , "A123456789" , $dbname) 
            or die("fault");
    echo "successful<br>";
    
    $username=$_POST["email"];
    $password=$_POST["password"];

    $sql = " SELECT * FROM `student`; ";

    if($result = mysqli_query($link,$sql)){
        while($row = mysqli_fetch_assoc($result)){
            if($row["id"]==$username && $row["password"]==$password){
                echo "登入成功".$row["id"]."-".$row["password"]."<br>";
                $i=1;
                
                echo "3秒後將自動跳轉頁面<br>";
                echo "<a href='index.php'>未成功跳轉頁面請點擊此</a>";
                // header("refresh:32;url=index.html");
                exit;
            }
        }
        echo "登入失敗";
        mysqli_free_result($result);
    }
    mysqli_close($link);

    
    // $password_hash=password_hash($password,PASSWORD_DEFAULT);
    



?>

