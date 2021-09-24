<?php
//include constants.php
include('../config/constants.php');
//1.get the ID of Admin to be deleted
 $id=$_GET['id'];

//create SQL Query to Delete Admin
$sql="DELETE FROM tbl_admin WHERE id=$id";
$res=mysqli_query($conn,$sql);
if($res==true){
// echo "Admin Deleted";
$_SESSION['delete']="<div class='success'>Admin Deleted Successfully</div>";
header('location:'.SITEURL.'admin/manage-admin.php');
}
else{
    // echo "Fail to Deleted Admin ";
    $_SESSION['delete']="<div class='error'>Fail To Delete Admin. Try Again Letter.</div>";
header('location:'.SITEURL.'admin/manage-admin.php');
}
//3.Redirect to manage Admin page with message (success/error)


?>