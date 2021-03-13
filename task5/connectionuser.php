<?php

require 'databaseconnection1.php';
function data_test($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;}



    if($_SERVER["REQUEST_METHOD"] == "POST");{
        $name = data_test($_POST['name']);  
        $phone= data_test($_POST['phone']);
        $email= data_test($_POST['email']);
        $password= data_test($_POST['password']);
    
  
        if(empty($name)|| empty($phone)||empty($password) || empty($password)){

          header("location:formuser.php?empty ");


      }else{      
       $sql  = "insert into users (name,phone,email,password) values ('".$name."','".$phone."','".$email."','".md5($password)."')" ;

        $res =  mysqli_query($con,$sql); 
    
if($res){

    echo"success data";


}

else{

    echo  "error".mysqli_error($con);
}


} 

    }



?>

