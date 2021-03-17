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
</head>
<body>
<?php
require ('database/Produs.php');
require ('database/Cart.php');

require ('database/DBController.php');
$db = new DBController();
$produs = new Produs($db);
$cos = new Cart($db);
if($_SERVER['REQUEST_METHOD']=="POST"){
    if(isset($_POST['produse_submit'])) {

        $cos->addToCart($_POST['user_id'], $_POST['item_id']);

    }
}

?>
<div class="header">
    <div class="navbar">
        <nav>
            <div class="logo">
                <img src="HTML Template/imagini/c2s-logo.png"></div>
            <ul>
                <li><a href="index.php">Acasa</a></li>
                <li><a class="active" href="#">Produse</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="#">Favorite</a></li>
                <li><a href="cont.php">Contul meu</a></li>
                <li><a href="cos_cumparaturi.php"><img src="HTML Template/imagini/cart.png" width="50px" height="30px"><span class="cos"><?php if (!empty($produs)) {
                                echo count($produs->getData('cos'));
                            } ?> buc.</span></a></li>
            </ul>

        </nav>

    </div>



</div>






<div class="try2-produse">
    <div class="intern2-produse">
        <h2></h2></div></div>

<?php


if (!empty($produs)) {
    $product_shuffle = $produs->getData();
}
shuffle($product_shuffle);
$cos = new Cart($db);

?>

<div class="small-container3-produse">
    <h2>Toate Produsele</h2>
    <select>
        <option>Sorteaza dupa popularitate</option>
        <option>Sorteaza dupa pret</option>
        <option>Sorteaza dupa rating</option>
        <option>Sorteaza dupa cele mai noi</option>
    </select>
    <div class="row">
        <?php array_map(function($item){if($item['item_id']<=4){?>
            <div class="small-container5">

                <div class="initial">
                    <div class="slider-box2">


                        <div class="img-box2">
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
                                    echo '<button type="submit" disabled class="in_cos" name="produse_submit">Produsul se afla in cos</button>';
                                }else

                                    echo '<button type="submit" name="produse_submit">Adauga in cos</button>';
                                ?>
                            </form>
                        </div>
                    </div>
                    <div class="hover">
                        <div class="time3">
                            <a  class="like">
                                <i class="fa fa-heart" aria-hidden="true"></i>
                            </a>

                        </div>
                        <a href="<?php printf('%s?item_id=%s', 'detalii_produse.php', $item['item_id'])?>" class="vezi">Detalii</a>
                    </div>
                </div>

            </div>
        <?php }}, $product_shuffle)?>
        <?php array_map(function($item){if($item['item_id']>4 && $item['item_id']<=8){?>
            <div class="small-container5">

                <div class="initial">
                    <div class="slider-box2">


                        <div class="img-box2">
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
                                    echo '<button type="submit" disabled class="in_cos" name="produse_submit">Produsul se afla in cos</button>';
                                }else

                                    echo '<button type="submit" name="produse_submit">Adauga in cos</button>';
                                ?>
                            </form>
                        </div>
                    </div>
                    <div class="hover2">
                        <div class="time3">
                            <a  class="like">
                                <i class="fa fa-heart" aria-hidden="true"></i>
                            </a>

                        </div>
                        <a href="<?php printf('%s?item_id=%s', 'detalii_produse.php', $item['item_id'])?>" class="vezi">Detalii</a>
                    </div>
                </div>

            </div>
        <?php }}, $product_shuffle)?>

        <?php array_map(function($item){if($item['item_id'] > 8 && $item['item_id'] <=12){?>
            <div class="small-container5">

                <div class="initial">
                    <div class="slider-box2">


                        <div class="img-box2">
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
                                    echo '<button type="submit" disabled class="in_cos" name="produse_submit">Produsul se afla in cos</button>';
                                }else

                                    echo '<button type="submit" name="produse_submit">Adauga in cos</button>';
                                ?>
                            </form>
                        </div>
                    </div>
                    <div class="hover3">
                        <div class="time3">
                            <a  class="like">
                                <i class="fa fa-heart" aria-hidden="true"></i>
                            </a>

                        </div>
                        <a href="<?php printf('%s?item_id=%s', 'detalii_produse.php', $item['item_id'])?>" class="vezi">Detalii</a>
                    </div>
                </div>

            </div>
        <?php }}, $product_shuffle)?>


    </div>

    <div class="page-btn">
        <span>1</span>
        <span>2</span>
        <span>3</span>
        <span>4</span>
        <span>&#8594;</span>
    </div>
</div>




<!--------footer---------->
<div class="footer-produse">
    <div class="container_new_produse">
        <div class="row">
            <div class="footer-produse-col-1">
                <h3>Descarca aplicatia noastra</h3>
                <p>Descarca aplicatia pentru Android si ios</h3>
                <div class="app-logo">
                    <img src="HTML Template/imagini/play-store.png">
                    <img src="HTML Template/imagini/app-store.png">

                </div>
            </div>
            <div class="footer-produse-col-2">
                <img src="HTML Template/imagini/c2s-logo.png">
                <p>Din pasiune pentru tehnologie</p>
            </div>
            <div class="footer-produse-col-3">
                <h3>Comenzi si livrare</h3>
                <ul>
                    <li>Contul meu</li>
                    <li>Cum comand online</li>
                    <li>Livrarea comenzilor</li>
                    <li>Modalitati de plata</li>

            </div>
            <div class="footer-produse-col-4">
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

<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script>
    $(document).ready(function(){
        $(".like").click(function(){
            $(this).toggleClass("heart");
        });
    });
</script>


</body>
</html>