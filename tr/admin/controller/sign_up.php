<?php

if (!session('admin_email')){
    if (post('login')){
        $email = post('email');
        $password = post('password');

        if (!$email) {
            $error = 'Lütfen email adresinizi giriniz.';
        } else if (!$password) {
            $error = 'Lütfen şifrenizi giriniz.';
        } else {


                if ($email ==="admin@highway.com.tr" && $password === "Durak123") {

                    $success = 'Başarıyla giriş yaptınız. Yönlendiriliyorsunuz...';

                    admin::login([
                        'admin_email' => "admin@highway.com.tr"
                    ]);

                    header('Refresh:1;url=' . admin_url('index'));

                } else {
                    damp('1');
                    $error = 'Hatalı bir şifre girdiniz. Lütfen tekrar deneyiniz.';
                }

          
        }
    }
	 require admin_view('login');
	
}else{
	
    header('Refresh:1;url=' . admin_url('index'));
}
