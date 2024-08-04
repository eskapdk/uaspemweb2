<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view('user/_partials/head2.php') ?>
</head>

<body>

	<main class="main">
		<?php $this->load->view('user/_partials/side_nav2.php') ?>

      <div class="content">
		<h1>Daftar Materi</h1>

			<table class="table">
				<thead>
					<tr>
						<th>Judul Materi</th>
						<th style="width: 15%;" class="text-center">Status</th>
						<th style="width: 25%;" class="text-center">Action</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($articles as $article): ?>
					<tr>
						<td>
							<div><?= $article->title ?></div>
							<div class="text-gray"><small><?= $article->created_at ?><small></div>
						</td>
						<?php if($article->draft === 'true'): ?>
							<td class="text-center text-gray">Draft</td>
						<?php else: ?>
							<td style="color: #4caf50;" class="text-center text-green">Published</td>
						<?php endif ?>
						<td>
							<div class="action">
								<a href="<?= site_url('user/dashboard/show/'.$article->slug) ?>" class="button button-small" role="button">Preview</a>
							</div>
						</td>
					</tr>
					<?php endforeach ?>
				</tbody>
			</table>
			<?php $this->load->view('user/_partials/footer.php') ?>
		</div>

	</main>



</body>

</html>