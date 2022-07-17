<?php require 'statics/header.php'; ?>
<title>Kaydol</title>
</head>
<body>

<!--Loading Container Start-->
<div id="load" class="loading-overlay display-flex flex-column justify-content-center align-items-center">
    <div class="primary-color font-28 fas fa-spinner fa-spin"></div>
</div>
<!--Loading Container End-->

<div class="row h-100">
    <div class="col-xs-12 col-sm-12">
        <div class="text-center header-icon-logo-margin header-icon-logo-margin-extra">
            <img src="<?= driver_public_url('images/logo-main.svg') ?>" alt="Main Logo">
        </div>

        <!--Sign In/Login Container Start-->
        <div class="address-title text-center">
            <div class="display-flex justify-content-center">
                <div class="float-left sign-in-item border-bottom-primary-100" data-class="login">Oturum aç</div>
             <!--   <div class="float-left sign-in-item border-bottom-light-grey" data-class="sign-up">
                    Kaydol</div>-->
            </div>
        </div>
        <!--Sign In/Login Container End-->

        <!--Sign In Container Start-->
        <div class="sign-up-form-container login text-center">
            <form action="<?= driver_url('sign-up') ?>" method="post" class="width-100">

                <!--Sign In Field Start-->
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span>
                                <img src="<?= driver_public_url('icons/avatar-light.svg') ?>" alt="Avatar Icon">
                            </span>
                        </div>
                        <input class="form-control" type="text" autocomplete="off" name="email" placeholder="
E-mail adresiniz">
                    </div>
                </div>
                <!--Sign In Field End-->

                <!--Sign In Field Start-->
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span>
                                <img src="<?= driver_public_url('icons/lock.svg') ?>" alt="Lock Icon">
                            </span>
                        </div>
                        <input class="form-control" type="password" name="password" placeholder="Şifre">
                        <div class="input-group-append password-visibility">
                            <span>
                                <img src="<?= driver_public_url('icons/eye.svg') ?>" alt="Password Visibility Icon">
                            </span>
                        </div>
                    </div>
                </div>
                <!--Sign In Field End-->

                <div class="form-submit-button">
                    <button style="width: 100%" name="login" value="1" class="btn btn-dark text-uppercase ">Oturum aç</button>
                </div>
            </form>
        </div>
        <!--Sign In Container End-->

        <!--Sign Up Container Start-->
        <div class="sign-up-form-container sign-up text-center hidden">
            <form action="<?= driver_url('sign-up') ?>" method="post" class="width-100">

                <!--Sign Up Field Start-->
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-prepend">
                           <span>
                               <img src="<?= driver_public_url('icons/avatar-light.svg') ?>" alt="Avatar Icon">
                           </span>
                        </div>
                        <input class="form-control" type="text" autocomplete="off" name="username" placeholder="Adınız Soyadınız">
                    </div>
                </div>
                <!--Sign Up Field End-->

                <!--Sign Up Field Start-->
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span>
                                <img src="<?= driver_public_url('icons/envelope.svg') ?>" alt="Envelope Icon">
                            </span>
                        </div>
                        <input class="form-control" type="text" autocomplete="off" name="email" placeholder="E-mail">
                    </div>
                </div>
                <!--Sign Up Field End-->

                <!--Sign Up Field Start-->
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span>
                                <img src="<?= driver_public_url('icons/phone.svg') ?>" alt="Phone Number">
                            </span>
                        </div>
                        <input class="form-control" type="tel" name="telno" placeholder="Cep telefonu numarası">
                    </div>
                </div>
                <!--Sign Up Field End-->

                <!--Sign Up Field Start-->
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span>
                                <img src="<?= driver_public_url('icons/lock.svg') ?>" alt="Lock Icon">
                            </span>
                        </div>
                        <input class="form-control" type="password" name="password" placeholder="Şifre">
                        <div class="input-group-append password-visibility">
                            <span>
                                <img src="<?= driver_public_url('icons/eye.svg') ?>" alt="Password Visibility Icon">
                            </span>
                        </div>
                    </div>
                </div>
                <!--Sign Up Field End-->

                <!--Sign Up Field Start-->
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span>
                                <img src="<?= driver_public_url('icons/lock.svg') ?>" alt="Lock Icon">
                            </span>
                        </div>
                        <input class="form-control" type="password" name="re_password" placeholder="Şifreyi Onayla">
                        <div class="input-group-append password-visibility">
                            <span>
                                <img src="<?= driver_public_url('icons/eye.svg') ?>" alt="Password Visibility Icon">
                            </span>
                        </div>
                    </div>
                </div>
                <!--Sign Up Field End-->

                <div class="form-submit-button">
                    <button style="width: 100%" name="register" value="1" class="btn btn-dark text-uppercase ">Kaydol</button>
                </div>
            </form>
        </div>
        <!--Sign Up Container End-->

    </div>

    <!--Terms And Conditions Agreement Container Start-->
    <div class="col-xs-12 col-sm-12 text-center sms-rate-text font-roboto flex-end margin-bottom-30">
        <div class="container-sms-rate-text width-100 font-11">
            <span class="light-gray font-weight-light"> Kayıt olarak bu koşulları kabul etmiş olursunuz. </span>
            <br/>
            <a href="#" class="dark-link">
                <span class="font-weight-light">Kullanım Koşulları ve Gizlilik Politikası</span>
            </a>
        </div>
    </div>
    <!--Terms And Conditions Agreement Container End-->

</div>
<?php require 'statics/footer.php'; ?>
