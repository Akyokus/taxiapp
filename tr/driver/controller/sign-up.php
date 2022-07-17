<?php

if (!session('driver_email')){
    if (post('login')){
        $email = post('email');
        $password = post('password');

//to do:eğer facebook ile giriş yapıldıysa
        if (!$email) {
            $error = 'Lütfen email adresinizi giriniz.';
        } else if (!$password) {
            $error = 'Lütfen şifrenizi giriniz.';
        } else {

            //üye var mı

            $row = drivers::driverExist($email);

            if ($row) {
                //parola kontrolü
                $entered_pass = md5($password);

                if ($entered_pass === $row['password']) {

                    $success = 'Başarıyla giriş yaptınız. Yönlendiriliyorsunuz...';



                    drivers::login([
                        'id' => $row['id'],
                        'uname' => $row['uname'],
                        'email' => $row['email']
                    ]);

                    header('Refresh:1;url=' . driver_url('index'));

                } else {

                    $error = 'Hatalı bir şifre girdiniz. Lütfen tekrar deneyiniz.';
                }

            } else {

                $error = 'Böyle bir email ile kayıtlı sürücü bulunmamaktadır.';
            }
        }
    }
    if (post('register')){

        $email = post('email');
        $name = post('username');
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
                'telno' => post('telno'),
                'password' => md5(post('password'))
            ];
//        damp($data);



            $row = drivers::driverExist($email);
            if ($row != false) {

                $error = 'Bu mail adresiyle daha önce zaten bir üyelik var!';
            } else {

                $result = drivers::register($data);

                if ($result == true){

                    $success = 'Üyeliğiniz başarıyla oluşturuldu, Yönlendiriliyorsunuz...';

                    drivers::login([
                        'id' => $db->lastInsertId(),
                        'uname' =>  $name,
                        'email' => $email

                    ]);
                    header('Refresh:1;url=' . driver_url());
                } else {
                    damp('veritabaı');
                    $error = 'Veritabanı hatası';
                }
            }
        }

    }



    require driver_view('sign-up');
}else{
    header("Location:".driver_url('logout'));
}
