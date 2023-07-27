<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        <?php include 'style.css'; ?>
    </style>
</head>
<body>

    <form action="" method="get">
        <header>      
            <img class="logo" src="http://localhost/php/project/multimedia/logo/Logo.gif">      
            <a href="main.php?page=home&lang=<?php echo $glob_lang ?>"><?php echo $header['home'] ?></a>
            <a href="main.php?page=parametre&lang=<?php echo $glob_lang ?>"><?php echo $header['parametre'] ?></a>
            <a href="main.php?page=other_models&lang=<?php echo $glob_lang ?>"><?php echo $header['other_models'] ?></a>
            <a href="main.php?page=camera&lang=<?php echo $glob_lang ?>"><?php echo $header['camera'] ?></a>
            <a href="main.php?page=video&lang=<?php echo $glob_lang ?>"><?php echo $header['video'] ?></a>
            <a href="main.php?page=audio&lang=<?php echo $glob_lang ?>"><?php echo $header['audio'] ?></a>
            <a href="main.php?page=about_us&lang=<?php echo $glob_lang ?>"><?php echo $header['about_us'] ?></a>
            <a href="main.php?page=comments&lang=<?php echo $glob_lang ?>"><?php echo $header['comments'] ?></a>|  
            <a href="main.php?<?php echo "page=$page"?>&lang=sk">sk</a>
            <a href="main.php?<?php echo "page=$page"?>&lang=hy">arm</a>        
        </header>
    </form>


</body>
</html>
