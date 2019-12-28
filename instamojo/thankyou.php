<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
  <link rel="icon" href="images/favi.png" sizes="18x16">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GMWHOST</title>
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../font-awesome/css/font-awesome.css">
	<link rel="stylesheet"  href="../assets/css/text_effects.css">
    <link rel="stylesheet" href="../assets/css/styles.css">
    <link rel="stylesheet" href="../assets/css/Pretty-Header.css">
    <link rel="stylesheet" href="../assets/css/Pretty-Footer.css">
    </head>
    <style>
	.pad
	{
		padding:10px;
	}
	</style>
    <body>
<?php
include 'src/Instamojo.php';

		$api = new Instamojo\Instamojo('e6040c28aebab439d79f6ce08a6c7a9f', '4e4323cdcf94b1db5a97d97ed2d44e5d','https://www.instamojo.com/api/1.1/');



$pay_req_id=$_GET['payment_request_id'];
$pay_id=$_GET['payment_id'];
$fail=0;
$transaction=0;
include "../connection/index.php";

			$sql_check="select * from instamojo_payment where payment_id='$pay_id'";
			$res_check=mysqli_query($conn,$sql_check) or die('error');
			if(!mysqli_num_rows($res_check)>0)
			{


try {

$response = $api->paymentRequestStatus($pay_req_id);
//print_r($response);

if(isset($_SESSION['uid']))
{
	$uid=$_SESSION['uid'];


	if($response['payments'][0]['status']=='Credit')
	{
		$transaction=1;
		$payment_request_id=$pay_req_id;
		$phone=$response['payments'][0]['buyer_phone'];
		$email=$response['payments'][0]['buyer_email'];
		
		$amount=$response['payments'][0]['amount'];
		$purpose=$response['purpose'];
		
		$payment_id=$response['payments'][0]['payment_id'];
		$status=$response['payments'][0]['status'];
		$buyer_name=$response['payments'][0]['buyer_name'];
		date_default_timezone_set('Asia/Kolkata');
		$date=date('Y-m-d');
		$start_date=date('Y-m-d');
	

//		$purpose='Basic Linux Hosting_1year';

		$sql_plan="select * from plans_details where plan_name='$purpose'";
		$res_plan=mysqli_query($conn,$sql_plan) or die('error');
		if(mysqli_num_rows($res_plan)>0)
		{
			
			//For HOSTING  ...............................................
			while($row_plan=mysqli_fetch_array($res_plan,MYSQLI_ASSOC))
			{  
				$plan_id=$row_plan['plan_id'];
				$plan_name=$row_plan['plan_name'];
				$plan_period=$row_plan['plan_period'];
				$end_date = date('Y-m-d', strtotime('+'.$plan_period.' years'));
			
				$sqlinsert1= "INSERT INTO instamojo_payment  VALUES ('','$uid','$date','$payment_request_id','$payment_id','$buyer_name','$email','$amount','$purpose','$status','$start_date','$end_date','','','hosting','')";
				$res_p1=mysqli_query($conn,$sqlinsert1) or die("error4");
			}
			
			//.....................................
		}
		
		else
		{
			//For wdes  ...............................................
			$sql_plan_wdes="select * from plans_details_webdesign where plan_name='$purpose'";
			$res_plan_wdes=mysqli_query($conn,$sql_plan_wdes) or die('error');
			if(mysqli_num_rows($res_plan_wdes)>0)
			{
			while($row_plan=mysqli_fetch_array($res_plan_wdes,MYSQLI_ASSOC))
			{  
				$plan_id=$row_plan['planid'];
				$plan_name=$row_plan['plan_name'];
			
			
				$sqlinsert1= "INSERT INTO instamojo_payment  VALUES ('','$uid','$date','$payment_request_id','$payment_id','$buyer_name','$email','$amount','$purpose','$status','','','','','webdesign','not started')";
				$res_p1=mysqli_query($conn,$sqlinsert1) or die("error4");
			}
				
			}
			
			else
			{ 
					$sql_plan_email="select * from plans_details_email where plan_name='$purpose'";
					$res_plan_email=mysqli_query($conn,$sql_plan_email) or die('error');
					if(mysqli_num_rows($res_plan_email)>0)
					{
						while($row_plan=mysqli_fetch_array($res_plan_email,MYSQLI_ASSOC))
						{  
						$plan_id=$row_plan['planid'];
						$plan_name=$row_plan['plan_name'];
						$plan_period=$row_plan['plan_period'];
						$end_date = date('Y-m-d', strtotime('+'.$plan_period.' years'));
						
						$sqlinsert1= "INSERT INTO instamojo_payment  VALUES ('','$uid','$date','$payment_request_id','$payment_id','$buyer_name','$email','$amount','$purpose','$status','$start_date','$end_date','','','email','')";
						$res_p1=mysqli_query($conn,$sqlinsert1) or die("error4");
						}
						
					}
				
			}
			
					//.................................................
		}

		
	}
	else
	{
		$fail=1;
		echo "Failed";
	}
		
}
}
catch (Exception $e) {
    print('Error: ' . $e->getMessage());

}


if($fail==0 && $transaction==1)
{
	include "../header1.php";
	include "../trans_mail_send.php";
	include '../update_refer.php';
	?>
    <div class="container">
		<h2 align="center" style="color:green">Payment is Successfull</h2>
        <h3 align="center">You Paid <?php echo $amount ?> to GMWHOST</h3>
        <div>
        <table align="center" border="1" cellspacing="0" cellpadding="10" style="background:rgba(0,61,106,1.00); color:white;">
            <tr>
            	<td class="pad">Payment ID</td>
                <td class="pad"><?php echo $pay_id ?></td>
            </tr>
            <tr>
            	<td class="pad">Payment Request ID</td>
                <td class="pad"><?php echo $pay_req_id ?></td>
            </tr>
            <tr>
            	<td class="pad">Amount Paid</td>
                <td class="pad"><?php echo $amount ?></td>
            </tr>
            <tr>
            	<td class="pad">Purpose Of Payment</td>
                <td class="pad"><?php echo $purpose ?></td>
            </tr>
            

        </table>
        <p align="center" style="font-size:17px; padding-top:20px">Check Details of your Plan? <a href="../home/my_plans.php" target="_blank">click here</a></p>
        
        </div>
    </div>
    
    <?php
	
}
else
{
	echo '<h4>Transacion Failed</h4>';
}
			}
			else
			{
				?>
                <script language="javascript">
				window.open("../home/index.php","_self");
				</script>
                <?php
			}
?>
   <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/scroll-entrance.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>

</body>
</html>