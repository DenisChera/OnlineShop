<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Click2Shop</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="HTML Template/swiper.min.css"/>
    <link rel="stylesheet" href="HTML Template/style.css">
    <script type="text/javascript" src="HTML Template/swiper.min.js"></script>
    <script src="HTML Template/transition3.js"></script>
    <script src="HTML Template/jquery-3.2.1.min.js"></script>
    <script src="swiper-bundle.min.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Saira+Condensed:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Carter+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<div class="header">
    <div class="navbar">
        <nav>
            <div class="logo">
                <img src="HTML Template/imagini//c2s-logo.png"></div>
            <ul>
                <li><a href="index.php">Acasa</a></li>
                <li><a href="produse.php">Produse</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="favorite.php">Favorite</a></li>
                <li><a href="cont.php">Contul meu</a></li>
                <li><a class="active" href=""><img src="HTML Template/imagini/cart.png" width="50px" height="30px"><span class="cos"><?php if (!empty($produs)) {
                                echo count($produs->getData('cos'));
                            } ?> buc.</span></a></li>
            </ul>

        </nav>

    </div>



</div>




<script type="text/javascript" src="swiper.min.js"></script>
<script src="HTML Template/transition3.js"></script>



<!-------cos------->
<div class="try2-cos">
    <div class="intern2-cos">
        <h2></h2></div></div>


<div class="small-container3-cos">
    <h2>Cosul meu</h2>

    <div class="small-container-cart cart-page">
            <?php

            require("database/Cart.php");
            $db = new DBController();
            $produs = new Produs($db);
            $cos = new Cart($db);
            $product_shuffle = $produs->getData();
            $item_id = $_GET['item_id']??1;
            shuffle($product_shuffle);

            if($_SERVER['REQUEST_METHOD']=="POST"){
                if(isset($_POST['noutati_cos_submit'])) {
                    $cos->addToCart($_POST['user_id'],$_POST['item_id']);

                }
            }
            ?>

            <div class="row">
                <div class="empty">
                <img src="HTML Template/imagini/empty_cart.png"></div>


            </div>
        <div class="row">
        <p class="cos-gol">Cosul tau este gol</p>
        <div class="btn-empty">
            <a href="index.php" class="btn">Intoarce-te in magazin</a></div></div>

        <div class="try2">
            <div class="intern2">
            </div></div>
        <div class="small-container3-cart">
            <h2>Noutati</h2></div>
        `       <div class="top">
            <div class="swiper-container">

                <div class="swiper-wrapper">
                    <?php array_map(function($item){?>
                        <!------slide1---------->

                        <div class="swiper-slide">

                            <div class="small-container6">
                                <div class="initial2">
                                    <div class="slider-box">


                                        <div class="img-box">
                                            <img src="<?php echo $item['item_image']??"HTML Template/imagini/a41.png";?>">
                                        </div>
                                        <p class="detail"><?php echo $item['item_name']??"Unknown";?>
                                        <div class="review10">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>

                                        </div>
                                        <a href="#" class="price"><?php echo $item['item_price']??'0';?>Lei</a>
                                        </p>
                                        <div class="cart">
                                            <form method="post">
                                                <input type="hidden" name="item_id" value="<?php echo $item['item_id']??'1';?>">
                                                <input type="hidden" name="user_id" value="<?php echo 1;?>">
                                                <?php
                                                $db = new DBController();
                                                $produs = new Produs($db);
                                                $cos = new Cart($db);
                                                if(in_array($item['item_id'],$cos->getCartId($produs->getData('cos')) ?? [])){
                                                    echo '<button type="submit" disabled class="in_cos" name="noutati_cos_submit">Produsul se afla in cos</button>';
                                                }else

                                                    echo '<button type="submit" name="noutati_cos_submit">Adauga in cos</button>';
                                                ?>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="hover-rec">
                                        <div class="time3">
                                            <a  class="like">
                                                <i class="fa fa-heart" aria-hidden="true"></i>
                                            </a>

                                        </div>
                                        <a href="<?php printf('%s?item_id=%s', 'detalii_produse.php', $item['item_id'])?>" class="vezi">Detalii</a>
                                    </div>
                                </div>

                            </div>

                        </div>

                    <?php }, $product_shuffle)?>
                </div>


                <div class="swiper-pagination"></div>
                <!-- Add Arrows --></div>

            <div class="arrows">
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div></div>
        </div>


        <div class="mutare3">
            <div class="footer-cos">
                <div class="container_new_cos">
                    <div class="row">
                        <div class="footer-cos-col-1">
                            <h3>Descarca aplicatia noastra</h3>
                            <p>Descarca aplicatia pentru Android si ios</p>
                            <div class="app-logo">
                                <img src="HTML Template/imagini//play-store.png">
                                <img src="HTML Template/imagini//app-store.png">

                            </div>
                        </div>
                        <div class="footer-cos-col-2">
                            <img src="HTML Template/imagini//c2s-logo.png">
                            <p>Din pasiune pentru tehnologie</p>
                        </div>
                        <div class="footer-cos-col-3">
                            <h3>Comenzi si livrare</h3>
                            <ul>
                                <li>Contul meu</li>
                                <li>Cum comand online</li>
                                <li>Livrarea comenzilor</li>
                                <li>Modalitati de plata</li>

                        </div>
                        <div class="footer-cos-col-4">
                            <h3>Urmareste-ne</h3>
                            <ul>
                                <li>Facebook</li>
                                <li>Twitter</li>
                                <li>Instagram</li>
                                <li>Youtube</li>

                        </div>
                    </div>
                    <hr>
                    <p class="copyright">Copyright 2020 - Denis Chera</p>

                </div>
            </div>
        </div>



    </div>

</div>





<!--------footer---------->

<script type="text/javascript" src="swiper.min.js"></script>
<script src="HTML Template/transition2.js"></script>


<script>

    var $slides = $('.slides');
    var $slide = $('.slide1');
    var count = 1;

    $(document).ready(function () {

        setInterval(function () {

            $slides.animate({ 'margin-left': '-=68vw' }, 1200, function () {

                count++;
                if (count === 4) {
                    $slides.css("margin-left", 0);
                    count = 1;
                }

            });
        }, 4000);
    });

</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(document).ready(function(){
        $(".like").click(function(){
            $(this).toggleClass("heart");
        });
    });
</script>



</body>
</html>