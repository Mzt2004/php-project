<?php
  require_once('db/config.php');
  $testquery = "SELECT * FROM student";

  $result = mysqli_query($conn,$testquery);
  // while ($row= mysqli_fetch_assoc($result)) {
  //   echo $row['id'];
  //   echo $row['name'];
  //   echo $row['address'];
  //   echo "</br>";
  // }
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
      
  <div class="row">
    
    <div class="col-md-8 mx-auto">
      <table class="table">
        <tr>
          <th>
            ID
          </th>
          <th>Name</th>
          <th>Age</th>
          <th>Address</th>
          <th>Email</th>
        </tr>
        <?php while ($row= mysqli_fetch_assoc($result)) { ?>
        <tr>
          <td>
            <?php 
              echo $row['id'];
            ?>
          </td>
          <td>
            <?php 
              echo $row['name'];
            ?>
          </td>
          <td>
            <?php 
              echo $row['age'];
            ?>
          </td>
          <td>
            <?php 
              echo $row['address'];
            ?>
          </td>
          <td>
            <?php 
              echo $row['email'];
            ?>
          </td>
          <td>
            <a href="edit.php ?id=<?php echo $row['id'];?>" class="btn btn-success">Edit</a>
          </td>
          <td>
            <a href="delete.php ?id=<?php echo $row['id'];?>" class="btn btn-danger">Delete</a>
          </td>
        </tr>
        <?php }?>
      </table>
      
    </div>
    <div class="col-md-12 text-center">
    <a href="create.php" class=" btn btn-success m-3">Add Data</a>
    </div>
  </div>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>