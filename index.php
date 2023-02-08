<?php include 'base.php' ?>
<?php include 'header.php'; ?>
<?php include "image-upload-php-and-mysql-main\db_conn.php"; ?>;




<!-- ======= Intro Section ======= -->
<div class="intro intro-carousel swiper position-relative">

<div class="swiper-wrapper">

  <div class="swiper-slide carousel-item-a intro-item bg-image" style="background-image: url(assets/img/slide-1.jpg)">
    <div class="overlay overlay-a"></div>
    <div class="intro-content display-table">
      <div class="table-cell">
        <div class="container">
        <div class="row">
            <div class="col-lg-8">
              <div class="intro-body">
                <h4 class="intro-title mb-4 ">
                  <span class="color-b">Welcome to our world <br> <span style="color: #fff;">Shorlet-amb ideal
                      properties</span> </span>
                </h4>
                <p class="intro-subtitle intro-price">
                  <a href="about.php"><span class="price-a">About</span></a>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="swiper-slide carousel-item-a intro-item bg-image" style="background-image: url(assets/img/slide-2.jpg)">
    <div class="overlay overlay-a"></div>
    <div class="intro-content display-table">
      <div class="table-cell">
        <div class="container">
        <div class="row">
            <div class="col-lg-8">
              <div class="intro-body">

                <h1 class="intro-title mb-4">
                  <span class="color-b">Suitable Shorlet Apartments </span>
                </h1>
                <p class="intro-subtitle intro-price">
                  <a href="shortlet.php"><span class="price-a">shortlets</span></a>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="swiper-slide carousel-item-a intro-item bg-image" style="background-image: url(assets/img/slide-3.jpg)">
    <div class="overlay overlay-a"></div>
    <div class="intro-content display-table">
      <div class="table-cell">
        <div class="container">
        <div class="row">
            <div class="col-lg-8">
              <div class="intro-body">

                <h1 class="intro-title mb-4">
                  <span class="color-b">House For sale</span>
                </h1>
                <p class="intro-subtitle intro-price">
                  <a href="house.php"><span class="price-a">House</span></a>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="swiper-pagination"></div>
</div><!-- End Intro Section -->





</div><!-- End Intro Section -->

<main id="main">

  <!-- ======= Services Section ======= -->
  <section class="section-services section-t8">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="title-wrap d-flex justify-content-between">
            <div class="title-box">
              <h2 class="title-a">Services</h2>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="card-box-c foo">
            <div class="card-header-c d-flex">
              <div class="card-box-ico">
                <span class="bi bi-bank"></span>
              </div>
              <div class="card-title-c align-self-center">
                <h2 class="title-c">Shortlets</h2>
              </div>
            </div>
            <div class="card-body-c">
              <p class="content-c">
               We have the best luxury apartment,with suitable facilities and we have the best discount offer rate.click to see them
              </p>
            </div>
            <div class="card-footer-c">
              <a href="shortlet.php" class="link-c link-icon">Click to view
                <span class="bi bi-chevron-right"></span>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card-box-c foo">
            <div class="card-header-c d-flex">
              <div class="card-box-ico">
                <span class="bi bi-bank2"></span>
              </div>
              <div class="card-title-c align-self-center">
                <h2 class="title-c">House Sale</h2>
              </div>
            </div>
            <div class="card-body-c">
              <p class="content-c">
               Our houses are highly top notch as we have the best properties at hand,our realtors have made it an attitude to get the best properties for our various clents,click to see them
              </p>
            </div>
            <div class="card-footer-c">
              <a href="house.php" class="link-c link-icon">Click to view
                <span class="bi bi-chevron-right"></span>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card-box-c foo">
            <div class="card-header-c d-flex">
              <div class="card-box-ico">
                <span class="bi bi-list-columns-reverse"></span>

              </div>
              <div class="card-title-c align-self-center">
                <h2 class="title-c">Land</h2>
              </div>
            </div>
            <div class="card-body-c">
              <p class="content-c">
                we have our land in the ever wanted area in Lagos and it eviron,with best features,we have a lot of benefits for you ,you can unlock them by clicking to the properties and buying them
              </p>
            </div>
            <div class="card-footer-c">
              <a href="land.php" class="link-c link-icon">Click to view
                <span class="bi bi-chevron-right"></span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section><!-- End Services Section --> <br> <br> <br>

 <!-- shortlet starts -->
  <div class="container mt-5">
  <div class="row">
  <div class="title-wrap d-flex justify-content-between">
            <div class="title-box">
              <h2 class="title-a ">SHORTLETS</h2>
            </div>
            <div class="title-link">
              <a href="shortlet.php">Check More
                <span class="bi bi-chevron-right"></span>
              </a>
            </div>
          </div>
    <?php 
    require "image-upload-php-and-mysql-main\db_conn.php"; 
      $sql = "SELECT * FROM images ORDER BY id DESC LIMIT 3";
      $res = mysqli_query($conn, $sql);
      $check_shortlets = mysqli_num_rows($res) > 0;


    if ($check_shortlets  == 1)
    {
      while ($images = mysqli_fetch_assoc($res) )
      {
        ?>
        
        <div class="col-md-4">
        <div class="card-box-a card-shadow">
              <div class="img-box-a">
                <img src="image-upload-php-and-mysql-main/uploads/<?=$images['image_url']?>" style="height:400px" alt="shortlets image" class="img-a img-fluid">
              </div>
              <div class="card-overlay">
                <div class="card-overlay-a-content">
                  <div class="card-header-a">
                    <h2 class="card-title-a">
                      <a href="#"><?php echo  $images['addresh']; ?></a>
                    </h2>
                  </div>
                  <div class="card-body-a">
                    <div class="price-box d-flex">
                      <span class="price-a">Price | <?= $images['price'] ?>/night</span>
                    </div>
                    <a href="singleshortlet.php?id=<?php echo  $images['id'];  ?>" class="link-a">Click here to view
                      <span class="bi bi-chevron-right"></span>
                    </a>
                  </div>
                  <div class="card-footer-a">
                    <ul class="card-info d-flex justify-content-around">
                     
                      <li>
                        <h4 class="card-info-title">Beds</h4>
                        <span><?= $images['bed'] ?></span>
                      </li>
                      <li>
                        <h4 class="card-info-title">Baths</h4>
                        <span><?= $images['bath'] ?></span>
                      </li>
                      
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            </div>
    </section>
           
       

    <?php
        $check_shortlets = $check_shortlets + 1;
      }
      
    }
    else{
      echo "No shortlets posted yet";
    }
    ?>   
  </div>
  </div>
  <!-- shortlet end -->

  <!-- House  Phase start -->
  <div class="container mt-5">
  <div class="row">
  <div class="title-wrap d-flex justify-content-between">
            <div class="title-box">
              <h3 class="title-a">HOUSE AVAILABLE</h3>
            </div>
            <div class="title-link">
              <a href="house.php">Check More
                <span class="bi bi-chevron-right"></span>
              </a>
            </div>
          </div>
    <?php 
    require "image-upload-php-and-mysql-main\db_conn.php"; 
      $sql = "SELECT * FROM house ORDER BY id DESC LIMIT 3";
      $res = mysqli_query($conn, $sql);
      $check_houses = mysqli_num_rows($res) > 0;


    if ($check_houses  == 1)
    {
      while ($house = mysqli_fetch_assoc($res) )
      {
        ?>
        
        <div class="col-md-4">
        <div class="card-box-a card-shadow">
              <div class="img-box-a">
                <img src="image-upload-php-and-mysql-main/house_uploads/<?=$house['image1']?>" style="height:400px" alt="house image" class="img-a img-fluid">
              </div>
              <div class="card-overlay">
                <div class="card-overlay-a-content">
                  <div class="card-header-a">
                    <h2 class="card-title-a">
                      <a href="#"><?php echo  $house['addresses']; ?></a>
                    </h2>
                  </div>
                  <div class="card-body-a">
                    <div class="price-box d-flex">
                      <span class="price-a">Price | <?= $house['price'] ?></span>
                    </div>
                    <a href="singlehouse.php?id=<?php echo  $house['id'];  ?>" class="link-a">Click here to view
                      <span class="bi bi-chevron-right"></span>
                    </a>
                  </div>
                  <div class="card-footer-a">
                    <ul class="card-info d-flex justify-content-around">
                     
                      <li>
                        <h4 class="card-info-title">Beds</h4>
                        <span><?= $house['bed'] ?></span>
                      </li>
                      <li>
                        <h4 class="card-info-title">Baths</h4>
                        <span><?= $house['bathe'] ?></span>
                      </li>
                      
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            </div>
    </section>
      
          
       

    <?php
        $check_houses = $check_houses + 1;
      }
      
    }
    else{
      echo "No houses posted yet";
    }
    ?>   
  </div>
  </div>
  <!-- house phase end -->
  
  <div class="container mt-5">
  <div class="row">
  <div class="title-wrap d-flex justify-content-between">
            <div class="title-box">
              <h3 class="title-a">LANDS AVAILABLE</h3>
            </div>
            <div class="title-link">
              <a href="land.php">Check More
                <span class="bi bi-chevron-right"></span>
              </a>
            </div>
          </div>
    <?php 
    require "image-upload-php-and-mysql-main\db_conn.php"; 
      $sql = "SELECT * FROM land ORDER BY id DESC LIMIT 3";
      $res = mysqli_query($conn, $sql);
      $check_land = mysqli_num_rows($res) > 0;


    if ($check_land  == 1)
    {
      while ($short = mysqli_fetch_assoc($res) )
      {
        ?>
         
         <div class="col-md-4">
        <div class="card-box-a card-shadow">
              <div class="img-box-a">
                <img src="image-upload-php-and-mysql-main/land_uploads/<?=$short['image1']?>" style="height:400px" alt="house image" class="img-a img-fluid">
              </div>
              <div class="card-overlay">
                <div class="card-overlay-a-content">
                  <div class="card-header-a">
                    <h2 class="card-title-a">
                      <a href="#"><?php echo  $short['location']; ?></a>
                    </h2>
                  </div>
                  <div class="card-body-a">
                    <div class="price-box d-flex">
                      <span class="price-a">Price | <?= $short['price'] ?></span>
                    </div>
                    <a  href="singleland.php?id=<?php echo  $short['id'];  ?>" class="link-a">Click here to view
                      <span class="bi bi-chevron-right"></span>
                    </a>
                  </div>
                  <div class="card-footer-a">
                    <ul class="card-info d-flex justify-content-around">
                     
                      <li>
                        <h4 class="card-info-title">Size</h4>
                        <span><?= $short['size'] ?></span>
                      </li>
                      <li>
                        <h4 class="card-info-title">Title</h4>
                        <span><?= $short['title'] ?></span>
                      </li>
                      
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            </div>
    </section>
        
           
       

    <?php
        $check_land = $check_land + 1;
      }
      
    }
    else{
      echo "No shortlets posted yet";
    }
    ?>   
  </div>
  </div>
  <!-- Land phase end -->
 
  <!-- ======= Agents Section ======= -->
  <section class="section-agents section-t8">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="title-wrap d-flex justify-content-between">
            <div class="title-box">
              <h2 class="title-a">MEET THE CEO</h2>
            </div>

          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="card-box-d">
            <div class="card-img-d">
              <img src="assets\img\Website .JPG" alt="" class="img-d img-fluid">
            </div>
            <div class="card-overlay card-overlay-hover">
              <div class="card-header-d">
                <div class="card-title-d align-self-center">
                  <h3 class="title-d">
                    <a href="" class="link-two">Fiath Ebere
                     </a>
                  </h3>
                </div>
              </div>
              <div class="card-body-d">
                <p class="content-d color-text-a">
                 
                </p>
                <div class="info-agents color-a">
                  <p>
                 call me: <a href="tel:+2347035932971">+2347035932971</a>
                  </p>
                  <p>
                  <a href = "mailto: ">Send me a mail</a>
                  </p>
                </div>
              </div>
              <div class="card-footer-d">
                <div class="socials-footer d-flex justify-content-center">
                  <ul class="list-inline">
                    
                   
                    <li class="list-inline-item">
                      <a href="https://www.instagram.com/invites/contact/?i=1fae0w3vnd4tq&utm_content=a5cg23" class="link-one">
                        <i class="bi bi-instagram" aria-hidden="true"></i>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a href="https://www.linkedin.com/in/faith-ebere-572013189" class="link-one">
                        <i class="bi bi-linkedin" aria-hidden="true"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>


      </div>
    </div>
  </section><!-- End Agents Section -->





</main><!-- End #main -->

<?php include 'footer.php'; ?>