<?php include 'base.php'?>;
<?php include 'header.php'?>;
<main id="main">

<!-- ======= Intro Single ======= -->
<section class="intro-single">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-lg-8">
        <div class="title-single-box">
          <h1 class="title-single">Our Amazing Properties</h1>
          <span class="color-text-a">House For sale</span>
        </div>
      </div>
      <div class="col-md-12 col-lg-4">
        <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#">Home</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
              House for sale
            </li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
</section><!-- End Intro Single-->
<!-- House  Phase start -->
<div class="container mt-5">
  <div class="row">
  <!-- <div class="title-wrap d-flex justify-content-between">
            <div class="title-box">
              <h2 class="title-a">HOUSE AVAILABLE</h2>
            </div>
            <div class="title-link">
              <a href="property-grid.html">Check More
                <span class="bi bi-chevron-right"></span>
              </a>
            </div>
          </div> -->
    <?php 
    require "image-upload-php-and-mysql-main\db_conn.php"; 

    if(!isset($_GET['page']))
    {
      $page = 1;
    }
    else
    {
      $page = $_GET['page'];
    }
    $post_per_page = 03;
    $start_from = ($page - 1) * 03;
    
     



      $sql = "SELECT * FROM house ORDER BY id DESC limit $start_from,$post_per_page ";
      $res = mysqli_query($conn, $sql);
      $check_houses = mysqli_num_rows($res) > 0;
    $number_of_page = ceil($check_houses / $post_per_page);
    $page_first_result = ($page - 1) * $post_per_page;
    $sql = "SELECT * FROM house LIMIT " . $page_first_result . ',' . $post_per_page;

    if ($check_houses  == 1)
    {
      while ($house = mysqli_fetch_assoc($res) )
      {
        ?>
        
       
        <div class="col-md-4">
        <div class="card-box-a card-shadow mb-5">
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
    ;
    for ($page = 1; $page<= $number_of_page;$page++){
      echo '<a href = "house.php?page=' . $page . '">' . $page . ' </a>';
    // <div class="row">
    //   <div class="col-sm-12">
    //     <nav class="pagination-a">
    //       <ul class="pagination justify-content-end">
    //         <li class="page-item ">
    //           <a class="page-link" href="house.php?page=' . $page . '" tabindex="-1">
    //             ' . $page . '
    //           </a>
    //         </li>
            
    //       </ul>
    //     </nav>
    //   </div>
    // </div>';
    }
    ?>   
  </div>
  </div>

  
  
  
  <!-- house phase end -->

<!-- ======= Property Grid ======= -->
<section class="property-grid grid">
  <!-- <div class="container">
    <div class="row">
     
      <div class="col-md-4">
        <div class="card-box-a card-shadow">
          <div class="img-box-a">
            <img src="assets/img/property-1.jpg" alt="" class="img-a img-fluid">
          </div>
          <div class="card-overlay">
            <div class="card-overlay-a-content">
              <div class="card-header-a">
                <h2 class="card-title-a">
                  <a href="#">204 Mount
                    <br /> Olive Road Two</a>
                </h2>
              </div>
              <div class="card-body-a">
                <div class="price-box d-flex">
                  <span class="price-a">rent | $ 12.000</span>
                </div>
                <a href="property-single.html" class="link-a">Click here to view
                  <span class="bi bi-chevron-right"></span>
                </a>
              </div>
              <div class="card-footer-a">
                <ul class="card-info d-flex justify-content-around">
                  <li>
                    <h4 class="card-info-title">Type</h4>
                    <span>340m
                    </span>
                  </li>
                  <li>
                    <h4 class="card-info-title">Beds</h4>
                    <span>2</span>
                  </li>
                 
                  <li>
                    <h4 class="card-info-title">Garages</h4>
                    <span>1</span>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card-box-a card-shadow">
          <div class="img-box-a">
            <img src="assets/img/property-3.jpg" alt="" class="img-a img-fluid">
          </div>
          <div class="card-overlay">
          <div class="card-overlay-a-content">
              <div class="card-header-a">
                <h2 class="card-title-a">
                  <a href="#">204 Mount
                    <br /> Olive Road Two</a>
                </h2>
              </div>
              <div class="card-body-a">
                <div class="price-box d-flex">
                  <span class="price-a">rent | $ 12.000</span>
                </div>
                <a href="property-single.html" class="link-a">Click here to view
                  <span class="bi bi-chevron-right"></span>
                </a>
              </div>
              <div class="card-footer-a">
                <ul class="card-info d-flex justify-content-around">
                  <li>
                    <h4 class="card-info-title">Type</h4>
                    <span>340m
                    </span>
                  </li>
                  <li>
                    <h4 class="card-info-title">Beds</h4>
                    <span>2</span>
                  </li>
                 
                  <li>
                    <h4 class="card-info-title">Garages</h4>
                    <span>1</span>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card-box-a card-shadow">
          <div class="img-box-a">
            <img src="assets/img/property-6.jpg" alt="" class="img-a img-fluid">
          </div>
          <div class="card-overlay">
          <div class="card-overlay-a-content">
              <div class="card-header-a">
                <h2 class="card-title-a">
                  <a href="#">204 Mount
                    <br /> Olive Road Two</a>
                </h2>
              </div>
              <div class="card-body-a">
                <div class="price-box d-flex">
                  <span class="price-a">rent | $ 12.000</span>
                </div>
                <a href="property-single.html" class="link-a">Click here to view
                  <span class="bi bi-chevron-right"></span>
                </a>
              </div>
              <div class="card-footer-a">
                <ul class="card-info d-flex justify-content-around">
                  <li>
                    <h4 class="card-info-title">Type</h4>
                    <span>340m
                    </span>
                  </li>
                  <li>
                    <h4 class="card-info-title">Beds</h4>
                    <span>2</span>
                  </li>
                 
                  <li>
                    <h4 class="card-info-title">Garages</h4>
                    <span>1</span>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card-box-a card-shadow">
          <div class="img-box-a">
            <img src="assets/img/property-7.jpg" alt="" class="img-a img-fluid">
          </div>
          <div class="card-overlay">
          <div class="card-overlay-a-content">
              <div class="card-header-a">
                <h2 class="card-title-a">
                  <a href="#">204 Mount
                    <br /> Olive Road Two</a>
                </h2>
              </div>
              <div class="card-body-a">
                <div class="price-box d-flex">
                  <span class="price-a">rent | $ 12.000</span>
                </div>
                <a href="property-single.html" class="link-a">Click here to view
                  <span class="bi bi-chevron-right"></span>
                </a>
              </div>
              <div class="card-footer-a">
                <ul class="card-info d-flex justify-content-around">
                  <li>
                    <h4 class="card-info-title">Type</h4>
                    <span>340m
                    </span>
                  </li>
                  <li>
                    <h4 class="card-info-title">Beds</h4>
                    <span>2</span>
                  </li>
                 
                  <li>
                    <h4 class="card-info-title">Garages</h4>
                    <span>1</span>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card-box-a card-shadow">
          <div class="img-box-a">
            <img src="assets/img/property-8.jpg" alt="" class="img-a img-fluid">
          </div>
          <div class="card-overlay">
            <div class="card-overlay-a-content">
              <div class="card-header-a">
                <h2 class="card-title-a">
                  <a href="#">204 Mount
                    <br /> Olive Road Two</a>
                </h2>
              </div>
              <div class="card-body-a">
                <div class="price-box d-flex">
                  <span class="price-a">rent | $ 12.000</span>
                </div>
                <a href="property-single.html" class="link-a">Click here to view
                  <span class="bi bi-chevron-right"></span>
                </a>
              </div>
              <div class="card-footer-a">
                <ul class="card-info d-flex justify-content-around">
                  <li>
                    <h4 class="card-info-title">Area</h4>
                    <span>340m
                      <sup>2</sup>
                    </span>
                  </li>
                  <li>
                    <h4 class="card-info-title">Beds</h4>
                    <span>2</span>
                  </li>
                  <li>
                    <h4 class="card-info-title">Baths</h4>
                    <span>4</span>
                  </li>
                  <li>
                    <h4 class="card-info-title">Garages</h4>
                    <span>1</span>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card-box-a card-shadow">
          <div class="img-box-a">
            <img src="assets/img/property-10.jpg" alt="" class="img-a img-fluid">
          </div>
          <div class="card-overlay">
            <div class="card-overlay-a-content">
              <div class="card-header-a">
                <h2 class="card-title-a">
                  <a href="#">204 Mount
                    <br /> Olive Road Two</a>
                </h2>
              </div>
              <div class="card-body-a">
                <div class="price-box d-flex">
                  <span class="price-a">rent | $ 12.000</span>
                </div>
                <a href="property-single.html" class="link-a">Click here to view
                  <span class="bi bi-chevron-right"></span>
                </a>
              </div>
              <div class="card-footer-a">
                <ul class="card-info d-flex justify-content-around">
                  <li>
                    <h4 class="card-info-title">Area</h4>
                    <span>340m
                      <sup>2</sup>
                    </span>
                  </li>
                  <li>
                    <h4 class="card-info-title">Beds</h4>
                    <span>2</span>
                  </li>
                  <li>
                    <h4 class="card-info-title">Baths</h4>
                    <span>4</span>
                  </li>
                  <li>
                    <h4 class="card-info-title">Garages</h4>
                    <span>1</span>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12">
        <nav class="pagination-a">
          <ul class="pagination justify-content-end">
            <li class="page-item disabled">
              <a class="page-link" href="#" tabindex="-1">
                <span class="bi bi-chevron-left"></span>
              </a>
            </li>
            <li class="page-item">
              <a class="page-link" href="#">1</a>
            </li>
            <li class="page-item active">
              <a class="page-link" href="#">2</a>
            </li>
            <li class="page-item">
              <a class="page-link" href="#">3</a>
            </li>
            <li class="page-item next">
              <a class="page-link" href="#">
                <span class="bi bi-chevron-right"></span>
              </a>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </div> -->
</section><!-- End Property Grid Single-->

</main>

<?php include 'footer.php'?>