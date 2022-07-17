<?php require 'statics/header.php';  ?>
<title>Sürücü Kaydı</title>
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
                <span>
Sürücü Kaydı</span>
                <a href="#">
                    <span class="float-right menu-open closed">
                        <img src="<?= driver_public_url('icons/menu.svg') ?>" alt="Menu Hamburger Icon">
                    </span>
                </a>
        </div>
        <!--Page Title & Icons End-->

        <div class="rest-container">
            <div class="text-center header-icon-logo-margin header-icon-logo-margin-extra">
                <div class="profile-picture-container">
                    <img src="<?= driver_public_url('images/driver-registration.svg') ?>" alt="Driver Registration Icon">
                </div>
            </div>
            <div class="address-title">
Sürücü Kaydı</div>

            <!--Driver Registration Information Links Container Start-->
            <div class="sign-up-form-container">
                <div class="width-100">
                    <!--Driver Registration Item Start-->
                    <div class="border-bottom-primary ">
                        <a href="<?= driver_url('driver_license') ?>" class="home-options-list href-decoration-none">
                            
Ehliyet
                            <span class="fas fa-check icon chosen hidden"></span>
                            <span class="icon choose float-right">
                                <img src="<?= driver_public_url('icons/angle-right.svg') ?>" alt="Angle Right Icon">
                            </span>
                        </a>
                    </div>
                    <!--Driver Registration Item End-->

                    <!--Driver Registration Item Start-->
                    <div class="border-bottom-primary">
                        <a href="<?= driver_url('personal_verification') ?>" class="home-options-list href-decoration-none">
                            Kişisel Kimlik Kartı
                            <span class="fas fa-check icon chosen hidden"></span>
                            <span class="icon choose float-right">
                                <img src="<?= driver_public_url('icons/angle-right.svg') ?>" alt="Angle Right Icon">
                            </span>
                        </a>
                    </div>
                    <!--Driver Registration Item End-->
                </div>
            </div>
            <!--Driver Registration Information Links Container End-->

        </div>
    </div>
<?php require 'statics/mainMenu.php';  ?>
<?php require 'statics/footer.php';  ?>