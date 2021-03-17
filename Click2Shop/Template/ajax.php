<?php
require ('../database/DBController.php');
require ('../database/Produs.php');
$db = new DBController();
$produs = new Produs($db);

if(isset($_POST['itemid'])){
    $result = $produs->getProduct($_POST['itemid']);
    echo json_encode($result);
}
