<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


class ContactController extends Controller {
    public function show() {
        return view('Contact.contact');
    }
    
    public function sendMail(Request $request) {
        
        $subject = "Kontak dari " . $request->input('fname');
        $name = $request->input('fname');
        $email = $request->input('femail');
        $message = $request->input('fmessage');
        
        $mail = new PHPMailer(true);
        try {
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'dagawaodemakani@gmail.com';
            $mail->Password = '5201204913';
            $mail->SMTPSecure = 'ssl';
            $mail->Port = 465;
            
            $mail->setFrom("dagawaodemakani@gmail.com", "Waode Makani Daga");
            
            $mail->addAddress('hi@basriyasin.com', 'Basri Yasin');
            
            $mail->addReplyTo($email, $name);
            
            
            $mail->isHTML(true);
            $mail->Subject = $subject;
            $mail->Body = $message;
            $mail->AltBody = $message;
            
            
            
        } catch (Exception $e){
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        }
        
    }
    
}
