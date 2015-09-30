<?php
include 'includes/_header.php';
?> 


					<?php
                    include_once '_search.php';
					include_once '_model.php';
                    include_once 'Common/DbConnection.php';
					$carpoolId=$_GET["carpoolId"];
                    $query="select *from AskAndOffer WHERE Id='$carpoolId'";
                    $result=$conn->query($query);
                    $row=mysqli_fetch_assoc($result);
					?>
					<div class="row" id="carpoolDetails">
						<div  class="two fields">
							<div class="field">
								<label>Name: &nbsp; </label>
								<div class="ui corner labeled input">
									<p>
										<?php echo $row["Name"] ?>
									</p>
								</div>
							</div>
							<div class="field">
								<label>Vehicle: &nbsp;</label>
								<div class="ui corner labeled input">
									<p>
                                        <?php echo $row["Vehicle"] ?>

                                    </p>
								</div>
							</div>
						</div>
						<div  class="three fields">
							<div class="field">
								<label>Date: &nbsp;</label>
								<div class="ui corner labeled input">
									<p>
                                        <?php echo $row["Date"] ?>
                                    </p>
								</div>
							</div>
                            <div class="field">
                                <label>Pickup Time: &nbsp;</label>
                                <div class="ui corner labeled input">
                                    <p>
                                        <?php echo $row["Time"] ?>
                                    </p>
                                </div>
                            </div>
							<div class="field">
								<label>Pickup Location: &nbsp;</label>
								<div class="ui corner labeled input">
									<p>
                                        <?php echo $row["PickUp"] ?>
                                    </p>
								</div>
							</div>
							<div class="field">
								<label>Drop Location: &nbsp;</label>
								<div class="ui corner labeled input">
									<p>
                                        <?php echo $row["DropOff"] ?>
                                    </p>
								</div>
							</div>
						</div>
						<div  class="two fields">
							<div class="field">
								<label>Phone: &nbsp;</label>
								<div class="ui corner labeled input">
									<p>
                                        <?php echo $row["Phone"] ?>
                                    </p>
								</div>
							</div>
							<div class="field">
								<label>Email Address: &nbsp;</label>
								<div class="ui corner labeled input">
									<p>
                                        <?php echo $row["EmailId"] ?>
                                    </p>
								</div>
							</div>
						</div>

						<div class="field">
							<label>Seat: &nbsp;</label>
							<div class="ui corner labeled input">
								<p>
									<?php echo $row["Seat"] ?>
								</p>
							</div>
						</div>

						<div class="field">
							<label>Route: &nbsp;</label>
							<div class="ui corner labeled input">
								<p>
									<?php echo $row["Route"] ?>
								</p>
							</div>
						</div>

					</div><!-- second row ------------>
				
      <?php
include 'includes/_footer.php';
?>