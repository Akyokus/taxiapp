<?php require 'statics/header.php'?>

    <title>Durak54</title>
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
        <div class="header-icons-container position-relative text-center">
            <span class="float-left back-to-map hidden">
                <img src="<?= public_url('icons/back.svg') ?>" alt="Back Icon">
            </span>
            <span id="" class="title">
Durak54</span>
			
			
            <a href="#">
                <span class="float-right menu-open closed">
                    <img src="<?= public_url('icons/menu.svg') ?>" alt="Menu Hamburger Icon">
                </span>
            </a>
        </div>
        <!--Page Title & Icons End-->


        <!--Google Maps Start-->
        <div id="map" class="h-100"></div>
        <!--Google Maps End-->

        <div class="not-map">

            <!--Request Ride Button Container Start-->
            <div id="gorunecek" class="request-ride-btn hidden">
                <button  type="button" class="btn btn-primary">
                    Yolculuk talep edin</button>
            </div>
            <!--Request Ride Button Container End-->

            <!--Choose a Car Container Start-->
            <div id="calltaksi" class="ride-options-bottom hidden">
                <button id="close_info" type="button" class="close" aria-label="Close">
                    <span style="font-size: 60px" aria-hidden="true">&times;</span>
                </button>
                <div class="cars-options">
                    <div
                        align="center"  class="car-option" data-about-target-id="about-section-1">
                    </div>
                    <div align="center"  class="car-option active" data-about-target-id="about-section-2">
                         <img style="width:30%;" src="<?= public_url('icons/taksi.png') ?>" alt="Taksi durak54">
                    </div>
                    <div align="center"  class="car-option" data-about-target-id="about-section-3">

                    </div>
                </div>
                <div id="taxi_info" class="about-section">
                    <div  class="about-section-2">
                        <div class="about-section-title">
                            <div class="about-section-title">
                                <span class="black-text">5 dakika</span>
                                Taksi Gezisi <strong></strong> 1.3km
                                <span class="black-text">5 dakika</span>
                            </div>
                        </div>
                        <div class="about-section-more">
                            NOT: Bu yaklaşık bir tahmindir. Gerçek maliyet göre değişebilir
                            trafiğe.
                        </div>
                    </div>
                </div>
                <div id="calldiv" class="confirm-ride-btn">
                    <button id="taxi_button" name="create_call" type="button" class="btn btn-primary">Yolculuk talep edin</button>

                </div>
            </div>
            <!--Choose a Car Container End-->

            <!--Wish Container Start-->

            <!--Wish Container End-->

            <!--Payment Options Container Start-->
            <!--Payment Options Container End-->

            <!--Tap on Car Red Text Start-->
            <!--Tap on Car Red Text End-->

            <!--Tapped Car Information Container Start-->
            <div class="tapped-car-info hidden disabled">
                <div class="tapped-car-container">

                    <!--Chosen Car Information Container Start-->

                    <!--Chosen Car Information Container End-->

                    <!--More Information About Chosen Car Container Start-->

                    <!--More Information About Chosen Car Container End-->

                </div>
            </div>
            <!--Tapped Car Information Container End-->

            <!--Submit Review Container Start-->
            <div class="submit-review hidden">
                <div class="text-center driver-info">
                    <img class="review-profile" src="<?= public_url('images/profile-1.png') ?>"  alt="Driver Picture">
                    <div class="float-right close-review">
                        <img src="<?= public_url('icons/close.svg') ?>" alt="Close Icon">
                    </div>
                    <div class="driver-name">Goksal Kaya</div>
                    <div class="driver-stars rating">
                        <span class="fas fa-star text-white font-weight-light"></span>
                        <span class="fas fa-star text-white font-weight-light"></span>
                        <span class="fas fa-star text-white font-weight-light"></span>
                        <span class="fas fa-star text-white font-weight-light"></span>
                        <span class="fas fa-star text-white font-weight-light"></span>
                    </div>
                </div>
                <div class="text-center trip-desc-info">
                    <div class="trip-desc-question">Geziniz Nasıldı?</div>
                    <div class="please-rate">Lütfen değerlendirin, geri bildiriminiz sürüş deneyimini iyileştirmeye yardımcı olacaktır.</div>
                </div>
                <div class="comment-info">
                    <span class="comment-label"> * </span> Yorumlar
                    <textarea class="w-100"></textarea>
                    <button class="btn btn-primary text-uppercase">İnceleme Gönder</button>
                </div>
            </div>
            <!--Submit Review Container End-->
        </div>
    </div>

<?php require 'statics/mainMenu.php' ?>

    <!-- Modal Start-->
    <div class="modal fade" id="searchingModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content search">
                <div class="modal-body">
                    <div class="text-center">
                        <span class="fas fa-spinner fa-spin"></span>
                        <div class="label-title">Searching Driver...</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Modal End-->

</div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<?php require 'statics/footer.php'?>
