<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Document</title>
<link rel="stylesheet" href="css/jquery.mobile-1.4.5.min.css" />
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/jquery.mobile-1.4.5.min.js"></script>
<style>
    p {
        color:red;
        font-weight:999;
    }
</style>
</head>
<body>
<?php
$food = ["奶茶","可樂","雪碧"];
$price = [25,35,55];
?>
<div is="page" id="home" data-role="page" style="background-color:#ececec;">
<div is="header" data-role="header" data-position="fixed" style="background-color:red;color:white;">
    <h4>得來速美食</h4>
    <a class="ui-btn ui-btn-left  ui-btn-icon-left ui-icon-home ui-btn-icon-notext ui-corner-all" data-transition="slide" href="index.html" rel="external">Back</a>
</div>
<div is="content" role="main" class="ui-content">
    <ul data-role="listview" data-inset="true">
        <li>
            <a href="#">
                <img src="images/coffee.png">
                <h2>咖啡</h2>
                <p>$75</p>
            </a>
        </li>
        <li>
            <a href="#">
                <img src="images/cake.png">
                <h2>蛋糕</h2>
                <p>$35</p>
            </a>
        </li>
        <li>
            <a href="#">
                <img src="images/cookie.png">
                <h2>餅乾</h2>
                <p>$25</p>
            </a>
        </li>
        <?php 
            for($i=0;$i<3;$i++) 
            {
        ?>
        <li>
            <a href="#">
                <img src="images/food.png">
                <h2><?php echo $food[$i%3]; ?></h2>
                <p>$<?php echo $price[$i%3]; ?></p>
            </a>
        </li>
        <?php
            }
        ?>        
    </ul>
</div>
</div>    
</body>
</html>