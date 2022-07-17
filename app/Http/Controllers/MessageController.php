<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Telegram\Bot\Api;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;




class MessageController extends Controller
{
   public function message(Request $request){
        $name = $request->input('message');
        $phone = $request->input('phone');

        $telegram = new Api(env('TELEGRAM_BOT_TOKEN'));

        $response = $telegram->sendMessage([
            'chat_id'=> env('CHAT_ID'),
            'text' => "Имя:  $name\nТелефон: $phone"
        ]);

        $mail = new PHPMailer(true);

        try {
            //Server settings
            $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = env('HOST_SMPT');                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = env('MAIL_ADDRESS');                     //SMTP username
            $mail->Password   = env('MAIL_PASSWORD');                               //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
            $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`


            $mail->setFrom( env('MAIL_ADDRESS'), 'Mikart');
            $mail->addAddress( env('MAIL_ADDRESS'));     //Add a recipient




            //Content
            $mail->isHTML(false);
            $mail->Subject = 'Данные клиента';
            $mail->Body = "Имя:  $name\nТелефон: $phone";

            $mail->send();
            echo 'Message has been sent';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }
}
