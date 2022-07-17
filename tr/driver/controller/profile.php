<?php

if (session('driver_email')){
    $driver = drivers::find_driver(session('driver_email'));

    if (post('edit')) {
        if (post('password') && post('new_password')){
            if ($user['password'] == md5(post('new_password'))){
                $res = drivers::driver_newpassword(md5(post('new_password')));
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
            'uname' => post('full-name') ? post('full-name') : 'none',
            'telno' => post('phone') ? post('phone') : 'none',
            'tc' => post('tc_no') ? post('tc_no') : 'none',
            'email' => session('email')
        ];
        $result = drivers::editDriver($data);
        if ($result){
            $success = "Profiliniz başarıyla güncellenmiştir";
        }else{
            $error = "Veritabanı hatası. Lütfen destek ekibimize bildiriniz.";
        }
    }



    require driver_view('profile');
}else{
    header("Location".driver_url('logout'));
}

