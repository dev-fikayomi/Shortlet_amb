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
          <h5 class="card-title">land  Table</h5>

          <!-- Default Table -->
          <div style="overflow-x:auto;">
          <table >
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Location</th>
                <th scope="col">size</th>
				<th scope="col">Title</th>
				<th scope="col">Landmark</th>
                <th scope="col">price</th>
                <th scope="col">description</th>
                <th scope="col">image1</th>
                <th scope="col">image2</th>
                <th scope="col">image3</th>
              </tr>
            </thead>
            <tbody>
     
     <?php 
          $sql = "SELECT * FROM land";
          $res = mysqli_query($conn,  $sql);

          if (mysqli_num_rows($res) > 0) {
          	while ($land = mysqli_fetch_assoc($res)) {  ?>
             <tr>
               
               <th scope="row"><?=$land['id']?></th>
               <th scope="row"><?=$land['location']?></th>
               <th scope="row"><?=$land['size']?></th>
               <th scope="row"><?=$land['title']?></th>
               <th scope="row"><?=$land['landmark']?></th>
               <th scope="row"><?=$land['price']?></th>
               <th scope="row"><?=$land['descreption']?></th>
               <th scope="row"><img src="land_uploads/<?=$land['image1']?>" style="width: 50px; height: 50px;"></th>
               <th scope="row"><img src="land_uploads/<?=$land['image2']?>"style="width: 50px; height: 50px;"></th>
               <th scope="row"><img src="land_uploads/<?=$land['image3']?>"style="width: 50px; height: 50px;"></th>
               <th>
               <button class="btn btn-primary "><a href="edit.php?updateid='id'" class="text-white">Edit</a></button>
               </th> 
               <th><button class="btn btn-danger"><a href="landdelete.php?deleteid=<?php echo  $land['id'];  ?>" class="text-white">Delete</a></button></th>  
			   
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