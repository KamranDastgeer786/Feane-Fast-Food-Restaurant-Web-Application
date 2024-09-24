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

$sql = "SELECT * FROM sign_up where id =$id";
$result = $conn->query($sql);
$record = $result->fetch_row();

// $conn->close();

?>

<body class="hold-transition theme-primary bg-img" style="background-image: url(../../images/auth-bg/bg-2.jpg)">

    <div class="container h-p100">
        <div class="row align-items-center justify-content-md-center h-p100">

            <div class="col-12">
                <div class="row justify-content-center g-0">
                    <div class="col-lg-5 col-md-5 col-12">
                        <div class="bg-white rounded10 shadow-lg">
                            <div class="content-top-agile p-20 pb-0">
                                <h2 class="text-primary">Get started with Us</h2>
                                <p class="mb-0">Register a new membership</p>
                            </div>
                            <div class="p-40">
                                <form action="insert_register.php" method="post">
                                    <div class="form-group">
                                        <input type="hidden" name="id" id="id" value="<?php echo  $record[0]; ?>">
                                        <div class="input-group mb-3">
                                            <span class="input-group-text bg-transparent"><i class="ti-user"></i></span>
                                            <input type="text" class="form-control ps-15 bg-transparent" name="fullName" id="fullName" value="<?php echo  $record[1]; ?>" placeholder="Full Name">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group mb-3">
                                            <span class="input-group-text bg-transparent"><i class="ti-email"></i></span>
                                            <input type="email" class="form-control ps-15 bg-transparent" name="email" id="email" value="<?php echo  $record[2]; ?>" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group mb-3">
                                            <span class="input-group-text bg-transparent"><i class="ti-lock"></i></span>
                                            <input type="password" class="form-control ps-15 bg-transparent" name="password" id="password" value="<?php echo  $record[3]; ?>" placeholder="Password">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group mb-3">
                                            <span class="input-group-text bg-transparent"><i class="ti-lock"></i></span>
                                            <input type="password" class="form-control ps-15 bg-transparent" placeholder="Retype Password">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="checkbox">
                                                <input type="checkbox" name="basic_checkbox_1" id="basic_checkbox_1" value="<?php echo  $record[4]; ?>">
                                                <label for="basic_checkbox_1">I agree to the <a href="#" class="text-warning"><b>Terms</b></a></label>
                                            </div>
                                        </div>
                                        <!-- /.col -->
                                        <div class="col-12 text-center">
                                            <button type="submit" class="btn btn-info margin-top-10">SIGN IN</button>
                                        </div>
                                        <!-- /.col -->
                                    </div>
                                </form>
                                <div class="text-center">
                                    <p class="mt-15 mb-0">Already have an account?<a href="user_login.php" class="text-danger ms-5"> Sign In</a></p>
                                </div>
                            </div>
                        </div>

                        <div class="text-center">
                            <p class="mt-20 text-white">- Register With -</p>
                            <p class="gap-items-2 mb-20">
                                <a class="btn btn-social-icon btn-round btn-facebook" href="#"><i class="fa fa-facebook"></i></a>
                                <a class="btn btn-social-icon btn-round btn-twitter" href="#"><i class="fa fa-twitter"></i></a>
                                <a class="btn btn-social-icon btn-round btn-instagram" href="#"><i class="fa fa-instagram"></i></a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Vendor JS -->
    <?php
    include '../layouts/script.php';
    ?>


</body>

</html>