<?php	
    		$urls="https://api.paypal.com/v1/payments/payment?Authorization='q7w5373s7g4gspzm$1e41a83908b5a9c8f85c5e742bf01a41' ";					/* by url */
			$jsondata1=file_get_contents($urls);
			//$jsondata1=file_get_contents("sa_eng_scoreboard.json");															/* by file */
			$result1=json_decode($jsondata1,true);
?>