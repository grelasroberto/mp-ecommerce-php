<?php

$post=implode($_POST);

error_log(print_r($post,true));

error_log(print_r($_POST,true));

// error_log($_POST);

print_r($post,true);


foreach($_POST as $item) {

  error_log($item);

  echo($item);
  print($item);
}


?>
