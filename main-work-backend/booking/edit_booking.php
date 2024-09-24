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

$id = $_GET['id'];

$sql = "SELECT * FROM booking_form where id =$id";
$result = $conn->query($sql);
$record = $result->fetch_row();

$conn->close();

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
                                    <form action="insert_booking.php" method="post">
                                        <div class="form-body">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input type="hidden" name="id" id="id" value="<?php echo  $record[0]; ?>">
                                                        <label class="fw-700 fs-16 form-label">Your Name</label>
                                                        <input type="text" class="form-control" name="name" id="name" value="<?php echo  $record[1]; ?>" placeholder="Your Name">
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="fw-700 fs-16 form-label">Phone Number</label>
                                                        <input type="text" class="form-control" name="phoneNumber" id="phoneNumber" value="<?php echo  $record[2]; ?>" placeholder="Phone Number">
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="fw-700 fs-16 form-label">Your Email</label>
                                                        <input type="email" class="form-control" name="email" id="email" value="<?php echo  $record[3]; ?>" placeholder="Your Email">
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="fw-700 fs-16 form-label">How Many Persons</label>
                                                        <select class="form-control" aria-label="Default select" id="person" name="person" value="<?php echo  $record[4]; ?>" placeholder="How many persons">
                                                            <option value="" disabled selected>
                                                                How many persons?
                                                            </option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>
                                                            <option value="6">6</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="fw-700 fs-16 form-label">Date</label>
                                                        <input type="date" class="form-control" name="date" id="date" value="<?php echo  $record[5]; ?>" placeholder="Category Name">
                                                    </div>
                                                    <div class="form-actions mt-10">
                                                        <button type="submit" class="btn btn-primary"> <i class="fa fa-check"></i> Book Now</button>
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