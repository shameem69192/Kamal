<?php
function doLogin($connect, $email) {
	  $fquery="SELECT Mobile,Cust_id,Fname,Email,Lname from cust_details WHERE Email='$email' ";
      $res=mysqli_query($connect,$fquery)or die(mysqli_error($connect));

      $_SESSION['message']="you are now logged in";
      $row = mysqli_fetch_assoc($res);
      $_SESSION['username']=$row["Fname"];
      $_SESSION['phone']=$row["Mobile"];
      $_SESSION['id']=$row["Cust_id"];
      $_SESSION['email']=$row["Email"];
      $_SESSION['lname']=$row["Lname"];
      header("Location:products.php");
      exit();
}
?>