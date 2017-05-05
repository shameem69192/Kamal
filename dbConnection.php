<?php 
define ('SERVER_ADDRESS' ,'localhost');
define ('USER_NAME' ,'root');
define ('PASSWORD' ,'');
define ('DATABASE' ,'usr');


$connect = mysqli_connect(SERVER_ADDRESS,USER_NAME,PASSWORD,DATABASE) or die(mysqli_connect_error());

?>