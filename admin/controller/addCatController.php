<?php
    include_once "../config/dbconnect.php";
    
    if(isset($_POST['upload']))
    {
       $pet_id = $_POST['pet_id'];
        $customer_id= $_POST['customer_id'];
        $pet_name = $_POST['pet_name'];
        $pet_age= $_POST['pet_age'];
        $pet_type= $_POST['pet_type'];
        $pet_gender = $_POST['pet_gender'];

         $insert = mysqli_query($conn,"INSERT INTO pet
         (pet_id,customer_id,pet_name,pet_age,pet_type,pet_gender) VALUES ('$pet_id','$customer_id','$pet_name','$pet_age','$pet_type','$pet_gender')");
 
         if(!$insert)
         {
             echo mysqli_error($conn);
             header("Location: ../dashboard.php?variation=error");
         }
         else
         {
             echo "Records added successfully.";
             header("Location: ../dashboard.php?variation=success");
         }
     
    }
        
?>