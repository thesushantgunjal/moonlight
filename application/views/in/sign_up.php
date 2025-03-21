<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Join Us Today! Create Your Account</title>
    <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/login/css/login.css">
</head>

<body>
    <main class="d-flex align-items-center min-vh-100 py-3 py-md-0">
        <div class="container">
            <div class="card login-card">
                <div class="row no-gutters">
                    <div class="col-md-5">
                        <img src="<?= base_url() ?>assets/login/images/login.jpg" alt="login" class="login-card-img">
                    </div>

                    <!-- <div class="col-md-7">
                        <div class="card-body">
                            <div class="brand-wrapper">
                                <img src="<?= base_url() ?>assets/login/images/moonlight.png" alt="logo" class="logo">
                            </div>
                            <p class="login-card-description">Join Us Today! Create Your Account</p>
                            <form action="<?= base_url('in/login_now') ?>" method="post">
                                <div class="form-group">
                                    <label for="name" class="sr-only">Name</label>
                                    <input type="text" name="name" id="name" class="form-control shadow-none" placeholder="Enter Your Name">
                                </div>
                                <div class="form-group">
                                    <label for="phone" class="sr-only">Phone No</label>
                                    <input type="number" name="phone" id="phone" class="form-control shadow-none" placeholder="Enter Phone">
                                </div>
                                <div class="form-group">
                                    <label for="email" class="sr-only">Email</label>
                                    <input type="email" name="email" id="email" class="form-control shadow-none" placeholder="Enter Your Email">
                                </div>
                                <div class="form-group mb-4">
                                    <label for="password" class="sr-only">Password</label>
                                    <input type="password" name="password" id="password" class="form-control shadow-none" placeholder="Password">
                                </div>
                                <input id="login" class="btn btn-block login-btn mb-4" type="submit" value="Register Now">
                            </form>
                            <p class="login-card-footer-text">Already have an account? <a href="<?= base_url() ?>in/sign_in" class="text-reset">Login here</a></p>
                            <nav class="login-card-footer-nav">
                                <a href="#!">Terms of use.</a>
                                <a href="#!">Privacy policy</a>
                            </nav>
                        </div>
                    </div> -->
                    <div class="col-md-7">
                        <div class="card-body">
                            <div class="brand-wrapper">
                                <img src="<?= base_url() ?>assets/login/images/moonlight.png" alt="logo" class="logo">
                            </div>
                            <p class="login-card-description">Join Us Today! Create Your Account</p>

                            <?php if ($this->session->flashdata('success')): ?>
                                <p style="color: green;"><?= $this->session->flashdata('success') ?></p>
                            <?php endif; ?>

                            <?php if ($this->session->flashdata('error')): ?>
                                <p style="color: red;"><?= $this->session->flashdata('error') ?></p>
                            <?php endif; ?>

                            <?= validation_errors('<p style="color:red;">', '</p>'); ?>

                            <form action="<?= base_url('in/login_now') ?>" method="post">
                                <div class="form-group">
                                    <label for="name" class="sr-only">Name</label>
                                    <input type="text" name="name" id="name" class="form-control shadow-none" placeholder="Enter Your Name" value="<?= set_value('name'); ?>">
                                </div>
                                <div class="form-group">
                                    <label for="phone" class="sr-only">Phone No</label>
                                    <input type="number" name="phone" id="phone" class="form-control shadow-none" placeholder="Enter Phone" value="<?= set_value('phone'); ?>">
                                </div>
                                <div class="form-group">
                                    <label for="email" class="sr-only">Email</label>
                                    <input type="email" name="email" id="email" class="form-control shadow-none" placeholder="Enter Your Email" value="<?= set_value('email'); ?>">
                                </div>
                                <div class="form-group mb-4">
                                    <label for="password" class="sr-only">Password</label>
                                    <input type="password" name="password" id="password" class="form-control shadow-none" placeholder="Password">
                                </div>
                                <input id="login" class="btn btn-block login-btn mb-4" type="submit" value="Register Now">
                            </form>
                            <p class="login-card-footer-text">Already have an account? <a href="<?= base_url() ?>in/sign_in" class="text-reset">Login here</a></p>
                            <nav class="login-card-footer-nav">
                                <a href="#!">Terms of use.</a>
                                <a href="#!">Privacy policy</a>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>

</html>