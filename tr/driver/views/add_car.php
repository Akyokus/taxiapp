<?php require 'statics/header.php'  ?>
 <title>Yeni Araba</title>
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
            <span>Araç</span>
            <a href="#">
                <span class="float-right menu-open closed">
                    <img src="<?= driver_public_url('icons/menu.svg') ?>" alt="Menu Hamburger Icon">
                </span>
            </a>
        </div>
        <!--Page Title & Icons End-->

        <div class="rest-container">
            <div class="scan-your-card-container-none">
                <div class="clearfix"></div>

                <!--Upload Car Pictures Container Start-->
                <div class="scan-your-card-prompt">
                    <div class="position-relative">
                        <div class="upload-picture-container mb-0">
                            <div class="upload-camera-container text-center">
                                    <span class="camera">
                                        <img src="<?= driver_public_url('icons/photocamera.svg') ?>" alt="Camera Icon">
                                    </span>
                            </div>
                        </div>
                        <input class="scan-prompt" type="file" accept="image/*">
                    </div>
                    <div class="upload-picture-buttons-append">
                        <span class="float-left position-relative upload-btn">
                            <img src="<?= driver_public_url('icons/upload.svg') ?>" alt="Upload Icon">
                            <input class="scan-prompt" type="file" accept="image/*">
                        </span>
                        <span class="clearfix"></span>
                    </div>
                </div>
                <!--Upload Car Pictures Container End-->

                <div class="font-awesome-container"></div>
				<form method="post" action="<?= driver_url('add_car') ?>">
                <!--Car Registration Info Container Start-->
                <div class="car-info-container car-info-container-top font-weight-light">
                    <div class="card-number">
                        <!--Car Registration Field Start-->
                        <div class="form-group">
                            <label class="width-100">
                                <span class="label-title">Araç Markası</span>
                                <span class="car-info-wrap display-block">
                                    <select name="marka" class="custom-select font-weight-light car-info">
                                        <option value="opel">Opel</option>
                                        <option value="mercedes">Mercedes</option>
                                        <option value="toyota">Toyota</option>
                                        <option value="nissan">Nissan</option>
                                        <option value="bmw">BMW</option>
                                    </select>
                                </span>
                            </label>
                        </div>
                        <!--Car Registration Field End-->

                        <!--Car Registration Field Start-->
                        <div class="form-group">
                            <label class="width-100">
                                <span class="label-title">Taşıma Modeli</span>
                                <span class="car-info-wrap display-block">
                                    <select name="model" class="custom-select font-weight-light car-info">
                                        <option value="vectra">Vectra</option>
                                        <option value="glc">GLC</option>
                                        <option value="camri">Camri</option>
                                        <option value="altima">Altima</option>
                                        <option value="m3">M3</option>
                                    </select>
                                </span>
                            </label>
                        </div>
                        <!--Car Registration Field End-->

                        <!--Car Registration Field Start-->
                        <div class="form-group">
                            <label class="width-100">
                                <span class="label-title">Renk</span>
                                <span class="car-info-wrap display-block">
                                    <select name="renk" class="custom-select font-weight-light car-info">
                                        <option value="black">Siyah</option>
                                        <option value="white">Beyaze</option>
                                        <option value="grey">Gri</option>
                                        <option value="silver">Gümüş</option>
                                        <option value="blue">Mavi</option>
                                        <option value="red">Kırmızı</option>
                                    </select>
                                </span>
                            </label>
                        </div>
                        <!--Car Registration Field End-->

                        <!--Car Registration Two Fields Container Start-->
                        <div class="multi-form-container display-flex justify-content-between">
                            <div class="form-group">
                                <label class="width-100">
                                    <span class="label-title">Araç Kayıt Numarası</span>
                                        <input class="form-control text-input font-weight-light" type="text" autocomplete="off" name="kayit_no" value="LG-287-GL">
                                </label>
                            </div>
                            <div class="form-group">
                                <label class="width-100">
                                    <span class="label-title">Yakıt</span>
                                    <span class="car-info-wrap display-block">
                                        <select name="yakit" class="custom-select font-weight-light car-info">
                                            <option value="petrol">Petrol</option>
                                            <option value="diesel">Dizel</option>
                                            <option value="gas">Gaz</option>
                                        </select>
                                    </span>
                                </label>
                            </div>
                        </div>
                        <!--Car Registration Two Fields Container End-->

                        <!--Car Registration Two Fields Container Start-->
                     

                        <div class="text-center car-registration-container">
                            <h4>Lütfen Araç Kaydını Yükleyin<br/> Sertifika</h4>
                        </div>

                        <!--Car Registration ID Upload Container Start-->
                        <div class="scan-your-card-prompt">
                            <div class="upload-picture-buttons-prepend text-center">
                                <span class="float-left position-relative upload-btn">
                                    <img src="<?= driver_public_url('icons/upload.svg') ?>" alt="Upload Icon">
                                    <input class="scan-prompt" type="file" accept="image/*">
                                </span>
                                <span>
ÖN</span>
                                <span class="clearfix"></span>
                            </div>
                            <div class="position-relative">
                                <div class="upload-picture-container mb-0">
                                    <div class="upload-camera-container text-center">
                                    <span class="camera">
                                        <img src="<?= driver_public_url('icons/photocamera.svg') ?>" alt="Camera Icon">
                                    </span>
                                    </div>
                                </div>
                                <input class="scan-prompt" type="file" accept="image/*">
                            </div>
                        </div>
                        <!--Car Registration ID Upload Container End-->

                        <!--Car Registration ID Upload Container Start-->
                        <div class="scan-your-card-prompt">
                            <div class="upload-picture-buttons-prepend text-center">
                                <span class="float-left position-relative upload-btn">
                                    <img src="<?= driver_public_url('icons/upload.svg') ?>" alt="Upload Icon">
                                    <input class="scan-prompt" type="file" accept="image/*">
                                </span>
                                <span>
GERİ</span>
                                <span class="clearfix"></span>
                            </div>
                            <div class="position-relative">
                                <div class="upload-picture-container mb-0">
                                    <div class="upload-camera-container text-center">
                                    <span class="camera">
                                        <img src="<?= driver_public_url('icons/photocamera.svg') ?>" alt="Camera Icon">
                                    </span>
                                    </div>
                                </div>
                                <input class="scan-prompt" type="file" accept="image/*">
                            </div>
                        </div>
                        <!--Car Registration ID Upload Container End-->

                    </div>
                </div>
                <!--Car Registration Info Container End-->

                <div class="register">
                    <button name="save" value="1" class="btn btn-dark " type="button">Uygula</button>
                </div>
					
            </div>
				</form>
        </div>
    </div>

<?php require 'statics/mainMenu.php'  ?>
<?php require 'statics/footer.php'  ?>