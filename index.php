<?php
include 'Common/DbConnection.php';
?>
<html>

	<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Carpools KTM</title>

		<!-- Main Styslesheet -->
		<link rel="stylesheet" href="css/style.css" />
		<!-- Bootstrap CSS -->
		<link href="bootstrap/bootstrap.css" rel="stylesheet">
		<!-- Font-Awesome Icons -->
		<link href="font_awesome/css/font-awesome.css" rel="stylesheet">
		<!-- Semantic CSS -->
		<link href="semantic/dist/semantic.min.css" type="text/css" rel="stylesheet"/>
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.address.js"></script>

		<!-- DataTables JS/CSS -->
		<link rel="stylesheet" type="text/css" href="dataTables/jquery.dataTables.css">
		<link rel="stylesheet" type="text/css" href="dataTables/dataTables.tableTools.css">

		<script type="text/javascript" language="javascript" src="dataTables/jquery.dataTables.js"></script>
		<script type="text/javascript" language="javascript" src="dataTables/dataTables.tableTools.js"></script>

		<!-- Semantic JS -->
		<script src="semantic/dist/semantic.min.js" type="text/javascript" ></script>
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
					<?php
					include_once '_search.php';
					include_once '_model.php';
                    if ($_SESSION["success"] != null) {
                        echo $_SESSION["success"];
                        $_SESSION["success"] = null;
                    }
					?>

					<div id="CKdataTable" class="row" >
						<table id="example" class="display" cellspacing="0" width="100%">
							<thead>
								<tr>
									<th>Name</th>
									<th>Phone</th>
									<th>Email Id</th>
									<th>Pick Up</th>
									<th>Drop Off</th>
									<th>Date</th>
									<th>Time</th>
									<th>Vehicle</th>
									<th>Route</th>
									<th>Seat</th>
									<th>Type</th>
								</tr>
							</thead>
                            <?php
                            $query="Select *from AskAndOffer";
                            $result=$conn->query($query);
                            while($row=mysqli_fetch_assoc($result)){
                            ?>
							<tr>
								<td><?php echo $row["Name"]?></td>
								<td><?php echo $row["Phone"]?></td>
								<td><?php echo $row["EmailId"]?></td>
								<td><?php echo $row["PickUp"]?></td>
								<td><?php echo $row["DropOff"]?></td>
								<td><?php echo $row["Date"]?></td>
								<td><?php echo $row["Time"]?></td>
								<td><?php echo $row["Vehicle"]?></td>
								<td><?php echo $row["Route"]?></td>
								<td><?php echo $row["Seat"]?></td>
								<td><?php echo $row["Type"]?></td>

							</tr>
                            <?php
                            }
                            ?>
						</table>

					</div><!-- second row -->
				</div><!-- container -->
			</div><!-- mainContent -->

			<footer>
				<div class="container">
					<div class="row">
						<div id="liscene">
							<p>
								Copyright &copy; 2015. All Rights Reserved.
							</p>
						</div>
					</div><!-- row -->
				</div><!-- container -->
			</footer>

		</div><!-- bodyWrapper -->

		<!-- Main Script -->
		<script src="js/mainScript.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="bootstrap/bootstrap.js"></script>

	</body>
</html>