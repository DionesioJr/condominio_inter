<?php

require 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;

class Email
{

    private function config($data)
    {

        $mail = new PHPMailer(true);

        try {
            //Server settings
            $mail->WordWrap = 80;
            $mail->CharSet = 'UTF-8';
            $mail->Mailer = "smtp";
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'intercondominioads@gmail.com';
            $mail->Password = 'condointer123';
            $mail->SMTPSecure = 'tls';
            $mail->SMTPDebug = true;
            $mail->Port = 587;
            $emailFrom = $data['emailFrom'];
            $mail->setFrom($emailFrom, utf8_decode($data['nameFrom']));
            $mail->addAddress($emailFrom);
            $mail->isHTML(true);
            $mail->Subject = utf8_decode($data['subject']);
            $mail->Body = utf8_decode($data['body']);
            $mail->send();

            return true;
        } catch (Exception $e) {
            return false;
        }
    }


    static public function send($data)
    {
        return self::config($data);
    }

    public function recoverPassword()
    {

        $email = $_POST['email'];
        if (empty($email)) {
            Alert::info("Informe um email valido");
            redirectBack();
        }

        $password =  Logins::gerarSenha(6, false, true, true, false);

        $data['emailFrom'] = $email;
        $data['nameFrom'] = $email;
        $data['subject'] = 'Atualização da senha';
        $data['body'] = 'Sua nova senha é: ' . $password;

        $password = md5($password);

        $result = User::updatePassword($email, $password);
        if (empty($result)) {
            Alert::error("Falha ao tentar atualizar a senha");
        } else {
            Alert::success("Senha atualizada com sucesso");
        }

        var_dump(self::send($data));
        exit;


        if (!empty(self::send($data))) {
            Alert::info("Verifique sua caixa de email");
            redirect('logins/login');
        } else {
            Alert::info("Falha no envio do email");
            redirectBack();
        }
    }
}
