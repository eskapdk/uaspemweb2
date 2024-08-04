<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view('admin/_partials/head.php') ?>
</head>

<body>
	<main class="main">
		<?php $this->load->view('admin/_partials/side_nav2.php') ?>

		<div class="content">

			<article class="article">
			<h1 class="post-title"><?= $article->title ? html_escape($article->title) : "No Title" ?></h1>
			<div class="post-meta">
			Published at <?= $article->created_at ?>
			</div>
			<div class="post-body">
				<?= $article->content ?>
			</div>
			<br>
			<div>
			<a href="<?= site_url('admin/post') ?>" class="button button-danger" role="button">Kembali</a>
			</div>
			</article>
			
			<?php $this->load->view('admin/_partials/footer.php') ?>
		</div>
	</main>
</body>

</html>