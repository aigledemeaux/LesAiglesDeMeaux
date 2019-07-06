<?php require('inc/theme-meteo.php'); ?>
<?php wp_head() ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aigle de Meaux</title>
</head>
<body>
    <div class="menu">
        <div class="button-menu">
            <i class="fa fa-arrow-circle-left button-menu__icone" aria-hidden="true"></i>
        </div>
        <div class="content-menu">
            <img src="<?= get_theme_file_uri('public/images/image-menu.png') ?>" alt="">
            <!-- <ul>
                <li>Lundi</li>
                <li>Mardi</li>
                <li>Mercredi</li>
                <li>Jeudi</li>
                <li>Vendredi</li>
            </ul> -->
            <?php wp_nav_menu( array( 
    'theme_location' => 'Menu lateral',
    //'menu_class' => 'main-nav',
    //'container' => 'nav',
    //'menu' => 'Mega Menu',
    
    ) ); ?>
        </div>
    </div>

    <div class="header-top">
        <!-- <nav class="main-nav">
            <a href="">Accueil</a>
            <a href="">Nos actualités</a>
            <a href="">Le club</a>
            <a href="">Calendrier</a>
            <a href="">Résultats</a>
        </nav> -->
        


        <?php /*$menu = wp_nav_menu([
    // Je désigne le menu à afficher "définit dans functions.php
    'theme_location' => 'Menu de haut de page qui apparait en mode ordinateur',
    // Je souhaite avoir un container (= une balise qui englobe mon menu) "<nav>"
    'container' => 'nav',
    // Je souhaite que mon container ai la classe "main-nav
    'menu_class' => 'main-nav',
    
    'menu' => 'Mega Menu',



    // Je ne souhaite pas afficher mon menu directement mais le récuperer dans une variable
    'echo' => false
]); ?>
<?= $menu */?>
<?php wp_nav_menu( array( 
    'theme_location' => 'Mega Menu',
    'menu_class' => 'main-nav',
    'container' => 'nav',
    'menu' => 'Mega Menu',
    
    ) ); ?>

    </div>
    
<div class="wrapper">
<header>
    <div class="header-middle">
        <img class="header-middle__logo" src ="<?= get_theme_file_uri('public/images/logo.png') ?>">
        <div class="header-middle__title">
            <img class="header-middle__logo" src ="<?= get_theme_file_uri('public/images/balle.png') ?>" style="width:40px; height:40px;">
            <h1 class="header-middle__title__team">Les Aigles de Meaux<br>(Baseball)</h1>
            <img class="header-middle__logo" src ="<?= get_theme_file_uri('public/images/balle.png') ?>" style="width:40px; height:40px;">
            
        </div>
    </div>

    <div class="header-bottom">
        
        <div class="header-bottom__meteo">
            <p class="header-bottom__meteo__position"><strong>Stade de Tauziet </strong></p>
            <div class="header-bottom__meteo__informations">
                <p class="header-bottom__meteo__informations__temperature"> <?php if(isset($forecasts[0]->tmin)){echo 'De '.$forecasts[0]->tmin.'C° à '; }else{echo 'météo';}; ?><?php if(isset($forecasts[0]->tmax)){echo $forecasts[0]->tmax.'C°'; }else{echo ' indisponible';}; ?></p>
                <p class="header-bottom__meteo__informations__state"><?php if(isset($forecasts[0]->weather)){echo WEATHER[$forecasts[0]->weather]; }else{echo 'err';}; ?></p>
            </div>
        </div>

        
    <!-- ici -->
    </div>
</header>

