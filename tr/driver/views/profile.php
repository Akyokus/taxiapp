<?php require 'statics/header.php'; ?>
<title>Profil</title>
</head>
<body>

<!--Loading Container Start-->
<div id="load" class="loading-overlay display-flex flex-column justify-content-center align-items-center">
    <div class="primary-color font-28 fas fa-spinner fa-spin"></div>
</div>
<!--Loading Container End-->

<div class="row h-100">
    <div class="col-xs-12 col-sm-12">
        <!--Page Title & Icons Start-->
        <div class="header-icons-container text-center">
            <a href="<?= driver_url('index') ?>">
                <span class="float-left">
                    <img src="<?= driver_public_url('icons/back.svg') ?>" alt="Back Icon">
                </span>
            </a>
            <span>Profil</span>
            <a href="#">
                <span class="float-right menu-open closed">
                    <img src="<?= driver_public_url('icons/menu.svg') ?>" alt="Menu Hamburger Icon">
                </span>
            </a>
        </div>
        <!--Page Title & Icons End-->

        <div class="rest-container">

            <!--Profile Information Container Start-->
            <div class="text-center header-icon-logo-margin">
                <div class="profile-picture-container">
                    <img src="<?= driver_public_url('images/avatar.svg') ?>" alt="Profile Picture">
                    <span class="fas fa-camera">
                        <input class="file-prompt" type="file" accept="image/*"> <?php //TODO:düzenlenecek ?>
                    </span>
                </div>
                <div class="display-flex flex-column">
                    <span class="profile-name"><?= $driver['uname'] ?></span>
                    <span class="profile-email font-weight-light"><?= $driver['email'] ?></span>
                </div>
            </div>
            <!--Profile Information Container End-->

            <!--Profile Information Fields Container Start-->
            <div class="sign-up-form-container text-center">
                <form method="post" action="<?= driver_url('profile') ?>" class="width-100">

                    <!--Profile Field Container Start-->
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span><img src="<?= driver_public_url('icons/phone.svg') ?>" alt="Phone Number"></span>
                            </div>
                            <input class="form-control" value="<?= @$driver['telno'] ? $driver['telno'] : '' ?>"  type="tel" name="phone" placeholder="Telefon Numarası">
                        </div>
                    </div>
                    <!--Profile Field Container End-->

                    <!--Profile Field Container Start-->
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span>
                                    <img src="<?= driver_public_url('icons/avatar-light.svg') ?>" alt="Avatar Icon">
                                </span>
                            </div>
                            <input class="form-control" value="<?= $driver['uname'] ?>" type="text" autocomplete="off" name="full-name" placeholder="Ad-Soyad">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span><img src="<?= driver_public_url('icons/personal-id.svg') ?>" alt="TC Kimlik No"></span>
                            </div>
                            <input class="form-control" value="<?= @$driver['tc_no'] ? $driver['tc_no'] : '' ?>"  type="tel" name="phone" placeholder="TC Kimlik Numaranız">
                        </div>
                    </div>
                    <!--Profile Field Container End-->

                    <!--Profile Field Container Start-->
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span>
                                    <img src="<?= driver_public_url('icons/envelope.svg') ?>" alt="Envelope Icon">
                                </span>
                            </div>
                            <input disabled class="form-control" value="<?= $driver['email'] ?>" type="email" name="email" placeholder="Email">
                        </div>
                    </div>
                    <!--Profile Field Container End-->
                    <!--Profile Field Container Start-->
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span>
                                    <img src="<?= driver_public_url('icons/lock.svg') ?>" alt="Lock Icon">
                                </span>
                            </div>
                            <input class="form-control" type="password" name="password" placeholder="Eski Şifreniz">
                            <div class="input-group-append password-visibility">
                                <span>
                                    <img src="<?= driver_public_url('icons/eye.svg') ?>" alt="Password Visibility Icon">
                                </span>
                            </div>
                        </div>
                    </div>
                    <!--Profile Field Container End-->

                    <!--Profile Field Container Start-->
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span>
                                    <img src="<?= driver_public_url('icons/lock.svg') ?>" alt="Lock Icon">
                                </span>
                            </div>
                            <input class="form-control" type="password" name="new_password" placeholder="Yeni Şifreniz">
                            <div class="input-group-append password-visibility">
                                <span>
                                    <img src="<?= driver_public_url('icons/eye.svg') ?>" alt="Password Visibility Icon">
                                </span>
                            </div>
                        </div>
                    </div>
                    *Şifrenizi değiştirmek istemezseniz, Yeni Şifre ve Eski Şifre alanlarını boş bırakınız.
                    <!--Profile Field Container End-->


                    <div class="form-submit-button">
                        <button style="width: 100%" name="edit" value="1" class="btn btn-dark text-uppercase ">Bilgileri Güncelle <span class="far fa-save margin-left-10"></span></button>
                    </div>
                </form>
            </div>
            <!--Profile Information Fields Container End-->

        </div>
    </div>

    <?php require 'statics/mainMenu.php'; ?>
    <?php require 'statics/footer.php'; ?>
