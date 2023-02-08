

<?php include 'connect.php';
$message = '';

if (isset($_POST['submit'])){
  $address =$_POST['address'];
  $price = $_POST['Price'];
  $amenities1 =$_POST['amenities1'];
  $amenities2 =$_POST['amenities2'];
  $amenities3 =$_POST['amenities3'];
  $amenities4 =$_POST['amenities4'];
  $amenities5 =$_POST['amenities5'];
  $amenities6 =$_POST['amenities6'];
  $amenities7 = $_POST['amenities7'];
  $amenities8 = $_POST['amenities8'];
  $amenities9 = $_POST['amenities9'];
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
				$img_upload_path = 'uploads/'.$new_img_name;
				$img_upload_path1= 'uploads/'.$new_img_name1;
				$img_upload_path2= 'uploads/'.$new_img_name2;
				$img_upload_path3= 'uploads/'.$new_img_name3;
				$img_upload_path4= 'uploads/'.$new_img_name4;
				$img_upload_path5= 'uploads/'.$new_img_name5;
				move_uploaded_file($tmp_name, $img_upload_path);
				move_uploaded_file($tmp_name1, $img_upload_path1);
				move_uploaded_file($tmp_name2, $img_upload_path2);
				move_uploaded_file($tmp_name3, $img_upload_path3);
				move_uploaded_file($tmp_name4, $img_upload_path4);
				move_uploaded_file($tmp_name5, $img_upload_path5);

  $sql  = "insert into `shortlets` (address,Price,amenities1,amenities2,amenities3,amenities4,amenities5,amenities6,amenities7,amenities8,amenities9,image_url,image_url1,image_url2,image_url3,image_url4,image_url5,)
  values ('$address','$price','$amenities1','$amenities2','$amenities3','$amenities4','$amenities5','$amenities6','$amenities7','$new_img_name' ,'$new_img_name1','$new_img_name2','$new_img_name3','$new_img_name4','$new_img_name5')";
  $result =mysqli_query($con,$sql);
}else {
  $em = "You can't upload files of this type";
      header("Location: index.php?error=$em");
}
}
}else {
$em = "unknown error occurred!";
header("Location: index.php?error=$em");
}

}else {
header("Location: index.php");
}
//   if($result){
//     $message = "
//     <div class='alert alert-success d-flex align-items-center' role='alert'>
//   <svg class='bi flex-shrink-0 me-2' width='24' height='24' role='img' aria-label='Success:'><use xlink:href='#check-circle-fill'/></svg>
//   <div>
//    <h5> Uchechi it is succesfully uploaded </h5>
//   </div>
// </div>";
    
    
//   } else{
//     $message="<div class='alert alert-danger d-flex align-items-center' role='alert'>
//   <svg class='bi flex-shrink-0 me-2' width='24' height='24' role='img' aria-label='Danger:'><use xlink:href='#exclamation-triangle-fill'/></svg>
//   <div>
//     Oops!! uchechi there is an error try again baby girl
//   </div>
// </div>".
//     die(mysqli_error($con) );
//   }
// }
 





?>;
<?php  include "sidenav.php"?>;
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Shortlets Post</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">View website</a></li>
          
        </ol>
      </nav>
    </div><!-- End Page Title -->
    
    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <?php echo $message ?>

              <!-- General Form Elements -->
              <form method="post">
                <div class="row mb-3 mt-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Address</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="address">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputEmail" class="col-sm-2 col-form-label">Price</label>
                  <div class="col-lg-10">
                    <input type="text" class="form-control" name="Price">
                  </div>
                </div>
                <div class="row mb-3">
                  <label  class="col-sm-2 col-form-label">Description</label>
                  <div class="col-lg-10">

                    <div class="">
                      <div class="">
                        <div class="quill-editor-default" name="description">
                          
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
               
               

               
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Amenities 1</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="amenities1">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Amenities 2</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="amenities2">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Amenities 3</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="amenities3">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Amenities 4</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="amenities4">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Amenities 5</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="amenities5">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Amenities 6</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="amenities6">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Amenities 7</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="amenities7">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Amenities 8</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="amenities8">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Amenities 9</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="amenities9">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Image1</label>
                  <div class="col-sm-6">
                    <input class="form-control" name="my_image" type="file" id="formFile">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Image2</label>
                  <div class="col-sm-6">
                    <input class="form-control" name="my_image1" type="file" id="formFile">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Image3</label>
                  <div class="col-sm-6">
                    <input class="form-control" name="my_image2" type="file" id="formFile">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Image4</label>
                  <div class="col-sm-6">
                    <input class="form-control" name="my_image3" type="file" id="formFile">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Image5</label>
                  <div class="col-sm-6">
                    <input class="form-control" name="my_image4" type="file" id="formFile">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Image6</label>
                  <div class="col-sm-6">
                    <input class="form-control" name="my_image5" type="file" id="formFile">
                  </div>
                </div>
                <div class="row mb-3">
                  
                  <div class="col-sm-6">
                    <button type="submit" name="submit" class="btn btn-primary">Submit Form</button>
                  </div>
                </div>
              </form><!-- End General Form Elements -->

            </div>
          </div>

        </div>

      
      </div>
    </section>

   

  </main><!-- End #main -->
<?php include 'footeradmin.php'?>;