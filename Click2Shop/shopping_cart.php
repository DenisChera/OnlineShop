<?php
require ('database/DBController.php');

require ('database/Produs.php');

$db = new DBController();
$produs = new Produs($db);
if(count($produs->getData('cos'))>0) {
?>
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
<?php

require ('database/Cart.php');
$db = new DBController();
$produs = new Produs($db);
$cos = new Cart($db);

if($_SERVER['REQUEST_METHOD']=="POST"){
    if(isset($_POST['noutati_cos_submit'])) {
        $cos->addToCart($_POST['user_id'],$_POST['item_id']);

    }
}

if($_SERVER['REQUEST_METHOD']=='POST'){
    if(isset($_POST['delete-cart-submit'])){

            $deletedrecord = $cos->deleteCart($_POST['item_id']);
        }
}
?>

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
                <li><a class="active" href="cos_cumparaturi.php"><img src="HTML Template/imagini/cart.png" width="50px" height="30px"><span class="cos"><?php if (!empty($produs)) {
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
        <table>

            <tr>
                <th>Produs (<?php if (!empty($produs)) {
                        echo count($produs->getData('cos'));
                    } ?> buc.)</th>

                <th width="300">Cantitate</th>
                <th width="200">Subtotal</th>
            </tr>

            <?php


            $product_shuffle = $produs->getData();
            $item_id = $_GET['item_id']??1;
            shuffle($product_shuffle);



            foreach ($produs->getData('cos') as $item):
            $cos=$produs->getProduct($item['item_id']);
            $subTotal[] = array_map(function($item){

            ?>

            <tr>

                <td>

                    <div class="cart-info">
                        <img src="<?php echo $item['item_image_1'] ?? "HTML Template/imagini/huawei.png" ?>">
                        <div class="moving">
                            <p><?php echo $item['item_name'] ?? "Unknown"; ?></p>
                            <br>
                            <small>by <?php echo $item['item_brand'] ?? "Brand"?></small>
                            <br>
                            <div class="row3">
                                <div class="buton-sterge">
                            <form method="post">
                                <input type="hidden" value="<?php echo $item['item_id'] ?? 0; ?>" name="item_id">
                            <button type="submit" name="delete-cart-submit">Sterge</button></form>
                                </div>
                                <p>|</p>
                            <div class="buton-detalii">
                                <a href="<?php printf('%s?item_id=%s', 'detalii_produse.php', $item['item_id'])?>">Detalii</a></div>
                            </div>
                        </div>
                    </div>

                </td>

                <td><div class="qty2">

                        <div class="cantitate2">
                            <button class="qty2-up" data-id="<?php echo $item['item_id'] ?? '0'; ?>"><i class="fa fa-angle-up"></i></button>
                            <input type="text" data-id="<?php echo $item['item_id'] ?? '0'; ?>" class="qty_input2" disabled value="1" placeholder="1">
                            <button data-id="<?php echo $item['item_id'] ?? '0'; ?>" class="qty2-down"><i class="fa fa-angle-down"></i></button>
                        </div>
                    </div></td>

                <td class="product_price" data-id="<?php echo $item['item_id'] ?? '0'; ?>"><?php echo $item['item_price'] ?? 0; ?></td>

                <?php
                return $item['item_price'];
                }, $cos);

                endforeach;

                ?>

            </tr>


        </table>

        <div class="total-price">

            <table>
                <div class="pret-calc"
                <tr>
                    <td>Subtotal</td>
                    <td class="dl-price" id="deal-price"><?php
                        $cos = new Cart($db);
                        echo isset($subTotal)  ? $cos->getSum($subTotal):0;?></td>
                </tr>
                <tr>
                    <td>Transport</td>
                    <td class="dl-price2">20.00</td>
                </tr>
                <tr>
                    <td>Total</td>
                    <td class="dl-price3" id="deal-price2"><?php
                        $cos = new Cart($db);
                        echo isset($subTotal) ? $cos->getTotalSum($subTotal):0 ?></td>
                </tr>
            </div>
            </table>


        </div>



        <div class="btn-moving">
            <a href="#" class="btn">Plaseaza comanda</a></div>

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

                                    <div class="time2"><img src="HTML Template/imagini/nou.png" class="img_nou" /></div>
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

                                                echo '<button type="submit"  name="noutati_cos_submit">Adauga in cos</button>';
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

<?php }
else {
    include('Template/notFound/_cart_notFound.php');
}
?>

