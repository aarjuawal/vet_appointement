
<div >
  <h3>Manage Doctors</h3>
  <table class="table ">
    <thead>
      <tr>
        <th class="text-center">S.N.</th>
        <th class="text-center">doctor name</th>
        <th class="text-center">address</th>
        <th class="text-center">contact_no</th>
        <th class="text-center" colspan="2">Action</th>
      </tr>
    </thead>
    <?php
      include_once "../config/dbconnect.php";
      $sql="SELECT * from doctor";
      $result=$conn-> query($sql);
      $count=1;
      if ($result-> num_rows > 0){
        while ($row=$result-> fetch_assoc()) {
    ?>
    <tr>
      <td><?=$count?></td>
      <td><?=$row["doctor_name"]?></td>  
      <td><?=$row["doctor_address"]?></td> 
      <td><?=$row["doctor_contactno"]?></td>  
      <!-- <td><button class="btn btn-primary" >Edit</button></td> -->
       <td><button class="btn btn-primary" style="height:40px" onclick="customerEditForm('<?=$row['doctor_id']?>')">Edit</button></td>
      <td><button class="btn btn-danger" style="height:40px" onclick="sizeDelete('<?=$row['doctor_id']?>')">Delete</button></td>
      </tr>
      <?php
            $count=$count+1;
          }
        }
      ?>
  </table>

  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-secondary" style="height:40px" data-toggle="modal" data-target="#myModal">
    Add doctor
  </button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">New doctor</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <form  enctype='multipart/form-data' action="./controller/addSizeController.php" method="POST">
            <div class="form-group">
              <label for="size">Doctor id:</label>
              <input type="number" class="form-control" name="doctor_id" required>
               <label for="size">Doctor Name:</label>
              <input type="text" class="form-control" name="doctor_name" required>
               <label for="size">Doctor address:</label>
              <input type="text" class="form-control" name="doctor_address" required>
               <label for="size">Doctor contactno:</label>
              <input type="text" class="form-control" name="doctor_contactno" required>
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-secondary" name="upload" style="height:40px">Add Doctor</button>
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
   