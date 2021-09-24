<?php include('partials/menu.php');?>
<div class="main-content">
    <div class="wrapper">
    <h1>Manage Category</h1>
    <br> 

    <?php
         if(isset($_SESSION['add'])){
             echo $_SESSION['add'];
             unset($_SESSION['add']);
         }
         if(isset($_SESSION['remove'])){
            echo $_SESSION['remove'];
            unset($_SESSION['remove']);
        }
        if(isset($_SESSION['delete'])){
            echo $_SESSION['delete'];
            unset($_SESSION['delete']);
        }

        if(isset($_SESSION['delete'])){
            echo $_SESSION['delete'];
            unset($_SESSION['delete']);
        }

        if(isset($_SESSION['no-category-found'])){
            echo $_SESSION['no-category-found'];
            unset($_SESSION['no-category-found']);
        }
        if(isset($_SESSION['update'])){
            echo $_SESSION['update'];
            unset($_SESSION['update']);
        }
        if(isset($_SESSION['upload'])){
            echo $_SESSION['upload'];
            unset($_SESSION['upload']);
        }
if(isset( $_SESSION['failed-remove'])){
    echo $_SESSION['failed-remove'];
   unset ($_SESSION['failed-remove']);
}
        ?>
        <br><br>
<!--button to add admin-->
<a href="<?php echo SITEURL; ?>admin/add-category.php" class="btn-primary">Add Category</a>
<br> <br> 

<table style="width:100%;">
    <tr>
        <th >S.N</th>
        <th>Title</th>
        <th>Image</th>
        <th >featured</th>
        <th>Active</th>
        <th>Actions</th>
    </tr>
    <?php
     $sql="SELECT * FROM tbl_category";
     $res=mysqli_query($conn,$sql);
     $count=mysqli_num_rows($res);
     $sn=1;
     if($count>0){
while($row=mysqli_fetch_assoc($res)){
    $id=$row['id'];
    $title=$row['title'];
    $image_name=$row['image_name'];
    $featured=$row['featured'];
    $active=$row['active'];

    ?>
<tr>
        <td style="padding:1%;"><?php echo $sn++; ?></td>
        <td style="padding:1%;"><?php echo $title; ?></td>
        <td style="padding:1%;">
        <?php 
        if($image_name!=""){
?>

<img src="<?php echo SITEURL;  ?>images/category/<?php echo $image_name; ?>" alt="" width="100px">
<?php
        }
        else{
            echo "<div class='error'>Image not Added.</div>";
        }
        
        ?>
    </td>
  

        <td style="padding:1%;"><?php echo $featured; ?></td>
        <td style="padding:1%;"><?php echo $active; ?></td>

        <td>
            <a href="<?php echo SITEURL;?>admin/delete-category.php?id=<?php echo $id; ?>&image_name=<?php echo $image_name; ?>"class="btn-secondary">Delete Category</a>

        <a href="<?php echo SITEURL;?>admin/update-category.php?id=<?php echo $id; ?>"class="btn-danger"> Update Category</a>
           
        </td style="padding:1%;">
    </tr>

    <?php
}
     }
     else{
         ?>
<tr>
    <td colspan="6"><div class="error">No Category Added.</div></td>
</tr>
         <?php
     }
    ?>
    

    <!-- <tr>
        <td style="padding:1%;">2.</td>
        <td style="padding:1%;">pritom sarkar</td>
        <td style="padding:1%;">pritom</td>
        <td><a href="#"class="btn-secondary">Update Admin</a>
        <a href="#"class="btn-danger"> Delete Admin</a>
        </td style="padding:1%;">
    </tr>

    <tr>
        <td style="padding:1%;">3.</td>
        <td style="padding:1%;">pritom sarkar</td>
        <td style="padding:1%;">pritom</td>
        <td><a href="#"class="btn-secondary">Update Admin</a>
        <a href="#"class="btn-danger"> Delete Admin</a>
        </td style="padding:1%;">
    </tr> -->
</table>

    </div>
   
</div>
<?php include('partials/footer.php');?>