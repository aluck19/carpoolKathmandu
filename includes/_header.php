<?php
include 'Common/DbConnection.php';
?>
<html>

	<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Cache-Control" content="no-cache" />
		<meta http-equiv="Pragma" content="no-cache" />
		<link rel="icon" type="image/png" href="img/favicon.png" />

		<title>Carpool KTM</title>

		<!-- Main Styslesheet -->
		<link rel="stylesheet" href="css/style.css" />
		<!-- Bootstrap CSS -->
		<link href="bootstrap/bootstrap.css" rel="stylesheet">
		<!-- Font-Awesome Icons -->
		<link href="font_awesome/css/font-awesome.css" rel="stylesheet">
		<!-- Semantic CSS -->
		<link href="semantic/semantic.min.css" type="text/css" rel="stylesheet"/>
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.address.js"></script>

		<!-- DataTables JS/CSS -->
		<link rel="stylesheet" type="text/css" href="dataTables/jquery.dataTables.css">
		<link rel="stylesheet" type="text/css" href="dataTables/dataTables.tableTools.css">

		<script type="text/javascript" language="javascript" src="dataTables/jquery.dataTables.js"></script>
		<script type="text/javascript" language="javascript" src="dataTables/dataTables.tableTools.js"></script>

		<!-- Semantic JS -->
		<script src="semantic/semantic.min.js" type="text/javascript" ></script>
		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="bootstrap/html5shiv.min.js"></script>
		<script src="bootstrap/respond.min.js"></script>

		<![endif]-->

	</head>
	<body>

		<div id="bodyWrapper">

			<header>
				<div class="container">
					<div class="row">
						<div>
							<h1>Carpool KTM</h1>
						</div>
					</div><!--row -->
				</div><!--container -->
			</header>
			<?php
include_once '_nav.php'
			?>
			<div id="mainContent">
				<div class="container">

					<div id="infoBox" class="row">
						<div class="col-sm-8">
							<h4 style="display: inline-block;color: #3ED8FB;font-size: 25px;margin: 0px">ASK - if you need a ride</h4>
							<h4 style="display: inline-block;margin-top: 0;color: #F95656;font-size: 25px; margin-left: 30px;">Offer - if you want to offer a ride</h4>
							<h4 style="margin:0;">Please! fill the form with real data. Let's help each other with Carpool KTM</h4>
						</div>
						<div class="col-sm-4">
							<h4>Counts</h4>							
							<?php
							$query = "select count(*) from AskAndOffer WHERE type='ask' ";
							$result_set = $conn -> query($query);
							$row = mysqli_fetch_array($result_set);
							?>
							
							 <div class="ui compact menu">
  								<a class="item" style="padding: 15px 35px; background: #fff;">
    								<i class="icon Sign in"></i> Ask
    								<div class="floating ui label" style="background: #3ED8FB">	<?php echo array_shift($row); ?></div>
  								</a>
  								
  								<?php $query = "select count(*) from AskAndOffer WHERE type='offer' ";
								$result_set = $conn -> query($query);
								$row = mysqli_fetch_array($result_set);
								?>
								
  								<a class="item" style="padding: 15px 35px; background: #fff;">
    								<i class="icon Sign out"></i> Offer
    								<div class="floating ui label" style="background: #F95656;"><?php	echo array_shift($row); ?></div>
  								</a>
							</div>
						</div>
					</div>