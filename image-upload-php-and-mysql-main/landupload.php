<?php 

if (isset($_POST['submit']) ) {
	include "db_conn.php";
	$id = $_POST['id'];
	$location=$_POST['location'];
    $size = $_POST['size'];
	$title=$_POST['title'];
	$landmark=$_POST['landmark'];
    $price = $_POST['price'];
	$descrip=$_POST['descreption'];
	$img_name = $_FILES['my_image']['name'];
	$img_size = $_FILES['my_image']['size'];
	$tmp_name = $_FILES['my_image']['tmp_name'];
	$error = $_FILES['my_image']['error'];
	$img_name1 = $_FILES['my_image1']['name'];
	$img_size1 = $_FILES['my_image1']['size'];
	$tmp_name1 = $_FILES['my_image1']['tmp_name'];
	$error = $_FILES['my_image1']['error'];
	
	$img_name2 = $_FILES['my_image2']['name'];
	$img_size2 = $_FILES['my_image2']['size'];
	$tmp_name2 = $_FILES['my_image2']['tmp_name'];
	$error = $_FILES['my_image2']['error'];

	if ($error === 0) {
		if ($img_size > 10000000 || $img_size1 > 10000000 || $img_size2 > 10000000 ) {
			$em = "Sorry, your file is too large.";
		    header("Location: index.php?error=$em");
		}else {
			$img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
			$img_ex_lc = strtolower($img_ex);
			$img_ex1 = pathinfo($img_name1, PATHINFO_EXTENSION);
			$img_ex_lc1 = strtolower($img_ex1);
			$img_ex2 = pathinfo($img_name2, PATHINFO_EXTENSION);
			$img_ex_lc2 = strtolower($img_ex2);
			$img_ex3 = pathinfo($img_name3, PATHINFO_EXTENSION);

			$allowed_exs = array("jpg", "jpeg", "png"); 
            
			if (in_array($img_ex_lc, $allowed_exs) || in_array($img_ex_lc1, $allowed_exs1) || in_array($img_ex_lc2, $allowed_exs2) ) {
				$new_img_name = uniqid("hey-", true).'.'.$img_ex_lc;
				$new_img_name1 = uniqid("yo-", true).'.'.$img_ex_lc1;
				$new_img_name2 = uniqid("me-", true).'.'.$img_ex_lc2;

				$img_upload_path = 'land_uploads/'.$new_img_name;
				$img_upload_path1= 'land_uploads/'.$new_img_name1;
				$img_upload_path2= 'land_uploads/'.$new_img_name2;
				
				move_uploaded_file($tmp_name, $img_upload_path);
				move_uploaded_file($tmp_name1, $img_upload_path1);
				move_uploaded_file($tmp_name2, $img_upload_path2);
				// Insert into Database
				$sql = "INSERT INTO land(id,location,size,title,landmark,price,descreption,image1,image2,image3) 
				        VALUES('$id','$location','$size','$title','$landmark','$price','$descrip','$new_img_name' ,'$new_img_name1','$new_img_name2')";
				mysqli_query($conn, $sql);
				header("Location: landdatabase.php");
			}else {
				$em = "You can't upload files of this type";
		        header("Location: shortletsadmin.php?error=$em");
			}
		}
	}else {
		$em = "unknown error occurred!";
		header("Location: shortletsadmin.php?error=$em");
	}

}else {
	header("Location: index.php");
}