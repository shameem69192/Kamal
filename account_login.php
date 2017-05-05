<?php

$email=$pass1="";
$email_error=$pass1_error="";
if($_SERVER["REQUEST_METHOD"]=="POST")
{

    require('dbConnection.php');
    if (empty($_POST["email"]))
        {
         $email_error = "Email is required";
        }
    else
        {
          $email = test_input($_POST["email"]);
          // check if e-mail address is well-formed
          if (!filter_var($email, FILTER_VALIDATE_EMAIL))
            {
              $email_error = "Invalid email format";
            }
        }
    if (empty($_POST["pass1"]))
      {
        $pass1_error = "Password is required";
      }
    else
    {
        $pass1=test_input($_POST["pass1"]);
    }    

    $qry="SELECT * from cust_details WHERE Email='$email' AND Password='$pass1' ";
    $res=mysqli_query($connect,$qry)or die(mysqli_error($connect));
    if(mysqli_num_rows($res)==1)
    {
      $fquery="SELECT Cust_id,Fname from cust_details WHERE Email='$email' AND Password='$pass1' ";
      $res=mysqli_query($connect,$fquery)or die(mysqli_error($connect));

      $_SESSION['message']="you are now logged in";
      $row = mysqli_fetch_assoc($res);
      $_SESSION['username']=$row["Fname"];
      $_SESSION['id']=$row["Cust_id"];
      header("Location:products.php");

    }
    else
    {
      $_SESSION['message']="Invalid username or password!!!";
    }    
}
function test_input($data)
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>