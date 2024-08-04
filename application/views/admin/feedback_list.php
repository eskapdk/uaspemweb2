<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view('admin/_partials/head.php') ?>
</head>

<body>
	<main class="main">
		<?php $this->load->view('admin/_partials/side_nav.php') ?>

		<div class="content">
			<h1>Feedback</h1>

			<div class="card">
				<div class="card-header">
					<div>
						<b>Dian</b> <small class="text-gray">dian@petanikode.com</small>
					</div>
					<div><small class="text-gray">19 Juli 2021</small></div>
				</div>
				<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nemo atque
					delectus nihil voluptatibus odit temporibus tempora amet quasi omnis.
				</p>
				<a href="#" class="button button-danger button-small" role="button">Delete</a>
			</div>
			<div class="card">
			<div class="card-header">
					<div>
						<b>Dian</b> <small class="text-gray">dian@petanikode.com</small>
					</div>
					<div><small class="text-gray">19 Juli 2021</small></div>
				</div>
				<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nemo atque
					delectus nihil voluptatibus odit temporibus tempora amet quasi omnis.
				</p>
				<a href="#" class="button button-danger button-small" role="button">Delete</a>
			</div>

			<?php $this->load->view('admin/_partials/footer.php') ?>
		</div>
	</main>
</body>

</html>