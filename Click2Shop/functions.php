<?php
require ('database/DBController.php');

require ('database/Produs.php');

require ('database/Cart.php');

$db = new DBController();

$produs = new Produs($db);
$product_shuffle = $produs->getData();

$cos = new Cart($db);
print_r($cos->getCartId($produs->getData('cos ')));



