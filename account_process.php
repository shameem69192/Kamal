<?php
session_start();
$host="localhost";$username="root";$password="";$db="usr";
$connect=mysqli_connect($host,$username,$password,$db)or die(mysqli_connect_error());
$fname_error=$lname_error=$email_error=$mobile_error=$gender_error=$pass1_error=$pass2_error="";
$fname=$lname=$email=$mobile=$gender=$pass1=$pass2="";
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    if (empty($_POST["fname"]))
      {
        $fname_error = "First name is required";
      }
    else
    {
      $fname = test_input($_POST["fname"]);
    
       if (!preg_match("/^[a-zA-Z ]*$/",$fname))
          {
              $fname_error = "Only letters and white space allowed";
          }
    }
    if (empty($_POST["lname"]))
      {
        $lname_error = "Last name is required";
      }
    else
    {
      $lname = test_input($_POST["lname"]);
    
       if (!preg_match("/^[a-zA-Z ]*$/",$lname))
          {
              $lname_error = "Only letters and white space allowed";
          }
    }
    if (empty($_POST["mobile"]))
         {
           $mobile_error = "Mobile no. is required";
         } 
     else {
           $mobile = test_input($_POST["mobile"]);
           // check if e-mail address is well-formed
           if (!preg_match("/^(\d[\s-]?)?[\(\[\s-]{0,2}?\d{3}[\)\]\s-]{0,2}?\d{3}[\s-]?\d{4}$/i",$mobile))
              {
               $mobile_error = "Invalid mobile number";
              }
           }
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
     
    if (empty($_POST["gender"]))
      {
        $gender_error = "Gender is required";
      }
    else
    {
      $gender = test_input($_POST["gender"]);
    
       if (!preg_match("/^[a-zA-Z ]*$/",$gender))
          {
              $gender_error = "Only letters allowed";
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
    if (empty($_POST["pass2"]))
      {
        $pass2_error = "Password is required";
      }
    else
    {
        $pass2=test_input($_POST["pass1"]);
    }
 if($pass1==$pass2 AND $pass1!="" AND $pass2!="")
 {
    $sql="INSERT INTO cust_details(Fname,Lname,Mobile,Email,Gender,Password) VALUES('$fname','$lname','$mobile','$email','$gender','$pass1')";
    $result=mysqli_query($connect, $sql)or die(mysqli_error($connect));
    $_SESSION['username']=$fname;
    header("Location:index.html");   
 }
 else if($pass1!=$pass2)
 {
     $_SESSION['message']="MISMATCH PASSWORD";
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
