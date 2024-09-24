<?php $base_url = "http://" . $_SERVER['SERVER_NAME'] . '/';
?>
<!DOCTYPE html>
<html>
<!-- head -->
<?php
include('../layout/head.php');
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

<body class="sub_page">

    <div class="hero_area">
        <div class="bg-box">
            <img src="../images/hero-bg.jpg" alt="">
        </div>
        <!-- header section strats -->
        <?php
        include('../layout/header.php');
        ?>
        <!-- end header section -->
    </div>

    <!-- book section -->
    <section class="book_section layout_padding">
        <div class="container">
            <div class="heading_container">
                <h2>
                    Book A Table
                </h2>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form_container">
                        <form action="insert_booking.php" method="post">
                            <div>
                                <input type="hidden" name="id" id="id" value="<?php echo  $record[0]; ?>">
                                <input type="text" class="form-control" name="name" id="name" value="<?php echo  $record[1]; ?>" placeholder="Your Name" />
                            </div>
                            <div>
                                <input type="text" class="form-control" name="phoneNumber" id="phoneNumber" value="<?php echo  $record[2]; ?>" placeholder="Phone Number" />
                            </div>
                            <div>
                                <input type="email" class="form-control" name="email" id="email" value="<?php echo  $record[3]; ?>" placeholder="Your Email" />
                            </div>
                            <div>
                                <select class="form-control nice-select wide" id="person" name="person" value="<?php echo  $record[4]; ?>">
                                    <option value="" disabled selected>
                                        How many persons?
                                    </option>
                                    <option value="">
                                        2
                                    </option>
                                    <option value="">
                                        3
                                    </option>
                                    <option value="">
                                        4
                                    </option>
                                    <option value="">
                                        5
                                    </option>
                                </select>
                            </div>
                            <div>
                                <input type="date" class="form-control" name="date" id="date" value="<?php echo  $record[5]; ?>">
                            </div>
                            <div class="btn_box">
                                <button>
                                    Book Now
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="map_container ">
                        <div id="googleMap"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end book section -->
    <!-- footer section -->
    <?php
    include '../layout/footer.php';
    ?>
    <!-- footer section -->

    <!-- script section -->
    <?php
    include '../layout/script.php';
    ?>
    <!-- End script section -->

</body>

</html>