
<?php include ("login.php"); ?>

<!DOCTYPE html>

<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Secret Diary</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/custom.css" rel="stylesheet">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans|Patua+One' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<script src="js/respond.js"></script>

</head>

<body data-spy="scroll" data-target=".navbar-collapse">

<div class="navbar navbar-default navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
			<a href="#" class="navbar-brand">Secret Diary</a>
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="sr-only">Toggle Navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>	
		</div>
		<div class="collapse navbar-collapse">
			<form method="post" class="navbar-form navbar-right">
				<div class="form-group">
					<input type="text" name="loginemail" placeholder="Email" class="form-control" id="loginemail" value="<?php echo addslashes($_POST['loginemail']); ?>" />
				</div>
				<div class="form-group">
					<input type="password" name="loginpassword" placeholder="Password" class="form-control" value="<?php echo addslashes($_POST['loginpassword']); ?>" />
				</div>
				<input type="submit" name="submit" class="btn btn-success" value="Log In" />
			</form>
		</div>
	</div>
</div>

<div class="container outer" id="splash">
	<div class="inner">
		<h1>Welcome To Your Secret Diary</h1>
		<p class="lead">This is your own private diary for your most important entries.</p>

		<?php  

		if ($error) {

			echo '<div class="alert alert-danger">'.addslashes($error).'</div>';

		} 

		?>

		<p class="action-call">Interested? Sign up below!</p>
		<form method="post">

			<div class="form-group">
				<label for="email">Email</label>
				<input type="text" name="email" id="email" class="form-control" placeholder="Your Email" value="<?php echo addslashes($_POST['email']); ?>" />
			</div>
			
			<div class="form-group">
				<label for="password">Password</label>
				<input type="password" name="password" class="form-control" placeholder="Your Password" value="<?php echo addslashes($_POST['password']); ?>" />
			</div>
			
			<input type="submit" name="submit" value="Sign Up" class="btn btn-success btn-lrg" /> 	
		</form>	
	</div>
</div>		



<!-- JavaScript -->
	<script src="http://code.jquery.com/jquery-latest.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>

</html>
