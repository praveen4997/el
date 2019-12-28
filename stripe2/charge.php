<?php
//  require_once('vendor/autoload.php'); 
require_once('./config.php');
  \Stripe\Stripe::setApiKey('sk_test_xhIipoiVDDUKFqfJgkctASlv');

 // Sanitize POST Array
 $POST = filter_var_array($_POST, FILTER_SANITIZE_STRING);

 $first_name = $POST['first_name'];
 $last_name = $POST['last_name'];
 $email = $POST['email'];
 $amount=$_POST['amount'];
	$currency_code=$_POST['currency_code'];
 $token = $POST['stripeToken'];

// Create Customer In Stripe
$customer = \Stripe\Customer::create(array(
  "email" => $email,
  "source" => $token
));

// Charge Customer
$charge = \Stripe\Charge::create(array(
  "amount" => $amount,
  "currency" => $currency_code,
  "description" => "Donation to Elshaddai",
  "customer" => $customer->id
));

print_r($charge);

$tid=urlencode(base64_encode($charge->id));
$paid_amount=urlencode(base64_encode($charge->amount));
$paid_currency=urlencode(base64_encode($charge->currency));
$paid_status=urlencode(base64_encode($charge->status));
$paid_email=urlencode(base64_encode($email));


if($charge->status=='succeeded')
{
	header("location: redirect.php?result='success'&a=$tid&b=$paid_amount&c=$paid_currency&d=$paid_status&e=$paid_email&f=".base64_encode($first_name)."&g=".base64_encode($last_name)."");
}
else
{
	header("location: redirect.php?result='failed'");
}
?>