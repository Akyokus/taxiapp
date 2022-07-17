<!--Main Menu Start-->
<?php if (isset($error)): ?>
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
                    <img src="<?= public_url('icons/close.svg') ?>" alt="Close Icon">
                </span>
        </div>
        <?php $user = users::find_user(session('email')) ?>
        <div class="profile-picture text-center">
            <img src="<?= public_url('images/profile-1.png') ?>" alt="Profile Picture">
        </div>
        <div class="profile-info">
            <div class="profile-name text-center"><?= $user['uname'] ?></div>
            <div class="profile-email text-center"><?= $user['email'] ?></div>
        </div>
    </div>
    <div class="menu-items">
        <div class="all-menu-items">
            <a class="menu-item" href="<?= site_url('index') ?>">
                <div>
                        <span class="menu-item-icon menu-dark">
                            <img src="<?= public_url('/icons/home.svg') ?>" alt="Home Icon">
                        </span>
                    <span class="menu-item-icon menu-light">
                            <img src="<?= public_url('icons/home-light.svg') ?>" alt="Home Lighter Icon">
                        </span>
                    <span class="menu-item-title">Anasayfa</span>
                    <span class="menu-item-click fas fa-arrow-right"></span>
                </div>
            </a>
            <a class="menu-item" href="<?= site_url('profile') ?>">
                    <span class="menu-item-icon menu-dark profile">
                        <img src="<?= public_url('icons/avatar-dark.svg') ?>" alt="Avatar Darker Icon">
                    </span>
                <span class="menu-item-icon menu-light profile">
                        <img src="<?= public_url('icons/avatar.svg') ?>" alt="Avatar Darker Icon">
                    </span>
                <span class="menu-item-title profile">Profil</span>
                <span class="menu-item-click fas fa-arrow-right"></span>
            </a>

            <a class="menu-item" href="<?= site_url('history') ?>">
                    <span class="menu-item-icon menu-light">
                        <img src="<?= public_url('icons/history-light.svg') ?>" alt="History Icon">
                    </span>
                <span class="menu-item-icon menu-dark">
                        <img src="<?= public_url('icons/history.svg') ?>" alt="History Icon">
                    </span>
                <span class="menu-item-title">Geçmiş Çağrılarım</span>
                <span class="menu-item-click fas fa-arrow-right"></span>
            </a>
            <a class="menu-item" href="<?= site_url('settings') ?>">
                    <span class="menu-item-icon menu-dark setting">
                        <img src="<?= public_url('icons/settings.svg') ?>" alt="My Settings Icon">
                    </span>
                <span class="menu-item-icon menu-light setting">
                        <img src="<?= public_url('icons/settings-light.svg') ?>" alt="My Settings Icon">
                    </span>
                <span class="menu-item-title">Ayarlar</span>
                <span class="menu-item-click fas fa-arrow-right"></span>
            </a>
            <a class="menu-item hidden" href="https://api.whatsapp.com/send/?phone=08504805445&text=Merhaba+Durak54&app_absent=0">
                    <span class="menu-item-icon menu-dark support">
                        <img src="<?= public_url('icons/support.svg') ?>" alt="Support Icon">
                    </span>
                <span class="menu-item-icon menu-light support">
                        <img src="<?= public_url('icons/support-light.svg') ?>" alt="Support Lighter Icon">
                    </span>
                <span class="menu-item-title">
Çevrimiçi destek</span>
                <span class="menu-item-click fas fa-arrow-right"></span>
            </a>
            <a href="<?= site_url('logout') ?>" class="menu-item margin-top-auto">
                    <span class="menu-item-icon menu-dark logout">
                        <img src="<?= public_url('icons/logout.svg') ?>" alt="Logout Icon">
                    </span>
                <span class="menu-item-icon menu-light logout">
                        <img src="<?= public_url('icons/logout-light.svg') ?>" alt="Logout Icon">
                    </span>
                <span class="menu-item-title logout">Çıkış</span>
                <span class="menu-item-click fas fa-arrow-right"></span>
            </a>
        </div>
    </div>
</div>
<!--Main Menu End-->
