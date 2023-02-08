<?php

include 'db_conn.php';
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql="delete from `house` where id=$id";
    $error = mysqli_query($conn,$sql);
    if($error ){
        header('location:housedatabase.php');
    }else{
        die(mysqli_error($conn));
    }
}

?>