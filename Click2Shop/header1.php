<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Click2Shop</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="HTML Template/swiper.min.css"/>
    <link rel="stylesheet" href="HTML Template/style.css">
    <script type="text/javascript" src="swiper.min.js"></script>
    <script src="HTML Template/transition.js"></script>
    <script src="jquery-3.2.1.min.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Saira+Condensed:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Carter+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <?php

    require ('functions.php');


    if($_SERVER['REQUEST_METHOD']=="POST"){
        if(isset($_POST['recomandate_submit'])) {
            if (isset($cos)) {
                $cos->addToCart($_POST['user_id'], $_POST['item_id']);
            }
        }
    }

    if($_SERVER['REQUEST_METHOD']=="POST"){
        if(isset($_POST['noutati_submit'])) {
            if (isset($cos)) {
                $cos->addToCart($_POST['user_id'], $_POST['item_id']);
            }
        }
    }

    if($_SERVER['REQUEST_METHOD']=="POST"){
        if(isset($_POST['reduceri_submit'])) {
            if (isset($cos)) {
                $cos->addToCart($_POST['user_id'], $_POST['item_id']);
            }
        }
    }




    ?>


</head>
<body>

<div class="header">
    <div class="navbar">
        <nav>
            <div class="logo">
                <img src="HTML Template/imagini/c2s-logo.png"></div>
            <ul>
                <li><a class="active" href="#">Acasa</a></li>
                <li><a href="produse.php">Produse</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="#">Favorite</a></li>
                <li><a href="#"><?php

                        echo $_POST['username']??'Unknown';
                        ?></a></li>
                <li><a href="cos_cumparaturi.php"><img src="HTML Template/imagini/cart.png" width="50px" height="30px"><span class="cos"><?php if (!empty($produs)) {
                                echo count($produs->getData('cos'));
                            } ?> buc.</span></a></li>
            </ul>

        </nav>

    </div>
    <div class="container">
        <div class="row">
            <div class="col-2">
                <h1>Magazinul tau de acasa este aici!</h1>
                <p>Un raspuns scurt la intrebarea ce este un magazin online ar fi:
                    un website dinamic, in care comerciantul isi poate prezenta produsele
                    scoase la vanzare, iar vizitatorii sau clientii, isi pot alege produsele
                    pe care doresc sa le achizitioneze si, in unele cazuri chiar sa le plateasca
                    direct prin plata online.</p>
                <a href="produse.php" class="btn">Exploreaza &#8594;</a>
            </div>
            <div class="col-2">
                <div class="slider-new">

                    <img src="HTML Template/imagini/nou.png" class="img_nou" />
                    <div class="slides">

                        <div class="slide1">
                            <img src="HTML Template/imagini/iph12.png" class="img1" />
                        </div>
                        <div class="slide1">
                            <img src="HTML Template/imagini/iph12_2.png" class="img2" />
                        </div>
                        <div class="slide1">
                            <img src="HTML Template/imagini/iph12_3.png" class="img3" />
                        </div>

                    </div>
                </div>
                <div class="constant">
                    <h1>Noul iPhone 12</h1>
                    <p>Comfort is a very important things nowadays because it is a condition of satifaction.</p>

                    <a href="" class="btnshopnow">Cumpara Acum!</a>
                </div>

            </div>
        </div>
    </div>



</div>
