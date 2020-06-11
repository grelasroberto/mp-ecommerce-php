<?php

if ( $_GET["payment_status"]== "approved") {

    die("payment approved");

} else if ( $_GET["payment_status"]== "rejected") {
  die("Your payment was rejected.");
} else if ( $_GET["payment_status"]== "pending") {
  die("Thank you. We are waiting for your payment approval.");
}


require __DIR__ .  '/vendor/autoload.php';

// echo "lalala";

MercadoPago\SDK::setAccessToken('APP_USR-6317427424180639-042414-47e969706991d3a442922b0702a0da44-469485398');


//
// - La URL de la imagen del item no es una URL válida.
// - El código de área del teléfono del comprador no corresponde.
// - El número de teléfono del comprador no corresponde.
// - El JSON que compartiste de la notificación no parece tener el formato correcto.

// Crea un objeto de preferencia
$preference = new MercadoPago\Preference();

MercadoPago\SDK::setIntegratorId("dev_24c65fb163bf11ea96500242ac130004");

// Crea un ítem en la preferenciag
$item = new MercadoPago\Item();
$item->id =  "1234";
$item->title =  $_POST['title'];
$item->description ='Dispositivo móvil de Tienda e-commerce';
$item->picture_url ='https://grelasroberto-mp-commerce-php.herokuapp.com/assets/003.jpg'
$item->quantity = 1;
$item->unit_price =   $_POST['price'];
$preference->items = array($item);
$preference->external_reference="sebasch@maximussoft.com";
$preference->notification_url="https://grelasroberto-mp-commerce-php.herokuapp.com/webhook.php";

$payer = new MercadoPago\Payer();
$payer->name = "Lalo";
$payer->surname = "Landa";
$payer->email="test_user_63274575@testuser.com";

$payer->address = array(
  "street_name" => "False",
  "street_number" => 123,
  "zip_code" => "1111"
);

$payer->phone->array(
    "area_code" => "11",
    "number" => "22223333"
//   );area_code="11";
// $payer->phone->number="22223333";


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
