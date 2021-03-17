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
</head>
<body>
<?php
require ('database/DBController.php');

require ('database/Produs.php');
require ('database/Cart.php');
ob_start();
$db = new DBController();
$produs = new Produs($db);
$cos = new Cart($db);
if($_SERVER['REQUEST_METHOD']=="POST"){
    if(isset($_POST['recomandate_detalii_submit'])) {
        $cos->addToCart2($_POST['user_id'], $_POST['item_id']);
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


<!------- detalii produs --------->

<div class="try2-produse">
    <div class="intern2-produse">
        <h2></h2></div></div>


<?php

ob_start();
$db = new DBController();
$produs = new Produs($db);
$item_id = $_GET['item_id']??1;
foreach($produs->getData() as $item):
    if($item['item_id'] == $item_id):
?>


<div class="small-container3-details">
    <h2>Detalii</h2></div>
<div class="small-container-details single-product">
    <div class="row">

        <div class="col-2-details">
            <div class="right">
                <img src="<?php echo $item['item_image_0'] ?>" width="100%" id="ProductImg"></div>
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="small-img-row">

                        <!------slide1---------->
                        <div class="swiper-slide2">

                            <div class="small-container-det">

                                <div class="small-img-col">
                                    <img src="<?php echo $item['item_image_0'] ?>" width="100%" class="small-img">
                                </div>
                            </div></div>



                        <div class="swiper-slide2">

                            <div class="small-container-det">
                                <div class="small-img-col">
                                    <img src="<?php echo $item['item_image_1']?>" width="100%" class="small-img">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide2">

                            <div class="small-container-det">
                                <div class="small-img-col">
                                    <img src="<?php echo $item['item_image_2']?>" width="100%" class="small-img">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide2">

                            <div class="small-container-det">
                                <div class="small-img-col">
                                    <img src="<?php echo $item['item_image_3']?>" width="100%" class="small-img">
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide2">

                            <div class="small-container-det">
                                <div class="small-img-col">
                                    <img src="HTML Template/imagini/tstt7.jpg" width="100%" class="small-img">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide2">

                            <div class="small-container-det">
                                <div class="small-img-col">
                                    <img src="HTML Template/imagini/tstt7.jpg" width="100%" class="small-img">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide2">

                            <div class="small-container-det">
                                <div class="small-img-col">
                                    <img src="HTML Template/imagini/tstt7.jpg" width="100%" class="small-img">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide2">

                            <div class="small-container-det">
                                <div class="small-img-col">
                                    <img src="HTML Template/imagini/tstt7.jpg" width="100%" class="small-img">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>


        </div>
        <div class="col-3-details">
            <div class="titlu">
                <p>Produse / <?php echo $item['item_category'] ?? "Electronice";?></p></div>
            <h1><?php echo $item['item_name'] ?? "Unknown";?></h1>
            <div class="review11">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>

            </div>

            <h4>by <?php echo $item['item_brand'] ?? "Brand";?><hr></h4>
            <div class="culoare">
                <h3>Pret: <?php echo $item['item_price'] ?? 0;?></h3></div>
            <div class="row2">
                <div class="buton1">
                    <form method="post">
                        <input type="hidden" name="item_id" value="<?php echo $item['item_id']??'1';?>">
                        <input type="hidden" name="user_id" value="<?php echo 1;?>">
                        <?php
                        if(in_array($item['item_id'],$cos->getCartId($produs->getData('cos')) ?? [])){
                            echo '<button type="submit" disabled class="det_in_cos" name="recomandate_detalii_submit"><i class="fa fa-shopping-cart" aria-hidden="true"></i>Produsul se afla in cos</button>';
                        }else
                            echo '<button type="submit" name="recomandate_detalii_submit"><i class="fa fa-shopping-cart" aria-hidden="true"></i>Adauga in cos</button>';
                        ?>
                    </form></div>
                <div class="buton2">


                        <input type="hidden" name="item_id" value="<?php echo $item['item_id']??'1';?>">
                        <input type="hidden" name="user_id" value="<?php echo 1;?>">
                        <?php

                            echo '<button type="submit" name="recomandate_detalii_favorite_submit"><i class="fa fa-heart" aria-hidden="true"></i>Adauga la favorite</button>';
                        ?>
                    </div></div>

            <div class="details">
                <h3>Detalii produs <i class="fa fa-indent"></i></h3></div>
            <br>
            <div class="details2">
                <p> Intel Core i5-10300H pana la 4.5GHz, 15.6" Full HD, 16GB, SSD 512GB, NVIDIA GeForce GTX 1660Ti 6GB, Free DOS, negru.Pregatit pentru jocuri foarte serioase si durabilitate extrema in conditii de utilizare reale, modelul TUF Gaming A15 este un laptop pentru jocuri foarte performant ruland sistemul de operare Windows 10 Pro ce te va ajuta sa fii victorios. Fiind echipat cu cele mai noi procesoare AMD Ryzen™ Seria 4000 si placi video GeForce RTX™ 2060, jocurile sunt rapide, fluide si imping afisajul de nivel IPS la frecventele maxime de pana la 144Hz. </p>
            </div>
            <div class="row2">
                <div class="dim1">
                    <span class="fa fa-retweet"></span>
                    <br>
                    <a>Retur gratuit in 30 de zile</a>
                </div>

                <div class="dim2">
                    <span class="fa fa-truck"></span>
                    <br>
                    <a>Livrare: ziua urmatoare</a>
                </div>

                <div class="dim3">
                    <span class="fa fa-indent"></span>
                    <br>
                    <a>Garantie inclusa: 24 luni</a>
                </div>

            </div>
        </div>

    </div>

</div>

<?php
    endif;
    endforeach;
?>


<div class="mutare">
    <div class="try">
        <div class="intern">
            <h2></h2></div></div>

    <?php
    $product_shuffle = $produs->getData();
    $item_id = $_GET['item_id']??1;
    shuffle($product_shuffle);


    ob_start();
    $cos= new Cart($db);



    ?>

    <div class="small-container2">
        <h2>Recomandate</h2></div>

    <div class="top2">
        <div class="swiper-container">

            <div class="swiper-wrapper">
                <?php  array_map(function($item){$item_id = $_GET['item_id']??1;if($item['item_id'] != $item_id){?>
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


                                            ob_start();
                                            $db = new DBController();
                                            $produs = new Produs($db);
                                            $cos = new Cart($db);

                                            if(in_array($item['item_id'],$cos->getCartId($produs->getData('cos')) ?? [])){
                                                echo '<button type="submit" disabled class="in_cos" name="recomandate_detalii_submit">Produsul se afla in cos</button>';
                                            }else

                                                echo '<button type="submit" name="recomandate_detalii_submit">Adauga in cos</button>';
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

                <?php }} , $product_shuffle)?>

            </div>

        </div>
        <div class="swiper-pagination"></div>
        <!-- Add Arrows --></div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    </div>


    <script type="text/javascript" src="HTML Template/swiper.min.js"></script>
    <script src="HTML Template/transition2.js"></script>


    <!--------footer---------->
    <div class="mutare2">
        <div class="footer-produse">
            <div class="container_new_produse">
                <div class="row">
                    <div class="footer-produse-col-1">
                        <h3>Descarca aplicatia noastra</h3>
                        <p>Descarca aplicatia pentru Android si ios</p>
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


    <script>
        var ProductImg = document.getElementById("ProductImg");
        var SmallImg = document.getElementsByClassName("small-img");
        SmallImg[0].onclick = function(){
            ProductImg.src = SmallImg[0].src;
        }
        SmallImg[1].onclick = function(){
            ProductImg.src = SmallImg[1].src;
        }

        SmallImg[2].onclick = function(){
            ProductImg.src = SmallImg[2].src;
        }
        SmallImg[3].onclick = function(){
            ProductImg.src = SmallImg[3].src;
        }

    </script>

<script>
    $(document).ready(function(){
        $(".buton2").click(function(){
            $(this).toggleClass("heart");
        });
    });
    $(document).ready(function(){
        $(".buton1").click(function(){
            $(this).toggleClass("shopping-cart");
        });
    });
</script>

</body>
</html>

