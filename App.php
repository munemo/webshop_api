<?php
class App
{

public static $endpoint = "http://localhost/webshop/api/";

public static function main($count){


  if($count){
    self::$endpoint = self::$endpoint . "?limit=$count";
   }
try{
$array = self::getData();

self::viewData($array);


}
catch (Exception $e){echo $e->getMessage();} 
 

}
public static function getData(){
   


if($_SERVER["REQUEST_METHOD"] == "GET") {

    
   $json = @file_get_contents(self::$endpoint);

   if(!$json){

    throw new Exception("There was a sever error, please try to reload the page or try again later!");
}
   

 }else{

    echo "Invalid request";
   } 


return json_decode($json,true);
}

public static function viewData($array)
{


$products_array = $array['products'];
$status = $array['products'];


$result .= "<div class='row'>";
        
foreach ($products_array as $key => $value) {
  $value['status'] = rand(0,50);
    $result .= "
    <div class='col-sm-6 col-md-4 col-lg-3 col-xl-2'>
        <a href='$value[image]' data-lightbox='$product'  data-title='$product'>
            <img class='img-thumbnail' src='$value[image]' alt='$product'>
            <p>Name: $value[name] </p>
            <p>Price: $value[price] kr</p>
            <p>Description: $value[description] </p>
            <p>Status: $value[status] available</p>
            </a>
        </a>
        
    </div>";
}
$result .= "</div>";

echo $result;


    }

}

