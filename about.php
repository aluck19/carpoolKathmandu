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
<div class="contentBox">
	<p>
		Carpool KTM is a web application for those people who have a car, bike and are willing to offer a ride. Also, people in need can request for a ride!
	</p>
</div>

<?php
include 'includes/_footer.php';
?>