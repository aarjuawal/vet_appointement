<?php
    include_once "../config/dbconnect.php";

    $customer_id=$_POST['customer_id'];
    $customer_name= $_POST['customer_name'];
    $customer_address= $_POST['customer_address'];
    $customer_number= $_POST['customer_number'];
   $customer_password= $_POST['customer_password'];
    $updateItem = mysqli_query($conn,"UPDATE customer SET 
        customer_name=$customer_name,
        customer_address=$customer_address,
        customer_number=$customer_number,
        customer_password=$customer_password
        WHERE customer_id=$customer_id");


    if($updateItem)
    {
        echo "true";
    }
?>