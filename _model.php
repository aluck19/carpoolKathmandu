<?php
/**
 * Created by IntelliJ IDEA.
 * User: sachin
 * Date: 9/30/15
 * Time: 8:39 AM
 */
?>
<div id="buttomMarginOff" class="row">

    <div class="ui two buttons">
        <div class="ui primary button" id="rideButtons"  data-toggle="modal" data-target="#askRide" >
            <i class="Sign in icon"></i> Ask
        </div>
        <div class="ui positive button"   id="rideButtons" data-toggle="modal" data-target="#offerRide" >
            <i class="Sign out icon"></i> Offer
        </div>
    </div>
    <!-- rideButtons -->
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

                        <form class="ui form" method="get" action="storeData.php">
                            <div  class="three fields">
                                <div class="field">
                                    <label>Name</label>
                                    <div class="ui corner labeled input">
                                        <input placeholder="Name" type="text" id="location"  name="name"  required="true">
                                        <div class="ui corner label">
                                            <i class="asterisk icon"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="field">
                                    <label>Email</label>
                                    <div class="ui corner labeled input">
                                        <input placeholder="Email Id" type="text" id="location"  name="emailId"  required="true">
                                        <div class="ui corner label">
                                            <i class="asterisk icon"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="field">
                                    <label>Phone number</label>
                                    <div class="ui corner labeled input">
                                        <input placeholder="Phone Number" type="text" id="course"  name="phone"  required="true">
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
                                        <input placeholder="Date" type="date" id="location"  name="date"  required="true">
                                        <div class="ui corner label">
                                            <i class="asterisk icon"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="field">
                                    <label>Pickup time</label>
                                    <div class="ui corner labeled input">
                                        <input placeholder="Pick Up Time" type="text" id="course"  name="time"  required="true">
                                        <div class="ui corner label">
                                            <i class="asterisk icon"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="field">
                                    <label>Pick Up Location</label>
                                    <div class="ui corner labeled input">
                                        <input placeholder="Pick Up Location" type="text" id="course"  name="pickUp"  required="true">
                                        <div class="ui corner label">
                                            <i class="asterisk icon"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div  class="three fields">

                                <div class="field">
                                    <label>Drop Off Location</label>
                                    <div class="ui corner labeled input">
                                        <input placeholder="Drop off Location" type="text" id="course"  name="dropOff"  required="true">
                                        <div class="ui corner label">
                                            <i class="asterisk icon"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="field">
                                    <label>Vehicle Ask</label>
                                    <div class="ui corner labeled input">
                                        <input placeholder="Vehicle Ask" type="text" id="course"  name="vehicle"  required="true">
                                        <div class="ui corner label">
                                            <i class="asterisk icon"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="field">
                                    <label>Seat</label>
                                    <div class="ui corner labeled input">
                                        <input placeholder="Seat" type="text" id="course"  name="seat"  required="true">
                                        <div class="ui corner label">
                                            <i class="asterisk icon"></i>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="field">
                                <label>Route</label>
                                <div class="ui corner labeled input">
                                    <input placeholder="Route" type="text" id="course"  name="route"  required="true">
                                    <div class="ui corner label">
                                        <i class="asterisk icon"></i>
                                    </div>
                                </div>
                            </div>

                           <!-- <div class="field">
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
                        <!--<button type="button" id="submit" class="ui submit button" name="submit">
                            Submit
                        </button>-->
                        <input class="ui orange submit button" type = "submit" value = "Submit" name = "Ask"/>
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

                        <form class="ui form" method="get" action="storeData.php">
                            <div  class="three fields">
                                <div class="field">
                                    <label>Name</label>
                                    <div class="ui corner labeled input">
                                        <input placeholder="Name" type="text" id="location"  name="name"  required="true">
                                        <div class="ui corner label">
                                            <i class="asterisk icon"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="field">
                                    <label>Email</label>
                                    <div class="ui corner labeled input">
                                        <input placeholder="Email Id" type="text" id="location"  name="emailId"  required="true">
                                        <div class="ui corner label">
                                            <i class="asterisk icon"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="field">
                                    <label>Phone number</label>
                                    <div class="ui corner labeled input">
                                        <input placeholder="Phone Number" type="text" id="course"  name="phone"  required="true">
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
                                        <input placeholder="Date" type="date" id="location"  name="date"  required="true">
                                        <div class="ui corner label">
                                            <i class="asterisk icon"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="field">
                                    <label>Pickup time</label>
                                    <div class="ui corner labeled input">
                                        <input placeholder="Pick Up Time" type="text" id="course"  name="time"  required="true">
                                        <div class="ui corner label">
                                            <i class="asterisk icon"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="field">
                                    <label>Pick Up Location</label>
                                    <div class="ui corner labeled input">
                                        <input placeholder="Pick Up Location" type="text" id="course"  name="pickUp"  required="true">
                                        <div class="ui corner label">
                                            <i class="asterisk icon"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div  class="three fields">

                                <div class="field">
                                    <label>Drop Off Location</label>
                                    <div class="ui corner labeled input">
                                        <input placeholder="Drop off Location" type="text" id="course"  name="dropOff"  required="true">
                                        <div class="ui corner label">
                                            <i class="asterisk icon"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="field">
                                    <label>Vehicle Ask</label>
                                    <div class="ui corner labeled input">
                                        <input placeholder="Vehicle Ask" type="text" id="course"  name="vehicle"  required="true">
                                        <div class="ui corner label">
                                            <i class="asterisk icon"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="field">
                                    <label>Seat</label>
                                    <div class="ui corner labeled input">
                                        <input placeholder="Seat" type="text" id="course"  name="seat"  required="true">
                                        <div class="ui corner label">
                                            <i class="asterisk icon"></i>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="field">
                                <label>Route</label>
                                <div class="ui corner labeled input">
                                    <input placeholder="Route" type="text" id="course"  name="route"  required="true">
                                    <div class="ui corner label">
                                        <i class="asterisk icon"></i>
                                    </div>
                                </div>
                            </div>

<!--                            <div class="field">-->
<!--                                <label>Any other comments</label>-->
<!--                                <div class="ui corner labeled input">-->
<!--                                    <textarea name="comments" id = "comments" maxlength="1000" cols="2" rows="2"required="true"></textarea>-->
<!--                                    <!--<div class="ui corner label">-->
<!--                                    <i class="asterisk icon"></i>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
                    </div>
                    <div class="modal-footer">
                        <!--<button type="button" id = "close" class="btn btn-danger" data-dismiss="modal" style="font-size: 14px; font-family: inherit; font-weight: bold;padding: 7px 18px; margin-right: 5px;">
                        Close
                        </button>-->
                        <!--button type="button" id="submit" class="ui submit button" name="submit">
                            Submit
                        </button>-->
                        <input class="ui orange submit button" type = "submit" value = "Submit" name = "Offer"/>
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
</div>