<?php
    $glob_lang = "sk";

    if (!$glob_lang){
        $glob_lang = "sk";
    }
    else if (isset($_GET['lang']) && $glob_lang != $_GET['lang'] && !empty($_GET['lang'])) {
        if($_GET['lang'] == "sk")
            $glob_lang = "sk";
        else if ($_GET['lang'] == "hy")
            $glob_lang = "hy";
    }

    include "languages/$glob_lang.php";

?>