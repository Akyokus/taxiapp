<!--Main Menu Start-->
<?php if (isset($error)): ?>
    <?php header("Refresh: 2;url=" . site_url("register")); ?>
    <script>swal("BAŞARISIZ" , "<?= $error ?>" , "error")</script>
<?php elseif (isset($success)): ?>
    <script>swal("BAŞARILI", "<?= success() ?>", "success")</script>
<?php elseif (isset($warning)): ?>
    <script>swal("UYARI", "<?= $warning ?>", "warning")</script>
<?php endif; ?>
<div class="main-menu hidden-soft">
    <div class="mini-profile-info">
        <div class="menu-close">
                <span class="float-right">
                    <img src="<?= driver_public_url('icons/close.svg') ?>" alt="Close Icon">
                </span>
        </div>
        <?php $driver = drivers::find_driver(session('driver_email')) ?>
        <div class="profile-picture text-center">
            <img src="<?= driver_public_url('images/profile-3.png') ?>" alt="Profile Picture">
        </div>
        <div class="profile-info">
            <div class="profile-name text-center"><?= $driver['uname'] ?></div>
            <div class="profile-email text-center"><?= $driver['email'] ?></div>
        </div>
    </div>
    <div class="menu-items">
        <div class="all-menu-items">
            <a class="menu-item" href="<?= driver_url('index')  ?>">
                <div>
                         <span class="menu-item-icon menu-dark">
                            <img src="<?= driver_public_url('icons/home.svg') ?>" alt="Home Icon">
                        </span>
                    <span class="menu-item-icon menu-light">
                            <img src="<?= driver_public_url('icons/home-light.svg') ?>" alt="Home Lighter Icon">
                        </span>
                    <span class="menu-item-title">Anasayfa</span>
                    <span class="menu-item-click fas fa-arrow-right"></span>
                </div>
            </a>
            <a class="menu-item" href="<?= driver_url('profile') ?>">
                    <span class="menu-item-icon menu-dark profile">
                        <img src="<?= driver_public_url('icons/avatar-dark.svg') ?>" alt="Avatar Darker Icon">
                    </span>
                <span class="menu-item-icon menu-light profile">
                        <img src="<?= driver_public_url('icons/avatar.svg') ?>" alt="Avatar Darker Icon">
                    </span>
                <span class="menu-item-title profile">Profil</span>
                <span class="menu-item-click fas fa-arrow-right"></span>
            </a>
            <a class="menu-item" href="<?= driver_url('driver_verification') ?>">
                    <span class="menu-item-icon menu-dark">
                            <img src="<?= driver_public_url('icons/driver-registration-dark.svg') ?>" alt="Driver Registration Icon">
                    </span>
                <span class="menu-item-icon menu-light">
                            <img src="<?= driver_public_url('icons/driver-registration.svg') ?>" alt="Driver Registration Icon">
                    </span>
                <span class="menu-item-title">Sürücü Kaydı</span>
                <span class="menu-item-click fas fa-check green-status"></span>
            </a>
            <a class="menu-item position-relative hidden" href="notifications.html">
                     <span class="menu-item-icon menu-dark">
                            <img src="<?= driver_public_url('icons/notification.svg') ?>" alt="Notification Icon">
                    </span>
                <span class="menu-item-icon menu-light">
                            <img src="<?= driver_public_url('icons/notification-light.svg') ?>" alt="Notification Icon">
                    </span>
                <span class="menu-item-title">Bildirimler</span>
                <span class="notification-num">3</span>
                <span class="menu-item-click fas fa-arrow-right"></span>
            </a>
            <a class="menu-item" href="<?= driver_url('add_car') ?>">
                <span class="menu-item-icon fas fa-car"></span>
                <span class="menu-item-title">
Araç Kaydı</span>
                <span class="menu-item-click fas fa-check green-status"></span>
            </a>
            <a class="menu-item" href="https://api.whatsapp.com/send/?phone=08504805445&text=Merhaba+Durak54&app_absent=0">
                    <span class="menu-item-icon menu-dark support">
                        <img src="<?= driver_public_url('icons/support.svg') ?>" alt="Support Icon">
                    </span>
                <span class="menu-item-icon menu-light support">
                        <img src="<?= driver_public_url('icons/support-light.svg') ?>" alt="Support Lighter Icon">
                    </span>
                <span class="menu-item-title">Destek hizmeti</span>
                <span class="menu-item-click fas fa-arrow-right"></span>
            </a>
            <a href="<?= driver_url('logout') ?>" class="menu-item margin-top-auto">
                    <span class="menu-item-icon menu-dark logout">
                        <img src="<?= driver_public_url('icons/logout.svg') ?>" alt="Logout Icon">
                    </span>
                <span class="menu-item-icon menu-light logout">
                        <img src="<?= driver_public_url('icons/logout-light.svg') ?>" alt="Logout Icon">
                    </span>
                <span class="menu-item-title logout">Çıkış</span>
                <span class="menu-item-click fas fa-arrow-right"></span>
            </a>
        </div>
    </div>
</div>
<!--Main Menu End-->
