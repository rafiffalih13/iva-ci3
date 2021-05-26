<html>

<head>
	<title><?= $title; ?></title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>

	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

	<!-- CSS -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/login.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jadwal.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/agenda.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">


	<!-- Editor buat ngetik -->
	<script src="https://cdn.ckeditor.com/ckeditor5/18.0.0/classic/ckeditor.js"></script>

	<!-- Buat icon -->
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<!-- Copas -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script>
		window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')
	</script>
	<script src="https://getbootstrap.com/docs/4.0/assets/js/vendor/popper.min.js"></script>
	<script src="https://getbootstrap.com/docs/4.0/dist/js/bootstrap.min.js"></script>
	<!-- Just to make our placeholder images work. Don't actually copy the next line! -->
	<script src="https://getbootstrap.com/docs/4.0/assets/js/vendor/holder.min.js"></script>


</head>


<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
		<a class="navbar-brand" href="<?php echo base_url(); ?>">Logo</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarColor01">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item <?php if ($title == "Home") {
										echo "active";
									}; ?>">
					<a class="nav-link" href="<?php echo base_url(); ?>">Home <span class="sr-only">(current)</span> </a>
				</li>
				<li class="nav-item <?php if ($title == "Jadwal") {
										echo "active";
									}; ?>">
					<a class="nav-link" href="<?php echo base_url(); ?>jadwal">Jadwal</a>
				</li>
				<?php if ($this->session->userdata('logged_in')) : ?>
					<li class="nav-item <?php if ($title == "Input Jadwal") {
											echo "active";
										}; ?>">
						<a class="nav-link" href="<?php echo base_url(); ?>inputjadwal">InputJadwal</a>
					<?php endif; ?>

			</ul>

			<ul class="navbar-nav ml-md-auto">

				<?php if (!$this->session->userdata('logged_in')) : ?>
					<li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>C_dokter/loginview">Login</a>
					</li>
				<?php else : ?>
					<li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>C_dokter/logout">Logout</a>
					</li>
				<?php endif; ?>

			</ul>
			<!-- <form class="form-inline my-2 my-lg-0">
		      <input class="form-control mr-sm-2" type="text" placeholder="Search">
		      <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
		    </form> -->
		</div>
	</nav>

	<div class="container">
		<!-- Flash messages  -->