<?php 
require_once('db/config.php');
if($_SERVER['REQUEST_METHOD'] =='POST'){
    $name = $_POST['name'];
$age =$_POST['age'];
$email=$_POST['email'];
$address = $_POST['address'];

$sql = "INSERT INTO student(name,age,email,address)Values('$name','$age','$email','$address')";
mysqli_query($conn,$sql);
header('location:index.php');
}

?>

<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <div class="container">
        <div class="row  tex-center">
            <div class="col-md-6 mx-auto" >
                <form action="#" method="post">
                <div class="form-group">
                  <label for="name">Username</label>
                  <input type="text"
                    class="form-control" name="name" id="name" aria-describedby="helpId" placeholder="Enter Name">
                  <small id="helpId" class="form-text text-muted">Name</small>
                </div>

                <div class="form-group">
                  <label for="age">Age</label>
                  <input type="text"
                    class="form-control" name="age" id="age" aria-describedby="helpId" placeholder="Enter Age">
                  <small id="helpId" class="form-text text-muted">Age</small>
                </div>
                
                <div class="form-group">
                  <label for="address">Email</label>
                  <input type="text-area"
                    class="form-control" name="email" id="email" aria-describedby="helpId" placeholder="Enter email">
                  <small id="helpId" class="form-text text-muted">email</small>
                </div>
                
                <div class="form-group">
                  <label for="address">Address</label>
                  <textarea class="form-control" name="address" id="address" rows="4"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                
            </div>
        </div>
      </div>





    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>