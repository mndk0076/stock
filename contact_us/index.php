<?php
 require_once 'database.php';
 require_once 'user.php';
 

session_start();
$_SESSION['name'] = "";
		$_SESSION['email'] = "";
		$_SESSION['subject'] = "";
		$_SESSION['message'] = "";
	    $error_name = "";
		$error_email = "";
		$error_subject = "";
		$error_message ="";
		$error = false;
		
  if(isset($_POST['submit'])){
		$name = $_POST['name'];
		$email = $_POST['email'];
		$subject = $_POST['subject'];
		$message = $_POST['message'];
		$_SESSION['name'] = $name;
		$_SESSION['email'] = $email;
		$_SESSION['subject'] = $subject;
		$_SESSION['message'] = $message;
	    $error_name = "";
		$error_email = "";
		$error_subject = "";
		$error_message ="";
		$error = false;
		
		if ($name == ""){
			   $error_name ="Please enter your name !";
			   $error = true;
		}
		if ($email == "" || !preg_match("/@/", $email)){
			   $error_email ="Please enter correct email!";
			   $error = true;
		}
		if (strlen($subject) == 0){
			   $error_subject ="Please enter subject!";
			   $error = true;
		}
		if (strlen($message)== 0){
			   $error_message ="Please enter your message !";
			   $error = true;
		}
		
		//send message
		
		if(!$error){
			$subject = "=?utf-8?B?".base64_encode($subject)."?=";
			$headers = "From: ".$email;
			
			
			$mailTo = "neezhsal12@gmail.com";
		
	
			mail($mailTo, $email, $subject, $message, $headers);
			header("Location: success.php?send=1");
		}
		
  }
?>



<!DOCTYPE html>
<html>
    <head>
        <title>Contact Us</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		 <link href="main.css" rel="stylesheet" type="text/css">
      <!--<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">-->
	<!--	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >-->

        <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
       
    </head>
    <body>
	<main class="container">
             <div class="contact-form">
				
                    <form  method="post" action="index.php" role="form">
                          <h1>Contact Us</h1>
                                <div class="txt">
                                    <label for="form_name">Name *</label>
                                    <input id="form_name" type="text" name="name" class="form-control" placeholder="Name" value = "<?=$_SESSION['name']?>"/>
                                    <span style="color:red"><?=$error_name?></span>
                                    </div>
                               
                             
                                  <div class="txt">
                                    <label for="form_email">Email *</label>
                                    <input id="form_email" type="text" name="email" class="form-control" placeholder="Email" value = "<?=$_SESSION['email']?>"/ >
                                   <span style="color:red"><?=$error_email?></span>
                                 </div>   
                        
						
                                  <div class="txt">
                                    <label for="form_subject">Subject *</label>
                                    <input id="form_subject" type="text" name="subject" class="form-control" placeholder="Subject" value = "<?=$_SESSION['subject']?>"/>
                                  <span style="color:red"><?=$error_subject?></span>
                               </div>   
                            
                            
                                   <div class="txt">
                                    <label for="form_message">Message *</label>
                                    <textarea id="form_message" name="message" class="form-control" placeholder="Message" cols="40" rows="8" ><?=$_SESSION['message']?></textarea>
                                   <span style="color:red"><?=$error_message?></span>
                                    </div>
                                    <input type="submit" name="submit" class="btn-send" value="Submit"> 
                            
                       
					
                    </form>
					
                <a  class="link_home_page" href="">Back  to Home Page</a>
  </div>

</main>
        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>      
    </body>
</html>
