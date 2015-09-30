<?php
include 'includes/_header.php';
?>

<?php
include_once '_search.php';
include_once '_model.php';
include_once 'Common/DbConnection.php';
$carpoolId = $_GET["carpoolId"];
$query = "select *from AskAndOffer WHERE Id='$carpoolId'";
$result = $conn -> query($query);
$row = mysqli_fetch_assoc($result);
?>
<div class="row" id="carpoolDetails">

	<p style="background: #fff; padding: 10px; font-size: 18px;"><span style="font-size: 20px; font-weight: bold;"><i class="info circle icon"></i>&nbsp; To Confirm </span> your seat Contact <?php echo ucfirst($row["Name"]) ?> at <?php echo ucfirst($row["Phone"]) ?></p>
	
	<div class="col-sm-4">
		<div  class="two fields">
			<div class="field">
				<label>Name: &nbsp; </label>
				<div class="ui corner labeled input">
					<p>
						<?php echo ucfirst($row["Name"]) ?>
					</p>
				</div>
			</div>
			<div class="field">
				<label>Vehicle: &nbsp;</label>
				<div class="ui corner labeled input">
					<p>
						<?php echo ucfirst($row["Vehicle"]) ?>

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
						<?php echo ucfirst($row["PickUp"]) ?>
					</p>
				</div>
			</div>
			<div class="field">
				<label>Drop Location: &nbsp;</label>
				<div class="ui corner labeled input">
					<p>
						<?php echo ucfirst($row["DropOff"]) ?>
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
					<?php echo ucfirst($row["Route"]) ?>
				</p>
			</div>
		</div>
        <div class="field">
            <label>Route: &nbsp;</label>
            <div class="ui corner labeled input">
                <p>
                    <?php echo $row["Type"] ?>
                </p>
            </div>
        </div>

	</div>

	<div class="col-sm-8">
			
			<iframe width="100%" height="350px" src="http://maps.google.com/maps?saddr=<?php echo $row["PickUp"] ?>,Kathmandu&daddr=<?php echo $row["DropOff"] ?>,Kathmandu&ie=UTF8&t=&z=14&iwloc=B&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
			
		
	</div>

</div><!-- second row ------------>

<?php
include 'includes/_footer.php';
?>