
<?php


class Cart
{
    public $db = null;
    public function __construct(DBController $db){
        if (!isset($db->con))return null;
        $this->db = $db;
    }

    public function insertIntoCart($params = null, $table = "cos"){
        if($this->db->con != null){
            if($params != null){
                $columns = implode(',', array_keys($params));
                $values = implode(',', array_values($params));

                $query_string = sprintf("INSERT INTO %s(%s) VALUES(%s)", $table, $columns, $values);
                $result = $this->db->con->query($query_string);
                return $result;
            }
        }
    }

    public function addToCart($userid, $itemid){
        if(isset($userid) && isset($itemid)){
            $params = array(
                "user_id" => $userid,
                "item_id" => $itemid
            );

            header("Location:".$_SERVER['PHP_SELF']);
            $result = $this->insertIntoCart($params);
            return $result;
        }
    }


    public function addToCart2($userid, $itemid){
        if(isset($userid) && isset($itemid)){
            $params = array(
                "user_id" => $userid,
                "item_id" => $itemid
            );


            $result = $this->insertIntoCart($params);
            return $result;
        }
    }


    public function deleteCart($item_id = null,$table='cos'){
        if($item_id!=null){
            $result = $this->db->con->query("DELETE FROM {$table} WHERE item_id={$item_id}");
            if($result){
                header("Location:".$_SERVER['PHP_SELF']);
            }
            return $result;
        }
    }


    public function getSum($arr){

        if(isset($arr)){
            $sum = 0;
            foreach($arr as $item){
                $sum+=floatval($item[0]);
            }
            return sprintf('%.2f', $sum);
        }
    }


    public function getTotalSum($arr){

        if(isset($arr)){
            $sum = 0;
            foreach($arr as $item){
                $sum+=floatval($item[0]);
            }
            $sum = $sum + 20.00;
            return sprintf('%.2f', $sum);
        }
    }


    public function getCartId($cartArray = null, $key="item_id"){
        if($cartArray != null){
            $cart_id = array_map(function ($value) use($key){
                return $value[$key];
            },$cartArray);
            return $cart_id;
        }
    }
}