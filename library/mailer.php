<?php

namespace library;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class mailer
{
    public static function send($data)
    {
        $mail = new PHPMailer();
        $mail->IsSMTP();
        $mail->CharSet = 'UTF-8';
        $mail->SMTPDebug = 3;
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = $data->secure;
        $mail->Host = $data->host;
        $mail->Port = $data->port;

        $mail->Username = $data->username;
        $mail->Password = $data->password;

        $mail->SetFrom($mail->Username);
        $mail->AddAddress($data->address);
        $mail->addCC($data->username);
        $mail->addBCC($data->username);

        $mail->IsHTML(true);
        $mail->Subject = $data->subject;
        $mail->Body = $data->body;
        $mail->AltBody = $data->altbody;
        $mail->send();
    }
}



