<?php 
    require('./globals.php');
    if(isset($_GET['page']) && $_GET['page']!='index.php'){
        if(file_exists('templates/'.$_GET['page'].'.php')) require('templates/'.$_GET['page'].'.php');
        else require('templates/404.php');
    }
    else require('templates/home.php');
?>