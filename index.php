<?php
include "db_conn.php";

?>



<!DOCTYPE html>
<html lang='en'>
    <head>
        <!-- boostrap -->
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
 

    <title>PHP CRUD </title>
    </head>
    <body>
        <nav style="background-color: gray" class=" mb-3 navbar navbar-light justify-content-center md-5 fs-3">
            PHP CRUD Application
        </nav>

        <div class="container">
            <?php
                if(isset($_GET['msg'])){
                    $msg = $_GET['msg'];
                    echo '<div class="alert alert-primary" role="alert">
                    '.$msg.'
                </div>';
                }

            ?>



            <a href="add_new.php" class="btn btn-dark mb-3">Add New</a>

            <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Email</th>
      <th scope="col">Gender</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php
        $sql = "SELECT * from `user`";
        $result = mysqli_query($conn,$sql);
        while ($row = mysqli_fetch_assoc($result)){
    ?>

    <tr>
      <td scope="row"><?php echo $row['id'] ?></td>
      <td scope="row"><?php echo $row['first_name'] ?></td>
      <td scope="row"><?php echo $row['last_name'] ?></td>
      <td scope="row"><?php echo $row['email'] ?></td>
      <td scope="row"><?php echo $row['gender'] ?></td>
      <td>
      <a href="edit.php?id=<?php echo $row['id'] ?>" 
      class="btn btn-warning"> Edit</a>
      <a href="delete.php?id=<?php echo $row['id'] ?>" 
      class="btn btn-danger"> Delete</a>
      </td>
    </tr>


    <?php
        } 
    ?>



    



    
    
  </tbody>
</table>




        </div>

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>


    </body>

</html>