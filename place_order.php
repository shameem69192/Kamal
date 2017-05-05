<?php
session_start();
require('dbConnection.php');

$fname_error=$lname_error=$email_error=$mobile_error=$gender_error=$pass1_error=$pass2_error="";
$fname=$lname=$email=$mobile=$gender=$pass1=$pass2="";
$anyError = false;
$messageHERE = "";
if(isset($_GET['orderid']))
$orderID = $_GET['orderid'];
else {
  header("Location: products.php");
  exit(0);
}

if(isset($_SESSION['phone']))
$phone = $_SESSION['phone'];
else {
  header("Location: products.php");
  exit(0);
}
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $word = $_POST['Order_id'];
    if(!isset($word) || !preg_match("/^[a-zA-Z0-9]+$/",$word)) {
      $messageHERE = "Invalid Order ID";
      $anyError = true;
    }


    $word = $_POST['Quantity'];
    if(!isset($word) || !preg_match("/^[0-9]+$/",$word)) {
      $messageHERE = "Invalid Quantity";
      $anyError = true;
    }

    $word = $_POST['Phone'];
    if(!isset($word) || !preg_match("/^[0-9]{10}$/",$word)) {
      $messageHERE = "10 digit phone number only";
      $anyError = true;
    }
    
    $word = $_POST['Address'];
    if(!isset($word) || !preg_match("/^(.|[\n\t]){20,250}$/",$word)) {
      $messageHERE = "Address length should be 20-250";
      $anyError = true;
    }

    $word = $_POST['Payment_type'];
    if(!isset($word) || !preg_match("/^(cheque|cash|card)$/i",$word)) {
      $messageHERE = "Invalid Payment Type (cheque/cash/card) only";
      $anyError = true;
    }

    if(!isset($_SESSION['id'])) {
      $messageHERE = "Please Login First!";
      $anyError = true;
    }
    


  if(!$anyError) {

      $fquery="SELECT Item_id,Number from items WHERE Item_id='".test_input($_POST['Order_id'])."'";
      $res=mysqli_query($connect,$fquery)or die(mysqli_error($connect));
      if(mysqli_num_rows($res)==0) {
        $anyError =true;
        $messageHERE = "Invalid OrderID";
      } else {
        $itemLeft = mysqli_fetch_assoc($res)['Number'];
        if($itemLeft<$_POST['Quantity']) {
          $anyError = true;
          $messageHERE = "Quantity Out of Stock";
        } else {



             $sql="INSERT INTO order_details(Order_id,Quantity,Phone,Address,Payment_type,Cust_id) VALUES('"
              . test_input($_POST['Order_id']) . "','"
              . test_input($_POST['Quantity']) . "','"
              . test_input($_POST['Phone']). "','"
              . test_input($_POST['Address']). "','"
              . test_input($_POST['Payment_type']). "','"
              . test_input($_SESSION['id']). "')";
                $result=mysqli_query($connect, $sql)or die(mysqli_error($connect));

              $sql2="UPDATE items SET Number=Number-".test_input($_POST['Quantity']). " WHERE Item_id='".test_input($_POST['Order_id'])."'";

              $result=mysqli_query($connect, $sql2)or die(mysqli_error($connect));
                $messageHERE = "Order Placed!";
             

                $str = $sql;

                require 'vendor/phpmailer/phpmailer/PHPMailerAutoload.php';

                $mail = new PHPMailer;

                $mail->isSMTP();                                      // Set mailer to use SMTP
                // $mail->SMTPDebug = 2;
                $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
                $mail->SMTPAuth = true;                               // Enable SMTP authentication
                $mail->Username = 'kamalfurnitures01@gmail.com';                 // SMTP username
                $mail->Password = 'mywork1133';                           // SMTP password
                $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
                $mail->Port = 587;                                    // TCP port to connect to

                $mail->setFrom('kamalfurnitures01@gmail.com', 'OrderPlaced');
                $mail->addAddress($_SESSION['email'], $_SESSION['email']);     // Add a recipient
                $mail->addAddress('kamalfurnitures01@gmail.com', 'Kama Furnitures');     // Add a recipient
                
                $mail->Subject = 'Order Placed';
                $mail->Body    = $str;
                
                if(!$mail->send()) {
                    // echo 'Message could not be sent.';
                    // echo 'Mailer Error: ' . $mail->ErrorInfo;
                } else {
                    // echo 'Message has been sent';
                }


        }

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
