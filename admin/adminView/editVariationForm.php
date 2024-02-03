
<div class="container p-5">

<h4>Edit doctor Detail</h4>
<?php
    include_once "../config/dbconnect.php";
    $ID=$_POST['record'];
    $qry=mysqli_query($conn, "SELECT * FROM doctor WHERE doctor_id='$ID'");
    $numberOfRow=mysqli_num_rows($qry);
    if($numberOfRow>0){
        while($row1=mysqli_fetch_array($qry)){
      $ID=$row1["doctor_id"];
?>
<form id="update-Items" onsubmit="updateVariations()" enctype='multipart/form-data'>
    <div class="form-group">
      <input type="text" class="form-control" id="ID" value="<?=$row1['doctor_id']?>" hidden>
    </div>
    <div class="form-group">
      <label for="name">doctor Name:</label>
      <input type="text" class="form-control" id="d_name" value="<?=$row1['doctor_name']?>">
    </div>
    <div class="form-group">
      <label for="desc">doctor address:</label>
      <input type="text" class="form-control" id="d_address" value="<?=$row1['doctor_address']?>">
    </div>
    <div class="form-group">
      <label for="price">Doctor contactno:</label>
      <input type="number" class="form-control" id="d_contactno" value="<?=$row1['doctor_contactno']?>">
    </div>
   
     
    <div class="form-group">
      <button type="submit" style="height:40px" class="btn btn-primary">Update doctor</button>
    </div>
    <?php
            }
        }
    ?>
  </form>

    </div>