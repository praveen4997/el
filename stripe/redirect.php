<?php
if(isset($_GET['result']))
{
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
		padding:8px;
		border:1px solid rgb(165, 167, 168) !important;
	}
	</style>
	<?php
    include "header.php";
    if($_GET['result']='success')
    {
		?>
		<div class="container">

		<h2 align="center" style="color:green">Transaction Successfull</h2>
        <h4 align="center">Thank you for Donating to El Shaddai Evangelical Ministry and Social Organisation.</h4>

        <table align="center" border="1" cellspacing="0" cellpadding="10" style="background:rgba(0,61,106,1.00); color:white; font-size:16px">
        	
            	<tr>
                	<th class="pad">Transaction ID</th>
                    <th class="pad"><?php echo base64_decode(urldecode($_GET['a'])) ?></th>
                </tr>
            	<tr>
                	<td class="pad">Amount</td>
                    <td class="pad"><?php echo sprintf('%.2f',base64_decode(urldecode($_GET['b']))/100).' '.strtoupper(base64_decode(urldecode($_GET['c']))) ?></td>
                </tr>
            	<tr>
                	<td class="pad">Status</td>
                    <td class="pad"><?php echo base64_decode(urldecode($_GET['d'])) ?></td>
                </tr>
            	<tr>
                	<td class="pad">First Name</td>
                    <td class="pad"><?php echo base64_decode($_GET['f']) ?></td>
                </tr>
            	<tr>
                	<td class="pad">Last Name</td>
                    <td class="pad"><?php echo base64_decode($_GET['g']) ?></td>
                </tr>
            	<tr>
                	<td class="pad">Email ID</td>
                    <td class="pad"><?php echo base64_decode(urldecode($_GET['e'])) ?></td>
                </tr>               
          
        </table>
        </div>
		<?php
    }
	elseif($_GET['result']='failed')
	{
		?>
		<div class="container">

		<h2 align="center" style="color:green">Transaction Failed.</h2>
 		<h6>If Amount is debited from your Account then Contact Admin of this Webiste.</h6>       
        </div>
	<?php
    }
	
}
?>
   <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/scroll-entrance.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
