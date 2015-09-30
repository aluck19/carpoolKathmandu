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
		Contact us for any information/query/bug report/comment through our facebook page: <a href="https://www.facebook.com/carpoolKTM" target="_blank" >Carpool KTM</a>
	</p>
</div>

<?php
include 'includes/_footer.php';
?>