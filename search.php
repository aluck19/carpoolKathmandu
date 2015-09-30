<?php
include 'Common/DbConnection.php';
if($_POST) {
    if ($_POST['distinct'] == "pickUp") {
        $search=$_POST['search'];
        $query = "SELECT *from AskAndOffer WHERE PickUp LIKE '%$search%'";
        $result = $conn->query($query);
        $data=array();
        while ($row = $result->fetch_assoc()) {
            $location=array();
            $location[] = $row['PickUp'];
            $data[]=$location;
        }
        echo json_encode($data);
    }
    elseif($_POST['distinct'] == "dropOff"){
        $search=$_POST['search'];
        $query = "SELECT *from AskAndOffer WHERE DropOff LIKE '%$search%'";
        $result = $conn->query($query);
        $data=array();
        while ($row = $result->fetch_assoc()) {
            $location=array();
            $location[] = $row['DropOff'];
            $data[]=$location;
        }
        echo json_encode($data);
    }
    elseif($_POST['distinct'] == "date"){
        $search=$_POST['search'];
        $query = "SELECT *from AskAndOffer WHERE Date LIKE '%$search%'";
        $result = $conn->query($query);
        $data=array();
        while ($row = $result->fetch_assoc()) {
            $location=array();
            $location[] = $row['Date'];
            $data[]=$location;
        }
        echo json_encode($data);
    }
    elseif($_POST['distinct'] == "time"){
        $search=$_POST['search'];
        $query = "SELECT *from AskAndOffer WHERE Time LIKE '%$search%'";
        $result = $conn->query($query);
        $data=array();
        while ($row = $result->fetch_assoc()) {
            $location=array();
            $location[] = $row['Time'];
            $data[]=$location;
        }
        echo json_encode($data);
    }
    else{
        $search=$_POST['search'];
        $query = "select *from AskAndOffer where PickUp LIKE '%$pickUp%' OR DropOff LIKE '%$dropOff%' OR Date LIKE '%$date%' OR Time LIKE '%$time%' ";
        $result = $conn->query($query);
        $data=array();
        while ($row = $result->fetch_assoc()) {
            $location=array();
            $location[] = $row['PickUp'];
            $location[] = $row['DropOff'];
            $location[] = $row['Date'];
            $location[] = $row['Time'];
            $data[]=$location;
        }
        echo json_encode($data);
    }

}

/*$search=$_POST['search'];
$query = "SELECT *from AskAndOffer";
$result = $conn->query($query);
$data=array();
while ($row = $result->fetch_assoc()) {
    $location=array();
    $location[] = $row['PickUp'];
    $data[]=$location;
}
echo json_encode($data);*/

?>

