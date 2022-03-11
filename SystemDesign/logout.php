<?php
  session_start();
  session_destroy(); // 摧毀session
  header('location: index.php'); // 回到主頁
?>