<?php $base_url = "http://" . $_SERVER['SERVER_NAME'] . '/';
?>
<!DOCTYPE html>
<html lang="en">
<!-- head -->
<?php
include('../layouts/head.php');
?>
<!--End head -->

<body class="hold-transition light-skin sidebar-mini theme-primary fixed sidebar-collapse">

    <div class="wrapper">
        <div id="loader"></div>

        <!--start top header-->
        <?php
        include('../layouts/header.php');
        ?>
        <!--end top header-->
        <!-- Left side column. contains the logo and sidebar -->
        <!--start sidebar -->
        <?php
        include('../layouts/sidebar.php');
        ?>
        <!--end sidebar -->
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <div class="container-full">
                <!-- Content Header (Page header) -->
                <div class="content-header">
                    <div class="d-flex align-items-center">
                        <div class="me-auto">
                            <h4 class="page-title">Add/Menu Category</h4>
                            <div class="d-inline-block align-items-center">
                                <nav>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                                        <li class="breadcrumb-item" aria-current="page">Menu</li>
                                        <li class="breadcrumb-item active" aria-current="page">Add/Edit</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-12">
                            <div class="box">
                                <div class="box-body">
                                    <form action="insert_categories.php" method="post">
                                        <div class="form-body">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="fw-700 fs-16 form-label">Add Category</label>
                                                        <input type="text" class="form-control" name="categoryName" id="categoryName" placeholder="Category Name">
                                                    </div>
                                                    <div class="form-actions mt-10">
                                                        <button type="submit" class="btn btn-primary"> <i class="fa fa-check"></i> Save / Add</button>
                                                        <button type="button" class="btn btn-danger">Cancel</button>
                                                    </div>
                                                </div>
                                                <!--/span-->
                                            </div>
                                            <!--/row-->
                                        </div>
                                    </form> <!--/row-->
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            </section>
            <!-- /.content -->

        </div>
    </div>
    <!-- /.content-wrapper -->

    <!-- Content Right Sidebar -->
    <?php
    include('../layouts/right_sidebar.php');
    ?>
    <!-- /.Content Right Sidebar -->

    <!--start footer-->
    <?php
    include '../layouts/footer.php';
    ?>
    <!--end footer-->
    <!-- Control Sidebar -->
    <?php
    include('../layouts/control_sidebar.php');
    ?>
    <!-- /.control-sidebar -->

    <!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
    </div>
    <!-- ./wrapper -->
    <!-- Page Content overlay -->
    <?php
    include '../layouts/script.php';
    ?>

</body>

</html>