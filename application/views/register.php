<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Daftar Akun</title>
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/auth.css" rel="stylesheet">
</head>

<body>
    <div class="wrapper">
        <div class="auth-content">
            <div class="card">
                <div class="card-body text-center">
                    <h6 class="mb-4 text-muted">Buat Akun Member</h6>
                    <form action="<?= base_url('register/insert') ?>" method="POST">
                        <div class="mb-3 text-start">
                            <label for="name" class="form-label">Name</label>
                            <input name="name" type="text" class="form-control" placeholder="Enter Name" required>
                        </div>
                        <div class="mb-3 text-start">
                            <label for="email" class="form-label">Email adress</label>
                            <input name="email" type="email" class="form-control" placeholder="Enter Email" required>
                        </div>
                        <div class="mb-3 text-start">
                            <label for="username" class="form-label">Username</label>
                            <input name="username" type="username" class="form-control" placeholder="username" required>
                        </div>
                        <div class="mb-3 text-start">
                            <label for="password" class="form-label">Password</label>
                            <input name="password" type="password" class="form-control" placeholder="Password" required>
                        </div>
                        <!-- 
                        <div class="mb-3">
                            <input type="password" class="form-control" placeholder="Confirm password" required>
                        </div> 
                        -->
                        <button class="btn btn-primary shadow-2 mb-4">Daftar</button>
                    </form>
                    <p class="mb-0 text-muted">Sudah Punya Akun? <a href="<?= base_url() ?>">Masuk</a></p>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>