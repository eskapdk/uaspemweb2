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
			
			<h3>Komentar</h3>
			<div class="scroll">
			<div class="comment">
			<?php
       		$id =  $article->id;
       		$kosong = 'Komentar Kosong';
        	$query = $this->db->query("SELECT * FROM komentar WHERE article_id = '$id' ORDER BY create_at DESC ");
        	if ($query->result())
        	{
        	foreach ($query->result() as $komentar):
    		?>
    		<h1>
    		<h5> <?php echo $komentar->user?></h5>
    		<h8> <?php echo $komentar->isi?> </h8>
    		<p> <?php echo "create at: ".$komentar->create_at?></p>
    		</h1>
           	<?php endforeach;
			} else { 
			echo $kosong;
			} ?>
			</div>
			</div>
			<br>
			<br>
			<h3>Tulis Komentar Anda</h3>
			<form action="<?= base_url('komentar/new') ?>" method="POST">
			<b><?= htmlentities($current_user->name) ?></b>

			<input type="hidden" name="user" value="<?= $current_user->name ?>"/>
			<input type="hidden" name="id_konten" value="<?= $article->id ?>"/>
			<input type="hidden" name="slug" value="<?= $article->slug ?>"/>
			<input type="text" name="komentar" placeholder="Tulis Komentar" title="tulis komentar"/>
			<div>
				<button type="submit" class="button button-primary">Kirim Komentar</button>
			</div>
			</form>

			<br>
			<div>
			<a href="<?= site_url('admin/dashboard') ?>" class="button button-danger" role="button">Kembali</a>
			</div>
			</article>
			
			<?php $this->load->view('admin/_partials/footer.php') ?>
		</div>
	</main>
</body>

</html>