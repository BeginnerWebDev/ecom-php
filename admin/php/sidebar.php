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


    <li class="nav-item <?php if ($currentPage == 'product.php' || $currentPage == 'addProduct.php') { ?> active <?php } ?>">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Products List</span>
        </a>
        <div id="collapseTwo" class="collapse <?php if ($currentPage == 'product.php' || $currentPage == 'addProduct.php') { ?> show <?php } ?>" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item <?php if ($currentPage == 'product.php') { ?> active <?php } ?>" href="product.php">Product</a>
                <a class="collapse-item <?php if ($currentPage == 'addProduct.php') { ?> active <?php } ?>" href="addProduct.php">Add Products</a>
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