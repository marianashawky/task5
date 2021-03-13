


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Sign up</title>
    <meta charset="utf-8">
   
    <meta name="viewport" content="width=device-width, initial-scale=1">


     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


</head>

<body>

    <div class="container">
        <h2 style="margin-top: 40px;" >Sign up</h2>
        <form action="connectionuser.php" method="post" >

        <?php   
   if((isset($_GET['empty'])==1)){
    echo '<h6  id="empty" style="color:red ;margin:20px">*empty fields<h6>';
  } 
  ?>

        
            <div class="form-group">
                <label for="exampleInputEmail1">Name</label>
                
                <input type="text" name="name" class="form-control" value="<?php echo isset($_POST["name"])?$_POST["name"]:'' ?>"id="exampleInputName" aria-describedby="" placeholder="Enter Name">


            </div>


            <div class="form-group">
                <label for="exampleInputEmail1">Phone</label>
                <input type="text" name="phone" class="form-control" value="<?php echo isset($_POST["phone"])?$_POST["phone"]:'' ?>"id="exampleInputName" aria-describedby="" placeholder="Enter phone">


            <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input type="text" name="email" class="form-control" value="<?php echo isset($_POST["email"])?$_POST["email"]:'' ?>"id="exampleInputName" aria-describedby="" placeholder="Enter email">



            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Pasword</label>
                <input type="password" name="password" class="form-control" id="exampleInputName" aria-describedby="" placeholder="Enter password">



            </div>




         


            <button type="submit" class="btn btn-dark">Submit</button>
        </form>
    </div>

</body>

</html>
 



