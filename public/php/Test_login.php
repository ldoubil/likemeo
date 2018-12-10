<?php

// 获取到cookie起名为password_md5
    if (isset($_COOKIE["password_md5"])) {
        echo ("检测到了"+$_COOKIE["password_md5"]);
    } else {
        echo ("检测失败");
    }



    ?> 