<?php include 'base.php'?>
<?php include 'header.php'?>

<main id="main">



<!-- ======= Property Single ======= -->
<section class="property-single nav-arrow-b">
  <div class="container">
  

    <div class="row">
      <?php 
      require "image-upload-php-and-mysql-main\db_conn.php";
      if (isset($_GET['id'])) {
        $id = $_REQUEST['id'];
        $sql = "SELECT * FROM house where  id  = '$id'";
        $res = mysqli_query($conn, $sql);
        $check_houses = mysqli_num_rows($res) > 0;
        while ($house = mysqli_fetch_assoc($res)) {
          ?>
           <!-- ======= Intro Single ======= -->
           <section class="intro-single">
              <div class="container">
                <div class="row">
                  <div class="col-md-12 col-lg-8">
                    <div class="title-single-box">
                      <h3 class="title-single">
                        <?= $house['addresses'] ?>
                      </h3>

                    </div>
                  </div>
                  <div class="col-md-12 col-lg-4">
                    <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
                      <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                          <a href="index.php">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                          <a href="house.php">house</a>

                      </ol>
                    </nav>
                  </div>
                </div>
              </div>
            </section><!-- End Intro Single-->
           
            <div class="col-md-4 mt-2 mb-2">
              <div class="card-box-a ">
                <div class="img-box-a">
                  <img src="image-upload-php-and-mysql-main/house_uploads/<?= $house['image1'] ?>" style="height:400px" alt=""
                    class="img-a img-fluid">
                </div>

              </div>
            </div>
            <div class="col-md-4 mt-2 mb-2">
              <div class="card-box-a ">
                <div class="img-box-a">
                  <img src="image-upload-php-and-mysql-main/house_uploads/<?= $house['image2'] ?>" style="height:400px" alt=""
                    class="img-a img-fluid">
                </div>

              </div>
            </div>
            <div class="col-md-4 mt-2 mb-2">
              <div class="card-box-a ">
                <div class="img-box-a">
                  <img src="image-upload-php-and-mysql-main/house_uploads/<?= $house['image3'] ?>" style="height:400px" alt=""
                    class="img-a img-fluid">
                </div>

              </div>
            </div>
            <div class="col-md-4 mt-2 mb-2">
              <div class="card-box-a ">
                <div class="img-box-a">
                  <img src="image-upload-php-and-mysql-main/house_uploads/<?= $house['image4'] ?>" style="height:400px" alt=""
                    class="img-a img-fluid">
                </div>

              </div>
            </div>
            <div class="col-md-4 mt-2 mb-2">
              <div class="card-box-a ">
                <div class="img-box-a">
                  <img src="image-upload-php-and-mysql-main/house_uploads/<?= $house['image5'] ?>" style="height:400px" alt=""
                    class="img-a img-fluid">
                </div>

              </div>
            </div>
            <div class="col-md-4 mt-2 mb-2">
              <div class="card-box-a ">
                <div class="img-box-a">
                  <img src="image-upload-php-and-mysql-main/house_uploads/<?= $house['image6'] ?>" style="height:400px" alt=""
                    class="img-a img-fluid">
                </div>

              </div>
            </div>
    <br> <br> <br>  <div class="col-sm-12 mt-5">

        <div class="row justify-content-between">
          <div class="col-md-5 col-lg-4">
            <div class="property-price d-flex justify-content-center foo">
              <div class="card-header-c d-flex">
                <div class="card-box-ico">
                  <span class="bi bi-cash">#</span>
                </div>
                <div class="card-title-c align-self-center">
                  <h5 class="title-c"><?= $house['price'] ?></h5>
                </div>
              </div>
            </div>
            <div class="property-summary">
              <div class="row">
                <div class="col-sm-12">
                  <div class="title-box-d section-t4">
                    <h3 class="title-d">Quick Summary</h3>
                  </div>
                </div>
              </div>
              <div class="summary-list">
                <ul class="list">
                  <li class="d-flex justify-content-between">
                    <strong>Location:</strong>
                    <span><?= $house['addresses'] ?></span>
                  </li>
                  <li class="d-flex justify-content-between">
                    <strong>Beds:</strong>
                    <span><?= $house['bed'] ?></span>
                  </li>
                  <li class="d-flex justify-content-between">
                    <strong>Baths:</strong>
                    <span><?= $house['bathe'] ?></span>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-7 col-lg-7 section-md-t3">
            <div class="row">
              <div class="col-sm-12">
                <div class="title-box-d">
                  <h3 class="title-d">Property Description</h3>
                </div>
              </div>
            </div>
            <div class="property-description">
              <p class="description color-text-a">
              <?= $house['descreption'] ?>
              </p>
             
            </div>
            <div class="row section-t3">
              <div class="col-sm-12">
                <div class="title-box-d">
                  <h3 class="title-d">Amenities</h3>
                </div>
              </div>
            </div>
            <div class="amenities-list color-text-a">
              <ul class="list-a no-margin">
                <li><?= $house['features1'] ?></li>
                <li><?= $house['features2'] ?></li>
                <li><?= $house['features3'] ?></li>
                <li><?= $house['features4'] ?></li>
                <li><?= $house['features5'] ?></li>
                <li><?= $house['features6'] ?></li>
               
              </ul>
            </div>
          </div>
        </div>
      </div>
     
      <div class="col-md-12 text-center">
                  <button type="submit" class="btn btn-a">Send Message</button>
                </div>
               
              </a>
      <?php
            $check_houses = $check_houses + 1;
          }

        } else {
          // echo "No shortlets posted yet";
        }
        ?>
    </div>
  </div>
</section><!-- End Property Single-->

</main><!-- End #main -->
<?php include 'footer.php'?>