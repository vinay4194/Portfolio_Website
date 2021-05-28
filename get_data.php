<?php

   $con= mysqli_connect("localhost","root","","portfolio_form_data");

   extract($_POST);
   if(isset($_POST['send-msg'])){
      $sql="INSERT INTO `form_data`( `name`, `email`, `subject`, `message`) VALUES ('$name','$email','$subject','$message')";
      $query=mysqli_query($con,$sql);
      header('location:index.html');
   }
?>
