<?php

include 'connect.php';

if(isset($_POST['signUp'])){
    $fName=$_POST['fName'];
    $lName=$_POST['lName'];
    $email=$_POST['password'];
    $Address=$_POST['Address'];
    $pNumber=$_POST['pNumber'];
    $pWord=$_post['pWord'];
    $pWord=md5($pWord);
}
    $checkEmail="SELECT * From Users where email='$email'";
    $result = $conn-> query($checkEmail);
    if($result->num_rows>0){
       echo "Email already exists!";
       
    }
   else{
    $insertQuery="INSERT INTO users(fName,lName,email,pWord,Address,pNumber)
                  VALUES('$fName,$lName,$Address,$pNumber, $pWord')";
                  if($conn->query($insertQuery)==TRUE){
                    header('location:index.php');
                  }
                  else{
                    echo "error:".$conn->error;
                  }

   }
    


?>