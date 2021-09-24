<?php include('partials/menu.php');?>
<div class="main-content">
    <div class="wrapper">
    <h1>Manage order</h1>
    <br> 
    <?php
         if(isset($_SESSION['update']))
         {
             echo $_SESSION['update'];
             unset($_SESSION['update']);
         }
        ?>
        <br> 
<!--button to add admin-->
<!-- <a href="#" class="btn-primary">Add Admin</a> -->
<br> 
<table style="width:100%;">
    <tr>
        <th style="padding:2%;">S.N</th>
        <th style="padding:2%;">Food</th>
        <th style="padding:2%;">price</th>
        <th style="padding:2%;">Qty.</th>
        <th style="padding:2%;">Total</th>
        <th style="padding:2%;"> Order Date</th>
        <th style="padding:2%;">Status</th>
        <th style="padding:2%;">Customer name</th>
        <th style="padding:2%;">contact</th>
        <th style="padding:2%;">Email</th>
        <th style="padding:2%;">Address</th>
        <th style="padding:2%;">Actions</th>
    </tr>
  
     <?php
     
     $sql="SELECT * FROM tbl_order ORDER BY id DESC";
     $res=mysqli_query($conn,$sql);
     $count=mysqli_num_rows($res);
     $sn=1;
     if($count>0){
         while($row=mysqli_fetch_assoc($res)){

         
$id=$row['id'];
$food=$row['food'];
$price=$row['price'];
$qty=$row['qty'];
$total=$row['total'];
$order_date=$row['order_date'];
$status=$row['status'];
$customer_name=$row['customer_name'];
$customer_contact=$row['customer_contact'];
$customer_email=$row['customer_email'];
$customer_address=$row['customer_address'];

?>


<tr>
        <td style="padding:2%;"><?php echo $sn++; ?></td>
        <td style="padding:2%;"><?php echo $food; ?></td>
        <td style="padding:2%;"><?php echo $price; ?></td>
        <td style="padding:2%;"><?php echo $qty; ?></td>
        
        <td style="padding:2%;">$<?php echo $total; ?></td>
        <td style="padding:2%;"><?php echo $order_date; ?></td>
        <td style="padding:2%;"><?php echo $status; ?></td>

        
        <td style="padding:2%;"><?php echo $customer_name; ?></td>
        <td style="padding:2%;"><?php echo $customer_contact; ?></td>
      
        
       
        <td style="padding:2%;"><?php echo $customer_email; ?></td>
        <td style="padding:2%;"><?php echo $customer_address; ?></td>
       
        <td style="padding:4%;"><a href="<?php echo SITEURL; ?>admin/update-order.php?id=<?php echo $id; ?>"class="btn-secondary">Update Order</a>
       
           
        </td>
    </tr>

    

<?php
         }
     }
     else{
         echo"<tr><td colspan='12'class='error'>Order Not Available</td></tr>";
     }
     
     ?>

</table>
    </div>
   
</div>
<?php include('partials/footer.php');?>