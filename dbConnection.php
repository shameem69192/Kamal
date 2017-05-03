<?php 
define ('SERVER_ADDRESS' ,'192.168.0.107');
define ('USER_NAME' ,'root');
define ('PASSWORD' ,'9999');
define ('DATABASE' ,'usr');


$connect = mysqli_connect(SERVER_ADDRESS,USER_NAME,PASSWORD,DATABASE) or die(mysqli_connect_error());

?>