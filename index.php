<?php
include 'Common/DbConnection.php';

?>
<html>
<?php
if($_SESSION["success"]!=null){
    echo $_SESSION["success"];
    $_SESSION["success"]=null;
}
?>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Carpool KTM</title>

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

    <nav  class="navbar navbar-default" role="navigation">
        <div class="container">
            <div class="row">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse"
                            data-target="#example-navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="example-navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>
                            <a href="#about">About Us</a>
                        </li>
                        <li>
                            <a href="#faq">FAQ</a>
                        </li>
                        <li>
                            <a href="#contact">Contact</a>
                        </li>
                    </ul>
                </div>
            </div><!--row -->
        </div><!--container -->
    </nav>

    <div id="mainContent">
        <div class="container">
            <div class="row">

                <div class="ui two buttons">
                    <div class="ui primary button" id="rideButtons"  data-toggle="modal" data-target="#askRide" >
                        <i class="Sign in icon"></i> Ask
                    </div>
                    <div class="ui positive button"   id="rideButtons" data-toggle="modal" data-target="#offerRide" >
                        <i class="Sign out icon"></i> Offer
                    </div>
                </div>

                <!------------------------------- AskRide ------------------>
                <div style="display: block;z-index: 99999;  position: absolute;">
                    <div class="modal fade" id="askRide" tabindex="-1" role="dialog"
                         aria-labelledby="myModalLabel" aria-hidden="true" >
                        <div class="modal-dialog modal-lg" >
                            <div class="modal-content" id="feedback_form_div">
                                <div class="modal-header">
                                    <button type="button" class="close"
                                            data-dismiss="modal" aria-hidden="true" style="
											font-size: 30px;
											margin-top: -5px;
											color: red;
											outline: 0;
											">
                                        &times;
                                    </button>
                                    <h4 class="modal-title" id="myModalLabel">Ask a ride</h4>
                                </div>
                                <div class="modal-body">

                                    <form class="ui form" method="post" >
                                        <div  class="two fields">
                                            <div class="field">
                                                <label>Name</label>
                                                <div class="ui corner labeled input">
                                                    <input placeholder="Preferred Location" type="text" id="location"  name="location"  required="true">
                                                    <div class="ui corner label">
                                                        <i class="asterisk icon"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="field">
                                                <label>Vehicle Ask</label>
                                                <div class="ui corner labeled input">
                                                    <input placeholder="Course of study" type="text" id="course"  name="course"  required="true">
                                                    <div class="ui corner label">
                                                        <i class="asterisk icon"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div  class="three fields">
                                            <div class="field">
                                                <label>Date</label>
                                                <div class="ui corner labeled input">
                                                    <input placeholder="Preferred Location" type="date" id="location"  name="location"  required="true">
                                                    <div class="ui corner label">
                                                        <i class="asterisk icon"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="field">
                                                <label>Pickup time</label>
                                                <div class="ui corner labeled input">
                                                    <input placeholder="Course of study" type="text" id="course"  name="course"  required="true">
                                                    <div class="ui corner label">
                                                        <i class="asterisk icon"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="field">
                                                <label>Drop time</label>
                                                <div class="ui corner labeled input">
                                                    <input placeholder="Course of study" type="text" id="course"  name="course"  required="true">
                                                    <div class="ui corner label">
                                                        <i class="asterisk icon"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div  class="two fields">
                                            <div class="field">
                                                <label>Contact</label>
                                                <div class="ui corner labeled input">
                                                    <input placeholder="Preferred Location" type="date" id="location"  name="location"  required="true">
                                                    <div class="ui corner label">
                                                        <i class="asterisk icon"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="field">
                                                <label>Phone number</label>
                                                <div class="ui corner labeled input">
                                                    <input placeholder="Course of study" type="text" id="course"  name="course"  required="true">
                                                    <div class="ui corner label">
                                                        <i class="asterisk icon"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="field">
                                            <label>Any other comments</label>
                                            <div class="ui corner labeled input">
                                                <textarea name="comments" id = "comments" maxlength="1000" cols="2" rows="2"required="true"></textarea>
                                                <!--<div class="ui corner label">
                                                <i class="asterisk icon"></i>
                                                </div>-->
                                            </div>
                                        </div>
                                </div>
                                <div class="modal-footer">
                                    <!--<button type="button" id = "close" class="btn btn-danger" data-dismiss="modal" style="font-size: 14px; font-family: inherit; font-weight: bold;padding: 7px 18px; margin-right: 5px;">
                                    Close
                                    </button>-->
                                    <button type="button" id="submit" class="ui submit button" name="submit">
                                        Submit
                                    </button>
                                    <!--<input class="ui orange submit button" type = "submit" value = "Submit" name = "submit"/>-->
                                </div>
                                </form><!-- feedback form -->
                            </div><!-- /.modal-content -->
                            <div id = "success_message" class="modal-content hide">
                                <div class="modal-header">
                                    <button type="button" class="close"
                                            data-dismiss="modal" aria-hidden="true" style="
											font-size: 30px;
											margin-top: -5px;
											color: red;
											outline: 0;
											" id="close_button">
                                        &times;
                                    </button>
                                    <h4 id="messageFeedback" class="modal-title"><img style="width: 150px;" src="img/thanks.png"/>
                                        <br>
                                        <br>
                                        <br>
                                        <div>
                                            Thanks for taking the time to fill out our feedback form, your opinions are important to us.
                                        </div>
                                        <br>
                                        <br>
                                        <div style="color: #000;">
                                            -The MeroHostel Team
                                        </div></h4>
                                </div>
                            </div>
                        </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->
                </div>
                <!--- end askRide -->

                <!-------------------------------- offerRide ------------------------------>
                <div style="display: block;z-index: 99999;  position: absolute;">
                    <div class="modal fade" id="offerRide" tabindex="-1" role="dialog"
                         aria-labelledby="myModalLabel" aria-hidden="true" >
                        <div class="modal-dialog modal-lg" >
                            <div class="modal-content" id="feedback_form_div">
                                <div class="modal-header">
                                    <button type="button" class="close"
                                            data-dismiss="modal" aria-hidden="true" style="
											font-size: 30px;
											margin-top: -5px;
											color: red;
											outline: 0;
											">
                                        &times;
                                    </button>
                                    <h4 class="modal-title" id="myModalLabel">Offer a ride</h4>
                                </div>
                                <div class="modal-body">

                                    <form class="ui form" method="post" >
                                        <div  class="two fields">
                                            <div class="field">
                                                <label>Name</label>
                                                <div class="ui corner labeled input">
                                                    <input placeholder="Preferred Location" type="text" id="location"  name="location"  required="true">
                                                    <div class="ui corner label">
                                                        <i class="asterisk icon"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="field">
                                                <label>Vehicle Ask</label>
                                                <div class="ui corner labeled input">
                                                    <input placeholder="Course of study" type="text" id="course"  name="course"  required="true">
                                                    <div class="ui corner label">
                                                        <i class="asterisk icon"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div  class="three fields">
                                            <div class="field">
                                                <label>Date</label>
                                                <div class="ui corner labeled input">
                                                    <input placeholder="Preferred Location" type="date" id="location"  name="location"  required="true">
                                                    <div class="ui corner label">
                                                        <i class="asterisk icon"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="field">
                                                <label>Pickup time</label>
                                                <div class="ui corner labeled input">
                                                    <input placeholder="Course of study" type="text" id="course"  name="course"  required="true">
                                                    <div class="ui corner label">
                                                        <i class="asterisk icon"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="field">
                                                <label>Drop time</label>
                                                <div class="ui corner labeled input">
                                                    <input placeholder="Course of study" type="text" id="course"  name="course"  required="true">
                                                    <div class="ui corner label">
                                                        <i class="asterisk icon"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div  class="two fields">
                                            <div class="field">
                                                <label>Contact</label>
                                                <div class="ui corner labeled input">
                                                    <input placeholder="Preferred Location" type="date" id="location"  name="location"  required="true">
                                                    <div class="ui corner label">
                                                        <i class="asterisk icon"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="field">
                                                <label>Phone number</label>
                                                <div class="ui corner labeled input">
                                                    <input placeholder="Course of study" type="text" id="course"  name="course"  required="true">
                                                    <div class="ui corner label">
                                                        <i class="asterisk icon"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="field">
                                            <label>Any other comments</label>
                                            <div class="ui corner labeled input">
                                                <textarea name="comments" id = "comments" maxlength="1000" cols="2" rows="2"required="true"></textarea>
                                                <!--<div class="ui corner label">
                                                <i class="asterisk icon"></i>
                                                </div>-->
                                            </div>
                                        </div>
                                </div>
                                <div class="modal-footer">
                                    <!--<button type="button" id = "close" class="btn btn-danger" data-dismiss="modal" style="font-size: 14px; font-family: inherit; font-weight: bold;padding: 7px 18px; margin-right: 5px;">
                                    Close
                                    </button>-->
                                    <button type="button" id="submit" class="ui submit button" name="submit">
                                        Submit
                                    </button>
                                    <!--<input class="ui orange submit button" type = "submit" value = "Submit" name = "submit"/>-->
                                </div>
                                </form><!-- feedback form -->
                            </div><!-- /.modal-content -->
                            <div id = "success_message" class="modal-content hide">
                                <div class="modal-header">
                                    <button type="button" class="close"
                                            data-dismiss="modal" aria-hidden="true" style="
											font-size: 30px;
											margin-top: -5px;
											color: red;
											outline: 0;
											" id="close_button">
                                        &times;
                                    </button>
                                    <h4 id="messageFeedback" class="modal-title"><img style="width: 150px;" src="img/thanks.png"/>
                                        <br>
                                        <br>
                                        <br>
                                        <div>
                                            Thanks for taking the time to fill out our feedback form, your opinions are important to us.
                                        </div>
                                        <br>
                                        <br>
                                        <div style="color: #000;">
                                            -The MeroHostel Team
                                        </div></h4>
                                </div>
                            </div>
                        </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->
                </div>
                <!-- offer Ride -->

            </div><!-- row -->
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