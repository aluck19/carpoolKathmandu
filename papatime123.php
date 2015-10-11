<?php
/**
 * Created by IntelliJ IDEA.
 * User: sachin
 * Date: 9/30/15
 * Time: 3:27 PM
 */
include_once 'Common/DbConnection.php';





$query = "select count(*) from AskAndOffer WHERE type='ask' ";
$result = $conn -> query($query);
$row = mysqli_fetch_assoc($result);
echo $row; 

$query="select *from AskAndOffer";

$result=$conn->query($query);
echo '<table>
<tr>
<td>Name</td>
<td>Phone</td>
<td>Email Id</td>
<td>Pick Up</td>
<td>Drop Off</td>
<td>Date</td>
<td>Time</td>
<td>Vehicle</td>
<td>Seat</td>
<td>Type</td>
<td>Created Date</td>
<td>Created Time</td>
<td>Route</td>
<td>Action</td>
</tr>

';
while($row=mysqli_fetch_assoc($result)) {
    ?>
    <tr>
        <td><?php echo $row["Name"] ?></td>
        <td><?php echo $row["Phone"] ?></td>
        <td><?php echo $row["EmailId"] ?></td>
        <td><?php echo $row["PickUp"] ?></td>
        <td><?php echo $row["DropOff"] ?></td>
        <td><?php echo $row["Date"] ?></td>
        <td><?php echo $row["Time"] ?></td>
        <td><?php echo $row["Vehicle"] ?></td>
        <td><?php echo $row["Seat"] ?></td>
        <td><?php echo $row["Type"] ?></td>
        <td><?php echo $row["CreatedDate"] ?></td>
        <td><?php echo $row["CreatedTime"] ?></td>
        <td><?php echo $row["Route"] ?></td>
        <td>
            <form  method="get" action="del.php" style="float:right">
                <input type="hidden" name="carpoolId" value="<?php echo $row["Id"]; ?>"/>
                <button onclick="return confirm('Are you sure?');" type="submit" class='ui button'>Delete&nbsp;&nbsp;<span class='glyphicon glyphicon-remove' aria-hidden='true'></button>
            </form>
        </td>
    </tr>
    <?php
}
    ?>