<?php
$surl="http://localhost/karthik/payumoney/success.php";
$furl="http://localhost/karthik/payumoney/failure.php";
  $txnid = substr(hash('sha256', mt_rand() . microtime()), 0, 20);
$MERCHANT_KEY = "WbxCnuV1";
$SALT = "FvlTgzdH7B";
// Merchant Key and Salt as provided by Payu.

//$PAYU_BASE_URL = "https://sandboxsecure.payu.in";		// For Sandbox Mode
$PAYU_BASE_URL = "https://secure.payu.in";			// For Production Mode

$action = '';

$posted = array();
if(!empty($_POST)) {
    //print_r($_POST);
  foreach($_POST as $key => $value) {    
    $posted[$key] = $value; 
	
  }
}

$formError = 0;

if(empty($posted['txnid'])) {
  // Generate random transaction id
  $txnid = substr(hash('sha256', mt_rand() . microtime()), 0, 20);
} else {
  $txnid = $posted['txnid'];
}
$hash = '';
// Hash Sequence
$hashSequence = "key|txnid|amount|productinfo|firstname|email|udf1|udf2|udf3|udf4|udf5|udf6|udf7|udf8|udf9|udf10";
if(empty($posted['hash']) && sizeof($posted) > 0) {
  if(
          empty($posted['key'])
          || empty($posted['txnid'])
          || empty($posted['amount'])
          || empty($posted['firstname'])
          || empty($posted['email'])
          || empty($posted['phone'])
          || empty($posted['productinfo'])
          || empty($posted['surl'])
          || empty($posted['furl'])
		  || empty($posted['service_provider'])
  ) {
    $formError = 1;
  } else {
    //$posted['productinfo'] = json_encode(json_decode('[{"name":"tutionfee","description":"","value":"500","isRequired":"false"},{"name":"developmentfee","description":"monthly tution fee","value":"1500","isRequired":"false"}]'));
	$hashVarsSeq = explode('|', $hashSequence);
    $hash_string = '';	
	foreach($hashVarsSeq as $hash_var) {
      $hash_string .= isset($posted[$hash_var]) ? $posted[$hash_var] : '';
      $hash_string .= '|';
    }

    $hash_string .= $SALT;


    $hash = strtolower(hash('sha512', $hash_string));
    $action = $PAYU_BASE_URL . '/_payment';
  }
} elseif(!empty($posted['hash'])) {
  $hash = $posted['hash'];
  $action = $PAYU_BASE_URL . '/_payment';
}
?>

    <?php include "../header.php"; ?>
  <script>
    var hash = '<?php echo $hash ?>';
    function submitPayuForm() {
      if(hash == '') {
        return;
      }
      var payuForm = document.forms.payuForm;
      payuForm.submit();
    }
  </script>
  </head>
  <body onload="submitPayuForm()">

    
    <?php if($formError) { ?>
	
      <span style="color:red">Please fill all fields.</span>
      <br/>
      <br/>
    <?php } ?>
    
    

    <div class="container">
    <form action="<?php echo $action; ?>" method="post" name="payuForm" class="form_donate">
      <input type="hidden" name="key" value="<?php echo $MERCHANT_KEY ?>" />
      <input type="hidden" name="hash" value="<?php echo $hash ?>"/>
      <input type="hidden" name="txnid" value="<?php echo $txnid ?>" />
    <div class="row">
    		<div class="col-md-12 col-lg-12">
            	<h3 align="center">Please Fill Form to Donate</h3>
            </div>
            
            
            <div class="col-md-12 col-lg-12 pad_bottom">
                <div style="text-align:center; padding-bottom:25px">
                	<input name="amount" value="<?php echo (empty($posted['amount'])) ? '' : $posted['amount'] ?>" class="amount inp" placeholder="Amount" />
                </div>
            </div>
            
            
            <div class="col-md-12">
            	<div class="row">
                	<div class="col-md-6">
                    	<div class="row">
                        
                                <div class="col-md-6 col-lg-6 pad_bottom">
                                    <div class="form_label">Name</div>
                                </div>
                                <div class="col-md-6 col-lg-6 pad_bottom">
               						       <input name="firstname" id="firstname" value="<?php echo (empty($posted['firstname'])) ? '' : $posted['firstname']; ?>" placeholder="Name" class="inp" />
                                   </div>
                                   
                                   
                                <div class="col-md-6 col-lg-6 pad_bottom">
                                    <div class="form_label">Email</div>
                                </div>
                                <div class="col-md-6 col-lg-6 pad_bottom">                    
								       <input name="email" id="email" value="<?php echo (empty($posted['email'])) ? '' : $posted['email']; ?>" placeholder="Email ID" class="inp" />
                                 </div>
                                   
                                   
                                <div class="col-md-6 col-lg-6 pad_bottom">
                                    <div class="form_label">Phone Number</div>
                                </div>
                                <div class="col-md-6 col-lg-6 pad_bottom">
                                   	       <input name="phone" value="<?php echo (empty($posted['phone'])) ? '' : $posted['phone']; ?>" placeholder="Phone Number" class="inp" />
                                 </div>
                                 </div>
                                 </div>

							       <input type="hidden" name="productinfo" value="trust">
       <input type="hidden" name="surl" value="<?php echo $surl ?>" size="64" />
       <input type="hidden" name="furl" value="<?php echo $furl ?>" size="64" />
       <input type="hidden" name="service_provider" value="payu_paisa" size="64" />




                                <div class="col-md-6">
                                                <div class="row">				       
                                <div class="col-md-6 col-lg-6 pad_bottom">
                                    <div class="form_label">Address</div>
                                </div>
       
                                <div class="col-md-6 col-lg-6 pad_bottom">       
								       <input name="address1" value="<?php echo (empty($posted['address1'])) ? '' : $posted['address1']; ?>" class="inp" placeholder="Address"/>
                                </div>
                                
                                
                                <div class="col-md-6 col-lg-6 pad_bottom">
                                    <div class="form_label">City</div>
                                </div>
                                <div class="col-md-6 col-lg-6 pad_bottom">                                       
								       <input name="city" value="<?php echo (empty($posted['city'])) ? '' : $posted['city']; ?>" class="inp" placeholder="City" />
                                 </div>
                                <div class="col-md-6 col-lg-6 pad_bottom">
                                    <div class="form_label">State</div>
                                </div>
                                <div class="col-md-6 col-lg-6 pad_bottom">									
							       <input name="state" value="<?php echo (empty($posted['state'])) ? '' : $posted['state']; ?>" class="inp" placeholder="State"/>
						       </div>
                                <div class="col-md-6 col-lg-6 pad_bottom">
                                    <div class="form_label">Zipcode</div>
                                </div>
                                <div class="col-md-6 col-lg-6 pad_bottom">
							       <input name="zipcode" value="<?php echo (empty($posted['zipcode'])) ? '' : $posted['zipcode']; ?>" class="inp" placeholder="Zipcode"/>
								</div>       
       
       
          <?php if(!$hash) { ?>
                                <div class="col-md-6 col-lg-6 pad_bottom">
<input type="submit" value="Donate Now" class="bt1" />
</div>
          <?php } ?>
    </form>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/scroll-entrance.js"></script>
</body>

</html>

