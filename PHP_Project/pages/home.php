<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <style>
        <?php include 'C:\xampp\htdocs\php\project\style\home\style.css'; ?>
        <?php include 'C:\xampp\htdocs\php\project\style\style\style.css'; ?>
    </style>
</head>
<body>
    
<?php 

$lang = $_GET['lang'];

?>

<div class="main">
    <img src="http://localhost/php/project/multimedia/home_page/1_<?php echo $lang ?>.jpg" >
            
    <div class="group">
        <img class="group_img" src="http://localhost/php/project/multimedia/home_page/2_<?php echo $lang ?>.jpg" >
        <img class="group_img" src="http://localhost/php/project/multimedia/home_page/3_<?php echo $lang ?>.jpg" >                
    </div>
            
    <div class="group">
        <img class="group_img" src="http://localhost/php/project/multimedia/home_page/4_<?php echo $lang ?>.jpg" >
        <img class="group_img" src="http://localhost/php/project/multimedia/home_page/5_<?php echo $lang ?>.jpg" >
    </div>
        <video width="100%" height="100%" controls="controls">
            <source src="http://localhost/php/project/multimedia/home_page/video/iPhone%207%20%e2%80%93%20Design.mp4" type='video/ogg; codecs="theora, vorbis"'>
        </video>
    </div>
</body>
</html>