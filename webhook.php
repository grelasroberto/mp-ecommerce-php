<?php


echo "FUCKUING LOGGG";

// error_log($_POST);

error_log("FUCKUING LOGGG $_POST");
$ss=sizeof($_POST);
error_log("FUCKUING LOGGG $ss");
foreach($_POST as $item) {


echo "ITEMMMM $item" ;
  error_log($item);

  echo($item);
  print($item);
}

// require __DIR__ .  '/vendor/autoload.php';

// echo "lalala";

// MercadoPago\SDK::setAccessToken('APP_USR-6317427424180639-042414-47e969706991d3a442922b0702a0da44-469485398');

 // error_log($payment);

?>
