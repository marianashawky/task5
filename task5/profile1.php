<?php 
 
       require 'databaseconnection1.php';



if(isset ($_SESSION['id'])){

       $sql = "select * from users";
       $res = mysqli_query($con,$sql);   
       $data = mysqli_fetch_assoc($res);

        
?>




<!DOCTYPE HTML>
<html>

<head>
    <title>data</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">



</head>

<body>
<div class="container">
        <form action="logout.php" method="post" >

        <button type="submit"  name= "Submit1" class="btn btn-danger"  >Log out</button>

        </form>
</div>

    <div class="container">



        <div class="page-header">

        <center style="margin-top: 40px;">
            <h2 style="color:red">welcome <?php echo $_SESSION['name']   ?></a></h2>
            </center>
        </div>






        <table class='table table-hover table-bordered table-dark'>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Phone</th>
                <th>Email</th>
            </tr>




<?php 
            

              
                echo '<tr>';
            
                echo '<td>'.$_SESSION['id'].'</td>';
                echo '<td>'.$_SESSION['name'].'</td>';
                echo '<td>'.$_SESSION['phone'].'</td>';
                echo '<td>'.$_SESSION['email'].'</td>';


                echo '</tr>';

       
 







?>







        </table>
       




    </div>







    <div class="container">
        <h2> My articale</h2>
        <form action="connectionpost.php" method="post" >
        <?php   
   if((isset($_GET['empty'])==1)){
    echo '<h6  id="empty" style="color:red ;margin:20px">*empty fields<h6>';
  } 
  ?>

            <div class="form-group">
                <label for="exampleInputEmail1">Title</label>
                <input type="text" name="title" class="form-control" id="exampleInputName" aria-describedby="" placeholder="Enter Name">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Content</label>


                <textarea class="form-control" name="content"id="exampleFormControlTextarea1" rows="3"></textarea>

            </div>

            <div class="form-group">

             
              <label for="exampleInputEmail1">created at:</label>
                <?php
                date_default_timezone_set('Africa/Cairo');
                $created= date("d/m/Y  h:i:sa ");
                echo $created   ?>



            </div>


            <button type="submit" class="btn btn-primary">Show post </button>
        </form>
    </div>





    <?php


}
else{
    header("location:login.php");

}








?>



</body>



</html>
