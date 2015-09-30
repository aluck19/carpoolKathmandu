<?php
/**
 * Created by IntelliJ IDEA.
 * User: sachin
 * Date: 9/30/15
 * Time: 3:38 PM
 */
include_once 'Common/DbConnection.php';
$carpoolId=$_GET["carpoolId"];

$query="Delete From AskAndOffer where Id=$carpoolId";

if($conn->query($query)){
    header("Location:remdel.php");
}else{
    header("Location:error.php");
}

?>