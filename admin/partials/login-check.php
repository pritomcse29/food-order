<?php
   if(isset($_SESSION['user'])){
       //user is not logged in
       //redirect to login page with  message
       $_SESSION['no-login-message']="<div class='error'>Please Login to access admin panel.</div>";
       header('location:'.SITEURL.'admin/login.php');
   }

?>