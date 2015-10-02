<?php
include 'Common/DbConnection.php';

$search=$_GET['search'];
$query = "SELECT *from AskAndOffer WHERE PickUp LIKE '%$search%'";
$result = $conn->query($query);
$data=array();
while ($row = $result->fetch_assoc()) {
    $data[]=$row['PickUp'];
}
echo json_encode($data);

?>

