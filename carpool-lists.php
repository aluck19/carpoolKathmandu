<?php
include 'includes/_header.php';
?> 
            <?php
            include_once '_search.php';
            include_once '_model.php';
            $pickUp=$_GET["pickUp"];
            $dropOff=$_GET["dropOff"];
            $date=$_GET["date"];
            $time=$_GET["time"];
            $query = "select *from AskAndOffer where PickUp LIKE '%$pickUp%' OR DropOff LIKE '%$dropOff%' OR Date LIKE '%$date%' OR Time LIKE '%$time%' ";
            echo $query;
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

      <?php
include 'includes/_footer.php';
?>