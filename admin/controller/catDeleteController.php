<?php

    include_once "../config/dbconnect.php";
    
    $pet_id=$_POST['record'];
    $query="DELETE FROM pet where pet_id='$pet_id'";

    $data=mysqli_query($conn,$query);

    if($data){
        echo"pet Deleted";
    }
    else{
        echo"Not able to delete";
    }
    
?>