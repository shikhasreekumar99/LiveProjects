<?php


		session_start();


		ob_start();


			//create PHP Mailer object


			require("class.phpmailer.php");


			$mailer = (object) new PHPmailer();


			//setup PHPMailer


			$your_Email = "priyajayapal92@gmail.com";

			$mailer->From ='dev@phitany.com';
              

			$mailer->FromName ='Vasayil Voyages';  


			$mailer->AddAddress($your_Email);


			$mailer->Subject = "BOOK / ENQUIRY FOR MEDICAL PACKAGE";


			$mailer->Body = "<table cellpadding=5 cellspacing=5>
			
			<tr><td align=right><b>First Name:&nbsp;</b></td><td>".$_POST['firstname']."</td></tr>
			<tr><td align=right><b>Last Name:&nbsp;</b></td><td>".$_POST['lastname']."</td></tr>
			<tr><td align=right><b>Email:&nbsp;</b></td><td>".$_POST['email']."</td></tr>
			<tr><td align=right><b>Contact Number:&nbsp;</b></td><td>".$_POST['contact']."</td></tr>
			<tr><td align=right><b>Subjects:&nbsp;</b></td><td>".$_POST['subjects']."</td></tr>
			<tr><td align=right><b>Country of Residence:&nbsp;</b></td><td>".$_POST['country']."</td></tr>
			<tr><td align=right><b>State:&nbsp;</b></td><td>".$_POST['state']."</td></tr>
			<tr><td align=right><b>Age:&nbsp;</b></td><td>".$_POST['age']."</td></tr>
			<tr><td align=right><b>Treatment Type:&nbsp;</b></td><td>".$_POST['treatment_type']."</td></tr>
			<tr><td align=right><b>Treatment:&nbsp;</b></td><td>".$_POST['treatment']."</td></tr>
			<tr><td align=right><b>Type of Treatments Required:&nbsp;</b></td><td>".$_POST['treatment_message']."</td></tr>
			<tr><td align=right><b>Desease:&nbsp;</b></td><td>".$_POST['desease']."</td></tr>
			<tr><td align=right><b>Expected Travel Date:&nbsp;</b></td><td>".$_POST['date']."</td></tr>
			<tr><td align=right><b>Question / Additional Information:&nbsp;</b></td><td>".$_POST['question']."</td></tr>
			<tr><td align=right><b>Additional Information / Requirements:&nbsp;</b></td><td>".$_POST['additional']."</td></tr>
			</table>";


			//send mail as HTML


			$mailer->IsHTML(true);


			//set charset


			$mailer->CharSet = "utf-8";


			//set mailing method... mail, smtp or sendmail


			$mailer->Mailer = "mail";


			if ($mailer->Send())


        	{
				
				echo "<span style='color:red;'><b>MAIL SENT SUCCESSFULLY</b></span>";

				}


        	else


        	{


				echo "<span style='color:red;'><b>FAIL TO SENT MAIL</b></span>";


        	}



		ob_end_flush();


?>