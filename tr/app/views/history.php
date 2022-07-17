<?php require 'statics/header.php'; ?>
<title>Geçmiş Çağrıları</title>
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
            <a href="<?= site_url() ?>">
                <span class="float-left">
                    <img src="<?= public_url('icons/back.svg') ?>" alt="Back Icon">
                </span>
            </a>
            <span class="title">Geçmiş Çağrılarım</span>
            <a href="#">
                <span class="float-right menu-open closed">
                    <img src="<?= public_url('icons/menu.svg') ?>" alt="Menu Hamburger Icon">
                </span>
            </a>
        </div>
        <!--Page Title & Icons End-->

        <div class="rest-container">
            <div class="all-history-items remaining-height">
                <?php foreach ($active_calls as $active_call): ?>
                <!--History Item Container Start-->
                <div class="history-items-container history-items-padding ">
                    <div class="history-item">

                        <!--Google Map Start-->
                        <div id="map1"></div>
                        <!--Google Map End-->

                        <!--Date and Price Container Start-->
                        <div class="border-bottom-primary thin">
                            <div class="status-container">
                                <div class="date float-left">
                                    <?= $active_call['created_at'] ?>
                                </div>
                                <a href="<?= site_url('history?id=').$active_call['id'] ?>" class="status float-right text-uppercase">
                                    İptal Et
                                </a>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <!--Date and Price Container End-->

                        <!--Address Container Start-->
                        <div class="addresses-container position-relative">
                            <div class="height-auto">
                                <div class="w-100 map-input-container map-input-container-top">
                                    <span class="fas fa-location-arrow location-icon-rotate  map-input-icon"></span>
                                    <div class="map-input display-flex">
                                        <input class="controls flex-1 font-weight-light" type="text"
                                               placeholder="" value="Libadiye Cad." disabled><?php //TODO:koordinat ayıklanması ardından gelecek ?>
                                    </div>
                                </div>
                                <div  class="href-decoration-none">
                                    <div class="w-100 map-input-container map-input-container-bottom">
                                        <span class="map-input-icon"><img src="<?= public_url('/icons/circle.svg') ?>"  alt="Current Location Icon"></span>
                                        <div class="map-input display-flex controls flex-1 align-items-center">
                                            <?= session('user_name') ?>
                                        </div>
                                        <span class="dotted-line"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Address Container End-->

                        <!--Support Button Start-->
                        <div>
                            <a href="<?= site_url('online_support') ?>" class="btn btn-primary w-100 box-shadow-0 font-weight-light text-uppercase">Destek <span class="question-icon fas fa-question-circle"></span></a>
                        </div>
                        <!--Support Button End-->
                    </div>
                </div>
                <!--History Item Container End-->
                <?php endforeach; ?>
                <?php foreach ($completed_calls as $completed_call): ?>
                <!--History Item Container Start-->
                <div class="history-items-container history-items-padding ">
                    <div class="history-item">

                        <!--Google Map Start-->
                        <div id="map2"></div>
                        <!--Google Map End-->

                        <!--Date and Price Container Start-->
                        <div class="border-bottom-primary thin">
                            <div class="status-container">
                                <div class="date float-left">
                                    <?= $completed_call['created_at'] ?>
                                </div>
                                <div class="status-none float-right text-uppercase">
                                    <?= $completed_call['price'] ?>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <!--Date and Price Container End-->

                        <!--Address Container Start-->
                        <div class="addresses-container position-relative">
                            <div class="height-auto">
                                <div class="w-100 map-input-container map-input-container-top">
                                    <span class="fas fa-location-arrow location-icon-rotate  map-input-icon"></span>
                                    <div class="map-input display-flex">
                                        <input class="controls flex-1 font-weight-light" type="text"
                                               placeholder="" value="bursa sokak" disabled><?php //TODO: koordinat ayıklanması gereklidir ?>
                                    </div>
                                </div>
                                <div class="href-decoration-none">
                                    <div class="w-100 map-input-container map-input-container-bottom">
                                        <span class="map-input-icon"><img src="<?= public_url('/icons/circle.svg') ?>"  alt="Current Location Icon"></span>
                                        <div class="map-input display-flex controls flex-1 align-items-center">
                                            <?= session('user_name') ?>
                                        </div>
                                        <span class="dotted-line"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Address Container End-->

                        <!--Support Button Start-->
                        <div>
                            <a href="trip-description.html" class="btn btn-dark text-uppercase">Daha Fazla</a>
                        </div>
                        <!--Support Button End-->

                    </div>
                </div>
                <!--History Item Container End-->
                <?php endforeach; ?>
                <?php foreach ($deactive_calls as $deactive_call): ?>
                <!--History Item Container Start-->
                <div  class="history-items-container history-items-padding ">
                    <div  class="history-item">

                        <!--Google Map Start-->
                        <div id="map3"></div>
                        <!--Google Map End-->

                        <!--Date and Price Container Start-->
                        <div  class="border-bottom-primary thin">
                            <div class="status-container">"
                                <div class="date float-left">
                                    <?= $deactive_call['created_at'] ?>
                                </div>
                                <div style="color: red" class="status-none float-right text-uppercase">
                                   İPTAL EDİLDİ
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <!--Date and Price Container End-->

                        <!--Address Container Start-->
                        <div  class="addresses-container position-relative">
                            <div  class="height-auto">
                                <div   class="w-100 map-input-container map-input-container-top">
                                    <span  class="fas fa-location-arrow location-icon-rotate  map-input-icon"></span>
                                    <div  class="map-input display-flex">
                                        <input  class="controls flex-1 font-weight-light" type="text"
                                               placeholder="" value="Ünalan Mah." disabled>
                                    </div>
                                </div>
                                <div  class="href-decoration-none">
                                    <div  class="w-100 map-input-container map-input-container-bottom">
                                        <span  class="map-input-icon"><img src="<?= public_url('icons/circle.svg') ?>"  alt="Current Location Icon"></span>
                                        <div class="map-input display-flex controls flex-1 align-items-center">
                                            <?= session('user_name') ?>
                                        </div>
                                        <span class="dotted-line"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Address Container End-->

                        <!--Support Button Start-->
                        <div class="margin-bottom-30">
                            <a href="trip-description.html" class="btn btn-dark text-uppercase">Daha Fazla</a>
                        </div>
                        <!--Support Button End-->

                    </div>
                </div>
                <!--History Item Container End-->
                <?php endforeach; ?>
            </div>
        </div>
    </div>
<?php require 'statics/mainMenu.php'; ?>
<?php require 'statics/footer.php'; ?>
