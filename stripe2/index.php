<?php include "../header.php"; ?>

<div class="container" style="background: rgb(250, 250, 250);box-shadow: 1px 1px 10px 5px rgba(0, 0, 0, 0.12941176470588237); border: 1px solid #dadada; padding:30px">
    <div class="row" style="line-height:1.8; margin-top:20px">
    	<form method="post" action="index1.php" onSubmit="return validate_amount()">
		<div class="col-md-12 col-lg-12 pad_bottom">
            	<h3 align="center">Please Provide Your Details</h3>
         </div>
                    
           <div class="col-md-6 col-lg-6 pad_bottom">
                <input type="text" name="first_name" placeholder="First Name" class="inp" required>
            </div>		
           <div class="col-md-6 col-lg-6 pad_bottom">
               <input type="text" name="last_name"  placeholder="Last Name" class="inp" required>
           </div>
           <div class="col-md-12 col-lg-12 pad_bottom">
               <input type="email" name="email"  placeholder="Email Address" class="inp" required>
           </div>
           <div class="col-md-6 col-lg-6 pad_bottom">
                Enter Amount in Cents:&nbsp; (eg:100 cents=1 dollar)<input type="text" name="amount"  placeholder="Amount" onKeyUp="ch_amount()" id="cent_amount" required style="border-radius:  2px; box-shadow: 1px 1px 1px ghostwhite;    border-color: gainsboro; padding:2px 5px" class="inp"><label id="cent_error" style="color:red"></label>
      <br>
           <div style="color: rgb(0, 152, 68); font-weight: 600; padding:15px 5px; font-size:16px">
               You are Donating :&nbsp;<label id="ch_amount">0</label>&nbsp;<label id="ch_currency">USD</label>
            </div>
</div>
           <div class="col-md-3 col-lg-3 pad_bottom">
                <label style="font-size:13px">Change your Currency here</label>
                <select name="currency_code" class="form-control mb-3 StripeElement StripeElement--empty" style="margin-bottom:2px !important"  onChange="ch_currency()" id="cur">
                    <option value="USD">Us dollar</option>
                    <option value="CAD">Canadian dollar</option>
                    <option value="EUR">Euro</option>
                    <option value="INR">Indian Rupee</option>
                    <option value="AUD">United Arab Emirates dirham</option>
                </select>

            </div>
           <div class="col-md-12">
<input type="submit" value="Donate Now" style="width:100%;box-shadow: 1px 1px 10px 2px rgb(222, 222, 222);padding:  4px;font-size:18px;border:none;background: rgb(107, 106, 106);color:rgba(255,255,255,1.00);">            </div>
		</form>
    </div>

	

</div>
           

</div>
  <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
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
	if(document.getElementById("cent_amount").value >=100)		
	{
		return true;
	}
	else
	{
		document.getElementById("cent_error").innerHTML="Amount should be greater than 1000 cents";
		return false;
	}
}
</script>

</body>

</html>