<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view('admin/_partials/head.php') ?>
</head>

<body>
	<main class="main">
		<?php $this->load->view('admin/_partials/side_nav2.php') ?>

		<div class="content">
			<h1>Materi Kosong</h1>
			<p>Tidak ada materi yang ditampilkan, silahkan untuk membuat materi baru.</p>

			<div>
				<a href="<?= site_url('admin/post/new') ?>" class="button button-primary">+ Buat Materi Baru</a>
			</div>

			<?php $this->load->view('admin/_partials/footer.php') ?>
		</div>
	</main>
</body>

</html>