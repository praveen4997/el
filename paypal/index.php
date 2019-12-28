<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EL Shaddai Donate</title>
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../font-awesome/css/font-awesome.css">

    <link rel="stylesheet" href="../assets/css/user.css">
</head>
<style>
.form_donate
{
		transition:box-shadow .5s;
	padding:20px 30px;
	background:rgba(220, 218, 218, 0.14901960784313725);
	box-shadow:0px 0px 5px 1px rgb(220, 220, 220);
}
.form_donate:hover
{
	transition:box-shadow .5s;
	box-shadow:0px 0px 11px 2px rgb(179, 179, 179);
}
.inp
{
	background:rgba(255, 255, 255, 0.7294117647058823);
	width:85%;
	font-size:17px;
	border:1px solid rgba(185,185,185,1.00);
	border-radius:3px;
	padding:2px 5px;
}
.bt1
{
	padding: 3px 20px;
    font-size: 20px;
    background: rgb(134, 133, 133);
    border: none;
    border-radius: 3px;
    color: white;
    box-shadow: 1px 1px 5px grey;
}
.bt1:hover
{
	background:rgb(58, 86, 165);
}
</style>
<body>
  <?php include "../header.php"; ?>
<div class="container">
        <form class="paypal form_donate" action="payments.php" method="post" id="paypal_form">

        <input type="hidden" name="cmd" value="_xclick" />
        <input type="hidden" name="no_note" value="1" />
        <input type="hidden" name="lc" value="UK" />
        <input type="hidden" name="bn" value="PP-BuyNowBF:btn_buynow_LG.gif:NonHostedGuest" />
        <input type="hidden" name="item_number" value="123456"  />

	<div class="row" style="line-height:1.7">
        <div class="col-md-12 col-lg-12">
	        <h3 align="center">Please Fill Form to Donate</h3>
        </div>

<div class="col-md-6">
    <label>Choose Currency</label>
    <select name="currency_code" class="inp" required>
        <option value="USD">United States dollar</option>
        <option value="AUD">Australian dollar</option>
        <option value="CAD">Canadian dollar</option>
        <option value="EUR">Euro</option>
        <option value="BRL">Brazilian real</option>    
        <option value="CZK">Czech koruna</option>
        <option value="DKK">Danish krone</option>
        <option value="HKD">Hong Kong dollar</option>
        <option value="HUF">Hungarian forint</option>
        <option value="ILS">Israeli new shekel</option>
        <option value="JPY">Japanese yen </option>
        <option value="MYR">Malaysian ringgit</option>
        <option value="MXN">Mexican peso</option>
        <option value="TWD">New Taiwan dollar</option>
        <option value="NZD">New Zealand dollar</option>
        <option value="NOK">Norwegian krone</option>
        <option value="PHP">Philippine peso</option>
        <option value="PLN">Polish złoty</option>
        <option value="GBP">Pound sterling</option>
        <option value="RUB">Russian ruble</option>
        <option value="SGD">Singapore dollar</option>
        <option value="SEK">Swedish krona</option>
        <option value="CHF">Swiss franc</option>
        <option value="THB">Thai baht</option>
    </select>
</div>
<div class="col-md-6">
    <label>Amount</label><br>
    <input type="text" name="amount" placeholder="amount" class="inp" required>
</div>        

    <div class="col-md-3 col-md-offset-3">		
    <label>Firstname</label>
    <input type="text" name="first_name" placeholder="first name" class="inp" required />
    </div>
    <div class="col-md-3">      
    <label>Lastname</label> 
     
    <input type="text" name="last_name" placeholder="lastname" class="inp" required  />
    </div>

<div class="col-md-6 col-md-offset-3">  
<label>Email ID</label><br>      
<input type="text" name="payer_email" placeholder="email" class="inp" required  />
</div>        
<div class="col-md-6 col-md-offset-3" style="text-align:center">  
<input type="submit" name="submit" value="Continue" class="bt1" style="margin-top:10px"/>
</div>
</div>
        
</form>

</div>
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="../assets/js/scroll-entrance.js"></script>
</body>

</html>
</html>

