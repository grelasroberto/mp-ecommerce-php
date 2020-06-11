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



require __DIR__ .  '/vendor/autoload.php';

// echo "lalala";

MercadoPago\SDK::setAccessToken('APP_USR-6317427424180639-042414-47e969706991d3a442922b0702a0da44-469485398');



   MercadoPago\SDK::setAccessToken("");

   switch($_POST["type"]) {
       case "payment":
           $payment = MercadoPago\Payment.find_by_id($_POST["id"]);
           break;
       case "plan":
           $plan = MercadoPago\Plan.find_by_id($_POST["id"]);
           break;
       case "subscription":
           $plan = MercadoPago\Subscription.find_by_id($_POST["id"]);
           break;
       case "invoice":
           $plan = MercadoPago\Invoice.find_by_id($_POST["id"]);
           break;
   }

 error_log($payment);

?>
