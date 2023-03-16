<?php
include "db_conn.php";


if(isset($_POST['submit'])){
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];

    $sql = "INSERT INTO user (`id`,`first_name`, `last_name`, `email`, `gender`)
    VALUES (Null,'$first_name', '$last_name', '$email', '$gender')";

    $reault = mysqli_query($conn,$sql);

    if($reault){
        header("Location: index.php?msg=New record created sucessfully");
    }else{
        echo "Failed: " . mysqli_error($conn);
    }





}






?>



<!DOCTYPE html>
<html lang='en'>
    <head>
        <!-- boostrap -->
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
 

    <title>PHP CRUD </title>
    </head>
    <body>
        <nav style="background-color: gray" class="navbar navbar-light justify-content-center md-5 fs-3">
            PHP CRUD Application
        </nav>

        <div class="container">
            <div class="text-center md-4">
                <h3>Add New User</h3>
                <p class="text-muted">Complete the form</p>
                
                <div class="container d-flex ">
                    <form action="" method="post">
                    <div class="row mb-3">
                        <div class="col">
                            <label class="form-label">First Name</label>
                            <input type="text" class="form-control" name="first_name" placeholder="First Name">
                        </div>

                        <div class="col">
                            <label class="form-label">Last Name</label>
                            <input type="text" class="form-control" name="last_name" placeholder="Last Name">
                        </div>
                    </div>

                    <div class=" mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" class="form-control" name="email" placeholder="Email">
                    </div> 

                    <div class="form-group mb-3">
                            <label class="form-label">Gender</label> &nbsp
                            <input type="radio" class="form-check-input" name="gender"
                            id="male" value="male">
                            <label class="form-input-label" for="male">Male</label>

                            <input type="radio" class="form-check-input" name="gender"
                            id="female" value="female">
                            <label class="form-input-label" for="female">Female</label>
                    </div>  
                    
                    <div>
                        <button type="submit" class="btn btn-sucess" name="submit"> Save 
                        </button>
                        <a href="index.php" class="btn btn-danger">Cancel</a>
                    </div>

                    </form>
                </div>



            </div>



        </div>

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>


    </body>

</html>