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
					<li class="active"><a href="./">Home</a></li>
					<li><a href="index.php/admin/">Admin</a></li>
					<li><a href="index.php/contact/">Contact</a></li>
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
			
			<h3>Comments</h3>
			
			<div class="row marketing">
				<div class="col-lg-4">
					<h4>Instructions</h4>
					<p>
						<ol>
							<li>Click on the "Add Comment" button.</li>
							<li>A modal will appear asking you for your Name, Email Address and Comment.</li>
							<li>Once you have entered in your comment, click on the "Post Comment" button.</li>
							<li>If you have not filled in your name, or an incorrect email address, you will be asked to correct the data before posting the comment.</li>
							<li>You will immediately see your comment added to the list of comments</li>
						</ol>
					</p>
				</div>
				
				<div class="col-lg-8">
					<div style="float: right;">
						<a class="btn btn-primary" onclick="comment_form(0);">Add Comment</a>
					</div>
					
					<div id="comment_list">
						<?php echo $comments;?>
					</div>
				</div>
			</div>
			
			<!-- Footer -->
			<div class="footer">
				<p>Copyright &copy; <a href="mailto:ralfepoisson@gmail.com">Ralfe Poisson</a> 2013</p>
			</div>

		</div> <!-- /container -->
		
		<!-- Modal: New Comment -->
		<div class="modal fade" id="comment_modal" tabindex="-1" role="dialog" aria-labelledby="comment_modal_label" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id="comment_modal_label">New Comment</h4>
					</div>
					<div class="modal-body">
						<form>
							<input type="hidden" id="comment_parent_id" value="0">
							
							<strong>Name</strong><br>
							<input type="text" id="comment_name">
							<br><br>
							
							<strong>Email Address</strong><br>
							<input type="email" name="email" id="comment_email">
							<br><br>
							
							<strong>Comment</strong><br>
							<textarea id="comment_comment" rows="5" cols="50"></textarea>
							<br><br>
						</form>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						<button type="button" class="btn btn-primary" onclick="post_comment();">Post Comment</button>
					</div>
				</div><!-- /.modal-content -->
			</div><!-- /.modal-dialog -->
		</div><!-- /.modal -->
		
		<!-- Include Javascript -->
		<script src="assets/js/main.js"></script>
		<script src="https://code.jquery.com/jquery.js"></script>
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.2/js/bootstrap.min.js"></script>
	</body>
</html>
