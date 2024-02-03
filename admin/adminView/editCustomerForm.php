
<div class="container p-5">

<h4>Edit Customer Detail</h4>
<?php
    include_once "../config/dbconnect.php";
	$customer_id=$_POST['record'];
	$qry=mysqli_query($conn, "SELECT * FROM customer WHERE customer_id='$customer_id'");
	$numberOfRow=mysqli_num_rows($qry);
	if($numberOfRow>0){
		while($row1=mysqli_fetch_array($qry)){
      $customer_id=$row1["customer_id"];
?>
<form id="update-Items" onsubmit="updateCustomer()" enctype='multipart/form-data'>
	<div class="form-group">
      <input type="text" class="form-control" id="customer_id" value="<?=$row1['customer_id']?>" hidden>
    </div>
    <div class="form-group">
      <label for="name">Customer Name:</label>
      <input type="text" class="form-control" id="customer_name" value="<?=$row1['customer_name']?>">
    </div>
    <div class="form-group">
      <label for="address">address:</label>
      <input type="text" class="form-control" id="customer_address" value="<?=$row1['customer_address']?>">
    </div>
    <div class="form-group">
      <label for="contact number">Contact number:</label>
      <input type="number" class="form-control" id="customer_number" value="<?=$row1['customer_number']?>">
    </div>
   
    <div class="form-group">
      <button type="submit" style="height:40px" class="btn btn-primary" >Update Item</button>
    </div>
    <?php
    		}
    	}
    ?>
  </form>

    </div>