<?php

    if (isset($_POST['submit'])) {
        $to = "dagawaodemakani@gmail.com";
        $subject = "Hi! I browse your profile..";
        
        //data the visitor provided
        $name_field = filter_var($_POST['fname'], FILTER_SANITIZE_STRING);
        $email_field = filter_var($_POST['femail'], FILTER_VALIDATE_EMAIL);
        $message = filter_var($_POST['fmessage'], FILTER_SANITIZE_STRING);
        
        //contructing the message
        $body = "From:$name_field\n\n Email:$email_field\n\n Message:\n\n $message";
        
        //.. and away we go!
        mail($to, $subject, $body);
        
        //redirect to confirmation
        header('Location:{{ route('home.confirmation') }}');
    } else {
        //handle the error
    }

?>
