<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Request as ContactRequest;

class ContactController extends Controller
{
    public function contact(Request $request){
        $name = $request->get('name');
        $email = $request->get('mail');
        $message_user = $request->get('message');
        $number = $request->has('number') ? $request->get('number') : '';
        $theme = $request->has('theme') ? $request->get('theme') : '';

        $to = 'mail';
        $subject = $theme ? $theme : 'Обратный звонок';
        $message = '
                <html lang="ltr">
                    <head>
                        <title>'.$subject.'</title>
                    </head>
                    <body>
                    	<p>С вашего сайта поступил запрос.</p>
                    	<p>Копия сохранена в админ-панели.</p>
                        <p>Имя: '.$name.'</p>
                        <p>E-mail: '.$email.'</p>
                        <p>Сообщение: '.$message_user.'</p>
                        <p>Номер телефона: '.$number.'</p>
                        <p>Тема: '.$theme.'</p>';

        $message .= '</body>
                </html>';
        $headers  = "Content-type: text/html; charset=utf-8 \r\n";
        $headers .= "From: Запрос с вашего сайта <from@example.com>\r\n";
        mail($to, $subject, $message, $headers);

        $user_request = new ContactRequest;

        $user_request->name = $name;
        $user_request->email = $email;
        $user_request->message = $message_user;
        $user_request->number = $number;
        $user_request->theme = $theme;

        $user_request->save();

        return redirect()->to('/');
    }
}
