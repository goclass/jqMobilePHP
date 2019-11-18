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
    $link = mysqli_connect("127.0.0.1", "root", "1234", "test") or die("Error");
        
    mysqli_query($link, 'SET NAMES utf8');

    $sql = "Select * from location";
        
    $result = mysqli_query($link, $sql);
?>
<div is="page" id="home" data-role="page" style="background-color:#ececec;">
<div is="header" data-role="header" data-position="fixed" style="background-color:red;color:white;">
<h4>美食地圖</h4>
<a class="ui-btn ui-btn-left  ui-btn-icon-left ui-icon-home ui-btn-icon-notext ui-corner-all" data-transition="slide" href="index.html" rel="external">Back</a>
</div>
<div is="content" role="main" class="ui-content">
    <div data-role="collapsible">
        <h4>野川堂秘境鍋物</h4>
        <p>林森路二段440號</p>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3653.366244649282!2d120.42209571488091!3d23.69861179666978!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x346eba0f96f2e54b%3A0x77a148c5b5ecadd9!2z6YeO5bed5aCC56eY5aKD6Y2L54mp!5e0!3m2!1szh-TW!2stw!4v1574056259049!5m2!1szh-TW!2stw" width="100%" height="400" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
    </div>
    <div data-role="collapsible">
        <h4>色鼎燒肉虎尾店</h4>
        <p>林森路二段125號</p>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3653.168138160603!2d120.42744541488116!3d23.705688996400035!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x346eba0f958ef16b%3A0x47e51c12ac825a52!2z6JmO5bC-6Imy6byO54eS6IKJ6JmO5bC-5bqX!5e0!3m2!1szh-TW!2stw!4v1574056425234!5m2!1szh-TW!2stw" width="100%" height="400" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
    </div>
    <?php
        while($row = mysqli_fetch_assoc($result))
        {
    ?>
    <div data-role="collapsible">
        <h4><?php echo $row['loc_title']; ?></h4>
        <p><?php echo $row['loc_place']; ?></p>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3653.168138160603!2d120.42744541488116!3d23.705688996400035!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x346eba0f958ef16b%3A0x47e51c12ac825a52!2z6JmO5bC-6Imy6byO54eS6IKJ6JmO5bC-5bqX!5e0!3m2!1szh-TW!2stw!4v1574056425234!5m2!1szh-TW!2stw" width="100%" height="400" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
    </div>
    <?php
        }
    ?>
</div>
</div>    
</body>
</html>
<?php
    mysqli_close($link);
?>