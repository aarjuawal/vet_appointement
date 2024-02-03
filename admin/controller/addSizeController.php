<?php
    include_once "../config/dbconnect.php";
    
    if(isset($_POST['upload']))
    {
       
        $doctor_id =$_POST['doctor_id'];
        $doctor_name = $_POST['doctor_name'];
        $doctor_address = $_POST['doctor_address'];
        $doctor_contactno = $_POST['doctor_contactno'];
         $insert = mysqli_query($conn,"INSERT INTO doctor
         (doctor_id,doctor_name,doctor_address,doctor_contactno)   VALUES ('$doctor_id','$doctor_name','$doctor_address','$doctor_contactno')");
         
         if(!$insert)
         {
             echo mysqli_error($conn);
             header("Location: ../index.php?size=error");
         }
         else
         {
             echo "Records added successfully.";
             header("Location: ../index.php?size=success");
         }
     
    }
        
?>