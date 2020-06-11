<?php

if ( $_GET["payment_status"]== "approved") {

    die("payment approved");

} else if ( $_GET["payment_status"]= "") {

}


require __DIR__ .  '/vendor/autoload.php';

// echo "lalala";

MercadoPago\SDK::setAccessToken('TEST-1730556772600131-042800-fd80f3255535e0a46c3091d83290484d-373768843');



// Crea un objeto de preferencia
$preference = new MercadoPago\Preference();

// Crea un ítem en la preferenciag
$item = new MercadoPago\Item();
$item->title =  $_POST['title'];
$item->description ='Dispositivo móvil de Tienda e-commerce';
$item->picture_url = $_POST['img'];
$item->quantity = 1;
$item->unit_price =   $_POST['price'];
$preference->items = array($item);
$preference->external_reference="sebasch@maximussoft.com";

$payer = new MercadoPago\Payer();
$payer->name = "Lalo";
$payer->surname = "Landa";
$payer->address = array(
  "street_name" => "False",
  "street_number" => 123,
  "zip_code" => "1111"
);

$payer->phone->area_code="11";
$payer->phone->number="22223333";


$preference->back_urls = array(
    "success" => "https://grelasroberto-mp-commerce-php.herokuapp.com/payok.php",
    "failure" => "https://grelasroberto-mp-commerce-php.herokuapp.com/failed.php",
    "pending" => "https://grelasroberto-mp-commerce-php.herokuapp.com/paypending.php"
);
$preference->auto_return = "approved";


$preference->payment_methods = array(
  "excluded_payment_methods" => array(
    array("id" => "amex")
  ),
  "excluded_payment_types" => array(
    array("id" => "atm")
  ),
  "installments" => 6
);
$preference->payer = $payer;
$preference->save();

?>
