<?php

  if(isset($_POST['register']))
  {
    $idnum = $_POST['idnum'];
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $institute = $_POST['institute'];
    $course = $_POST['course'];
    $form = $_POST['form'];

    if($idnum!='' && $fullname!='' && $email!='' && $institute!='' && $course!='' && $form!='')
    {

    

    $sql = "INSERT INTO newapp(idnum, fullname, emailadd, institute, course, appform) VALUES('$idnum', '$fullname', '$email', '$institute', '$course', '$form')";

    include_once('db.php');

    $qry = mysqli_query($conn, $sql) or die ("Data insert error");

    if($qry)
    {
      echo "$fullname ', your form was sent successfully.'";
      header("Location: checkout.php");
    }
  }
  else
  {
    echo "Please fill all the fields";
  }
  }

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>MCAST - The Malta College of Art, Science and Technology</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="vendors/base/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
  
</head>

<body>


  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
             
              <h4>Online Application</h4>
              <h6 class="font-weight-light">Please fill in all the below details.</h6>
              
              <form class="pt-3" method="POST" name="register" action="">
                <div class="form-group">
                  <input type="text" name="idnum" class="form-control form-control-lg" id="username" placeholder="Identification Number">
                </div>
                <div class="form-group">
                  <input type="text" name="fullname" class="form-control form-control-lg" id="username" placeholder="Full Name">
                </div>
                
                <div class="form-group">
                  <input type="email" name="email" class="form-control form-control-lg" id="email" placeholder="Email">
                </div>
                <div class="form-group">
                  <input type="text" name="institute" class="form-control form-control-lg" id="username" placeholder="Institute">
                </div>
                <div class="form-group">
                  <input type="text" name="course" class="form-control form-control-lg" id="username" placeholder="Course">
                </div>
                <div class="form-group">
                  <select name="form" class="form-control form-control-lg" id="country">
                    <option value="">Application Form</option>
                    <option value="A">Form A</option>
                    <option value="B">Form B</option>
                    <option value="C">Form C</option>
                    
                  </select>
                </div>
                
                
              
                <div class="mt-3">
                  <input type="submit" name="register" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" value="APPLY"/>
                
                </div>
                <div class="text-center mt-4 font-weight-light">
                  <a href="paginatedlist.php" class="text-primary">Click here to see a detailed list of available course fees</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="vendors/base/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <!-- endinject -->


</body>

</html>
