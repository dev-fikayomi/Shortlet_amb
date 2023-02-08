<?php

include 'db_conn.php';
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql="delete from `images` where id=$id";
    $error = mysqli_query($conn,$sql);
    if($error ){
        header('location:shortletdatabase.php');
    }else{
        die(mysqli_error($conn));
    }
}

?>