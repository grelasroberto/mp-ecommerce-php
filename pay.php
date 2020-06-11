<?php


require __DIR__ .  '/vendor/autoload.php';

echo "lalala";

MercadoPago\SDK::setAccessToken('TEST-1730556772600131-042800-fd80f3255535e0a46c3091d83290484d-373768843');



// Crea un objeto de preferencia
$preference = new MercadoPago\Preference();

// Crea un ítem en la preferencia
$item = new MercadoPago\Item();
$item->title =  $_POST['title'];
$item->description ='Dispositivo móvil de Tienda e-commerce';
$item->picture_url = $_POST['img'];
$item->quantity = 1;
$item->unit_price =   $_POST['price'];
$preference->items = array($item);
$preference->external_reference="sebasch@maximussoft.com";
$preference->save();


?>
