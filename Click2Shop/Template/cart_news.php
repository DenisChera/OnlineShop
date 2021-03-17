<?php
require("database/DBController.php");
require("database/Produse.php");

$db = new DBController();
$produs = new Produs($db);
$product_shuffle = $produs->getData();
?>

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
