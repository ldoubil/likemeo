<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>
    <?php
    echo($web_name);
    ?>
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
      <?php
      //引入Bootstrap4css和js
      include("/public/html/Bootstrap4.php");
      ?>
      <link rel="stylesheet" href="/module/home/box.css">

      <style type="text/css">

      div.qianlan
      {
        background-color: rgb(45, 168, 224)
      }
      div.shenlan
      {
        background-color: rgb(30, 115, 155)
      }
      div.gaodu
      {
        
        height: 1000px;
      }
      
      
      </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
  <!-- 设置一下字体颜色 -->
  <a class="bai navbar-brand " style="color:rgb(255, 255, 255)">爱萌站</a>
  <button class="navbar-toggler" data-target="#菜单" data-toggle="collapse">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div id="菜单" class="collapse navbar-collapse">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">主页</a>
      </li>
    </ul>
  </div>
</nav>

<div class="row">
  <div class="col-sm-9 gaodu qianlan">
    
    
      <?php
      
      include "/module/home/A_bilibili.php";
      include "/module/home/A_bilibili.php";
      include "/module/home/A_bilibili.php";
      include "/module/home/A_bilibili.php";
      ?>


  </div>
  <div class="col-sm-3 gaodu shenlan">
    
    </div>
</div>


    
</body>
</html>