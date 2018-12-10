<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title><?php echo ($web_name); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <?php //引入Bootstrap4css和js 
    include("public/html/Bootstrap4.php"); ?>
    <link rel="stylesheet" href="/module/home/box.css?version=4" />

    <style type="text/css">
      div.qianlan {
        background-color: rgb(45, 168, 224);
      }
      div.shenlan {
        background-color: rgb(30, 115, 155);
      }
      div.gaodu {
        /* 暂无设置 */
      }
    </style>
  </head>
  <body>
    <?php include "public/html/biaoti.php"; ?>

    <div class="row">
      <div class=" col-sm-9 gaodu qianlan">
        <?php include "module/home/A_bilibili.php"; 
        include"module/home/A_bilibili.php"; 
        include "module/home/A_bilibili.php";
        include "module/home/A_bilibili.php";
        include "module/home/A_bilibili.php"; 
        include "module/home/A_bilibili.php";
        include "module/home/A_bilibili.php"; 
        include "module/home/A_bilibili.php"; 
        include "module/home/A_bilibili.php";
        include "module/home/A_bilibili.php";
        include "module/home/A_bilibili.php"; ?>
      </div>
      <div class="col-sm-3 gaodu shenlan">


        <div>


        </div>




      </div>
    </div>
  </body>
</html>
