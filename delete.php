<?php

include "db_conn.php";
$id = $_GET['id'];
$sql = "DELETE FROM `user` where id = $id "; 
$result = mysqli_query($conn, $sql);
if($result){
    header("Location: index.php?msg=Record deleted");
}else{
    echo "Failed: " . mysqli_error($conn);
}

?>