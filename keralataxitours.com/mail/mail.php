<?php
		session_start();
		ob_start();
			//create PHP Mailer object
			require("class.PHPmailer.php");
			$mailer = (object) new PHPmailer();
			//setup PHPMailer
			$your_Email = "info@keralataxitours.com";
			$mailer->AddBCC("info@msglobalholidays.com",$_POST['name']);
			$mailer->From = $_POST['email'];
			$mailer->FromName = $_POST['name'];  
			$mailer->AddAddress($your_Email);
			$mailer->Subject = "Website Feedback";
			$mailer->Body = "<table cellpadding=5 cellspacing=5><tr><td align=right><b>Name:&nbsp;</b></td><td>".$_POST['name']."</td></tr><tr><td align=right><b>Email:&nbsp;</b></td><td>".$_POST['email']."</td></tr><tr><td align=right><b>Mobile:&nbsp;</b></td><td>".$_POST['mobile']."</td></tr><tr><td align=right valign=top><b>Address:&nbsp;</b></td><td style='text-align:justify;'>".$_POST['message']."</td></tr><tr><td align=right valign=top><b>Comments:&nbsp;</b></td><td style='text-align:justify;'>".$_POST['txtcomments']."</td></tr></table>";
			//send mail as HTML
			$mailer->IsHTML(true);
			//set charset
			$mailer->CharSet = "utf-8";
			//set mailing method... mail, smtp or sendmail
			$mailer->Mailer = "mail";
			if ($mailer->Send())
        	{ 
				echo "<span style='color:green;'><b>MAIL SENT SUCCESSFULLY</b></span>";
        	}
        	else
        	{
				echo "<span style='color:red;'><b>FAIL TO SENT MAIL</b></span>";
        	}
		
		
		ob_end_flush();
?>