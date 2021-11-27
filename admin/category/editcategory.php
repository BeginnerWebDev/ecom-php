<?php

include_once('../db/config.php');
$id = $_GET['id'];
$sql = $con->prepare("SELECT * FROM category WHERE id=?");
$sql->bindParam(1, $id);
$sql->execute();
$product_data = $sql->fetchAll();
foreach ($product_data as $data) {
    $cat_name = $data['cat_name'];
    $cat_desc = $data['cat_desc'];
    $cat_slug = $data['cat_slug'];
    $cat_image = $data['cat_image'];
}
if (isset($_POST['editcategory'])) {
    $folder = "../upload/categoryimg/";
    $categoryimg = $_FILES['catimage']['name'];
    $proimgarr = explode('.', $categoryimg);
    $new_img = time() . '_' . rand() . '.' . $proimgarr[1];
    $productimage = $_FILES['catimage']['tmp_name'];
    move_uploaded_file($productimage, $folder . $new_img);
    $sql = $con->prepare("update category set cat_name=?,cat_desc=?,cat_slug=?,cat_image=? WHERE id=?");
    $sql->bindParam(1, $_POST['cat_name']);
    $sql->bindParam(2, $_POST['cat_desc']);
    $sql->bindParam(3, $_POST['cat_slug']);
    $sql->bindParam(4, $new_img);
    $sql->bindParam(5, $id);

    if ($sql->execute()) {

        header('Location:http://localhost/ecomerce/admin/category/category.php');
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> Admin Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">


        <?php include_once('../php/sidebar.php') ?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">



            <!-- Main Content -->
            <div id="content">

                <!-- NavBar Start -->
                <?php include_once('../php/navbar.php'); ?>
                <!-- NavBar End -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                    </div>

                    <!-- Content Row -->

                    <div class="my-5">
                        <div class="row">
                            <div class="col-md-6 mx-auto mt-5">
                                <h1 class="text-center mb-5">Add Product</h1>
                                <form method="post" action="" enctype="multipart/form-data">
                                    <div class="mb-3">
                                        <label for="productname" class="form-label">Category Name</label>
                                        <input name='cat_name' type="text" class="form-control" id="productname" placeholder="" value="<?php echo $cat_name; ?>">
                                    </div>
                                    <div class="mb-3">
                                        <label for="productdesc" class="form-label">Category Description</label>
                                        <textarea name='cat_desc' class="form-control" id="cat_desc" rows="3"><?php echo $cat_desc; ?></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="producturl" class="form-label">Category URL</label>
                                        <input type="text" name='cat_slug' class="form-control" id="cat_slug" placeholder="" value="<?php echo $cat_slug; ?>">
                                    </div>
                                    <div class="mb-3">
                                        <label for="productimg" class="form-label">Category Image</label>
                                        <input type="file" name='catimage' class="form-control" id="cat_img" placeholder="">
                                        <img src="../upload/categoryimg/<?php echo $cat_image; ?>" height="100" width="100">
                                    </div>
                                    <input type="submit" class="btn btn-primary px-4 py-2 my-3" name='editcategory' value="Edit Category" />
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- Footer -->
            <?php include_once('../php/footer.php'); ?>
            <!-- End of Footer -->
        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->







    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="../vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="../js/demo/chart-area-demo.js"></script>
    <script src="../js/demo/chart-pie-demo.js"></script>

</body>

</html>