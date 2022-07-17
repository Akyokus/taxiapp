<?php

if (session('email')){
    $user = users::find_user(session('email'));

    if (post('edit')) {
        if (post('password') && post('new_password')){
            if ($user['password'] == md5(post('new_password'))){
                $res = users::newpassword($user['email'],md5(post('new_password')));
                if ($res){
                    $success = "Şifreniz Başarıyla Güncellenmiştir.";
                }else{
                    $error = "Veritabanı hatası. Lütfen destek ekibimize bildiriniz.";
                }
            }else{
                $error = "Eski şifreniz doğru değildir. Lütfen tekrar deneyiniz.";
            }
        }
        $data = [
          'uname' => post('full-name'),
          'telno' => post('phone'),
          'email' => session('email')
        ];
        $result = users::editUser($data);
        if ($result){
            $success = "Profiliniz başarıyla güncellenmiştir";
        }else{
            $error = "Veritabanı hatası. Lütfen destek ekibimize bildiriniz.";
        }
    }



    require view('profile');
}else{
    header("Location".site_url('sign-up'));
}

