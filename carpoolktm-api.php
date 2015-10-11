<?php

header('Content-Type: application/json');

include_once 'Common/DbConnection.php';

/* check connection */
if ($conn -> connect_errno) {
	printf("Connect failed: %s\n", $conn -> connect_error);
	exit();
}

$conn -> set_charset("utf8");

$sql = "SELECT * FROM `AskAndOffer`";

if ($result = $conn -> query($sql)) {

	while ($row = mysqli_fetch_assoc($result)) {
		$output[] = $row;
	}

	if (empty($output)) {
		$output[] = "";
	}

	print(json_encode($output));
	$stmt -> close();

} else {
	echo $conn -> error;
	echo "no entry found";
}

$conn -> close();
?>