<?php require 'statics/header.php'; ?>
<?php if (isset($error)): ?>
    <script>swal("BAŞARISIZ" , "<?= $error ?>" , "error")</script>
<?php elseif (isset($success)): ?>
    <?= $success ?>
<?php elseif (isset($warning)): ?>
    <script>swal("UYARI", "<?= $warning ?>", "warning")</script>
<?php endif; ?>
<title>Kayıt OL</title>
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
            <span>Kayıt Ol</span>
        </div>
        <!--Page Title & Icons End-->

        <div class="rest-container">
            <div class="text-center header-icon-logo-margin">
                <img src="<?= public_url('images/logo-main.svg') ?>" alt="Main Logo">
            </div>

            <!--Sign Up Container Start-->
            <form action="<?= site_url('register') ?>" method="post">
            <div class="sign-up-form-container text-center">
                <form class="width-100">

                    <!--Sign Up Input Field Start-->
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span>
                                    <img src="<?= public_url('icons/avatar-light.svg') ?>" alt="Avatar Icon">
                                </span>
                            </div>
                            <input class="form-control" type="text" autocomplete="off" name="username" placeholder="Adınız">
                        </div>
                    </div>
                    <!--Sign Up Input Field End-->

                    <!--Sign Up Input Field Start-->
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span><img src="<?= public_url('icons/envelope.svg') ?>" alt="Envelope Icon"></span>
                            </div>
                            <input class="form-control" type="text" autocomplete="off" name="email" placeholder="Email">
                        </div>
                    </div>
                    <!--Sign Up Input Field End-->
<div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span><img src="<?= public_url('icons/phone.svg') ?>" alt="Phone Number"></span>
                            </div>
                            <input class="form-control" maxlength="11"  type="tel" name="phone" placeholder="Telefon Numarası (0555XXXXXXX)">
                        </div>
                    </div>
                    <!--Sign Up Input Field Start-->
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span><img src="<?= public_url('icons/lock.svg') ?>" alt="Lock Icon"></span>
                            </div>
                            <input class="form-control" type="password" name="password" placeholder="Şifre">
                            <div class="input-group-append password-visibility">
                                <span>
                                    <img src="<?= public_url('icons/eye.svg') ?>" alt="Password Visibility Icon">
                                </span>
                            </div>
                        </div>
                    </div>
                    <!--Sign Up Input Field End-->

                    <!--Sign Up Input Field Start-->
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span><img src="<?= public_url('icons/lock.svg') ?>" alt="Lock Icon"></span>
                            </div>
                            <input class="form-control" type="password" name="re_password" placeholder="Şifre onayı">
                            <div class="input-group-append password-visibility">
                                <span>
                                    <img src="<?= public_url('icons/eye.svg') ?>" alt="Password Visibility Icon">
                                </span>
                            </div>
                        </div>
                    </div>
                    <!--Sign Up Input Field End-->

                    <div class="form-submit-button">
                        <button style="width: 100%" name="register" value="1" class="btn btn-primary text-uppercase">Email ile kayıt ol</button>
                    </div>
                </form>
            </div>
            </form>
            <!--Sign Up Container Start-->

        </div>
    </div>

    <!--Terms And Conditions Agreement Container Start-->
    <div class="col-xs-12 col-sm-12 text-center sms-rate-text font-roboto flex-end margin-bottom-30">
        <div class="container-sms-rate-text width-100 font-11">
            <span class="light-gray font-weight-light">Kayıt olarak bu koşulları kabul etmiş olursunuz.</span>
            <br/>
            <a href="#" class="dark-link">
                <span class="font-weight-light">
Kullanım Koşulları ve Gizlilik Politikası</span>
            </a>
        </div>
    </div>
    <!--Terms And Conditions Agreement Container End-->

<?php require 'statics/footer.php'; ?>
