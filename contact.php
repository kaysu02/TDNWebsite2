<?php
    //get data from form  
    $name = $_POST['name'];
    $email= $_POST['email'];
    $message= $_POST['message'];
    $to = "texasdeepnet@gmail.com";
    $subject = "Message from TDN website";
    $txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message;
    $headers = "From: noreply@texasdeepnet.com" . "\r\n" .
        "CC: somebodyelse@example.com";

    if($email!=NULL){
        mail($to,$subject,$txt,$headers);
    }
    //redirect
    header("Location:thankyou.html");
?>