<?php

class Product{
    var $product_name;
    var $cost_price;
    var $sales_price;

    function calculate_sales_price(){
         $this->sales_price = round($this-> cost_price=1.2,2);
    }
}

class Computer extends Product{


}

$my_product = new Computer;

$my_array = get_object_vars($my_product);

echo 'object variables for my_product';
echo '<pre>';
print_r($my_array);
echo '</pre>';


?>