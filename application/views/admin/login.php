<!doctype html>
<html lang="en" class="light-style layout-wide customizer-hide" dir="ltr" data-theme="theme-default" data-assets-path="<?= base_url() ?>assets/admin/" data-template="vertical-menu-template-free" data-style="light">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <title>Admin Login | Secure Access</title>
    <meta name="description" content="" />
    <link rel="icon" type="image/x-icon" href="<?= base_url() ?>assets/admin/img/favicon/favicon.ico" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/admin/vendor/fonts/boxicons.css" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/admin/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/admin/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/admin/css/demo.css" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/admin/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/admin/vendor/css/pages/page-auth.css" />
    <script src="<?= base_url() ?>assets/admin/vendor/js/helpers.js"></script>
    <script src="<?= base_url() ?>assets/admin/js/config.js"></script>
</head>

<body>
    <div class="container-xxl">
        <div class="authentication-wrapper authentication-basic container-p-y">
            <div class="authentication-inner">
                <div class="card px-sm-6 px-0">
                    <div class="card-body">
                        <h4 class="mb-1">Admin Panel Login 👋</h4>
                        <p class="mb-6">Sign in to access the admin dashboard and manage the system efficiently.</p>

                        <form id="loginForm" class="needs-validation" action="<?= base_url() ?>admin/login_now" method="post" novalidate>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email or Username</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email or username" required />
                                <div class="invalid-feedback">Please enter a valid email or username.</div>
                            </div>
                            <div class="mb-3 form-password-toggle">
                                <label class="form-label" for="password">Password</label>
                                <div class="input-group input-group-merge">
                                    <input type="password" id="password" class="form-control" name="password" placeholder="Password" required />
                                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                                    <div class="invalid-feedback">Please enter your password.</div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <button class="btn btn-primary d-grid w-100" type="submit">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="buy-now">
        <a href="#" target="_blank" class="btn btn-danger btn-buy-now">Support</a>
    </div>

    <script src="<?= base_url() ?>assets/admin/vendor/libs/jquery/jquery.js"></script>
    <script src="<?= base_url() ?>assets/admin/vendor/libs/popper/popper.js"></script>
    <script src="<?= base_url() ?>assets/admin/vendor/js/bootstrap.js"></script>
    <script src="<?= base_url() ?>assets/admin/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="<?= base_url() ?>assets/admin/vendor/js/menu.js"></script>
    <script src="<?= base_url() ?>assets/admin/js/main.js"></script>
    <script async defer src="https://buttons.github.io/buttons.js"></script>

    <script>
        (function () {
            'use strict'
            var forms = document.querySelectorAll('.needs-validation')
            Array.prototype.slice.call(forms).forEach(function (form) {
                form.addEventListener('submit', function (event) {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }
                    form.classList.add('was-validated')
                }, false)
            })
        })()
    </script>
</body>

</html>