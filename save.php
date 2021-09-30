<?php
$con = mysqli_connect('localhost','id17584379_root','iTWdyTU!16hyUdby','id17584379_piratheep');
     $name = $_GET['name'];
     $email = $_GET['email'];
     $msg = $_GET['msg'];
 $sql = "INSERT INTO `shanu`(`name`, `email`, `text`) VALUES ('$name','$email','$msg')";
 $result = mysqli_query($con,$sql);
 ?>