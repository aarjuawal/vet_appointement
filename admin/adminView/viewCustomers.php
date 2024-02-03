<div >
  <h2>Manage Customers</h2>
  <table class="table ">
    <thead>
      <tr>
        <th class="text-center">S.N.</th>
        <th class="text-center">Username </th>
        <th class="text-center">Address</th>
        <th class="text-center">Contact Number</th>
        <th class="text-center" colspan="2">Action</th>
      </tr>
    </thead>
    <?php
      include_once "../config/dbconnect.php";
      $sql="SELECT * from customer ";
      $result=$conn-> query($sql);
      $count=1;
      if ($result-> num_rows > 0){
        while ($row=$result-> fetch_assoc()) {
           
    ?>
    <tr>
      <td><?=$count?></td>
      <td><?=$row["customer_name"]?></td>
      <td><?=$row["customer_address"]?></td>
      <td><?=$row["customer_number"]?></td> 
        <td><button class="btn btn-primary" style="height:40px" onclick="customerEditForm('<?=$row['customer_id']?>')">Edit</button></td>
      <td><button class="btn btn-danger" style="height:40px" onclick="customerDelete('<?=$row['customer_id']?>')">Delete</button></td>
    </tr>
    <?php
            $count=$count+1;
           
        }
    }
    ?>
  </table>