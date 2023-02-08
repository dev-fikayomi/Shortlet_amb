<?php include 'base.php' ?>
<?php include 'header.php' ?>

<main id="main">


  <!-- ======= Property Grid ======= -->

  <section class="property-grid grid">
    <div class="container">
      <div class="row">

        <?php
        require "image-upload-php-and-mysql-main\db_conn.php";
        if (isset($_GET['id'])) {
          $id = $_REQUEST['id'];
          $sql = "SELECT * FROM land where  id  = '$id'";
          $res = mysqli_query($conn, $sql);
          $check_land = mysqli_num_rows($res) > 0;
          while ($short = mysqli_fetch_assoc($res)) {
            ?>

            <!-- <div class="col-md-4">
            <div class="card mt-3 mb-3" >
       
                    <img  style="width:auto; height:300px;" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $short['location']; ?></h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                            card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
        
            </div> -->
            <!-- ======= Intro Single ======= -->
            <section class="intro-single">
              <div class="container">
                <div class="row">
                  <div class="col-md-12 col-lg-8">
                    <div class="title-single-box">
                      <h3 class="title-single">
                        <?= $short['location'] ?>
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
                          <a href="land.php">land</a>

                      </ol>
                    </nav>
                  </div>
                </div>
              </div>
            </section><!-- End Intro Single-->

            <div class="col-md-4">
              <div class="card-box-a ">
                <div class="img-box-a">
                  <img src="image-upload-php-and-mysql-main/land_uploads/<?= $short['image1'] ?>" style="height:400px" alt=""
                    class="img-a img-fluid">
                </div>

              </div>
            </div>
            <div class="col-md-4">
              <div class="card-box-a ">
                <div class="img-box-a">
                  <img src="image-upload-php-and-mysql-main/land_uploads/<?= $short['image2'] ?>" style="height:400px" alt=""
                    class="img-a img-fluid">
                </div>

              </div>
            </div>
            <div class="col-md-4">
              <div class="card-box-a ">
                <div class="img-box-a">
                  <img src="image-upload-php-and-mysql-main/land_uploads/<?= $short['image3'] ?>" style="height:400px" alt=""
                    class="img-a img-fluid">
                </div>

              </div>
            </div>

            <!-- ======= Property Single ======= -->
            <section class="property-single nav-arrow-b">
              <div class="container">
                <div class="row justify-content-center">

                </div>

                <div class="row">
                  <div class="col-sm-12">

                    <div class="row justify-content-between">
                      <div class="col-md-5 col-lg-4">
                        <div class="property-price d-flex justify-content-center foo">
                          <div class="card-header-c d-flex">
                            <div class="card-box-ico">
                              <span class="bi bi-cash">#</span>
                            </div>
                            <div class="card-title-c align-self-center">
                              <h5 class="title-c">
                                <?= $short['price'] ?>
                              </h5>
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
                                <span>
                                  <?= $short['location'] ?>
                                </span>
                              </li>
                              <li class="d-flex justify-content-between">
                                <strong>Size:</strong>
                                <span>
                                  <?= $short['size'] ?>
                                </span>
                              </li>
                              <li class="d-flex justify-content-between">
                                <strong>Title:</strong>
                                <span>
                                  <?= $short['title'] ?>
                                </span>
                              </li>
                              <li class="d-flex justify-content-between">
                                <strong>Landmarks:</strong>
                                <span>
                                  <?= $short['landmark'] ?>
                                </span>
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
                            <?= $short['descreption'] ?>
                          </p>

                        </div>

                      </div>
                    </div>
                  </div>


                </div>
              </div>
             
              <a href="#">
              <div class="col-md-12 text-center">
                  <button type="submit" class="btn btn-a">Send Message</button>
                </div>
               
              </a>
            </section><!-- End Property Single-->




            <?php
            $check_land = $check_land + 1;
          }

        } else {
          // echo "No shortlets posted yet";
        }
        ?>

      </div>

    </div>
  </section><!-- End Property Grid Single-->





</main><!-- End #main -->
<?php include 'footer.php' ?>