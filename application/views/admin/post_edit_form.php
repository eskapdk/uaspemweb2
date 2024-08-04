<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view('admin/_partials/head.php') ?>
	<link href="https://cdn.jsdelivr.net/npm/quill@2.0.2/dist/quill.snow.css" rel="stylesheet">
</head>

<body>
	<main class="main">
		<?php $this->load->view('admin/_partials/side_nav2.php') ?>

		<div class="content">
			<h1>Edit Materi</h1>

			<form action="" method="POST">
				<label for="title">Title*</label>
				<input type="text" name="title" 
					placeholder="Judul Materi" 
					required 
					title="Wajib tulis judul materi"
					value="<?= $article->title ?>"/>
				
				<label for="content">Konten</label>
				<?php $content = form_error('content') ? set_value('content') : $article->content ?>
				<input type="hidden" name="content" value="<?= html_escape($content) ?>">
 				<div id="editor" style="min-height: 160px;"><?= $content ?></div>

				<div>
					<button type="submit" name="draft" class="button" value="true">Simpan ke Draft</button>
					<button type="submit" name="draft" class="button button-primary" value="false">Publikasikan </button>
				</div>
			</form>

			<?php $this->load->view('admin/_partials/footer.php') ?>
			<script src="https://cdn.jsdelivr.net/npm/quill@2.0.2/dist/quill.js"></script>
			<script>
  var quill = new Quill('#editor', {
    theme: 'snow',
    modules: {
      toolbar: [
        [{ header: [1, 2, 3, 4, 5, 6, false] }],
        [{ font: [] }],
        ["bold", "italic"],
        ["link", "blockquote", "code-block", "image","video"],
        [{ list: "ordered" }, { list: "bullet" }],
        [{ script: "sub" }, { script: "super" }],
        [{ color: [] }, { background: [] }],
      ]
    },
  });
  quill.on('text-change', function (delta, oldDelta, source) {
    document.querySelector("input[name='content']").value = quill.root.innerHTML;
  });
</script>
		</div>
	</main>
</body>

</html>