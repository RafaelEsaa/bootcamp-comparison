<html>
    <?php 
    $menu = file_get_contents('https://www.4geeksacademy.co/wp-json/menus/v1/menus/blog-header');
    $menu = json_decode($menu);
    ?>
    <head>
        <title>4Geeks</title>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
        <link rel="stylesheet" href="<?php echo SITE_URL."assets/css/style.css"?>">
        <link rel="stylesheet" href="<?php echo SITE_URL."assets/css/style.min.css"?>">

        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    </head>
    <body>

    <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top mediumnavigation">
        <div class="container">
            <!-- Begin Logo -->
            <a class="navbar-brand" href="<?php echo SITE_URL?>">
                <img src="http://assets.breatheco.de/apis/img/images.php?blob&cat=icon&tags=4geeks" alt="logo">
            </a>
            <!-- End Logo -->
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <!-- Begin Menu -->
        <div id="navbarResponsive" class="collapse navbar-collapse">
            <ul id="menu-blog-header-menu" class="navbar-nav ml-auto">
<?php

function buildTree($items){
    $tree = [];
    $parents = [];
        foreach($items as $item)
            if(empty($item->menu_item_parent)){
                $tree[$item->ID] = [];
                $parents[] = (array) $item;
            }
            else{
                if(!isset($tree[$item->menu_item_parent]))
                    $tree[$item->menu_item_parent] = [];
                    $tree[$item->menu_item_parent][] = (array) $item;
            }

    $parents = array_map(function($parent) use ($tree){
        $parent["childs"] = $tree[$parent["ID"]];
        return $parent;
    }, $parents);
    return $parents; 
}

$hierarchy = buildTree($menu->items);

foreach($hierarchy as $key => $com){
    if($com['title'] != 'Language switcher'){
    ?>
    <li id="menu-item-<?php echo $com['ID']?>" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-6 current_page_item current_page_parent menu-item-has-children menu-item-<?php echo $com['ID']?> nav-item dropdown active">
        <a href="<?php echo $com['url']?>" class="nav-link dropdown-toggle active" data-toggle="dropdown"><?php echo $com['title'];?></a>
        <?php 
        if($com['childs']){
            ?>
            <div class="dropdown-menu"><?php
            foreach($com['childs'] as $key => $subtitle){ ?>
            <a href="<?php echo $subtitle['url'] ?>" class="dropdown-item">
                <?php echo $subtitle['title'] ?>
            </a>
            <?php 
            }
            ?>
            </div>
        <?php }
        ?>
    </li>
    <?php }
        else{?>
            <li id="menu-item-2242-es" class="lang-item lang-item-91 lang-item-es menu-item menu-item-type-custom menu-item-object-custom menu-item-2242-es nav-item">
                <a href="https://www.4geeksacademy.co/es/blog-en-espanol/" class="nav-link idiom" hreflang="es-ES" lang="es-ES">
                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAALCAIAAAD5gJpuAAAABGdBTUEAAK/INwWK6QAAABl0RVh0U29mdHdhcmUAQWRvYmUgSW1hZ2VSZWFkeXHJZTwAAAFnSURBVHjaYvzPgAD/UNlYEUAAmuTYAAAQhAEYqF/zFbe50RZ1cMmS9TLi0pJLRjZohAMTGFUN9HdnHgEE1sDw//+Tp0ClINW/f0NIKPoFJH/9//ULyGaUlQXaABBALAx/Gf4zAt31F4i+ffj3/cN/XrFfzOx//v///f//LzACM/79ZmD8/e8TA0AAMYHdDVT958vXP38nMDB0s3x94/Tj5y+YahhiAKLfQKUAAcQEdtJfoDHMF2L+vPzDmFXLelf551tGFOOhev4A/QgQQExgHwAd8IdFT/Wz6j+GhlpmXSOW/2z///8Eq/sJ18Dw/zdQA0AAMQExxJjjdy9x2/76EfLz4MXdP/i+wsyGkkA3Aw3984cBIIAYfzIwMKel/bt3jwEaLNAwgZIQxp/fDH/+MqqovL14ESCAWICeZvr9h0FSEhSgwBgAygFDEMT+wwAhgQgc4kAEVAwQQIxfUSMSTxxDAECAAQAJWke8v4u1tAAAAABJRU5ErkJggg==" title="Español" alt="Español">
                </a>
            </li>
        <?php }
    ?>
    
    <?php } ?>

    
            </ul>
        </div>
        <!-- End Menu -->
        <!-- Begin Search -->
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search">
            <span class="search-icon"><svg class="svgIcon-use" width="25" height="25" viewBox="0 0 25 25"><path d="M20.067 18.933l-4.157-4.157a6 6 0 1 0-.884.884l4.157 4.157a.624.624 0 1 0 .884-.884zM6.5 11c0-2.62 2.13-4.75 4.75-4.75S16 8.38 16 11s-2.13 4.75-4.75 4.75S6.5 13.62 6.5 11z"></path></svg></span>
        </form>
        <!-- End Search -->
        </div>
        </div>
    </nav>