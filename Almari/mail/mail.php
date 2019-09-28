<?php


		session_start();


		ob_start();


			//create PHP Mailer object


			require("class.phpmailer.php");


			$mailer = (object) new PHPmailer();


			//setup PHPMailer


			$your_Email = "priyajayapal92@gmail.com";

			$mailer->From ='dev@phitany.com';
              

			$mailer->FromName ='Catenate Solutions';  


			$mailer->AddAddress($your_Email);


			$mailer->Subject = "Contact Us";
			
			


			$mailer->Body = "<table cellpadding=5 cellspacing=5>
			
			<tr><td align=right><b>Name:&nbsp;</b></td><td>".$_POST['name']."</td></tr>
			
			<tr><td align=right><b>Email:&nbsp;</b></td><td>".$_POST['email']."</td></tr>
			
			<tr><td align=right><b>Contact Number:&nbsp;</b></td><td>".$_POST['number']."</td></tr>
			
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


$to = $_POST['email'];

$subject = "Catenate Solutions";

$message = "


               Thank You for contacting Catenate Solutions.
							 
		We will get back you shortly.
							  
		In the meantime you can visit our  website http://catenatesolutions.com 
							  
	
		           Thanks & Regards
				               
							   Catenate Solutions.


";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// additional headers

$headers = "From: dev@phitany.com";


mail($to,$subject,$message,$headers);
        	}


        	else


        	{


				echo "<span style='color:red;'><b>FAIL TO SENT MAIL</b></span>";


        	}



		ob_end_flush();


?>