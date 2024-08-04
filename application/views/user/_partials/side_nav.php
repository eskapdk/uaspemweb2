<aside class="side-nav">
	<div class="brand">
		<h2>Halaman User</h2>
		<div style="display: flex; gap: 0.8rem; margin:1rem 0;">
			<?php
			$avatar = $current_user->avatar ?
				base_url('upload/avatar/' . $current_user->avatar)
				: get_gravatar($current_user->email)
			?>
			<img src="<?= $avatar ?>" alt="<?= htmlentities($current_user->name, TRUE) ?>" height="32" width="32">
			<div>
				<b><?= htmlentities($current_user->name) ?></b>
				<small><?= htmlentities($current_user->email) ?></small>
			</div>
		</div>
	</div>
	<nav>
		<a href="<?= site_url('user/dashboard') ?>">Beranda</a>
		<a href="<?= site_url('user/post') ?>">Pengajuan Materi</a>
		<a href="<?= site_url('auth/logout') ?>">Logout</a>
	</nav>
</aside>

<div id="body" class="active">
            <!-- BAGIAN NAV ATAS -->
            <nav class="navbar navbar-expand-lg navbar-white bg-white">
                <button type="button" id="sidebarCollapse" class="btn btn-light">
                    <i class="fas fa-bars"></i><span></span>
                </button>

            </nav>
        </div>