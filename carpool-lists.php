<html>
<head>
    <?php
    include_once 'Common/DbConnection.php';
    ?>
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
        include_once '_nav.php';
    ?>
    <div id="mainContent">
        <div class="container">
            <?php
            include_once '_search.php';
            include_once '_model.php';
            $pickUp=$_GET["pickUp"];
            $dropOff=$_GET["dropOff"];
            $date=$_GET["date"];
            $time=$_GET["time"];

            $query = "select *from AskAndOffer where PickUp LIKE '%$pickUp%' OR DropOff LIKE '%$dropOff%' OR Date LIKE '%$date%' OR Time LIKE '%$time%' ";
            $result=$conn->query($query);
            ?>

            <div class="row" id="carpoolLists">
                <div class="ui middle aligned divided list">
                    <?php
                    while($row=mysqli_fetch_assoc($result)) {
                        ?>
                        <div class="item">
                            <div class="right floated content">
                                <div class="ui button">
                                    <a href="carpool-details.php?carpoolId=<?php echo $row["Id"]?>">View Details</a>
                                </div>
                            </div>
                            <div class="content">
                                <div class="CKtwofields">
                                    <div class="field">
                                        <label>Name: &nbsp; </label>

                                        <div class="ui corner labeled input">
                                            <p>
                                                <?php echo $row["Name"]?>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="field">
                                        <label>Route: &nbsp;</label>

                                        <div class="ui corner labeled input">
                                            <p>
                                                <?php echo $row["Route"]?>

                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="CKtwofields">
                                    <div class="field">
                                        <label>Pick Up: &nbsp; </label>

                                        <div class="ui corner labeled input">
                                            <p>
                                                <?php echo $row["PickUp"]?>

                                            </p>
                                        </div>
                                    </div>
                                    <div class="field">
                                        <label>Drop Off: &nbsp;</label>

                                        <div class="ui corner labeled input">
                                            <p>
                                                <?php echo $row["DropOff"]?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                    <!-- item --->
                </div>
            </div>

        </div><!---- carpoolLists --- >
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