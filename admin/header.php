<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin</title>
    <!-- Custom fonts for this template -->
    <link href="../assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link rel="shortcut icon" href="../assets/images/favicon-32x32.png" type="image/x-icon">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <link href="../assets/css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="../assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="?url=trangchu">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink" style="color: #f1c40f;"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Nhóm 6</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item urlive">
                <a class="nav-link" href="?url=trangchu">
                    <i class="fas fa-fw fa-house-damage"></i>
                    <span>Home</span>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Quản lý
            </div>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-users"></i>
                    <span>Quản lý thành viên</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="?url=listQtv">Danh sách quản trị viên</a>
                        <a class="collapse-item" href="?url=listTv">Danh sách người dùng</a>
                        <a class="collapse-item" href="?url=listTkKhoa">Tài khoản bị khóa</a>
                        <a class="collapse-item" href="?url=addTk" style="background-color: #48dbfb;">
                            <i class="fas fa-fw fa-plus" style="color: #576574;"></i>
                            <span>Thêm mới</span></a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Quản lý danh mục</span>
                </a>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="?url=listCategory">Danh sách danh mục</a>
                        <a class="collapse-item" href="?url=addCategory" style="background-color: #48dbfb;">
                            <i class="fas fa-fw fa-plus" style="color: #576574;"></i>
                            <span>Thêm mới</span></a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                    <i class="fas fa-fw fa-list"></i>
                    <span>Quản lý sản phẩm</span>
                </a>
                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="?url=listSp">Danh sách sản phẩm</a>
                        <a class="collapse-item" href="?url=addSp" style="background-color: #48dbfb;">
                            <i class="fas fa-fw fa-plus" style="color: #576574;"></i>
                            <span>Thêm mới</span></a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                    <i class="fas fa-fw fa-cart-arrow-down"></i>
                    <span>Quản lý đơn hàng</span>
                </a>
                <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="?url=listdh">Danh sách đơn hàng</a>
                        <a class="collapse-item" href="?url=kiemduyet">Kiểm duyệt đơn hàng <sup></sup></a>
                        <a class="collapse-item" href="?url=dagiao">Danh sách đã giao</a>
                        <a class="collapse-item" href="?url=dahuy">Danh sách đã hủy</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="?url=listbl">
                    <i class="fas fa-fw fa-comment"></i>
                    <span>Quản lý bình luận</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="?url=listbl">
                    <i class="fas fa-fw fa-comment"></i>
                    <span>Quản lý liên hệ</span></a>
            </li>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSix" aria-expanded="true" aria-controls="collapseSix">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Thống kê</span>
                </a>
                <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="?url=bieudo">Biểu đồ</a>
                        <a class="collapse-item" href="?url=danhsachthongke">Danh sách</a>
                    </div>
                </div>
            </li>
            <li class="nav-item  mb-3">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSevent" aria-expanded="true" aria-controls="collapseSevent">
                    <i class="fas fa-fw fa-bars"></i>
                    <span>Chức năng khác</span>
                </a>
                <div id="collapseSevent" class="collapse" aria-labelledby="headingSevent" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="?url=qltintuc">Quản lý tin tức</a>
                        <a class="collapse-item" href="?url=qlbanner">Quản lý banner</a>
                    </div>
                </div>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">dinh cuong</span>
                                <i class="fas fa-fw fa-user"></i>
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="../views/index.php">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Trở về Website
                                </a>
                                <!-- <div class="dropdown-divider"></div> -->
                                <a class="dropdown-item" href="../controller/index.php" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>
                    </ul>
                </nav>
                <!-- End of Topbar -->