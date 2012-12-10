<?php
define("EMAIL", "leo@caryconcrete.com");

if(isset($_POST['submit'])) {
   
  include('contact_validate.php');

  //assign post data to variables 
  $post_date  = array("Name","Title","Company","Email","phone_no","Fax","Address","Profession","Interest","Comment");

foreach ($post_date as $form_field){
  ${strtolower($form_field)} = trim($_POST[$form_field]);
}

  //start validating our form
  $v = new validate();
  $v->validateStr($name, "name", 3, 75);
  $v->validateEmail($email, "email");
  $v->validateStr($comment, "comment", 5, 1000);
 
  if(!$v->hasErrors()) {
        $header = "From: $email\n" . "Reply-To: $email\n";
        $subject = "Cary Concrete Form Submission";
        $email_to = EMAIL;
         
        $emailMessage = "Name: " . $name . "\n";
        $emailMessage .= "Email: " . $email . "\n\n";
        $emailMessage .= "Title: " . $title . "\n";
        $emailMessage .= "Company: " . $company . "\n";
        $emailMessage .= "Phone: " . $phone_no . "\n";
        $emailMessage .= "Fax: " . $fax . "\n";
        $emailMessage .= "Address: " . $address . "\n";
        $emailMessage .= "Profession: " . $profession . "\n";
        $emailMessage .= "Interest: " . $interest . "\n";
        $emailMessage .= "Comment: ". $comment;
         
    //use php's mail function to send the email
        @mail($email_to, $subject ,$emailMessage ,$header );  

    //grab the current url, append ?sent=yes to it and then redirect to that url
            header('Location: submit_main.php');

    } else {
    //set the number of errors message
    $message_text = $v->errorNumMessage();       
 
    //store the errors list in a variable
    $errors = $v->displayErrors();
     
    //get the individual error messages
    $nameErr = $v->getError("name");
    $emailErr = $v->getError("email");
    $messageErr = $v->getError("message");

   echo "<font color=red><B>ERROR WITH CONTACT FORM:</B><BR>".$errors."<br>Please click BACK on your browser and try again.</font>";

  }//end error check
}// end isset
?>