<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view('admin/_partials/head.php') ?>
	<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
</head>

<body>
	<main class="main">
		<?php $this->load->view('admin/_partials/side_nav2.php') ?>

		<div class="content">
			<h1>Tulis Materi Baru</h1>

			<form action="" method="POST">
				<label for="title">Judul Materi*</label>
				<input type="text" name="title" placeholder="Judul materi" required title="Wajib tulis judul materi"/>

				<label style="padding-top: 20px;" for="content">Konten</label>
				<input type="hidden" name="content" value="<?= set_value('content') ?>">
 				<div id="editor" style="min-height: 160px;"><?= set_value('content') ?></div>
 				<br>
				<div>
					<button type="submit" name="draft" class="button button-success" value="true">Simpan ke Draft</button>
					<button type="submit" name="draft" class="button button-primary" value="false">Publikasikan</button>
				</div>
				<br>
			</form>

			<?php $this->load->view('admin/_partials/footer.php') ?>
			<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
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