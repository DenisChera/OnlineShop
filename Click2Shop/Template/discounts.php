<?php

if (!empty($produs)) {
    $product_shuffle = $produs->getData();
}
shuffle($product_shuffle);


?>

<div class="small-container7">
    <h2>Reduceri</h2></div>
<!-------swiper--------->
<div class="swiper-container">

    <div class="swiper-wrapper">
        <?php foreach($product_shuffle as $item){ ?>
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
                                    if(in_array($item['item_id'],$cos->getCartId($produs->getData('cos')) ?? [])){
                                        echo '<button type="submit" disabled class="in_cos" name="reduceri_submit">Produsul se afla in cos</button>';
                                    }else

                                        echo '<button type="submit" name="reduceri_submit">Adauga in cos</button>';
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

        <?php }?>
    </div>

</div>

