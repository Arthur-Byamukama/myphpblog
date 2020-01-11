<?php
// create connection
$conn = mysqli_connect('localhost', 'root', 'admin', 'testerblog');
// check connection
if(mysqli_connect_errno()){
  //connection failed
  echo 'failed to connect to MYSQL'. mysqli_connect_errno();
}
 ?> 
