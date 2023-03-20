<?php


$conn = mysqli_connect('localhost','root','','user_db');

session_start();

if(isset($_POST['submit'])){

 
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);
 
   $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);


   if(mysqli_num_rows($result) > 0){

      $row = mysqli_fetch_array($result);

   
        
         header('location:http://localhost/MYGUVIPROJECT/profile.html');

      
   
   }else{
      $error[] = 'incorrect email or password!';
   }

};
?>
