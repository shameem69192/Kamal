<?php
session_start();
require('dbConnection.php');
if(!isset($_SESSION['id'])) {
	header("Location: index.php");
	exit(0);
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>My Orders</title>
</head>
<body>
<?php
	$qry="SELECT Order_id,Quantity,Phone,Address,Payment_type,Cust_id from order_details where Cust_id='".$_SESSION['id']."'";
	$result=mysqli_query($connect,$qry)or die(mysqli_error($connect));

	while($row = mysqli_fetch_assoc($result))  {
		echo $row['Order_id']." ".$row['Quantity']." ".$row['Phone']." ".$row['Address']." ".$row['Payment_type']."<br>";
	}
	
?>
</body>
</html>