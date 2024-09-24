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
// echo "Connected successfully";

$sql = "SELECT * FROM booking_form";
$result = $conn->query($sql);

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
                <div class="col-lg-12">
                    <div class="form_container">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Number</th>
                                    <th>Email</th>
                                    <th>Persons</th>
                                    <th>Date</th>
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
                                            <td> <?php echo  $row["id"];  ?> </td>
                                            <td> <?php echo  $row["name"];  ?></td>
                                            <td> <?php echo  $row["phoneNumber"];  ?></td>
                                            <td> <?php echo  $row["email"];  ?></td>
                                            <td> <?php echo  $row["person"];  ?></td>
                                            <td> <?php echo  $row["date"];  ?></td>
                                            <td>

                                                <a href="edit_booking.php?id=<?php echo  $row['id']; ?> " class="btn btn-primary a-btn-slide-text" style="width: 45%; background-color: black; font-size: 11px;">
                                                    <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
                                                    <span><strong>Edit</strong></span>
                                                </a>
                                                <a href="delete_booking.php?id=<?php echo  $row['id']; ?>" class="btn btn-primary a-btn-slide-text" style="background-color: black; font-size: 11px;">
                                                    <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                                                    <span><strong>Delete</strong></span>
                                                </a>
                                                
                                            </td>
                                        </tr>
                                <?php    }
                                }  ?>

                            </tbody>
                        </table>
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