<?php include('partials/menu.php');?>

<div class="main-content">
    <div class="wrapper">
<h1>Change Password</h1>
<br> <br>

<?php
 if(isset($_GET['id'])){
     $id=$_GET['id'];
 }
?>

<form action=""method="POST">
    <table class="tbl-30">
        <tr>
            <td>Old Password:</td>
            <td>
                <input type="password" name="old_password" placeholder="old password">
            </td>
        </tr>
        <tr>
            <td>New Password:</td>
            <td>
                <input type="password" name="new_password"placeholder="new password">
            </td>
        </tr>

        <tr>
            <td>Confirm Password:</td>
            <td>
                <input type="password" name="confirm_password" placeholder="Confirm Password">
            </td>
        </tr>

        <tr>
            <td colspan="2">
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <input type="submit" name="submit" value="change password" class="btn-secondary">
            </td>
        </tr>
    </table>
</form>
    </div>
    </div>

    <?php
     if(isset($_POST['submit']))
     {
        //  echo 'clicked';
        $id=$_POST['id'];
        $old_password=md5($_POST['old_password']);
        $new_password=md5($_POST['new_password']);
        $confirm_password=md5($_POST['confirm_password']);

        $sql="SELECT * FROM tbl_admin WHERE id=$id AND password='$old_password'";
        $res=mysqli_query($conn,$sql);
        
$count=mysqli_num_rows($res);
if($count==1){
// echo "user Found";
if($new_password==$confirm_password){
// echo "password matched";
 $sql2="UPDATE tbl_admin SET
 password='$new_password'
WHERE id=$id
";
$res2=mysqli_query($conn,$sql2);
if($res2==true){
    $_SESSION['change-pwd']="<div class='success'>password changed succesfully.</div>";
    header('location:'.SITEURL.'admin/manage-admin.php'); 
}
else{
    $_SESSION['change-pwd']="<div class='error'>Fail to change password.</div>";
    header('location:'.SITEURL.'admin/manage-admin.php'); 
}
}
else{
    $_SESSION['pwd-not-match']="<div class='error'>password did Not match.</div>";
    header('location:'.SITEURL.'admin/manage-admin.php'); 
}
        }
        else{
$_SESSION['user-not-found']="<div class='error'>User Not Found.</div>";
header('location:'.SITEURL.'admin/manage-admin.php');
        }
     }
    ?>

<?php include('partials/footer.php');?>