
<?php include 'sidenav.php'?>
<?php include 'connect.php'?>

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
  <div class="row">
    <div class="col-lg-12">

      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Default Table</h5>

          <!-- Default Table -->
          <div style="overflow-x:auto;">
          <table >
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Address</th>
                <th scope="col">price</th>
                <th scope="col">description</th>
                <th scope="col">amenities1</th>
                <th scope="col">amenities2</th>
                <th scope="col">amenities3</th>
                <th scope="col">amenities4</th>
                <th scope="col">amenities5</th>
                <th scope="col">amenities6</th>
                <th scope="col">amenities7</th>
                <th scope="col">amenities8</th>
                <th scope="col">amenities9</th>
                <th scope="col">image1</th>
                <th scope="col">image2</th>
                <th scope="col">image3</th>
                <th scope="col">image4</th>
                <th scope="col">image5</th>
                <th scope="col">image6</th>
              </tr>
            </thead>
            <tbody>
           
            <?php
             $sql="Select * from `shortlets` ";
             $result = mysqli_query($con,$sql);

             if($result){
              while($row=mysqli_fetch_assoc($result)){
                $id = $row['id'];
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
                $img_name = $row['my_image']['name'];
                
                
              
              echo' <tr>
               <th scope="row">'.$id.'</th>
               <th scope="row">'.$address.'</th>
               <th scope="row">'.$price.'</th>
               <th scope="row"></th>
               <th scope="row">'.$amenities1.'</th>
               <th scope="row">'.$amenities2.'</th>
               <th scope="row">'.$amenities3.'</th>
               <th scope="row">'.$amenities4.'</th>
               <th scope="row">'.$amenities5.'</th>
               <th scope="row">'.$amenities6.'</th>
               <th scope="row">'.$amenities7.'</th>
               <th scope="row">'.$amenities8.'</th>
               <th scope="row">'.$amenities9.'</th> 
               <th scope="row">'.$$img_name.'</th>
               <th scope="row">'.$new_img_name1.'</th>
               <th scope="row">'.$new_img_name2.'</th>
               <th scope="row">'.$new_img_name3.'</th>
               <th scope="row">'.$new_img_name4.'</th>
               <th scope="row">'.$new_img_name5.'</th>
               <th>
               <button class="btn btn-primary "><a href="edit.php?updateid='.$id.'" class="text-white">Edit</a></button>
               </th> 
               <th><button class="btn btn-danger"><a href="delete.php?deleteid='.$id.' " class="text-white">Delete</a></button></th>  
            </tr>
            ';
             }
             }
            ?>
          
             
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

</main>

 

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

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