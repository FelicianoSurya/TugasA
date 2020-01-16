<?php

include "connection.php";

$id = $_GET['id'];
$name = $_GET['name'];
$email = $_GET['email'];
$hp = $_GET['nohp'];

$edit = $_GET['submit'];

if($edit == 'Edit'){
  $sql = "update user set name='$name', email='$email',nohp='$hp' where id = '$id'";
  $query = mysqli_query($conn,$sql);
}
header('location:../view/myprofile.php');

 ?>
