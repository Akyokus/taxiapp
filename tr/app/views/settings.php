<?php require 'statics/header.php'; ?>
<title>Ayarlar</title>
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
            <a href="<?= site_url() ?>">
                <span class="float-left">
                    <img src="<?= public_url('icons/back.svg') ?>" alt="Back Icon">
                </span>
            </a>
            <span>Ayarlar</span>
            <a href="#">
                <span class="float-right menu-open closed">
                    <img src="<?= public_url('icons/menu.svg') ?>" alt="Menu Hamburger Icon">
                </span>
            </a>
        </div>
        <!--Page Title & Icons End-->

        <div class="rest-container">
            <div class="text-center header-icon-logo-margin">
                <img src="<?= public_url('images/logo-main.svg') ?>" alt="Main Logo">
            </div>
            <div class="address-title">Ayarlar</div>

            <!--Settings Container Start-->
            <div class="settings-container">


                <!--Setting Item Start-->
                <div class="setting-wrapper-1">
                    <span>Önbelleği Temizle</span>
                    <label class="switch float-right">
                        <a style="font-weight: bold" href="<?= site_url('cash') ?>">Temizle</a>

                    </label>
                    <span class="clearfix"></span>
                </div>

                <!--Setting Item End-->

                <!--Setting Item Start-->
                <div class="setting-wrapper-primary">
                    <span>Konumumu göster</span>
                    <label class="switch float-right">
                        <input type="checkbox" checked>
                        <span class="slider"></span>
                    </label>
                    <span class="clearfix"></span>
                </div>
                <!--Setting Item End-->

            </div>
            <!--Settings Container End-->

        </div>
    </div>

<?php require 'statics/mainMenu.php'; ?>
<?php require 'statics/footer.php'; ?>
