<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Click2Shop</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="HTML Template/swiper.min.css"/>
    <link rel="stylesheet" href="HTML Template/style.css">
    <script type="text/javascript" src="HTML Template/swiper.min.js"></script>
    <script src="HTML Template/transition.js"></script>
    <script src="HTML Template/jquery-3.2.1.min.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Saira+Condensed:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Carter+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <?php

    require ('functions.php');

    ?>


</head>
<body>

<div class="header">
    <div class="navbar">
        <nav>
            <div class="logo">
                <img src="HTML Template/imagini/c2s-logo.png"></div>
            <ul>
                <li><a href="index.php">Acasa</a></li>
                <li><a href="produse.php">Produse</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a class="active" href="favorite.php">Favorite</a></li>
                <li><a href="cont.php">Contul meu</a></li>
                <li><a href="cos_cumparaturi.php"><img src="HTML Template/imagini/cart.png" width="50px" height="30px"><span class="cos"><?php if (!empty($produs)) {
                                echo count($produs->getData('cos'));
                            } ?> buc.</span></a></li>
            </ul>

        </nav>

    </div>
    <div class="container">
        <div class="row">
            <div class="col-2">
                <br>
                <br>
                <br>
                <br>
                <br>
                <div class="maintenance">
                    <h1>PAGINA IN LUCRU!!!!!!!!!</h1></div>
            </div>

            </div>
        </div>
    </div>



</div>
