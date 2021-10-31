<!DOCTYPE html>
<html class="no-js" lang="en">
<!-- belle/register.html   11 Nov 2019 12:22:27 GMT -->

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <title>
    Create an Account &ndash; Belle Multipurpose Bootstrap 4 Template
  </title>
  <meta name="description" content="description" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <!-- Favicon -->
  <link rel="shortcut icon" href="assets/images/favicon.png" />
  <!-- Plugins CSS -->
  <link rel="stylesheet" href="assets/css/plugins.css" />
  <!-- Bootstap CSS -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
  <!-- Main Style CSS -->
  <link rel="stylesheet" href="assets/css/style.css" />
  <link rel="stylesheet" href="assets/css/responsive.css" />
</head>

<body class="page-template belle">
  <?php include_once('./common/header.php'); ?>
  <div class="pageWrapper">
    <!--Body Content-->
    <div id="page-content">
      <!--Page Title-->
      <div class="page section-header text-center">
        <div class="page-title">
          <div class="wrapper">
            <h1 class="page-width">Create an Account</h1>
          </div>
        </div>
      </div>
      <!--End Page Title-->

      <div class="container">
        <div class="row">
          <div class="col-12 col-sm-12 col-md-6 col-lg-6 main-col offset-md-3">
            <div class="mb-4">
              <form id="CustomerLoginForm" accept-charset="UTF-8" class="contact-form">
                <div class="row">
                  <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="form-group">
                      <label for="FirstName">First Name</label>
                      <input type="text" name="customer[first_name]" placeholder="" id="FirstName" autofocus="" />
                    </div>
                  </div>
                  <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="form-group">
                      <label for="LastName">Last Name</label>
                      <input type="text" name="customer[last_name]" placeholder="" id="LastName" />
                    </div>
                  </div>
                  <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="form-group">
                      <label for="CustomerEmail">Email</label>
                      <input type="email" name="customer[email]" placeholder="" id="CustomerEmail" class="" autocorrect="off" autocapitalize="off" autofocus="" />
                    </div>
                  </div>
                  <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="form-group">
                      <label for="CustomerPassword">Password</label>
                      <input type="password" value="" name="customer[password]" placeholder="" id="CustomerPassword" class="" />
                    </div>
                  </div>

                  <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="form-group">
                      <label for="CustomerPassword">Address</label>
                      <div class="form-floating">
                        <textarea class="form-control" id="floatingTextarea"></textarea>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="text-center col-12 col-sm-12 col-md-12 col-lg-12">
                    <button type="submit" id='newuserbtn' class="btn">Create</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--End Body Content-->

    <!--Footer-->
    <?php include_once('./common/footer.php') ?>
    <!--Scoll Top-->
    <span id="site-scroll"><i class="icon anm anm-angle-up-r"></i></span>
    <!--End Scoll Top-->

    <!-- Including Jquery -->
    <script src="assets/js/vendor/jquery-3.3.1.min.js"></script>
    <script src="assets/js/vendor/jquery.cookie.js"></script>
    <script src="assets/js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="assets/js/vendor/wow.min.js"></script>
    <!-- Including Javascript -->
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/lazysizes.js"></script>
    <script src="assets/js/main.js"></script>
  </div>
  <script>
    $(document).ready(function() {
      $('#newuserbtn').on('click', function(e) {
        e.preventDefault();
        var fname = $('#FirstName').val();
        var lname = $('#LastName').val();
        var email = $('#CustomerEmail').val();
        var password = $('#CustomerPassword').val();
        var address = $('#floatingTextarea').val();

        
        $.ajax({
          url: './php/adduser.php',
          type: 'POST',
          data: {
            fname: fname,
            lname: lname,
            email: email,
            password: password,
            address: address
          },
          success: function(data) {
            if (data == 1) {
              $('#CustomerLoginForm').trigger('reset');
            } else {
              alert("can't save records");
            }
          }
        })
      })
    });
  </script>
</body>

<!-- belle/register.html   11 Nov 2019 12:22:27 GMT -->

</html>