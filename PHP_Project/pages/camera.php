<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        <?php include 'C:\xampp\htdocs\php\project\style\style\style.css'; ?>
        <?php include 'C:\xampp\htdocs\php\project\style\camera\style.css'; ?>
    </style>
</head>
<body>
<div class="page">
    <?php
        include 'C:\xampp\htdocs\php\project\pages\components\mutation\mutation.php';
    ?>
    <h1><?php echo $photo['text1'] ?></h1>
    <p><?php echo $photo['text2'] ?></p>
    <?php 
    
        $dir_gif = glob("../multimedia/Camera/*.gif");
        foreach ($dir_gif as $value) {
            echo "<img class='photo' src='$value'><hr>";
        }

       $dir_jpg = glob("../multimedia/Camera/*.jpg");
        foreach ($dir_jpg as $value) {
            echo "<img class='photo' src='$value'><hr>";
        }        
        
    ?>

<svg id="svg" width="842" height="1e3" xmlns="http://www.w3.org/2000/svg"><path d="M702 960c-54.2 52.6-114 44.4-171 19.6-60.6-25.3-116-26.9-180 0-79.7 34.4-122 24.4-170-19.6-271-279-231-704 77-720 74.7 4 127 41.3 171 44.4 65.4-13.3 128-51.4 198-46.4 84.1 6.8 147 40 189 99.7-173 104-132 332 26.9 396-31.8 83.5-72.6 166-141 227zM423 237C414.9 113 515.4 11 631 1c15.9 143-130 250-208 236z"/></svg>
</div>
</body>
</html>