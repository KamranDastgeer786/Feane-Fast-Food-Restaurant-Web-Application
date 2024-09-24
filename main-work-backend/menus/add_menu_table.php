<?php $base_url = "http://" . $_SERVER['SERVER_NAME'] . '/';
?>

<!DOCTYPE html>
<html lang="en">
<!-- head -->
<?php
include ('../layouts/head.php');
?>
<!--End head -->
<?php
include ('../connect/connection.php');

$sql = "SELECT * FROM add_menu";
$result = $conn->query($sql);

?>

<body class="hold-transition light-skin sidebar-mini theme-primary fixed sidebar-collapse">

    <div class="wrapper">
        <div id="loader"></div>

        <!--start top header-->
        <?php
        include ('../layouts/header.php');
        ?>
        <!--end top header-->

        <!-- Left side column. contains the logo and sidebar -->
        <!--start sidebar -->
        <?php
        include ('../layouts/sidebar.php');
        ?>
        <!--end sidebar -->

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <div class="container-full">
                <!-- Content Header (Page header) -->
                <div class="content-header">
                    <div class="d-flex align-items-center">
                        <div class="me-auto">
                            <h4 class="page-title">Data Tables</h4>
                            <div class="d-inline-block align-items-center">
                                <nav>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a>
                                        </li>
                                        <li class="breadcrumb-item" aria-current="page">Tables</li>
                                        <li class="breadcrumb-item active" aria-current="page">Data Tables</li>
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
                                <div class="box-header with-border">
                                    <h3 class="box-title">View Menu Data </h3>
                                </div>
                                <!-- /.box-header -->
                                <div class="box-body">
                                    <div class="table-responsive">
                                        <table id="example1" class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Id</th>
                                                    <th>Menu Name</th>
                                                    <th>Ingredients</th>
                                                    <th>Category</th>
                                                    <th>Status</th>
                                                    <th>Price</th>
                                                    <th>Discount</th>
                                                    <th>Ingredients and Description</th>
                                                    <th>Meta Title</th>
                                                    <th>Meta Keyword</th>
                                                    <th>Uploaded Image</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php

                                                if ($result->num_rows > 0) {
                                                    // output data of each row
                                                    while ($row = $result->fetch_assoc()) {

                                                        ?>
                                                        <tr>
                                                            <td> <?php echo $row["id"]; ?> </td>
                                                            <td> <?php echo $row["manuName"]; ?></td>
                                                            <td> <?php echo $row["ingredients"]; ?></td>
                                                            <td> <?php echo $row["categoryName"]; ?></td>
                                                            <td> <?php echo $row["radio"]; ?></td>
                                                            <td> <?php echo $row["number"]; ?></td>
                                                            <td> <?php echo $row["percent"]; ?></td>
                                                            <td> <?php echo $row["textArea"]; ?></td>
                                                            <td> <?php echo $row["title"]; ?></td>
                                                            <td> <?php echo $row["keyword"]; ?></td>
                                                            <td>
                                                                <img width="100" height="100"
                                                                    src="../../images/img/<?php echo $row['uploadImage']; ?>">

                                                            </td>
                                                            <td>
                                                                <a href="edit_add_menu.php?id=<?php echo $row['id']; ?> "><i
                                                                        class="fa fa-edit"
                                                                        style="font-size:20px;color:#4e73df;"></i></a>
                                                                <a href="delete_add_menu.php?id=<?php echo $row['id']; ?> ">
                                                                    <span class="bi bi-trash"
                                                                        style="font-size:20px;"></span></a>

                                                            </td>
                                                        </tr>
                                                    <?php }
                                                } ?>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!-- /.box-body -->
                            </div>
                            <!-- /.box -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </section>
                <!-- /.content -->

            </div>
        </div>
        <!-- /.content-wrapper -->

        <!-- Content Right Sidebar -->
        <?php
        include ('../layouts/right_sidebar.php');
        ?>
        <!-- /.Content Right Sidebar -->
        <!--start footer-->
        <?php
        include ('../layouts/footer.php');
        ?>
        <!--end footer-->
        <!-- Control Sidebar -->
        <?php
        include ('../layouts/control_sidebar.php');
        ?>
        <!-- /.control-sidebar -->

        <!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
        <div class="control-sidebar-bg"></div>
    </div>
    <!-- ./wrapper -->
    <?php
    include '../layouts/script.php';
    ?>
</body>

</html>