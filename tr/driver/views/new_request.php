<?php require 'statics/header.php'; ?>
<title>Yeni İstekler</title>
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
        <div class="header-icons-container text-center header-icons-container-with-other">
            <div>
                <a href="<?= driver_url('index') ?>">
                    <span class="float-left">
                        <img src="<?= driver_public_url('icons/back.svg') ?>" alt="Back Icon">
                    </span>
                </a>
                <span class="title">Yeni İstekler</span>
                <a href="#">
                    <span class="float-right menu-open closed">
                        <img src="<?= driver_public_url('icons/menu.svg') ?>" alt="Menu Hamburger Icon">
                    </span>
                </a>
                <div class="clearfix"></div>
            </div>
        </div>
        <!--Page Title & Icons End-->

        <div class="rest-container new-request">
            <div class="all-history-items all-history-items-driver remaining-height">
                <?php foreach ($active_calls as $active_call): ?>
                <!--Request Item Container Start-->
                <div class="request-item-container">
                    <div class="profile-picture text-center">
                        <img src="<?= driver_public_url('images/profile-16.png') ?>" alt="Profile Picture">
                    </div><?php //TODO: resim ekle ?>
                    <div class="history-items-container">
                        <div class="history-item">

                            <!--Profile Information Container Start-->
                            <div class="profile-information text-center">
                                <div class="profile-information">
                                    <div class="profile-name font-18"><?= $active_call['username'] ?></div>
                                </div>
                            </div>
                            <!--Profile Information Container End-->

                            <!--Wishes Container Start-->
                            <div class="notification-container">
                                <div class="grey-label">İstekler</div>
                                <div class="border-bottom-primary">
                                    <p class="grey-label font-weight-light">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent quis velit vitae enim gravida lacinia. Ut at auctor arcu. Ut eu pellentesque tortor.
                                    </p>
                                </div>
                            </div>
                            <!--Wishes Container End-->

                            <!--Address Container Start-->
                            <div class="addresses-container position-relative">
                                <div class="height-auto">
                                    <div class="w-100 map-input-container map-input-container-top">
                                        <span class="fas fa-location-arrow location-icon-rotate map-input-icon"></span>
                                        <div class="map-input mr-0 display-flex">
                                            <input class="controls flex-1 font-weight-light" type="text"
                                                   placeholder="" value="" disabled>
                                        </div>
                                    </div>
                                    <a href="trip-description.html" class="href-decoration-none">
                                        <div class="w-100 map-input-container map-input-container-bottom">
                                            <span class="map-input-icon">
                                                <img src="<?= driver_public_url('icons/circle.svg') ?>"  alt="Current Location Icon">
                                            </span>
                                            <div class="map-input mr-0 display-flex border-0 controls flex-1 font-weight-normal align-items-center">
                                                <?= $active_call['username'] ?>
                                            </div>
                                            <span class="dotted-line"></span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <!--Address Container End-->

                            <!--All Trip Fares Container Start-->
                            <div class="all-trip-fares">
                                <div class="border-bottom-primary border-bottom-light-grey">
                                    <div class="text-uppercase trip-fare">Seyahat Özellikleri</div>
                                </div>
                                <div class="trip-fare-container trip-fare-driver font-weight-light">

                                    <!--Trip Fare Item Start-->
                                    <!--Trip Fare Item End-->

                                    <!--Trip Fare Item Start-->
                                    <!--Trip Fare Item End-->

                                    <!--Trip Fare Item Start-->
                                    <div class="trip-fare-item">
                                        <span class="float-left">Müşteriye olan uzaklık</span>
                                        <span class="float-right blue-price">1.2km</span>
                                        <span class="clearfix"></span>
                                    </div>
                                    <!--Trip Fare Item End-->

                                </div>
                            </div>
                            <!--All Trip Fares Container End-->

                            <!--Accept or Decline Container Start-->
                            <div class="request-btn-container display-flex justify-content-between">
                                <div class="request-btn">
                                    <button type="button" class="btn btn-transparent decline text-uppercase">Reddet</button>
                                </div>
                                <div class="request-btn">
                                    <a class="btn btn-primary w-100 font-weight-light text-uppercase sec">Kabul et</a>
                                    <input type="hidden" class="secVal" id="<?= $active_call['id'] ?>">
                                </div>
                            </div>
                            <!--Accept or Decline Container End-->

                        </div>
                    </div>
                </div>
                <!--Request Item Container End-->
                <?php endforeach; ?>
            </div>
        </div>
    </div>

<?php require 'statics/mainMenu.php'; ?>
<?php require 'statics/footer.php'; ?>
