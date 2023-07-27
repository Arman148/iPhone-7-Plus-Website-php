<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        <?php include 'C:\xampp\htdocs\php\project\style\style\style.css'; ?>
        <?php include 'C:\xampp\htdocs\php\project\style\video\style.css'; ?>
    </style>
</head>
<body>
    <?php
        include 'C:\xampp\htdocs\php\project\pages\components\mutation\mutation.php';
    ?>

    <div class="page">
        <h1><?php echo $video['text1'] ?></h1>
        <?php
            
            $dir = glob("../multimedia/video/*.mp4");
            foreach ($dir as $value) {
                echo "
                    <video controls>
                        <source src='$value' type='video/mp4'>
                        Your browser does not support the video tag.
                    </video>";
              echo "<hr>";
            }
        ?>
    </div>
</body>
</html>