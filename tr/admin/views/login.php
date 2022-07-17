<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Login</title>

    <!-- Custom fonts for this template-->
    <link href="https://durak54.com.tr/tr/public/admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="https://durak54.com.tr/tr/public/admin/css/sb-admin-2.min.css" rel="stylesheet">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" href="<?= public_url('css/sweet.css') ?>">
</head>

<body class="bg-gradient-primary">
<?php if (isset($error)): ?>
    <?php header("Refresh: 2;url=" . site_url("register")); ?>
    <script>swal("BAŞARISIZ" , "<?= $error ?>" , "error")</script>
<?php elseif (isset($success)): ?>
    <script>swal("BAŞARILI", "<?= success() ?>", "success")</script>
<?php elseif (isset($warning)): ?>
    <script>swal("UYARI", "<?= $warning ?>", "warning")</script>
<?php endif; ?>
    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Durak54 Admin</h1>
                                    </div>
                                    <form action="<?= admin_url('sign_up') ?>" method="POST" class="user">
                                        <div class="form-group">
                                            <input type="email" name="email" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Email Adresinizi Giriniz">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="password" class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="Şifrenizi Giriniz">
                                        </div>
                                      
                                        <button name="login" value="1" class="btn btn-primary btn-user btn-block">
                                            Login
                                        </button>
                                        <hr>
                                    </form>
                                    <hr>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="https://durak54.com.tr/tr/public/admin/vendor/jquery/jquery.min.js"></script>
    <script src="https://durak54.com.tr/tr/public/admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="https://durak54.com.tr/tr/public/admin/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="https://durak54.com.tr/tr/public/admin/js/sb-admin-2.min.js"></script>

</body>

</html>