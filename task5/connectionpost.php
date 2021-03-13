<?php


require 'databaseconnection1.php';
function data_test($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;}


  if($_SERVER["REQUEST_METHOD"] == "POST");{
    $title = data_test($_POST['title']);  
    $content= data_test($_POST['content']);
    $userid=$_SESSION['id'];

    if(empty($title)|| empty($content)){

      header("location:profile1.php?empty ");


  }else{      
   $sql  = "insert into posts (title,content,user_id) values ('".$title."','".$content."','".$userid."')" ;

    $reselt =  mysqli_query($con,$sql); 

  
  } 
  

} 





?>












<?php 
 



 if(isset ($_SESSION['id'])){


  


       $sql = "SELECT users.*, posts.* from users join posts on posts.user_id = users.id";
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



        <div class="page-header">

        <center style="margin-top: 40px;">
            <h2 style="color:red"> My posts </h2>
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

                echo  '<tr>';
                echo ' <th>title</th>';
                echo'<th>content</th>';
                echo'<th>User id</th>';

                echo'</tr>';

     
                while($data = mysqli_fetch_assoc($res)){

                echo '<tr>';
                echo '<td>'.$data['title'].'</td>';
                echo '<td>'.$data['content'].'</td>';
                echo '<td>'.$data['user_id'].'</td>';

                echo '</tr>';

                }
       
 







?>







        </table>
       



 <?php


          

}


?>

    </div>

    <div class="container">
        <form action="logout.php" method="post" >

        <button type="submit"  name= "Submit1" class="btn btn-danger"  >Log out</button>

        </form>
</div>

</body>


</html>




