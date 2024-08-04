<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view('user/_partials/head2.php') ?>
</head>

<body>
	<main class="main">
		<?php $this->load->view('user/_partials/side_nav2.php') ?>

		<div class="content">
			<h1>Materi Kosong</h1>
			<p>Tidak ada Materi, Silakhan Membuat Materi Baru.</p>

			<div>
				<a href="<?= site_url('user/post/new') ?>" class="button button-primary">+ Buat Materi Baru</a>
			</div>

			<?php $this->load->view('user/_partials/footer.php') ?>
		</div>
	</main>
</body>

</html>