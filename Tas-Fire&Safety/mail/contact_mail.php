<?php


		session_start();


		ob_start();


			//create PHP Mailer object


			require("class.phpmailer.php");


			$mailer = (object) new PHPmailer();


			//setup PHPMailer


			$your_Email = "info@tasfireandsecurity.ca";

			$mailer->From ='info@tasfireandsecurity.ca';
              

			$mailer->FromName ='Tas Fire & Security';  


			$mailer->AddAddress($your_Email);


			$mailer->Subject = "Contact Us";
			
			

			$mailer->Body = "<table cellpadding=5 cellspacing=5>
			
			<tr><td align=right><b>Name:&nbsp;</b></td><td>".$_POST['name']."</td></tr>
			
			<tr><td align=right><b>Email:&nbsp;</b></td><td>".$_POST['email']."</td></tr>
			
			<tr><td align=right><b>Subject:&nbsp;</b></td><td>".$_POST['subject']."</td></tr>
			
			<td align=right valign=top><b>Message:&nbsp;</b></td><td style='text-align:justify;'>".$_POST['message']."</td></tr>
			
			</table>";


			//send mail as HTML


			$mailer->IsHTML(true);


			//set charset


			$mailer->CharSet = "utf-8";


			//set mailing method... mail, smtp or sendmail


			$mailer->Mailer = "mail";


			if ($mailer->Send())


        	{ 



			}

        	else


        	{


				echo "<span style='color:red;'><b>FAIL TO SENT MAIL</b></span>";


        	}



		ob_end_flush();


?>