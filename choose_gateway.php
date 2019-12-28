<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elshaddai Donate</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/user.css">
</head>
<style>
.inner-col
{
		transition:box-shadow 1.2s;
	padding:0px 10px;
	box-shadow:0px 5px 2px rgb(193, 193, 193);
}
.inner-col:hover
{
	transition:box-shadow 1.2s;
	box-shadow:0px 9px 17px 1px rgb(149, 150, 150);
	cursor:pointer;
}
.pay_head
{
	    text-align: center;
    padding: 10px;
    border-bottom: 1px solid rgb(197, 197, 197);
}
.li_button
{
text-align: center;
    background: rgb(25, 158, 31);
    padding: 5px;
    border-radius: 5px;
    font-size: 20px;
    box-shadow: 3px 3px 5px 1px rgb(86, 86, 86);
}
</style>
<script language="javascript">
function nav(paygateway)
{
	if(paygateway=='instamojo')
	{
		window.open("instamojo/index.php","_self");
	}
	else if(paygateway=='payumoney')
	{
		window.open("payumoney/PayUMoney_form.php","_self");		
	}
	else if(paygateway=='paypal')
	{
		window.open("paypal/index.php","_self");		
	}
	else if(paygateway=='stripe')
	{
		window.open("stripe/index.php","_self");		
	}
}
</script>
<body>


<nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header"><a class="navbar-brand navbar-link" href="index.php" style="color: rgb(1, 53, 74);
    font-size: 23px;
    font-weight: 600;
    text-shadow: 11px 6px 5px rgb(206, 206, 206);
    letter-spacing:0.6px">EL Shaddai Donate</a>
                <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            </div>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active" role="presentation"><a href="index.php" class="a_header1">Home</a></li>
                    <li role="presentation"><a href="aboutus.php" class="a_header1">About Us</a></li>
                    <li role="presentation"><a href="choose_gateway.php" class="a_header1_active">Donate</a></li>
                </ul>
            </div>
        </div>
    </nav>
    
    <div class="container" style="padding:25px 10px">
    	<div class="row" style="margin:0px" >
			<div class="col-md-12" style="padding:10px">
                <h2 align="center" style="font-family:Baskerville, 'Palatino Linotype', Palatino, 'Century Schoolbook L', 'Times New Roman', serif; letter-spacing:1.4px">Choose a Gateway</h2>
                <p align="center">Choose a Gateway that fits your requirement.All Our Payment modes are Secure and Reliable </p>
            </div>
            
            
            <div class="col-md-3" style="font-size:17px; line-height:1.7" data-entrance="from-right">
            	<div class="inner-col" onClick="nav('stripe')">
            	<ul class="list-unstyled">
                	<li class="pay_head"><img src="assets/img/stripe.png" width="250" height="50" class="img-responsive"></li>
					<li><b style="color:green; font-size:20px">&#10003; 2D Gateway (No OTP)</b></li>  

					<li><b style="color:green">&#10003; International Cards are Accepted</b></li>
                        <li >&#10003; Debit Cards and Credit Cards</li>
            	<ul class="list-unstyled" style="padding-left:15px">
                            <li>&#10003; Visa </li>
                            <li>&#10003; Mastercard</li>
                            <li>&#10003; American Express</li>
                            <li>&#10003; Discover</li>
                            <li>&#10003; JCB Diners Club</li>

                   </ul>
                            <li>&#10003; Many Currencies</li>
                    <li class="li_button"><a href="stripe/index.php" style="color:rgba(255,255,255,1.00); text-decoration:none"><i class="fa fa-check-circle"></i> Donate</a></li>
                    <br>	
                    
                </ul>
				</div>
                <a href="https://www.stripe.com" target="_blank">Know more</a>
            </div>
            
        	<div class="col-md-3" style="font-size:17px; line-height:1.7" data-entrance="from-left">
            	
                <div class="inner-col" onClick="nav('instamojo')">            
	            	<ul class="list-unstyled">
                	<li class="pay_head"><img src="assets/img/instamojo.jpeg" width="250" height="50" class="img-responsive"></li>
					<li><b style="color:red">&#215; International Cards are Not Accepted</b></li>
                    <li>&#10003; Debit Cards</li>
                    <li>&#10003; Credit Cards</li>
                    <li>&#10003; Net Banking</li>
                    	<ul class="list-unstyled" style="padding-left:20px">
                        	<li>&#10003; 50+ netbanking options </li>
                        </ul>

                    <li>&#10003; Wallets</li>
                    	<ul class="list-unstyled" style="padding-left:20px">
                        	<li>&#10003; Free Charge</li>
                            <li>&#10003; Mobik Wik</li>
                            <li>&#10003; Ola Money</li>
                            <li>&#10003; Jio Money</li>
                        </ul>

                    <li>&#10003; UPI</li>
                    <li class="li_button"><a href="instamojo/index.php" style="color:rgba(255,255,255,1.00); text-decoration:none"><i class="fa fa-check-circle"></i> Donate</a></li>	
                    <br>


                </ul>
                
                
				</div>
                  <a href="https://www.instamojo.com/" target="_blank">Know more</a>
            </div>	

        	<div class="col-md-3" style="font-size:17px; line-height:1.7" data-entrance="from-top">
            	<div class="inner-col" onClick="nav('payumoney')">
            		<ul class="list-unstyled">
                	<li class="pay_head"><img src="assets/img/payumoney.jpeg" width="250" height="50" class="img-responsive"></li>
					<li><b style="color:red">&#215; International Cards are Not Accepted</b></li>
                    <li>&#10003; Debit Cards</li>
                    <li>&#10003; Credit Cards</li>
                    <li>&#10003; Net Banking</li>
                    	<ul class="list-unstyled" style="padding-left:20px">
                        	<li>&#10003; 50+ netbanking options </li>
                        </ul>
                    
                    <li>&#10003; Wallets</li>
                    	<ul class="list-unstyled" style="padding-left:20px">
                        	<li>&#10003; Free Charge</li>
                            <li>&#10003; Airtel Money</li>
                            <li>&#10003; Ola Money</li>
                            <li>&#10003; Oxygen</li>                            
                            <li>&#10003; Jio Money</li>
                            <li>&#10003; Paycash</li>                            
                            <li>&#10003; YesPay</li>                            
                        </ul>

                    <li>&#10003; UPI</li>
					<li class="li_button"><a href="payumoney/PayUMoney_form.php" style="color:rgba(255,255,255,1.00); text-decoration:none"><i class="fa fa-check-circle"></i> Donate</a></li>	
                    <br>
                                 
                </ul>
				</div>
                <a href="https://www.payumoney.com/dev-guide/products/paymentmodes.html" target="_blank">Know more</a>
            </div>
            
            <div class="col-md-3" style="font-size:17px; line-height:1.7" data-entrance="from-right">
            	<div class="inner-col" onClick="nav('paypal')">
            	<ul class="list-unstyled">
                	<li class="pay_head"><img src="assets/img/paypal.png" width="250" height="50" class="img-responsive"></li>
					<li><b style="color:green">&#10003; International Cards are Accepted</b></li>
                    <li>&#10003; Debit Cards</li>

                    <li>&#10003; Credit Cards</li>
                    <li>&#10003; Paypal Wallet</li>					                        
                    <li><a href="https://www.paypal.me/elshaddaidonate">&#10003; paypal.me</a></li>

                    
                        	<li>&#10003; 25 Currencies</li>
                   

                    <li class="li_button"><a href="paypal/index.php" style="color:rgba(255,255,255,1.00); text-decoration:none"><i class="fa fa-check-circle"></i> Donate</a></li>	
                    <br>                    
                    
                </ul>
				</div>
                <a href="https://www.paypal.com/in/webapps/mpp/payment-methods" target="_blank">Know more</a>
            </div>	
	
    
            
        </div>
    </div>
    
    
    
    <?php include"footer.php" ?>
      <script src="assets/js/scroll-entrance.js"></script>
  
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>