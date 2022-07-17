<?php require 'statics/header.php'; ?>
<title>Oturum Aç</title>
</head>
<body>

<!--Loading Container Start-->
<div id="load" class="loading-overlay display-flex flex-column justify-content-center align-items-center">
    <div class="primary-color font-28 fas fa-spinner fa-spin"></div>
</div>
<!--Loading Container End-->

<div class="row h-100 align-items-center">
    <div class="col-xs-12 col-sm-12 margin-bottom-up">
        <div class="text-center mb-5">
            <img src="<?= public_url('images/logo-main.svg') ?>" alt="Main Logo">
        </div>

        <!--Sign Up Buttons Container Start-->
        <div class="sign-up-btn-container">
   
            <a href="<?= site_url('register') ?>" class="btn btn-center width-100 display-block btn-primary text-uppercase margin-top-10"> E-Mail adresi ile kayıt ol</a>
        </div>
        <!--Sign Up Buttons Container End-->

        <div class="have-an-account text-center">
            <a href="<?= site_url('login') ?>" class="regular-link">Zaten hesabınız var mı?</a>
        </div>
    </div>
</div>
<?php require 'statics/footer.php'; ?>
