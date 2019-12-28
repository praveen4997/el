<?php
require_once('vendor/autoload.php');

$stripe = array(
  "secret_key"      => "sk_live_9MeLmDKPPJdYwAk0LOHqiJCO",
  "publishable_key" => "pk_live_4gg2C8Z9o5QR0i1v6PJnIFEv"
);

\Stripe\Stripe::setApiKey($stripe['secret_key']);
?>
