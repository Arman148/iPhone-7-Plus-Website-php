<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        <?php include 'C:\xampp\htdocs\php\project\style\style\style.css'; ?>
        <?php include 'C:\xampp\htdocs\php\project\style\about_us\style.css'; ?>
    </style>
    <title>Document</title>
</head>
<body>



<?php
    include 'C:\xampp\htdocs\php\project\pages\components\mutation\mutation.php';
?>




<div class="info">
            <div class="title">
                <h1>Apple Inc.</h1>
            </div>

            <div class="text">
                <p id="apple">
                    <?php echo $about['text'] ?>
                </p>
            </div>

            <div id="statistic" >
                <h1 class="st_h1" ><?php echo $about['st'] ?></h1>
                <p class="st_p" ><?php echo $about['st_1'] ?></p>
                                
                <h1 class="st_h1"><?php echo $about['pr'] ?></h1>
                <p class="st_p" style="font-size: xx-large;">900.000.000+</p>
            </div>

            <footer>
                <a href="https://www.facebook.com/apple/">FaceBook</a>
                <a href="https://www.instagram.com/apple/">Instagram</a>
                <a href="https://twitter.com/apple">Twitter</a>
                <a href="https://www.youtube.com/user/Apple">YouTube</a>
                <div class="contacts">
                    <p style="color: white;">
                        Los Altos, California, USA <br>
                        num: 0800 004 640 <br>
                        mail: xvardanyan@stuba.sk                    
                    </p>
                </div>
            </footer>
        </div>

    </div>        
</body>
</html>