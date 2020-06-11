<?php


require __DIR__ .  '/vendor/autoload.php';

echo "lalala";

MercadoPago\SDK::setAccessToken('TEST-0090da4d-6e41-47c2-addf-fdbf1ad31eb3');



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
