<?php include('baseadmin.php')?>;
<?php

session_start();
if(!isset($_SESSION["username"]))
{
  header("location:login.php");
}
?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>SHORTLETS</h1>
      <!-- <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Forms</li>
          <li class="breadcrumb-item active">Layouts</li>
        </ol>
      </nav> -->
    </div><!-- End Page Title -->
    <section class="section">
    <?php if (isset($_GET['error'])): ?>
		<p><?php echo $_GET['error']; ?></p>
	  <?php endif ?>
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">shortlets</h5>
               <form action="upload.php" method="post" enctype="multipart/form-data" class="row g-3">
                <div class="col-md-12">
                  <div class="form-floating">
                    <input type="text" name="addresh" class="form-control" id="floatingName" placeholder="Address">
                    <label for="floatingName">Address</label>
                  </div>
                </div>
                <div class="form-floating">
                  <input type="number" name="bath" class="form-control" id="floatingName" placeholder="Bath">
                  <label for="floatingName">bath</label>
                </div>
               <div class="form-floating">
              <input type="number" name="bed" class="form-control" id="floatingName" placeholder="Beds">
              <label for="floatingName">Beds</label>
              </div>
              <div class="form-floating">
                <input type="text" name="price" class="form-control" id="floatingName" placeholder="Price">
                <label for="floatingName">Price</label>
              </div>
              <div class="col-12">
                <div class="form-floating">
                  <textarea class="form-control" name="descreption" placeholder="Description" id="floatingTextarea"
                    style="height: 100px;"></textarea>
                  <label for="floatingTextarea">Description</label>
                </div>
               </div>
               <div class="form-floating">
                <input type="text" name="amenities1" class="form-control" id="floatingName" placeholder="amenities">
                <label for="floatingName">Amenities1</label>
              </div>
              <div class="form-floating">
                <input type="text" name="amenities2" class="form-control" id="floatingName" placeholder="amenities">
                <label for="floatingName">Amenities2</label>
              </div>
              <div class="form-floating">
                <input type="text" name="amenities3" class="form-control" id="floatingName" placeholder="amenities">
                <label for="floatingName">Amenities3</label>
              </div>
              <div class="form-floating">
                <input type="text" name="amenities4" class="form-control" id="floatingName" placeholder="amenities">
                <label for="floatingName">Amenities4</label>
              </div>
              <div class="form-floating">
                <input type="text" name="amenities5" class="form-control" id="floatingName" placeholder="amenities">
                <label for="floatingName">Amenities5</label>
              </div>
              <div class="form-floating">
                <input type="text" name="amenities6" class="form-control" id="floatingName" placeholder="amenities">
                <label for="floatingName">Amenities6</label>
              </div>
              <div class="">
                <label >image1</label>
                <input type="file" name="my_image" class="form-control" id="floatingName" >  
              </div>
              <div class="">
                <label >image2</label>
                <input type="file" name="my_image1" class="form-control" id="floatingName" >  
              </div>
              <div class="">
                <label >image3</label>
                <input type="file" name="my_image2" class="form-control" id="floatingName" >  
              </div>
              <div class="">
                <label >image4</label>
                <input type="file" name="my_image3" class="form-control" id="floatingName" >  
              </div>
              <div class="">
                <label >image5</label>
                <input type="file" name="my_image4" class="form-control" id="floatingName" >  
              </div>
              <div class="">
                <label >image6</label>
                <input type="file" name="my_image5" class="form-control" id="floatingName" >  
              </div>
           <div class="text-center">
           <button type="submit" name="submit" class="btn btn-primary">Submit</button>
          </div>
         </form><!-- End floating Labels Form -->
        </div>
      </div>
    </div>
      </div>
      </div>

      </div>
      </div>
    </section>

  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.min.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>