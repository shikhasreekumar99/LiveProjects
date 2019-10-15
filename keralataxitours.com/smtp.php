<?php
function sendMail($from, $namefrom, $message)
{
 
 
   /*   $smtpServer = "tls://smtp.gmail.com"; //does not accept STARTTLS
 
      $port = "465"; // try 587 if this fails

      $timeout = "45"; //typical timeout. try 45 for slow servers

      $username = "user@gmail.com"; //your gmail account

      $password = "pass"; //the pass for your gmail

      $localhost = $_SERVER['REMOTE_ADDR']; //requires a real ip

      $newLine = "\r\n"; //var just for newlines
*/
  

      $timeout = "45"; //typical timeout. try 45 for slow servers

//*******reading mail settings from xml file******//
  $doc = new DOMDocument();
  $doc->load( 'mail.xml' );
  
  $mail = $doc->getElementsByTagName( "mail" );
  $server = $doc->getElementsByTagName( "smtpServer" );
  $smtpServer = $server->item(0)->nodeValue;
  
  $username = $doc->getElementsByTagName( "username" );
  $username = $username->item(0)->nodeValue;
  
  $password = $doc->getElementsByTagName( "password" );
  $password = $password->item(0)->nodeValue;
  
  $port = $doc->getElementsByTagName( "port" );
  $port = $port->item(0)->nodeValue;

  $toAddress = $doc->getElementsByTagName( "toAddress" );
  $to = $toAddress->item(0)->nodeValue;

  $subject = $doc->getElementsByTagName( "subject" );
  $subject = $subject->item(0)->nodeValue;


//end of read data


      $localhost = $_SERVER['REMOTE_ADDR']; //requires a real ip

      $newLine = "\r\n"; //var just for newlines



      /* you shouldn't need to mod anything else */

      //connect to the host and port

      $smtpConnect = fsockopen($smtpServer, $port, $errno, $errstr, $timeout);

      //echo $errstr." - ".$errno;

      $smtpResponse = fgets($smtpConnect, 4096);

      if(empty($smtpConnect))

      {

		  $output = "Failed to connect: $smtpResponse";
	
		  //echo $output;
	
		  return $output;

      }
 
      else
 
      {
 
      $logArray['connection'] = "Connected to: $smtpResponse";
  
      //echo "connection accepted<br>".$smtpResponse."<p />Continuing<p />";
  
      //echo $tadr;
  
      }
  
       
  
      //you have to say HELO again after TLS is started
  
      fputs($smtpConnect, "HELO $localhost". $newLine);
 
      $smtpResponse = fgets($smtpConnect, 4096);
 
      $logArray['heloresponse2'] = "$smtpResponse";
 
       
 
      //request for auth login

      fputs($smtpConnect,"AUTH LOGIN" . $newLine);

      $smtpResponse = fgets($smtpConnect, 4096);

      $logArray['authrequest'] = "$smtpResponse";

       

      //send the username

      fputs($smtpConnect, base64_encode($username) . $newLine);

      $smtpResponse = fgets($smtpConnect, 4096);

      $logArray['authusername'] = "$smtpResponse";

       

      //send the password

      fputs($smtpConnect, base64_encode($password) . $newLine);

      $smtpResponse = fgets($smtpConnect, 4096);

      $logArray['authpassword'] = "$smtpResponse";

       

      //email from

      fputs($smtpConnect, "MAIL FROM: <$from>" . $newLine);

      $smtpResponse = fgets($smtpConnect, 4096);

      $logArray['mailfromresponse'] = "$smtpResponse";

       

      //email to

      fputs($smtpConnect, "RCPT TO: <$to>" . $newLine);

      $smtpResponse = fgets($smtpConnect, 4096);

      $logArray['mailtoresponse'] = "$smtpResponse";

       

      //the email

      fputs($smtpConnect, "DATA" . $newLine);

      $smtpResponse = fgets($smtpConnect, 4096);

      $logArray['data1response'] = "$smtpResponse";

       

      //construct headers

      $headers = "MIME-Version: 1.0" . $newLine;

      $headers .= "Content-type: text/html; charset=iso-8859-1" . $newLine;

      $headers .= "To: $nameto $to" . $newLine;

      $headers .= "From: $namefrom <$from>" . $newLine;

       

      //observe the . after the newline, it signals the end of message

      fputs($smtpConnect, "To: <$to>\r\nFrom: $from\r\nSubject: $subject\r\n$headers\r\n\r\n$message\r\n.\r\n");

      $smtpResponse = fgets($smtpConnect, 4096);

      $logArray['data2response'] = "$smtpResponse";

       

      // say goodbye

      fputs($smtpConnect,"QUIT" . $newLine);

      $smtpResponse = fgets($smtpConnect, 4096);

      $logArray['quitresponse'] = "$smtpResponse";

      $logArray['quitcode'] = substr($smtpResponse,0,3);

      fclose($smtpConnect);

      //a return value of 221 in $retVal["quitcode"] is a success

       $a=true;

      //$a='Mail Sent Sucessfully';

      return($a);
}?>