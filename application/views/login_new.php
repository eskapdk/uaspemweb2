<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>
    <link href="<?= base_url('assets/vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/css/auth.css" rel="stylesheet') ?>">
</head>

<body>
    <div class="wrapper">
        <div class="auth-content">
            <div class="card">
                <div class="card-body text-center">
                    
                    <h6 class="mb-4 text-muted">Silahkan Login Terlebih Dahulu</h6>
                    <?php if($this->session->flashdata('message_login_error')): ?>
                      <div class="invalid-feedback">
                        <?= $this->session->flashdata('message_login_error') ?>
                      </div>
                      <?php endif ?>

                    <form action="" method="post">
                        <div class="mb-3 text-start">
                            <label for="username" class="form-label">Email/Username</label>
                      <!--      <input type="email" class="form-control" placeholder="Masukkan Email/Username" required> -->

                            <input type="text" name="username" class="form-control <?= form_error('username') ? 'invalid' : '' ?>" placeholder="Your username or email" value="<?= set_value('username') ?>" required />
                            <div class="invalid-feedback">
                              <?= form_error('username') ?>
                            </div>
                        </div>
                        <div class="mb-3 text-start">
                            <label for="password" class="form-label">Password</label>
                      <!--      <input type="password" class="form-control" placeholder="Password" required> -->
                            <input type="password" name="password" class="form-control <?= form_error('password') ? 'invalid' : '' ?>" placeholder="Enter your password" value="<?= set_value('password') ?>" required />
                            <div class="invalid-feedback">
                            <?= form_error('password') ?>
                            </div>
                        </div>
                          <button class="btn btn-primary shadow-2 mb-4">Login</button>
                    </form>
                    <p class="mb-0 text-muted">Belum Punya Akun? <a href="<?= base_url('register') ?>">Daftar</a></p>
                </div>
            </div>
        </div>
    </div>
    <script src="<?= base_url('assets/vendor/jquery/jquery.min.js') ?>"></script>
    <script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.min.js') ?>"></script>


</body>

</html>