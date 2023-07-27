
<?php
    
    $page = "home";

    
    function onFunc($p){
        include "$p.php";
    }

    if($_GET['page'] == 'parametre') {
        $page = "parametre";
    }
    if($_GET['page'] == 'other_models') {
        $page = "other_models";
    }
    if($_GET['page'] == 'camera') {
        $page = "camera";
    }
    if($_GET['page'] == 'video') {
        $page = "video";
    }
    if($_GET['page'] == 'audio') {
        $page = "audio";
    }
    if($_GET['page'] == 'about_us') {
        $page = "about_us";
    }
    if($_GET['page'] == 'home') {
        $page = "home";       
    }
    if($_GET['page'] == 'comments') {
        $page = "comments";       
    }

    
    
?>