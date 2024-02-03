
<div >
  <h3>Manage pets</h3>
  <table class="table ">
    <thead>
      <tr>
        <th class="text-center">S.N.</th>
        <th class="text-center">Pet Name</th>
        <th class="text-center">Age</th>
        <th class="text-center">Type</th>
        <th class="text-center">gender</th>
        <th class="text-center" colspan="2">Action</th>
      </tr>
    </thead>
    <?php
      include_once "../config/dbconnect.php";
      $sql="SELECT * from pet";
      $result=$conn-> query($sql);
      $count=1;
      if ($result-> num_rows > 0){
        while ($row=$result-> fetch_assoc()) {
    ?>
    <tr>
      <td><?=$count?></td>
      <td><?=$row["pet_name"]?></td>   
      <td><?=$row["pet_age"]?></td>   
      <td><?=$row["pet_type"]?></td>   
      <td><?=$row["pet_gender"]?></td>   
      <!-- <td><button class="btn btn-primary" >Edit</button></td> -->
       <td><button class="btn btn-primary" style="height:40px" onclick="variationEditForm('<?=$row['pet_id']?>')">Edit</button></td>
      <td><button class="btn btn-danger" style="height:40px" onclick="categoryDelete('<?=$row['pet_id']?>')">Delete</button></td>
      </tr>
      <?php
            $count=$count+1;
          }
        }
      ?>
  </table>

  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-secondary" style="height:40px" data-toggle="modal" data-target="#myModal">
    Add New Pet
  </button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">New pet</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <form  enctype='multipart/form-data' action="./controller/addCatController.php" method="POST">
            <div class="form-group">
              <label for="size">Pet id:</label>
              <input type="number" class="form-control" name="pet_id" required>
              <label for="size">Customer id:</label>
              <input type="number" class="form-control" name="customer_id" required>
              <label for="pet_name">pet Name:</label>
              <input type="text" class="form-control" name="pet_name" required>
              <label for="size">Pet Age:</label>
              <input type="text" class="form-control" name="pet_age" required>
               <label for="size">Pet Type:</label>
              <input type="text" class="form-control" name="pet_type" required>
               <label for="size">Pet Gender:</label>
              <input type="text" class="form-control" name="pet_gender" required>
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-secondary" name="upload" style="height:40px">Add Pet</button>
            </div>
          </form>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal" style="height:40px">Close</button>
        </div>
      </div>
      
    </div>
  </div>

  
</div>
   