<?php

  if(isset($_POST['register']))
  {
    $cardname = $_POST['cardname'];
    $cardnum = $_POST['cardnum'];
    $cvv = $_POST['cvv'];
    $add1 = $_POST['add1'];
    $add2 = $_POST['add2'];

    if($cardname!='' && $cardnum!='' && $cvv!='' && $add1!='' && $add2!='')
    {

    

    $sql = "INSERT INTO checkout(cardname, cardnum, cvv, add1, add2) VALUES('$cardname', '$cardnum', '$cvv', '$add1', '$add2')";

    include_once('db.php');

    $qry = mysqli_query($conn, $sql) or die ("Data insert error");

    if($qry)
    {
      echo "$cardname ', your payment is successful.'";
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
             
              <h4>Payment details</h4>
              <h6 class="font-weight-light">Please fill in all the below details.</h6>
              
              <form class="pt-3" method="POST" name="register" action="">
                <div class="form-group">
                  <input type="text" name="cardname" class="form-control form-control-lg" id="username" placeholder="Name on Card">
                </div>
                <div class="form-group">
                  <input type="text" name="cardnum" class="form-control form-control-lg" id="username" placeholder="Card Number">
                </div>
                
                <div class="form-group">
                  <input type="text" name="cvv" class="form-control form-control-lg" id="username" placeholder="Security Code (CVV)">
                </div>
                <div class="form-group">
                  <input type="text" name="add1" class="form-control form-control-lg" id="username" placeholder="Street Address 1">
                </div>
                <div class="form-group">
                  <input type="text" name="add2" class="form-control form-control-lg" id="username" placeholder="Street Address 2">
                </div>
                
                
                
              
                <div class="mt-3">
                  <input type="submit" name="register" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" value="APPLY"/>
                
                </div>
                <div class="text-center mt-4 font-weight-light">
                  A full refund will be given if the application will be turned down or will not be accepted <a href="HomePage.html" class="text-primary">Go Home</a>
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
