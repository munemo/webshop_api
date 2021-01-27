<?php

header("Content-Type: application/json; charset=UTF-8");


class Product {
  // Properties
  public $name;
  public $description;
  public $price;
  public $image;
  public $status;

//My constructor
  function __construct($name, $description, $price, $image, $status) {
    $this->name = $name;
    $this->description = $description;
    $this->price = $price;
    $this->image = $image;
    $this->status = $status;
  //  $this->status = $status;
  
  }

// Methods
  function get_name() {
    return   $this-> name;
  }
 
  function get_description() {
    return   $this-> description;
  }

  function get_price() {
    return $this-> price;
  }

  function get_image() {
    return $this-> image;
  }
  
  function get_status() {
    return   $this-> status;
  }

}

//create 10 objects
$peppar = new Product('Bell Peppar','Hot dutch bell peppars','20','http://localhost/webshop/client/images/product-1.jpg','');
$strawberry= new Product('Strawberries','Argentinian organic berries','80','http://localhost/webshop/client/images/product-2.jpg','');
$beans = new Product('Green beans','Swedish beans from Gotland','30','http://localhost/webshop/client/images/product-3.jpg','');
$juice = new Product('Fruit juice','Organic fruit smoothie','100','http://localhost/webshop/client/images/product-8.jpg','4');
$cabbage = new Product('Cabbage','Organic purple cabbage','45','http://localhost/webshop/client/images/product-4.jpg','6');
$tomato = new Product('Tomatoes','Morrocan sungrown tomatoes','50','http://localhost/webshop/client/images/product-5.jpg','7');
$brocoli = new Product('Brocolli','Freshly picked chinese brocolli','100','http://localhost/webshop/client/images/product-6.jpg','8');
$carrots = new Product('Carrots','Organic carrots','25','http://localhost/webshop/client/images/product-7.jpg',"9");
$apple = new Product('Apples','Awesome sweet sewdish apples','45','http://localhost/webshop/client/images/product-10.jpg','');
$onion = new Product('Onions','Belgian onions','60','http://localhost/webshop/client/images/product-9.jpg','');


$products =  array("products" => [$peppar, $strawberry, $beans,$tomato, $brocoli, $carrots, $apple, $onion, $cabbage, $juice ]);

array_push($products);

$json = json_encode($products,JSON_UNESCAPED_UNICODE|JSON_PRETTY_PRINT);

echo $json;
?>


