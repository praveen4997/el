<?php include "../header1.php"; ?>

<div class="container">

    <form method="post" name="donate_form" action="pay.php" class="form_donate">
    <div class="row">
    		<div class="col-md-12 col-lg-12">
            	<h3 align="center">Please Fill Form to Donate</h3>
            </div>
            

            
            
            <div class="col-md-12 col-lg-12 pad_bottom">
                <div style="text-align:center; padding-bottom:25px"><input  name="d_amount" placeholder="Amount" class="amount inp" required ></div>
            </div>

            <div class="col-md-12">
            	<div class="row">
                	<div class="col-md-6">
                    	<div class="row">
                        
                                <div class="col-md-6 col-lg-6 pad_bottom">
                                    <div class="form_label">Name</div>
                                </div>
                                <div class="col-md-6 col-lg-6 pad_bottom">
                                   <input type="text" name="d_name" id="d_name"  class="inp" placeholder="full name" required>
                                </div>
                                <div class="col-md-6 col-lg-6 pad_bottom">
                                    <div class="form_label">Email</div>
                                </div>
                                <div class="col-md-6 col-lg-6 pad_bottom">
                                    <input type="email" name="d_email" id="email" class="inp" placeholder="Email ID" required>
                                </div>
                                <div class="col-md-6 col-lg-6 pad_bottom">
                                    <div class="form_label">Phone Number</div>
                                </div>
                                <div class="col-md-6 col-lg-6 pad_bottom">
                                    <input name="d_contact" id=""   class="inp" placeholder="Phone Number" required/>
                                   
                                    
                                </div>
                        </div>
                    </div>
                	<div class="col-md-6">
                    	<div class="row">
                            <div class="col-md-6 col-lg-6 pad_bottom">
                                <div class="form_label">Address</div>
                            </div>
                            <div class="col-md-6 col-lg-6 pad_bottom">
                                <input type="text" name="d_address" id="d_address" class="inp" placeholder="Address" required>
                            </div>
                            <div class="col-md-6 col-lg-6 pad_bottom">
                                <div class="form_label">City</div>
                            </div>
                            <div class="col-md-6 col-lg-6 pad_bottom">
                                <input type="text" name="d_city" class="inp" placeholder="City" required>
                            </div>
                            <div class="col-md-6 col-lg-6 pad_bottom">
                                <div class="form_label">State</div>
                            </div>
                            <div class="col-md-6 col-lg-6 pad_bottom">
                                <input type="text" name="d_state" class="inp" placeholder="State" required>
                            </div>
                            <div class="col-md-6 col-lg-6 pad_bottom">
                                <div class="form_label">Country</div>
                            </div>
                            <div class="col-md-6 col-lg-6 pad_bottom">
                                <input type="text" name="d_country" class="inp" placeholder="Country" required>
                                <input type="text" name="d_Zip" class="inp" placeholder="Zipcpde" required>
                            </div>
                        
                        </div>
                    </div>
                </div>
            </div>
            
                                <div class="col-md-12 pad_bottom">
				               <div style="text-align:center">
                                <input type="submit" value="Continue" class="bt1"></div>
          
        
    		</div>
		    </div>
	</form>
</div>
  <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>