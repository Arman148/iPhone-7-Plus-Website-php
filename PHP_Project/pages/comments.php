<?php 
    date_default_timezone_set('Europe/Bratislava'); 
    include 'C:\xampp\htdocs\php\project\pages\components\mutation\mutation.php';
    include 'C:\xampp\htdocs\php\project\pages\components\comments\functions.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        <?php include 'C:\xampp\htdocs\php\project\style\style\style.css'; ?>
        <?php include 'C:\xampp\htdocs\php\project\style\comments\style.css'; ?>
    </style>
</head>
<body>    
    <?php
        include 'C:\xampp\htdocs\php\project\pages\components\comments\connection.php';
    ?>
    <div class="page">
    <h1><?php echo $comments['comments']; ?></h1>
    <?php 
        echo "<form method='POST' action='".setComments($conn)."' >
        <textarea id='user' name='uid' placeholder='username'></textarea>
        <input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'>
        <textarea id='message' name='message' placeholder='message'></textarea><br>
        <button type='submit' name='commentSubmit'>Comment</button>
    </form>";

    getComments($conn);
    ?>
    </div>
    
    
</body>
</html>

<?php

/*<input type='hidden' name='uid' value='Anonymous'>*/

?>