<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <title>Elshaddai</title>
</head>
<body>

  <div class="container">
    <h2 class="my-4 text-center">Elshaddai Donation.</h2>
    <form action="./charge.php" method="post" id="payment-form" onSubmit="return validate_amount()">
      <div class="form-row">
      	<input type="hidden" name="first_name" value="<?php echo $_POST['first_name']?>">
    <input type="hidden" name="last_name" value="<?php echo $_POST['last_name']?>">
    <input type="hidden" name="email" value="<?php echo $_POST['email']?>">
    <input type="hidden" name="amount" value="<?php echo $_POST['amount']?>">
    <input type="hidden" name="currency_code" value="<?php echo $_POST['currency_code']?>">


        <div id="card-element" class="form-control">
          <!-- a Stripe Element will be inserted here. -->
        </div>

        <!-- Used to display form errors -->
        <div id="card-errors" role="alert"></div>
      </div>

      <button>Submit Payment</button>
    </form>
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://js.stripe.com/v3/"></script>
  <script src="./js/charge.js"></script>
<script language="javascript">
function ch_amount()
{
	document.getElementById("ch_amount").innerHTML=document.getElementById("cent_amount").value/100;
}
function ch_currency()
{
	document.getElementById("ch_currency").innerHTML=document.getElementById("cur").value;	
}
function validate_amount()
{
	if(document.getElementById("cent_amount").value/100 >100)
	{
		return true;
	}
	else
	{
	    alert("Amount should be greater than 1000");
		return false;
	}
}
</script>
</body>
</html>