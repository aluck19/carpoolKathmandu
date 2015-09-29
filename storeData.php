<?php
/**
 * Created by IntelliJ IDEA.
 * User: sachin
 * Date: 9/30/15
 * Time: 4:10 AM
 */

include 'Common/DbConnection.php';
$name=$_GET["name"];
$phone=$_GET["phone"];
$emailId=$_GET["emailId"];
$pickUp=$_GET["pickUp"];
$dropOff=$_GET["dropOff"];
$date=$_GET["date"];
$time=$_GET["time"];
$vehicle=$_GET["vehicle"];
$seat=$_GET["seat"];
date_default_timezone_set('Asia/Kathmandu');
$createdDate=date("Y-m-d",time());
$createdTime=strftime("%H:%M:%S", time());

if(isset($_GET['Ask'])){
    $type="Ask";
}else{
    $type="Offer";
}
$query="INSERT into AskAndOffer VALUES (NULL ,'$name','$phone','$emailId','$pickUp','$dropOff','$date','$time','$vehicle'
,'$seat','$type','$createdDate','$createdTime')";
if($conn->query($query)){
    header("Location:index.php");
    $_SESSION["success"]="You information is successfully stored";
}else{
    header("Location:error.php");
}


?>