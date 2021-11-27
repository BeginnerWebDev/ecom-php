<?php
$actuallink = $_SERVER['REQUEST_URI'];
$link = explode('/', $actuallink);
$currentPage = $link[3];
?>

<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="dashboard.php">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3"> Admin</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item <?php if ($currentPage == 'dashboard.php') { ?> active <?php } ?>">
        <a class="nav-link" href="dashboard.php">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">


    <li class="nav-item <?php if ($currentPage == 'product.php' || $currentPage == 'addproduct.php') { ?> active <?php } ?>">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Products List</span>
        </a>
        <div id="collapseTwo" class="collapse <?php if ($currentPage == 'product.php' || $currentPage == 'addproduct.php') { ?> show <?php } ?>" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item <?php if ($currentPage == 'product.php') { ?> active <?php } ?>" href="product.php">Product</a>
                <a class="collapse-item <?php if ($currentPage == 'addproduct.php') { ?> active <?php } ?>" href="addproduct.php">Add Products</a>
            </div>
        </div>
    </li>

    <hr class="sidebar-divider">

    <li class="nav-item <?php if ($currentPage == 'category.php' || $currentPage == 'addcategory.php') { ?> active <?php } ?>">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
            <i class="fas fa-fw fa-cog"></i>
            <span> Category </span>
        </a>
        <div id="collapseThree" class="collapse <?php if ($currentPage == 'category.php' || $currentPage == 'addcategory.php') { ?> show <?php } ?>" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item <?php if ($currentPage == 'category.php') { ?> active <?php } ?>" href="category.php">All Category</a>
                <a class="collapse-item <?php if ($currentPage == 'addcategory.php') { ?> active <?php } ?>" href="addcategory.php">Add Category</a>
            </div>
        </div>
    </li>

    <hr class="sidebar-divider">


    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>


</ul>
<!-- End of Sidebar -->