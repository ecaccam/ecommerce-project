<!DOCTYPE html>
<html>
<head>
	<title>eCommerce Capstone Project</title>
	<!-- Google Fonts -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">

	<!-- CSS Reset -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">

	<!-- Milligram CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">

	<link rel="stylesheet" type="text/css" href="../assets/css/style.css">

	<!-- You should properly set the path from the main file. -->
	<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

</head>
<body>
	<div class="container">
		<div class="row admin-login">
			<div class="column column-25">
				<h3>Admin Login Page</h3>
				<p><?= $this->session->flashdata('errors'); ?></p>
				<form class="" action="/admin/login" method="POST">
					<fieldset>
						<label for="email">Email</label>
						<input type="text" placeholder="jrosales@village88.com" id="email" name="email">
						<label for="password">Comment</label>
						<input type="password" id="password" name="password">
						<input class="button-primary" type="submit" value="Login">
					</fieldset>
				</form>			
			</div>			
		</div>
	</div>
</body>
</html>