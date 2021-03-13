


<?php
require  'databaseconnection1.php';

if($_SERVER["REQUEST_METHOD"] == "POST"){

    function data_test($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;}
      
      

    $email=  data_test($_POST['email']);
    $password= data_test($_POST['password']);

    if(empty($email) || empty($password)){

        echo '<h6 style="color:red ;margin:20px">*empty fields<h6>';
    }else{

  $sql ="select * from  users where email= '".$email."' and password='".md5($password)."'  ";

  $res =  mysqli_query($con,$sql);
 $data=mysqli_fetch_assoc($res);

 if(mysqli_num_rows($res) == 1){

$_SESSION['id'] =$data['id'];
$_SESSION['name'] =$data['name'];
$_SESSION['phone'] =$data['phone'];
$_SESSION['email'] =$data['email'];
$_SESSION['title'] =$data['title'];
$_SESSION['content'] =$data['content'];
$_SESSION['user_id'] =$data['user_id'];

header("location:profile1.php");


}
}

}


   ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>log in</title>
    <meta charset="utf-8">
   
    <meta name="viewport" content="width=device-width, initial-scale=1">


     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


</head>

<body>

    <div class="container">
        <h2 style="margin-top: 40px;">LOG IN</h2>
        <form action="  <?php  htmlspecialchars($_SERVER['PHP_SELF'])    ?> "  method="post" >



            <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input type="text" name="email" class="form-control"  id="exampleInputName" aria-describedby="" placeholder="Enter email">



            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputName" aria-describedby="" placeholder="Enter password">



            </div>




          


            <button type="submit"  name= "Submit"class="btn btn-dark">Log in</button>
        </form>
    </div>

</body>

</html>