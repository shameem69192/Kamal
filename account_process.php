<?php
session_start();
require('dbConnection.php');
$fname_error=$lname_error=$email_error=$mobile_error=$gender_error=$pass1_error=$pass2_error="";
$fname=$lname=$email=$mobile=$gender=$pass1=$pass2=$errorMsg="";
$anyError = false;
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    if (empty($_POST["fname"]))
      {
        $fname_error = "First name is required";
        $anyError = true;
      }
    else
    {
      $fname = test_input($_POST["fname"]);
    
       if (!preg_match("/^[a-zA-Z ]+$/",$fname))
          {
              $fname_error = "Only letters and white space allowed";
              $anyError = true;
          }
    }
    if (empty($_POST["lname"]))
      {
        $lname_error = "Last name is required";
        $anyError = true;
      }
    else
    {
      $lname = test_input($_POST["lname"]);
    
       if (!preg_match("/^[a-zA-Z ]+$/",$lname))
          {
              $lname_error = "Only letters and white space allowed";
              $anyError = true;
          }
    }
    if (empty($_POST["mobile"]))
         {
           $mobile_error = "Mobile no. is required";
           $anyError = true;
         } 
     else {
           $mobile = test_input($_POST["mobile"]);
           
           if (!preg_match("/^[0-9]{10}$/i",$mobile))
              {
               $mobile_error = "Only 10 digits mobile number";
               $anyError = true;
              }
           }
    if (empty($_POST["email"]))
        {
         $email_error = "Email is required";
         $anyError = true;
        }
    else
        {
          $email = test_input($_POST["email"]);
          // check if e-mail address is well-formed
          if (!filter_var($email, FILTER_VALIDATE_EMAIL))
            {
              $email_error = "Invalid email format";
              $anyError = true;
            }
        }
     
    if (empty($_POST["gender"]))
      {
        $gender_error = "Gender is required";
        $anyError = true;
      }
    else
    {
      $gender = test_input($_POST["gender"]);
    
       if (!preg_match("/^[MFO]$/",$gender))
          {
              $gender_error = "Only M/F/O allowed";
              $anyError = true;
          }   
    }      
    if (empty($_POST["pass1"]))
      {
        $pass1_error = "Password is required";
        $anyError = true;
      }
    else
    {
        $pass1=test_input($_POST["pass1"]);
    }
    if (empty($_POST["pass2"]))
      {
        $pass2_error = "Password is required";
        $anyError = true;
      }
    else
    {
        $pass2=test_input($_POST["pass2"]);
    }
  if(!$anyError) {
     if(strcmp($pass1,$pass2)==0 AND $pass1!="" AND $pass2!="" )
     {
      $pass1=md5($pass1);
        $sql="INSERT INTO cust_details(Fname,Lname,Mobile,Email,Gender,Password) VALUES('$fname','$lname','$mobile','$email','$gender','$pass1')";
        $result=mysqli_query($connect, $sql);
        if(!$result) {
          $anyError = true;
          $errorMsg =  mysqli_error($connect);
        } else {
          require 'dologin.php';
          dologin($connect,$email);
          // $_SESSION['username']=$fname;
          // header("Location:products.php");   
        }
     }
     else if($pass1!=$pass2)
     {
         $_SESSION['message']="MISMATCH PASSWORD";
     }
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
