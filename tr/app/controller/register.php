<?php

if (post('register')){

    $email = post('email');
    $name = post('username');
	    $telno = post('phone');
    $password = post('password');
    $repassword = post('re_password');

    if (!$name) {
        $error = 'Lütfen isminizi giriniz.';
    } elseif (!$email) {
        $error = 'Lütfen mail adresinizi giriniz.';
    }elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = 'Lütfen geçerli bir mail adresi giriniz.';
    } elseif (!$password || !$repassword) {
        $error = 'Lütfen şifrenizi giriniz.';
    } elseif (!($password === $repassword)) {
        $error = 'Girdiğiniz şifreler aynı değil.';
    }elseif ((strlen($name)) < 2) {
        $error = 'Lütfen gerçek adınızı giriniz.';
    } else {


        $data = [

            'uname' => post('username'),
            'email' => post('email'),
            'password' => md5(post('password')),
			'telno' => $telno
			
        ];
//        damp($data);



        $row = users::userExist($email);
        if ($row != false) {

            $error = 'Bu mail adresiyle daha önce zaten bir üyelik var!';
        } else {

            $result = users::register($data);

            if ($result == true){

                $success = 'Üyeliğiniz başarıyla oluşturuldu, Yönlendiriliyorsunuz...';

                users::Login([
                    'id' => $db->lastInsertId(),
                    'uname' =>  $name,
                    'email' => $email,
					'telno' => $telno

                ]);
                header('Refresh:1;url=' . site_url());
            } else {
                damp('veritabaı');
                $error = 'Veritabanı hatası';
            }
        }
    }

}










require view('register');
