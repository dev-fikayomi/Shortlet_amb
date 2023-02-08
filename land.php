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
          <span class="color-text-a">Land For sale</span>
        </div>
      </div>
      <div class="col-md-12 col-lg-4">
        <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#">Home</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
              Land for sale
            </li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
</section><!-- End Intro Single-->

<!-- ======= Property Grid ======= -->
<section class="property-grid grid">
 
    <div class="container mt-5">
  <div class="row">
 
    <?php 
    require "image-upload-php-and-mysql-main\db_conn.php"; 
    if(!isset($_GET['page'])){
      $page = 1;
    }else {
      $page = $_GET['page'];
    }
    $post_per_page = 06;
    $start_from = ($page - 1) * 06;

      $sql = "SELECT * FROM land ORDER BY id DESC LIMIT 6";
      $res = mysqli_query($conn, $sql);
      $check_land = mysqli_num_rows($res) > 0;
    $number_of_page = ceil($check_land / $post_per_page);
    $page_first_result = ($page - 1) * $post_per_page;
    $sql = "SELECT * FROM land LIMIT" . $page_first_result . ','. $post_per_page;



    if ($check_land  == 1)
    {
      while ($short = mysqli_fetch_assoc($res) )
      {
        ?>
        
        <div class="col-md-4">
        <div class="card mt-3 mb-3" >
       
                <img src="image-upload-php-and-mysql-main/land_uploads/<?=$short['image1']?>" style="width:auto; height:300px;" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?php echo  $short['location']; ?></h5>
                    <hr>
                    <p class="card-title"> Size:<?= $short['size'] ?></p>
                    <hr>
                    <p class="card-title"> Title:<?= $short['title'] ?></p>
                    <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p> -->
                        <a href="singleland.php?id=<?php echo  $short['id'];  ?>" class="btn btn-primary">View</a>
                    <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                </div>
            </div>
        
        </div>
           
       

    <?php
        $check_land = $check_land + 1;
      }
      
    }
    else{
      echo "No Lands posted yet";
    }
    for ($page = 1; $page<= $number_of_page;$page++){
      echo '<div class="row">
      <div class="col-sm-12">
        <nav class="pagination-a">
          <ul class="pagination justify-content-end">
            <li class="page-item ">
              <a class="page-link" href="land.php?page=' . $page . '" tabindex="-1">
                ' . $page . '
              </a>
            </li>
            
          </ul>
        </nav>
      </div>
    </div>';
    }
    ?>   
  </div>
  </div>
  <!-- Land phase end -->
   
   
  </div>
</section><!-- End Property Grid Single-->

</main>

<?php include 'footer.php'?>