<?php require 'statics/header.php' ?>
<title>Kişisel Kimlik Kartı</title>
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
            <a href="<?= driver_url('driver_verification') ?>">
                <span class="float-left">
                    <img src="<?= driver_public_url('icons/back.svg') ?>" alt="Back Icon">
                </span>
            </a>
            <span>
Kişisel Kimlik Kartı</span>
            <a href="#">
                <span class="float-right menu-open closed">
                    <img src="<?= driver_public_url('icons/menu.svg') ?>" alt="Menu Hamburger Icon">
                </span>
            </a>
        </div>
        <!--Page Title & Icons End-->

        <div class="rest-container">
            <div class="address-title">
Kişisel Kimlik Kartı</div>

            <!--Personal ID Fields Container Start-->
            <div class="all-container all-container-with-classes">
                <form action="<?= driver_url('personal_verification') ?>" method="POST" class="width-100">

                    <!--Input Field Container Start-->
                    <div class="form-group form-control-margin">
                        <label class="label-title">Kişisel Kimlik Numarası</label>
                        <div class="input-group">
                            <input value="<?= $tc['tc_no'] ? $tc['tc_no'] : '' ?>" class="form-control form-control-with-padding" type="text" name="tcno" autocomplete="off"  placeholder="Kişisel Kimlik Numarası">
                            <div class="input-group-append">
                                <span class="fas fa-id-card icon-inherited-color"></span>
                            </div>
                        </div>
                    </div>
                    <!--Input Field Container End-->

                    <!--Upload Front Start-->
                    <div class="display-flex justify-content-between">
                        <span class="position-relative upload-btn">
                            <img src="<?= driver_public_url('icons/upload.svg') ?>" alt="Upload Icon">
                            <input class="scan-prompt" type="file" accept="image/*">
                        </span>
                        <span class="text-uppercase">ÖN</span>
                    </div>
                    <div class="scan-your-card-prompt margin-top-5">
                        <div class="position-relative">
                            <div class="upload-picture-container">
                                <div class="upload-camera-container text-center">
                                    <span class="camera">
                                        <img src="<?= driver_public_url('icons/photocamera.svg') ?>" alt="Camera Icon">
                                    </span>
                                </div>
                            </div>
                            <input class="scan-prompt" type="file" accept="image/*">
                        </div>
                    </div>
                    <!--Upload Front End-->

                    <!--Upload Back Start-->
                    <div class="display-flex justify-content-between">
                        <span class="position-relative upload-btn">
                            <img src="<?= driver_public_url('icons/upload.svg') ?>" alt="Upload Icon">
                            <input class="scan-prompt" type="file" accept="image/*">
                        </span>
                        <span class="text-uppercase">GERİ</span>
                    </div>
                    <div class="scan-your-card-prompt margin-top-5">
                        <div class="position-relative">
                            <div class="upload-picture-container">
                                <div class="upload-camera-container text-center">
                                    <span class="camera">
                                        <img src="<?= driver_public_url('icons/photocamera.svg') ?>" alt="Camera Icon">
                                    </span>
                                </div>
                            </div>
                            <input class="scan-prompt" type="file" accept="image/*">
                        </div>
                    </div>
                    <!--Upload Back End-->
            
                <div class="form-submit-button text-center">
                    <button name="save" value="1" class="btn btn-dark text-uppercase ">Kaydet</button>
                </div>
					    </form>
            </div>
            <!--Personal ID Fields Container End-->
        </div>
    </div>
<?php require 'statics/mainMenu.php' ?>
<?php require 'statics/footer.php' ?>