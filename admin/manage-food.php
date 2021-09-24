<?php include('partials/menu.php');?>
<div class="main-content">
    <div class="wrapper">
    <h1>Manage Food</h1>
    <br> <br> <br>
<!--button to add admin-->
<a href="<?php echo SITEURL; ?>admin/add-food.php" class="btn-primary">Add Food</a>
<br> <br> <br>
<?php
 if(isset($_SESSION['add'])){
     echo $_SESSION['add'];
     unset( $_SESSION['add']);
 }

 if(isset($_SESSION['delete'])){
   echo $_SESSION['delete'];
    unset( $_SESSION['delete']);
 }

if(isset($_SESSION['upload'])){
  echo $_SESSION['upload'];
     unset( $_SESSION['upload']);
}
 if(isset($_SESSION['unauthorize'])){
    echo $_SESSION['unauthorize'];
    unset( $_SESSION['unauthorize']);
 }
 if(isset($_SESSION['update'])){
    echo $_SESSION['update'];
    unset( $_SESSION['update']);
 }


?>

<table style="width:100%;">
    <tr>
        <th >S.N</th>
        <th>Title</th>
        <th>Price</th>
        <th>Image</th>
        <th >Featured</th>
        <th>Active</th>
        <th>Actions</th>
    </tr>
    


     <?php
      $sql="SELECT * FROM tbl_food";
      $res=mysqli_query($conn,$sql);
      $count = mysqli_num_rows($res);
      $sn=1;

      if($count>0){
while($row=mysqli_fetch_assoc($res)){
    $id=$row['id'];
    $title=$row['title'];
    $price=$row['price'];
    $image_name=$row['image_name'];
    $featured=$row['featured'];
    $active=$row['active'];

    ?>
 <tr>
        <td style="padding:1%;"><?php echo $sn++; ?>.</td>
        <td style="padding:1%;"><?php echo $title; ?></td>
        <td style="padding:1%;"><?php echo $price; ?></td>
        <td style="padding:1%;"><?php 
        
        if($image_name==""){
echo "<div class='error'>Image not Added.</div>";
        }
        else{
            ?>
<img src=" <?php echo SITEURL; ?>images/food/<?php echo $image_name;?> " width="100px">
<?php
        }
        
        ?>
        </td>
        <td style="padding:1%;"><?php echo $featured; ?></td>
        <td style="padding:1%;"><?php echo $active; ?></td>

        
        <td><a href="<?php echo SITEURL; ?>admin/update-food.php?id=<?php echo $id; ?>"class="btn-secondary">Update Food</a>
       
       <a href="<?php echo SITEURL; ?>admin/delete-food.php?id=<?php
       echo $id; ?>&image_name<?php echo $image_name; ?>" class="btn-danger"> Delete Food</a>
           
        </td style="padding:1%;">
    </tr>


    <?php
}
      }
      else{
          echo "<tr><td colspan='7' class='error'>Food not Added Yet</td></tr>";
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