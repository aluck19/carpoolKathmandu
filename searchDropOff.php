<?php
include 'Common/DbConnection.php';

        $search=$_GET['search'];
        $query = "SELECT *from AskAndOffer WHERE DropOff LIKE '%$search%'";
        $result = $conn->query($query);
        $data=array();
        while ($row = $result->fetch_assoc()) {
            $data[]= $row['DropOff'];

        }
        echo json_encode($data);


?>

