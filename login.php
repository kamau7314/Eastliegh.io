<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Skydash Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="./seller/vendors/feather/feather.css">
  <link rel="stylesheet" href="./seller/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="./seller/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="./seller/css/vertical-layout-light/style.css">
  <!-- endinject -->
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <img src="./assets/images/logo/BBBBB-removebg.png" alt="logo">
              </div>
              <h4>Hello! let's get started</h4>
              <h6 class="font-weight-light">Sign in to continue.</h6>
              <?php if(isset($_GET['error'])) { ?> 
              <div class="alert alert-danger text_align_center" role="alert">
                  <?php echo $_GET['error'];?>
              </div>       
                
            <?php } ?>
            <?php if(isset($_GET['success'])) { ?>       
              <div class="alert alert-primary text_align_center" role="alert">
                  <?php echo $_GET['success'];?>
                </div>           
            <?php } ?>
              <form class="pt-3" action="includes/login-check.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <input type="email" class="form-control form-control-lg" name="email" placeholder="Username">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" name="password" placeholder="Password">
                </div>
                <div class="mt-3" >
                <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">SIGN IN</button>                  
                </div>
                <div class="my-2 d-flex justify-content-between align-items-center">
                  <div class="form-check">
                    <label class="form-check-label text-muted">
                      <input type="checkbox" class="form-check-input">
                      Keep me signed in
                    </label>
                  </div>
                  <a href="#" class="auth-link text-black">Forgot password?</a>
                </div>
                <div class="text-center mt-4 font-weight-light">
                  Don't have an account? <a href="register.php" class="text-primary">Create</a>
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
  <script src="./seller/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="./seller/js/off-canvas.js"></script>
  <script src="./seller/js/hoverable-collapse.js"></script>
  <script src="./seller/js/template.js"></script>
  <script src="./seller/js/settings.js"></script>
  <script src="./seller/js/todolist.js"></script>
  <!-- endinject -->
</body>

</html>
