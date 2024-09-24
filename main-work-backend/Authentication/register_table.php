<?php $base_url = "http://" . $_SERVER['SERVER_NAME'] . '/';
?>

<!DOCTYPE html>
<html lang="en">
<!-- head -->
<?php
include('../layouts/head.php');
?>
<!--End head -->
<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'jutt_food';
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// echo "Connected successfully";

$sql = "SELECT * FROM sign_up";
$result = $conn->query($sql);

?>

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
                            <h4 class="page-title">Data Tables</h4>
                            <div class="d-inline-block align-items-center">
                                <nav>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
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
                                    <h3 class="box-title">View Register Data </h3>
                                </div>
                                <!-- /.box-header -->
                                <div class="box-body">
                                    <div class="table-responsive">
                                        <table id="example1" class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Id</th>
                                                    <th>Full Name</th>
                                                    <th>Email</th>
                                                    <th>Password</th>
                                                    <th>Check-box</th>
                                                    <th>Operations</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php

                                                if ($result->num_rows > 0) {
                                                    // output data of each row
                                                    while ($row = $result->fetch_assoc()) {

                                                ?>
                                                        <tr>
                                                            <td> <?php echo  $row["id"];  ?> </td>
                                                            <td> <?php echo  $row["fullName"];  ?></td>
                                                            <td> <?php echo  $row["email"];  ?></td>
                                                            <td> <?php echo  $row["password"];  ?></td>
                                                            <td> <?php echo  $row["basic_checkbox_1"];  ?></td>
                                                            <td>
                                                                <a href="edit_register.php?id=<?php echo  $row['id']; ?> "> <i class="fa fa-edit" style="font-size:20px;color:#4e73df;"></i></a>
                                                                <a href="delete_register.php?id=<?php echo  $row['id']; ?> "> <span class="bi bi-trash" style="font-size:20px;"></span></a>

                                                            </td>
                                                        </tr>
                                                <?php    }
                                                }  ?>

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
        include('../layouts/right_sidebar.php');
        ?>
        <!-- /.Content Right Sidebar -->
        <!--start footer-->
        <?php
        include('../layouts/footer.php');
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
    <?php
    include '../layouts/script.php';
    ?>
</body>

</html>