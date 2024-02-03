<?php

    include_once "../config/dbconnect.php";
    
    $customer_id=$_POST['record'];
    $query="DELETE FROM customer where customer_id='$customer_id'";

    $data=mysqli_query($conn,$query);

    if($data){
        echo"customer Deleted";
    }
    else{
        echo"Not able to delete";
    }
    
?>