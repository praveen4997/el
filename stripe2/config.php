<?php
require_once('vendor/autoload.php');

$stripe = array(
  "secret_key"      => "sk_test_xhIipoiVDDUKFqfJgkctASlv",
  "publishable_key" => "pk_test_AhF9o8GMqiENs7q25MfBiWIz"
);

\Stripe\Stripe::setApiKey($stripe['secret_key']);
?>