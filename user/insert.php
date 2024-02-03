<?php
    include_once "../config/dbconnect.php";
    // $nameErr=$addressErr=$numberErr=$passwordErr='';
    if(isset($_POST['submit']))
    {
        $customer_name = $_POST['customer_name'];
        $customer_address= $_POST['customer_address'];
        $customer_number= $_POST['customer_number'];
        $customer_password= $_POST['customer_password'];

         // validation for name
            if (empty($_POST["customer_name"])) {  
                echo $username_error ="field username is empty";

            }
            else{
              if(!preg_match("/^[a-zA-Z]*$/", $customer_name)){
                echo $username_error ="field username is empty";
              }
            }
    //         // address validation
    //          if (empty($_POST["customer_address"])) {  
    //              $addressErr="address Requiered";

    //         }
    //         // number validation
    //           if (empty($_POST["customer_number"])) {  
    //              $numberErr="Number Requiered";

    // } else {  
  
    //         // check if mobile no is well-formed  
    //         if (!preg_match ("/^[0-9]*$/", $customer_number) ) {  
    //         $numberErr = "Only numeric value is allowed.";  
    //         }  
    //     //check mobile no length should not be less and greator than 10  
    //     if (strlen ($customer_number) != 10) {  
    //         $numberErr = "Mobile no must contain 10 digits.";  
          
    // }  
      

    //         }
    //         // password validation
    //           if (empty($_POST["customer_password"])) { 
    //            $passwordErr="password Requiered"; 
    //           }  
            $Dup_customer_name = mysqli_query($conn,"SELECT * FROM customer WHERE customer_name='$customer_name'");
            if (mysqli_num_rows($Dup_customer_name)) {
                echo "
                <script>
                alert('this username is already taken');
                window.location.href='register.php';
                </script>
                ";
            }
    //       


       else {
              $insert = mysqli_query($conn,"INSERT INTO customer
         (customer_name,customer_address,customer_number,customer_password) VALUES ('$customer_name','$customer_address','$customer_number','$customer_password')");
              echo "
              <script>
              alert('Register sucessful');
              window.location.href='register.php';
              </script>
              ";
         }  
     }
    
        
?>