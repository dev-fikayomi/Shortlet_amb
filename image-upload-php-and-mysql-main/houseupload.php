<?php 

if (isset($_POST['submit']) ) {
	include "db_conn.php";
	$add=$_POST['addresh'];
    $title = $_POST['title'];
	$bathe=$_POST['bath'];
	$bed=$_POST['bed'];
	$price=$_POST['price'];
	$descrip=$_POST['descreption'];
	$amenities1 = $_POST['amenities1'];
	$amenities2 = $_POST['amenities2'];
	$amenities3 = $_POST['amenities3'];
	$amenities4 = $_POST['amenities4'];
	$amenities5 = $_POST['amenities5'];
	$amenities6 = $_POST['amenities6'];
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

	$img_name3 = $_FILES['my_image3']['name'];
	$img_size3 = $_FILES['my_image3']['size'];
	$tmp_name3 = $_FILES['my_image3']['tmp_name'];
	$error = $_FILES['my_image3']['error'];
	
	$img_name4 = $_FILES['my_image4']['name'];
	$img_size4 = $_FILES['my_image4']['size'];
	$tmp_name4 = $_FILES['my_image4']['tmp_name'];
	$error = $_FILES['my_image4']['error'];

	$img_name5 = $_FILES['my_image5']['name'];
	$img_size5 = $_FILES['my_image5']['size'];
	$tmp_name5 = $_FILES['my_image5']['tmp_name'];
	$error = $_FILES['my_image5']['error'];

	if ($error === 0) {
		if ($img_size > 10000000 || $img_size1 > 10000000 || $img_size2 > 10000000 || $img_size3 > 10000000 || $img_size4 > 10000000 || $img_size5 > 10000000) {
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
			$img_ex_lc3 = strtolower($img_ex3);
			$img_ex4 = pathinfo($img_name4, PATHINFO_EXTENSION);
			$img_ex_lc4 = strtolower($img_ex4);
			$img_ex5 = pathinfo($img_name5, PATHINFO_EXTENSION);
			$img_ex_lc5 = strtolower($img_ex5);

			$allowed_exs = array("jpg", "jpeg", "png"); 

			if (in_array($img_ex_lc, $allowed_exs) || in_array($img_ex_lc1, $allowed_exs1) || in_array($img_ex_lc2, $allowed_exs2) || in_array($img_ex_lc3, $allowed_exs3) || in_array($img_ex_lc4, $allowed_exs4)|| in_array($img_ex_lc5, $allowed_exs5)) {
				$new_img_name = uniqid("hey-", true).'.'.$img_ex_lc;
				$new_img_name1 = uniqid("yo-", true).'.'.$img_ex_lc1;
				$new_img_name2 = uniqid("me-", true).'.'.$img_ex_lc2;
				$new_img_name3 = uniqid("yoo-", true).'.'.$img_ex_lc3;
				$new_img_name4 = uniqid("yoo-", true).'.'.$img_ex_lc4;
				$new_img_name5 = uniqid("yoo-", true).'.'.$img_ex_lc5;
				$img_upload_path = 'house_uploads/'.$new_img_name;
				$img_upload_path1= 'house_uploads/'.$new_img_name1;
				$img_upload_path2= 'house_uploads/'.$new_img_name2;
				$img_upload_path3= 'house_uploads/'.$new_img_name3;
				$img_upload_path4= 'house_uploads/'.$new_img_name4;
				$img_upload_path5= 'house_uploads/'.$new_img_name5;
				move_uploaded_file($tmp_name, $img_upload_path);
				move_uploaded_file($tmp_name1, $img_upload_path1);
				move_uploaded_file($tmp_name2, $img_upload_path2);
				move_uploaded_file($tmp_name3, $img_upload_path3);
				move_uploaded_file($tmp_name4, $img_upload_path4);
				move_uploaded_file($tmp_name5, $img_upload_path5);

				// Insert into Database
				$sql = "INSERT INTO house(addresses,title,price,bed,bathe,descreption,features1,features2,features3,features4,features5,features6,image1,image2,image3,image4,image5,image6) 
				        VALUES('$add','$title','$bathe','$bed','$price','$descrip','$amenities1','$amenities2','$amenities3','$amenities4','$amenities5','$amenities6','$new_img_name' ,'$new_img_name1','$new_img_name2','$new_img_name3','$new_img_name4','$new_img_name5')";
				mysqli_query($conn, $sql);
				header("Location: housedatabase.php");
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