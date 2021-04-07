<?php
include_once 'connect.php';
$result = mysqli_query($conn,"SELECT * FROM real_estate_db.sql");
?>
<!DOCTYPE html>
<html>
 <head>
 <title> Retrive data</title>
 </head>
<body>
<?php
if (mysqli_num_rows($result) > 0) {
?>
  <table> 
  <tr>
    <td>Title</td>
    <td>Price</td>
    <td>Address</td>
    <td>City</td>
	<td>State</td>
	<td>Zip</td>
	<td>Views</td>
  </tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<tr>
    <td><?php echo $row["title"]; ?></td>
    <td><?php echo $row["price"]; ?></td>
    <td><?php echo $row["address"]; ?></td>
    <td><?php echo $row["city"]; ?></td>
	<td><?php echo $row["state"]; ?></td>
	<td><?php echo $row["zip"]; ?></td>
	<td><?php echo $row["views"]; ?></td>
</tr>
<?php
$i++;
}
?>
</table>
 <?php
}
else{
    echo "No results";
}
?>
 </body>
</html>


