<?php include('partials/menu.php');?>

<div class="main-content">
    <div class="wrapper">
        <h1>Add Admin</h1>
        <br>  <br>
        <?php
        if(isset($_SESSION['add']))
        {
            echo $_SESSION['add'];
            unset($_SESSION['add']);
        }
        ?>

        <form action="" method="POST">

            <table class="tbl-30">
                <tr>
                    <td>Full name: </td>
                    <td><input type="text" name="full_name" placeholder="Enter your name: "></td>
                </tr>
                <tr>
                    <td>Username:</td>
                    <td>
                        <input type="text" name="username" placeholder="Your Username: ">
                    </td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td>
                        <input type="password" name="password" placeholder="Your password: ">
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <!-- <input type="submit" name="submit" value="Add admin" class="btn-secondary"> -->
                        <input type="submit" name="submit" value="Add admin"class="btn-secondary" >

                    </td>
                </tr>
            </table>

        </form>

    </div>

</div>



<?php include('partials/footer.php');?>

<?php
if(isset($_POST['submit'])){
    $full_name=$_POST['full_name'];
    $username=$_POST['username'];
    $password=md5($_POST['password']);

$sql="INSERT INTO tbl_admin SET
       full_name='$full_name',
    username='$username',
    password='$password'
" ;

//executing query and saving data into database


//    $res = mysqli_query($conn,$sql) or die(mysqli_error());
   $res = mysqli_query($conn,$sql) or die (mysqli_error($conn)); 

  if($res==true)
   {
//    echo "Data Inserted";
$_SESSION['add']="Admin Added Successfully";
header("location:".SITEURL.'admin/manage-admin.php');
    }
  else{
//    echo "Failed to insert data";
$_SESSION['add']="Fail to  Add Admin";
header("location:".SITEURL.'admin/add-admin.php');
}

   
     

//   
//   
//       

   //    $_SESSION['add'] = "Admin added succsessfully";

   //   header("location:".SITEURL.'admin/manage-admin.php');
//   }
//   
//   
//      
   //    $_SESSION['add'] = "Failed to add Admin";
   //   header("location:".SITEURL."admin/add-admin.php");
//  
}
 ?>