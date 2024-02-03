<?php

    include_once "../config/dbconnect.php";
    
    $doctor_id=$_POST['record'];
    $query="DELETE FROM doctor where doctor_id='$doctor_id'";

    $data=mysqli_query($conn,$query);

    if($data){
        echo"doctor Deleted";
    }
    else{
        echo"Not able to delete";
    }
    
?>