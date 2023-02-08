<?php include "db_conn.php"; ?>;
<?php include('baseadmin.php')?>;
<?php

session_start();
if(!isset($_SESSION["username"]))
{
  header("location:login.php");
}
?>
<main id="main" class="main">
  <style>
table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  border: 1px solid #ddd;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}
</style>
</head>
<body>
<div class="pagetitle">
  <h1>General Tables</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.html">Home</a></li>
      <li class="breadcrumb-item">Tables</li>
      <li class="breadcrumb-item active">General</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section">

<body>
<section class="section">
  <div class="row">
    <div class="col-lg-12">

      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Slider Table</h5>

          <!-- Default Table -->
          <div style="overflow-x:auto;">
          <table >
            <thead>
              <tr>
                <th scope="col">#</th>
               
                <th scope="col">image1</th>
                <th scope="col">image2</th>
                <th scope="col">image3</th>
              </tr>
            </thead>
            <tbody>
     
     <?php 
          $sql = "SELECT * FROM slider";
          $res = mysqli_query($conn,  $sql);

          if (mysqli_num_rows($res) > 0) {
          	while ($slider = mysqli_fetch_assoc($res)) {  ?>
             <tr>
               
               <th scope="row"><?=$slider['id']?></th>
               
               
               <th scope="row"><img src="slider_uploads/<?=$slider['image1']?>" style="width: 50px; height: 50px;"></th>
               <th scope="row"><img src="slider_uploads/<?=$slider['image2']?>"style="width: 50px; height: 50px;"></th>
               <th scope="row"><img src="slider_uploads/<?=$slider['image3']?>"style="width: 50px; height: 50px;"></th>
               <th>
               <button class="btn btn-primary "><a href="edit.php?updateid='id'" class="text-white">Edit</a></button>
               </th> 
               <th><button class="btn btn-danger"><a href="sliderdelete.php?deleteid=<?php echo  $slider['id'];  ?>" class="text-white">Delete</a></button></th>  
			   
            </tr>
          		
    <?php } 
}?>

         
          
             
           </tbody>
            </table> 
           
          <!-- End Default Table Example -->
        </div>
      </div>

            </div>
      </div>

     

    

     

    </div>

   
  </div>
</section>

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