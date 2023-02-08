<?php include 'connect.php';
$id= $_GET['updateid'];
$sql= "select * from `shortlets` where id=$id";
$result =mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
                $address=$row['address'];
                $price=$row['Price'];
                $amenities1 =$row['amenities1'];
                $amenities2 =$row['amenities2'];
                $amenities3 =$row['amenities3'];
                $amenities4 =$row['amenities4'];
                $amenities5 =$row['amenities5'];
                $amenities6 =$row['amenities6'];
                $amenities7 = $row['amenities7'];
                $amenities8 = $row['amenities8'];
                $amenities9 = $row['amenities9'];
if (isset($_POST['submit'])){
  $address =$_POST['address'];
  $price = $_POST['Price'];
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


  $sql  = "update `shortlets` set id=$id,address=$address,Price=$price,amenities1=$amenities1,amenities2=$amenities2,amenities3=$amenities3,amenities4=$amenities4,amenities5=$amenities5,amenities6=$amenities6,amenities7=$amenities7,amenities8=$amenities8,amenities9=$amenities9,where id=$id";
  
  
  $result =mysqli_query($con,$sql);
  if($result){
    // echo "Data updated succesfully";
    header('loaction:display.php');
  } else{
    die(mysqli_error($con));
  }
}
 





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
              

              <!-- General Form Elements -->
              <form method="post">
                <div class="row mb-3 mt-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Address</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="address" value=<?php echo $address;?>>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputEmail" class="col-sm-2 col-form-label">Price</label>
                  <div class="col-lg-10">
                    <input type="text" class="form-control" name="Price" value=<?php echo $price;?>>
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
                    <input type="text" class="form-control" name="amenities1" value=<?php echo $amenities1;?>>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Amenities 2</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="amenities2" value=<?php echo $amenities2;?>>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Amenities 3</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="amenities3" value=<?php echo $amenities3;?>>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Amenities 4</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="amenities4"value=<?php echo $amenities4;?>>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Amenities 5</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="amenities5" value=<?php echo $amenities5;?>>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Amenities 6</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="amenities6" value=<?php echo $amenities6;?>>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Amenities 7</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="amenities7" value=<?php echo $amenities7;?>>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Amenities 8</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="amenities8" value=<?php echo $amenities8;?>>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Amenities 9</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="amenities9" value=<?php echo $amenities9;?>>
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
                    <button type="submit" name="submit" class="btn btn-primary">Update</button>
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