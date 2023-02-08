

<?php include 'connect.php';

if (isset($_POST['submit'])){
  $location =$_POST['address'];
  $property_type =$_POST['property_type'];
  $title=$_POST['title'];
  $price = $_POST['price'];
  // $decription = $_POST['description'];
  $amenities1 =$_POST['amenities1'];
  $amenities2 =$_POST['amenities2'];
  $amenities3 =$_POST['amenities3'];
  $amenities4 =$_POST['amenities4'];
  $amenities5 =$_POST['amenities5'];
  $amenities6 =$_POST['amenities6'];
  $amenities7 = $_POST['amenities7'];
  $amenities8 = $_POST['amenities8'];
  $amenities9 = $_POST['amenities9'];


  $sql  = "insert into `housesale` (address,property_type,title,price,amenities1,amenities2,amenities3,amenities4,amenities5,amenities6,amenities7,amenities8,amenities9)
  values ('$location','$property_type','$title','$price','$amenities1','$amenities2','$amenities3','$amenities4','$amenities5','$amenities6','$amenities7','$amenities8','$amenities9')";
  $result = mysqli_query($con,$sql);
  if($result){
    echo "Data inserted succesfully";
  } else{
    echo "error in input";
  }
}
 ?>






<?php include 'sidenav.php'?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>House For Sale Post</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">View website</a></li>
          
        </ol>
      </nav>
    </div>
    
    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              

              <!-- General Form Elements -->
              <form method="post">
                <div class="row mb-3 mt-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Location</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="address">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputEmail" class="col-sm-2 col-form-label">Property type</label>
                  <div class="col-lg-10">
                    <input type="email" class="form-control" name="property_type">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputEmail" class="col-sm-2 col-form-label">Title</label>
                  <div class="col-lg-10">
                    <input type="email" class="form-control" name="title">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputEmail" class="col-sm-2 col-form-label">Price</label>
                  <div class="col-lg-10">
                    <input type="email" class="form-control" name="price">
                  </div>
                </div>
                <div class="row mb-3">
                  <label  class="col-sm-2 col-form-label">Description</label>
                  <div class="col-lg-10">

                    <div class="">
                      <div class="">
                        <div class="quill-editor-default">
                          
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
                <!-- <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Image1</label>
                  <div class="col-sm-6">
                    <input class="form-control" type="file" id="formFile">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Image2</label>
                  <div class="col-sm-6">
                    <input class="form-control" type="file" id="formFile">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Image3</label>
                  <div class="col-sm-6">
                    <input class="form-control" type="file" id="formFile">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Image4</label>
                  <div class="col-sm-6">
                    <input class="form-control" type="file" id="formFile">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Image5</label>
                  <div class="col-sm-6">
                    <input class="form-control" type="file" id="formFile">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Image6</label>
                  <div class="col-sm-6">
                    <input class="form-control" type="file" id="formFile">
                  </div>
                </div> -->
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