
<?php
	session_start();

	include("connection.php");

	$query ="SELECT diary FROM users WHERE id='".$_SESSION['id']."' LIMIT 1";

	$result = mysqli_query($link, $query);

	$row = mysqli_fetch_array($result);

	$diary = $row['diary'];

?>

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
		<div class="navbar-header pull-left">
			<a href="#" class="navbar-brand">Secret Diary</a>	
		</div>
		<div class="pull-right">
			<ul class="nav navbar-nav">
				<li><a href="index.php?logout=1">Log Out</a></li>
			</ul>
		</div>
	</div>
</div>

<div class="container contentContainer" id="topContainer">
	<div class="row">
		<div class="col-md-6 col-md-offset-3" id="topRow">
			<textarea class="form-control"><?php echo $diary ?></textarea>
		</div>	
	</div>	
</div>	



<!-- JavaScript -->
	<script src="http://code.jquery.com/jquery-latest.min.js"></script>
	<script src="js/bootstrap.min.js"></script>

	<script>
		$(".contentContainer").css("min-height", $(window).height());
		$("textarea").css("height", $(window).height()-170);
		$("textarea").keyup(function(){

			$.post("updatediary.php", {diary:$("textarea").val()});

		})
	</script>
</body>

</html>
