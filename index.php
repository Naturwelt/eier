<!doctype html>
<html lang="de">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Glückliche Eier</title>
	
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    	
</head>

<?php
	
	include_once("php/blog.php");
	
	$seite = $_GET["seite"];
	if ($seite == "") { include_once("php/startseite.php"); }
	if ($seite == "huehner") { include_once("php/huehner.php"); }
	
?>

<body>

	<div class="container">
		
		
		<!-- --------------------------------------------------------------------------
		Bild oben 
		------------------------------------------------------------------------------>
		<div class="k-header">
			<div class="row">
				<div class="col-sm-12">
					<img src="images/top1.png" class="img-responsive k-center">
				</div>
			</div>
		</div>
		
		<!-- --------------------------------------------------------------------------
		Navigaion
		------------------------------------------------------------------------------>		
		<div class="k-navigation">
			<div class="nav">
				<?php navigation($seite); ?>
			</div>
		</div>			
		
		
		<!-- --------------------------------------------------------------------------
		Berichte ganz oben
		------------------------------------------------------------------------------>		
		<div class="k-topstory">
			<div class="row">	
				<div class="col-sm-7">
					<?php if ($seite == "") { startseite(); } ?>
					<?php if ($seite == "huehner") { huehner(); } ?>
				</div>	

				<div class="col-sm-5">
					<?php blog(); ?>
				</div>								
			</div>
		</div>
		
	

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="js/bootstrap.min.js">
</body>
</html>
