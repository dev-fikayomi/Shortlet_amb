<?php

include 'db_conn.php';
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql="delete from `land` where id=$id";
    $error = mysqli_query($conn,$sql);
    if($error ){
        header('location:landdatabase.php');
    }else{
        die(mysqli_error($conn));
    }
}

?>