<?php
    include_once "../config/dbconnect.php";

    $ID=$_POST['ID'];
    $d_name= $_POST['d_name'];
    $d_address= $_POST['d_address'];
    $d_contactno= $_POST['d_contactno'];
   
    $updateItem = mysqli_query($conn,"UPDATE doctor SET 
        doctor_name=$d_name,
        doctor_address=$d_address,
        doctor_contactno=d_contactno 
        WHERE doctor_id=$ID");


    if($updateItem)
    {
        echo "true";
    }
?>