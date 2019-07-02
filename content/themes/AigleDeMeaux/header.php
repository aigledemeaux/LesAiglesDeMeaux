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
            <ul>
                <li>Lundi</li>
                <li>Mardi</li>
                <li>Mercredi</li>
                <li>Jeudi</li>
                <li>Vendredi</li>
            </ul>
        </div>
    </div>
    
<div class="wrapper">
<header>
<div class="header-top">
    <img class="header-top__logo" src ="<?= get_theme_file_uri('public/images/logo.png') ?>">
    <div class="header-top__title">
        <img class="header-top__logo" src ="<?= get_theme_file_uri('public/images/balle.png') ?>" style="width:40px; height:40px;">
        <h1 class="header-top__title__team">Les Aigles de Meaux</h1>
        <img class="header-top__logo" src ="<?= get_theme_file_uri('public/images/balle.png') ?>" style="width:40px; height:40px;">
        
    </div>
</div>

<div class="header-bottom">
    
    <div class="header-bottom__meteo">
        <p class="header-bottom__meteo__position"><strong>Stade de Tauziet </strong></p>
        <div class="header-bottom__meteo__informations">
            <p class="header-bottom__meteo__informations__temperature">25°C</p>
            <p class="header-bottom__meteo__informations__state">Temps clair</p>
        </div>

