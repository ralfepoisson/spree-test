<!DOCTYPE html>
<html lang="en-US">
	<head>
		<!-- Title -->
		<title><?php echo $title;?> | Spree Assignment: Ralfe Poisson</title>
		
		<!-- CSS -->
		<link rel="stylesheet" href="assets/css/main.css">
		
		<!-- Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="author" content="Ralfe Poisson">
		
		<!-- Bootstrap -->
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css">
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap-theme.min.css">
	</head>
	<body>
		<div class="container">
			
			<!-- Header -->
			<div class="header">
				<ul class="nav nav-pills pull-right">
					<li><a href="<?php echo Kohana_URL::base();?>">Home</a></li>
					<li class="active"><a href="#">Admin</a></li>
					<li><a href="<?php echo Kohana_URL::base();?>index.php/contact/">Contact</a></li>
				</ul>
				<h3 class="text-muted">Spree Assignment: Ralfe Poisson</h3>
			</div>
			
			<!-- Content -->
			<div class="jumbotron">
				<h1><?php echo $title;?></h1>
				<p class="lead">
					This is a sample application, built atop the Kohana PHP MVC Framework.
				</p>
			</div>
			
			<h3>Comments Administration</h3>
			
			<div class="row marketing">
				<div class="col-lg-12">
					<table class="table">
						<tr>
							<th>#</th>
							<th>Author</th>
							<th>Email</th>
							<th>Comment</th>
							<th>Action</th>
						</tr>
						<?php echo $listing;?>
					</table>
				</div>
			</div>
			
			<!-- Footer -->
			<div class="footer">
				<p>Copyright &copy; <a href="mailto:ralfepoisson@gmail.com">Ralfe Poisson</a> 2013</p>
			</div>

		</div> <!-- /container -->
		
		<!-- Include Javascript -->
		<script src="assets/js/main.js"></script>
		<script src="https://code.jquery.com/jquery.js"></script>
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.2/js/bootstrap.min.js"></script>
	</body>
</html>
