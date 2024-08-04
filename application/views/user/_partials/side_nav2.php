<div class="wrapper">
        <nav id="sidebar" class>
     <div class="brand">
        <h2 style="color:black;padding: 1rem;">Halaman User</h2>
        <div style="display: flex;margin: 10px 5px 15px 40px;">
            <?php
            $avatar = $current_user->avatar ?
                base_url('upload/avatar/' . $current_user->avatar)
                : get_gravatar($current_user->email)
            ?>
            <img style="margin:6px -5px" src="<?= $avatar ?>" alt="<?= htmlentities($current_user->name, TRUE) ?>" height="32" width="32">
            <div>
                <b style="color:black;padding: 1rem;"><?= htmlentities($current_user->name) ?></b>
                <br>
                <small style="color:black;padding: 1rem;"><?= htmlentities($current_user->email) ?></small>
            </div>
        </div>
    </div>
            <ul class="list-unstyled components text-secondary">
                <li>
                    <a href="<?= site_url('user/dashboard') ?>"><i class="fas fa-home"></i> Beranda</a>
                </li>
                <li>
                    <a href="<?= site_url('user/post') ?>"><i class="fas fa-file-alt"></i> Pengajuan Materi</a>
                </li>
                <li>
                    <a href="<?= site_url('auth/logout') ?>"><i class="fas fa-door-open"></i> Logout</a>
                </li>  
        </ul>
        </nav>
        <div id="body" class="active">
            <!-- navbar navigation component -->
            <nav class="navbar navbar-expand-lg navbar-white bg-white">
                <button type="button" id="sidebarCollapse" class="btn btn-light">
                    <i class="fas fa-bars"></i><span></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                </div>
            </nav>