<?php
  session_start();
  // 確認使用者目前登入狀態
  $username = NULL;
  if(!empty($_SESSION['username'])) {
    $username = $_SESSION['username'];
  }
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>index</title>
    <link href="CSS/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  </head>
  <body>
        <header>
            <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
                <a class="navbar-brand" href="index.php">
                    <img src=" " width="30" height="30" class="d-inline-block align-top" alt="">
                    <span class="h3 mx-1">系統分析與設計</span>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!-- .collapse.navbar-collapse 用於外層中斷點群組和隱藏導覽列內容 -->
                <!-- 選單項目&漢堡式折疊選單 -->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto">
                      <!-- active表示當前頁面 -->
                      <li class="nav-item active">
                          <a class="nav-link" href="index.php">首頁</a>   
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="aboutme.html">關於我們組</a>
                      </li>
                      <!-- .dropdown Navbar選項使用下拉式選單 -->
                      <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">分類</a>
                          <!-- .dropdown-menu 下拉選單內容 -->
                          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                              <a class="dropdown-item" href="#">紙本書</a>
                              <a class="dropdown-item" href="#">電子書</a>
                          </div>
                      </li>
                  </ul>
                      <!-- <form class="form-inline my-2 my-lg-0">
                          <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                      </form> -->
                  <ul class="nav navbar-nav navbar-right">
                      <li><a href="signin.html"><span class="glyphicon glyphicon-user"></span> Your Account</a></li>
                      <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
                  </ul>
                </div>
            </nav>
        </header>

  <main class="my-5">
    <div class="container">











    </div>
  </main>


  <footer class="bg-light text-lg-start">

    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2020 Copyright:
    </div>

  </footer>


    
  </body>
</html>
