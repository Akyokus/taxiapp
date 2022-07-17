<?php require 'statics/header.php'?>
<title>Sürücü</title>
</head>
<body>

<!--Loading Container Start-->
<div id="load" class="loading-overlay display-flex flex-column justify-content-center align-items-center">
    <div class="primary-color font-28 fas fa-spinner fa-spin"></div>
</div>
<!--Loading Container End-->

<div class="row h-100">
    <div class="col-xs-12 col-sm-12 remaining-height">

        <!--Page Title & Icons Start-->
        <div class="header-icons-container text-center">
            <span class="float-left back-to-map hidden">
                <img src="<?= driver_public_url('icons/back.svg') ?>" alt="Back Icon">
            </span>
            <span class="title">Çevrimdışı</span>
            <a href="#">
                <span class="float-right menu-open closed">
                    <img src="<?= driver_public_url('icons/menu.svg') ?>" alt="Menu Hamburger Icon">
                </span>
            </a>
        </div>
        <!--Page Title & Icons End-->

        <!--Google Maps Start-->
        <div id="map" class="h-100"></div>
        <!--Google Maps End-->

        <!--All Notifications & Status Container Start-->
        <div class="change-request-status">
            <label class="switch float-left">
                <input id="check_state" type="checkbox">
                <span class="slider"></span>
            </label>
            <img onclick="getMapCoords()" src="<?= driver_public_url('icons/map-position.svg') ?>" class="float-right" alt="Map Position">
            <div class="clearfix"></div>

            <!--Notification Container Start-->
            <div class="request-notification-container map-notification offline-notification map-notification-warning">
                Çevrimdışısın!
                <div class="font-weight-light">
                    Çevrimiçi moduna geç ve gelen işleri kabul etme şansı yakala.
                </div>
            </div>
            <!--Notification Container End-->


            <!--Link Notification Container Start-->
            <a style="display:none" href="<?= driver_url('new_request') ?>" class="new-request href-decoration-none">
                <div class="request-notification-container hidden map-notification new-request-notification">
                    3 Yeni istek var!
                    <div class="font-weight-light">
                        Lütfen isteği kabul edin veya reddedin
                    </div>
                </div>
            </a>
            <!--Link Notification Container End-->

        </div>
        <!--All Notifications & Status Container End-->

        <!--Go To Pickup Button Start-->
        <div class="go-to-pickup-btn hidden">
            <button type="button" class="btn btn-primary text-uppercase">Başlangıca git</button>
        </div>
        <!--Go To Pickup Button End-->


<?php require 'statics/mainMenu.php'?>
<?php require 'statics/footer.php'?>
