<?php require 'statics/header.php' ?>
    <title>Yükleniyor...</title>
    </head>
    <body>

    <!--Loading Container Start-->
    <div id="load" class="loading-overlay display-flex flex-column justify-content-center align-items-center">
        <div class="primary-color font-28 fas fa-spinner fa-spin"></div>
    </div>
    <!--Loading Container End-->

    <!--Loading Logo Container Start-->
    <div class="main-background w-100 h-100">
        <input type="hidden" class="loading-logo  customer">
        <div class="d-flex h-100 justify-content-center align-items-center flex-column">
            <a href="<?= driver_url('sign-up') ?>" class="loading-logo-margin"><img src="<?= public_url('images/logo-white.svg') ?>" alt="Main Logo"></a>
        </div>
    </div>
		<?php header("Refresh: 2; url=".driver_url('sign-up')); ?>
<?php require 'statics/footer.php' ?>
