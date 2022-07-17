<?php require 'statics/header.php'; ?>
<title>Çevrimdışı</title>
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
                <img src="../icons/back.svg" alt="Back Icon">
            </span>
            <span class="title">Çevrimdışı</span>
            <a href="#">
                <span class="float-right menu-open closed">
                    <img src="../icons/menu.svg" alt="Menu Hamburger Icon">
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
                <input type="checkbox">
                <span class="slider"></span>
            </label>
            <img src="../icons/map-position.svg" class="float-right" alt="Map Position">
            <div class="clearfix"></div>

            <!--Notification Container Start-->
            <div class="request-notification-container map-notification offline-notification map-notification-warning">
                Çevrimdışısın!
                <div class="font-weight-light">
                    Çevrimiçi moduna geç ve gelen işleri kabul et.
                </div>
            </div>
            <!--Notification Container End-->

            <!--Notification Container Start-->
            <div class="request-notification-container hidden map-notification meters-left-450 map-notification-warning">
                Hedefe 450 metre
                <div class="font-weight-light">
                    <span><img src="../icons/path-right.svg" class="direction-icon"> </span>  Ana Caddede Sağa Dönün
                </div>
            </div>
            <!--Notification Container End-->

            <!--Notification Container Start-->
            <div class="request-notification-container hidden map-notification meters-left-50 map-notification-warning">
                Hedefe 50 metre
                <div class="font-weight-light">
                    <span><img src="../icons/path-left.svg" class="direction-icon"> </span> Ana Caddede Sola Dönün
                </div>
            </div>
            <!--Notification Container End-->

            <!--Link Notification Container Start-->
            <a href="new-requests.html" class="new-request href-decoration-none">
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
            <button type="button" class="btn btn-primary text-uppercase">Başlangıça git</button>
        </div>
        <!--Go To Pickup Button End-->

        <!--Tapped Car Information Container Start-->
        <div class="tapped-car-info request hidden">
            <div class="request-item-container remaining-height">
                <div class="profile-information text-center">
                    <div class="profile-information">
                        <img class="profile-picture-img" src="../images/profile-16.png" alt="Profile Picture">
                        <div class="profile-name font-18">Goksal kaya</div>
                    </div>
                </div>
                <div class="all-wide-container history-items-container overflow-scroll-y remaining-height">
                    <div class="history-item driver-request">

                        <!--Wishes Container Start-->
                        <div class="notification-container">
                            <div class="grey-label">İstekler</div>
                            <p class="grey-label font-weight-light">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent quis velit vitae enim gravida lacinia. Ut at auctor arcu. Ut eu pellentesque tortor.
                            </p>
                        </div>
                        <!--Wishes Container End-->

                        <div class="border-bottom-primary">
                            <div class="status-container status-container-driver">
                            </div>
                        </div>

                        <!--Addresses Container Start-->
                        <div class="addresses-container position-relative driver-addresses-container">
                            <div class="height-auto">
                                <div class="w-100 map-input-container map-input-container-top">
                                    <span class="fas fa-location-arrow location-icon-rotate map-input-icon"></span>
                                    <div class="map-input mr-0 display-flex">
                                        <input class="controls flex-1 font-weight-light" type="text"
                                               placeholder="" value="merkez mah" disabled>
                                    </div>
                                </div>
                                <div class="w-100 map-input-container map-input-container-bottom">
                                    <span class="map-input-icon">
                                        <img src="../icons/circle.svg"  alt="Current Location Icon">
                                    </span>
                                    <div class="map-input mr-0 display-flex border-0">
                                        <input class="controls flex-1 font-weight-light" type="text"
                                               placeholder="" value="goksal kaya" disabled>
                                    </div>
                                    <span class="dotted-line"></span>
                                </div>
                            </div>
                        </div>
                        <!--Addresses Container End-->

                        <!--All Trips Container Start-->
                        <div class="all-trip-fares">
                            <div class="border-bottom-primary border-bottom-light-grey">
                                <div class="text-uppercase trip-fare">Seyahat Ücreti</div>
                            </div>
                            <div class="trip-fare-container trip-fare-driver font-weight-light">

                                <!--Trip Fare Item Start-->
                                <div class="trip-fare-item">
                                    <span class="float-left">Tahmini fiyat</span>
                                    <span class="float-right blue-price">300tl</span>
                                    <span class="clearfix"></span>
                                </div>
                                <!--Trip Fare Item End-->

                                <!--Trip Fare Item Start-->
                                <div class="trip-fare-item">
                                    <span class="float-left">Mesafe</span>
                                    <span class="float-right blue-price">12km</span>
                                    <span class="clearfix"></span>
                                </div>
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
                        <!--All Trips Container End-->

                        <!--Accept Or Decline Container Start-->
                        <div class="request-btn-container display-flex justify-content-between">
                            <div class="request-btn">
                                <button type="button" class="btn btn-transparent text-uppercase">Reddet</button>
                            </div>
                            <div class="request-btn">
                                <button type="button" class="btn btn-primary w-100 font-weight-light text-uppercase btn-accept">Kabul et</button>
                            </div>
                        </div>
                        <!--Accept Or Decline Container End-->

                    </div>
                </div>
            </div>
        </div>
        <!--Tapped Car Information Container End-->

        <div class="tapped-car-info request hidden">
            <div class="request-item-container remaining-height">
                <div class="profile-information text-center">
                    <div class="profile-information">
                        <img class="profile-picture-img" src="../images/profile-16.png" alt="Profile Picture">
                        <div class="profile-name font-18">Göksal Kaya</div>
                    </div>
                </div>
                <div class="all-wide-container history-items-container overflow-scroll-y remaining-height">
                    <div class="history-item driver-request">

                        <!--Wishes Container Start-->
                        <div class="notification-container">
                            <div class="grey-label">İstekler</div>
                            <p class="grey-label font-weight-light">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent quis velit vitae enim gravida lacinia. Ut at auctor arcu. Ut eu pellentesque tortor.
                            </p>
                        </div>
                        <!--Wishes Container End-->

                        <div class="border-bottom-primary">
                            <div class="status-container status-container-driver">
                            </div>
                        </div>

                        <!--Addresses Container Start-->
                        <div class="addresses-container position-relative driver-addresses-container">
                            <div class="height-auto">
                                <div class="w-100 map-input-container map-input-container-top">
                                    <span class="fas fa-location-arrow location-icon-rotate map-input-icon"></span>
                                    <div class="map-input mr-0 display-flex">
                                        <input class="controls flex-1 font-weight-light" type="text"
                                               placeholder="" value="merkez mah" disabled>
                                    </div>
                                </div>
                                <div class="w-100 map-input-container map-input-container-bottom">
                                    <span class="map-input-icon">
                                        <img src="../icons/circle.svg"  alt="Current Location Icon">
                                    </span>
                                    <div class="map-input mr-0 display-flex border-0">
                                        <input class="controls flex-1 font-weight-light" type="text"
                                               placeholder="" value="serhat donmez" disabled>
                                    </div>
                                    <span class="dotted-line"></span>
                                </div>
                            </div>
                        </div>
                        <!--Addresses Container End-->

                        <!--All Trips Container Start-->
                        <div class="all-trip-fares">
                            <div class="border-bottom-primary border-bottom-light-grey">
                                <div class="text-uppercase trip-fare">Seyahat Ücreti</div>
                            </div>
                            <div class="trip-fare-container trip-fare-driver font-weight-light">

                                <!--Trip Fare Item Start-->
                                <div class="trip-fare-item">
                                    <span class="float-left">Tahmini fiyat</span>
                                    <span class="float-right blue-price">400tl</span>
                                    <span class="clearfix"></span>
                                </div>
                                <!--Trip Fare Item End-->

                                <!--Trip Fare Item Start-->
                                <div class="trip-fare-item">
                                    <span class="float-left">Mesafe</span>
                                    <span class="float-right blue-price">7km</span>
                                    <span class="clearfix"></span>
                                </div>
                                <!--Trip Fare Item End-->

                                <!--Trip Fare Item Start-->
                                <div class="trip-fare-item">
                                    <span class="float-left">Müşteriye olan uzaklık</span>
                                    <span class="float-right blue-price">1km</span>
                                    <span class="clearfix"></span>
                                </div>
                                <!--Trip Fare Item End-->

                            </div>
                        </div>
                        <!--All Trips Container End-->

                        <!--Accept Or Decline Container Start-->
                        <div class="request-btn-container display-flex justify-content-between">
                            <div class="request-btn">
                                <button type="button" class="btn btn-transparent text-uppercase">Reddet</button>
                            </div>
                            <div class="request-btn">
                                <button type="button" class="btn btn-primary w-100 font-weight-light text-uppercase btn-accept">Kabul et</button>
                            </div>
                        </div>
                        <!--Accept Or Decline Container End-->

                    </div>
                </div>
            </div>
        </div>

<?php require 'statics/mainMenu.php'; ?>
<?php require 'statics/footer.php'; ?>
