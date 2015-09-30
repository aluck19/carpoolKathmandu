<?php
include 'includes/_header.php';
?>




					<?php
					include_once '_search.php';
					include_once '_model.php';
					if ($_SESSION["success"] != null) {
						echo $_SESSION["success"];
						$_SESSION["success"] = null;
					}
					?>
				
						
					<div id="CKdataTable" class="row"  style="width: 1140px;margin: 0 auto; margin-bottom: 20px; margin-top: 20px;" >
						<h3>Lates Posts</h3>
						<table id="example" class="display" cellspacing="0" width="100%">
							<thead>
								<tr>									
									<th>Pick Up</th>
									<th>Drop Off</th>
									<th>Date</th>
									<th>Time</th>
									<th>Vehicle</th>
									<th>Seat</th>
									<th>Type</th>
									<th>Details</th>											
								</tr>
							</thead>
                            <?php
                            $sql="Select *from AskAndOffer";
                            $result=$conn->query($sql);
                            while($row=mysqli_fetch_assoc($result)){
                            ?>
							<tr>
								
								<td><?php echo ucfirst($row["PickUp"])?></td>
								<td><?php echo ucfirst($row["DropOff"]) ?></td>
								<td><?php echo ucfirst($row["Date"])?></td>
								<td><?php echo ucfirst($row["Time"])?></td>
								<td><?php echo ucfirst($row["Vehicle"])?></td>								
								<td><?php echo ucfirst($row["Seat"])?></td>
								<td><?php echo ucfirst($row["Type"])?></td>
								<td>   <div class="ui button">
                                    <a href="carpool-details.php?carpoolId=<?php echo $row["Id"]?>">View Details</a>
                                </div></td>

							</tr>
                            <?php
							}
                            ?>
						</table>
						
						</div><!-- second row -->

<?php
include 'includes/_footer.php';
?>