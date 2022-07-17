<?php require 'statics/header.php'; ?>

<title>Sign In</title>
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
            <a href="<?= site_url('sign-up') ?>">
                <span class="float-left">
                    <img src="<?= public_url('icons/back.svg') ?>" alt="Back Icon">
                </span>
            </a>
            <span>Oturum Aç</span>
        </div>
        <!--Page Title & Icons End-->

        <div class="rest-container">
            <div class="text-center header-icon-logo-margin header-icon-logo-margin-extra">
                <img src="<?= public_url('images/logo-main.svg') ?>" alt="Main Logo">
            </div>

            <!--Sign Up Container Start-->
            <div class="sign-up-form-container text-center">
                <form method="post" action="<?= site_url('login') ?>" class="width-100">

                    <!--Sign Up Form Field Start-->
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span>
                                    <img src="<?= public_url('icons/avatar-light.svg') ?>" alt="Avatar Icon">
                                </span>
                            </div>
                            <input class="form-control" type="text" autocomplete="off" name="email" placeholder="E-mail Adresiniz">
                        </div>
                    </div>
                    <!--Sign Up Form Field End-->

                    <!--Sign Up Form Field Start-->
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span>
                                    <img src="<?= public_url('icons/lock.svg') ?>" alt="Lock Icon">
                                </span>
                            </div>
                            <input class="form-control" type="password" name="password" placeholder="Şifre">
                            <div class="input-group-append password-visibility">
                                <span>
                                    <img src="<?= public_url('icons/eye.svg') ?>" alt="Password Visibility Icon">
                                </span>
                            </div>
                        </div>
                    </div>
                    <!--Sign Up Form Field End-->

                    <div class="form-submit-button">
                        <button name="login" value="1" style="width: 100%" class="btn btn-primary text-uppercase font-weight-normal">Oturum Aç</button>
                    </div>
                    <div class="have-an-account text-center">
                        <a href="<?= site_url('register') ?>" class="regular-link">Hala üye olmadın mı ? Hemen simdi kayıt ol.</a>
                    </div>
                </form>
            </div>
            <!--Sign Up Container Start-->

        </div>
    </div>

    <!--Terms And Conditions Agreement Container Start-->
    <div class="col-xs-12 col-sm-12 text-center sms-rate-text font-roboto flex-end margin-bottom-30">
        <div class="container-sms-rate-text width-100 font-11">
            <span class="light-gray font-weight-light">Kayıt olarak bu koşulları kabul etmiş olursunuz. </span>
            <br/>
            <a href="#" class="dark-link">
                <span class="font-weight-light">Kullanım Koşulları ve Gizlilik Politikası</span>
            </a>
        </div>
    </div>
    <!--Terms And Conditions Agreement Container End-->
    <?php if (isset($error)): ?>
        <script>swal("BAŞARISIZ" , "<?= $error ?>" , "error")</script>
    <?php elseif (isset($success)): ?>
        <script>swal("BAŞARILI", "<?= success() ?>", "success")</script>
    <?php elseif (isset($warning)): ?>
        <script>swal("UYARI", "<?= $warning ?>", "warning")</script>
    <?php endif; ?>
<?php require 'statics/footer.php'; ?>
