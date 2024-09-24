<?php
session_start();
// Initialize cart if not set or is unset
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}

// Unset quantity
unset($_SESSION['qty_array']);
?>

<?php $base_url = "http://" . $_SERVER['SERVER_NAME'] . '/';
?>
<!DOCTYPE html>
<html>
<!-- head -->
<?php
include('../layouts/card_head.php');
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
?>

<body>

    <div class="hero_area">
        <div class="bg-box">
            <img src="../images/hero-bg.jpg" alt="">
        </div>
        <!-- header section strats -->
        <?php
        include('../layouts/header.php');
        ?>
        <!-- end header section -->
        <!-- slider section -->
        <?php
        include('../layouts/slider.php');
        ?>
        <!-- end slider section -->
    </div>
    </div>

    <!-- offer section -->
    <?php
    include('../layouts/offer.php');
    ?>
    <!-- end offer section -->

    <!-- food section -->

    <section class="food_section layout_padding-bottom">
        <div class="container" style="font-size: 18px;">
            <div class="heading_container heading_center">
                <h2>
                    Our Menu
                </h2>
            </div>

            <ul class="filters_menu" style="justify-content: space-around;">
                <li class="btn btn-info" onclick="fetchMenuItems()" style="margin-left: 300px;"> All </li>
                <li class="btn btn-secondary" onclick="fetchMenuItems(3)">Burger</li>
                <li class="btn btn-primary" onclick="fetchMenuItems(4)">Pizza</li>
                <li class="btn btn-success" onclick="fetchMenuItems(5)">Pasta</li>
                <li class="btn btn btn-danger" onclick="fetchMenuItems(6)" style="margin-right: 300px;">Fries</li>
            </ul>
            <!-- Category buttons -->
            <!-- <button type="button" class="btn btn-secondary" onclick="fetchMenuItems(3)">Burger</button>
            <button type="button" class="btn btn-primary" onclick="fetchMenuItems(4)">Pizza</button>
            <button type="button" class="btn btn-success" onclick="fetchMenuItems(5)">Pasta</button>
            <button type="button" class="btn btn-danger" onclick="fetchMenuItems(6)">Fries</button> -->

            <!-- Container to display menu items -->
            <div id="menuItemsContainer" class="filters-content">
                <!-- Placeholder message -->
                <p style="text-align: center; font-style: italic;">Menu items will be displayed here</p>
            </div>

            <script>
                function fetchMenuItems(categoryId) {
                    var url = 'http://localhost/jutt-food/main-work/fetch_menu_items.php';
                    if (categoryId) {
                        url += '?category_id=' + categoryId;
                    }
                    $.ajax({
                        url: url,
                        type: 'GET',
                        dataType: 'json', // Ensure the response is treated as JSON
                        success: function(response) {
                            if (response.error) {
                                var container = document.getElementById('menuItemsContainer');
                                container.innerHTML = '<p style="color: red; text-align: center;">' + response.error + '</p>';
                            } else if (response.message) {
                                var container = document.getElementById('menuItemsContainer');
                                container.innerHTML = '<p style="text-align: center;">' + response.message + '</p>';
                            } else {
                                displayMenuItems(response);
                            }
                        },
                        error: function(xhr, status, error) {
                            console.error(xhr.responseText);
                            var container = document.getElementById('menuItemsContainer');
                            container.innerHTML = '<p style="color: red; text-align: center;">Failed to fetch menu items. Please try again later.</p>';
                        }
                    });
                }

                // Function to display menu items
                function displayMenuItems(menuItems) {
                    var container = document.getElementById('menuItemsContainer');
                    container.innerHTML = ''; // Clear previous menu items

                    // Iterate over menu items and create HTML elements
                    menuItems.forEach(function(item) {
                        var menuItemHTML = `
                        <div class="col-sm-6 col-lg-4 all pizza">
                            <div class="box">
                                <div>
                                    <div class="img-box">
                                        <img src="../../images/img/${item.uploadImage}" class="img-fluid w-p75" alt="" />
                                    </div>
                                    <div class="detail-box">
                                        <h5>${item.manuName}</h5>
                                        <p>${item.textArea}</p>
                                        <div class="options">
                                            <h6 style="font-size: 20px;">${item.number}$</h6>
                                            <a href="add_cart.php?id=${item.id}" class="btn btn-primary btn-sm" style="margin-left: 180px;"><span class="glyphicon glyphicon-plus"></span> Cart</a>
                                            <a href="view_cart.php?id=${item.id}">
                                                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 456.029 456.029" style="enable-background:new 0 0 456.029 456.029;" xml:space="preserve">
                                                    <!-- SVG content -->
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>`;
                        container.innerHTML += menuItemHTML;
                    });
                }

                // Fetch all menu items on page load
                window.onload = function() {
                    fetchMenuItems();
                };
            </script>
            <!-- <div class="btn-box">
                <a href="#">
                    View More
                </a>
            </div> -->
        </div>
    </section>

    <!-- end food section -->

    <!-- about section -->
    <?php
    include('../layouts/about.php');
    ?>
    <!-- end about section -->

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
                                <input type="text" class="form-control" name="name" id="name" placeholder="Your Name" />
                            </div>
                            <div>
                                <input type="text" class="form-control" name="phoneNumber" id="phoneNumber" placeholder="Phone Number" />
                            </div>
                            <div>
                                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" />
                            </div>
                            <div>
                                <select class="form-control" aria-label="Default select" id="person" name="person" placeholder="How many persons">
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
                            <div>
                                <input type="date" class="form-control" name="date" id="date">
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

    <?php
    // client section 
    include('../layouts/client_section.php');
    //footer section
    include '../layouts/footer.php';
    //script section
    include '../layouts/script.php';
    ?>

</body>

</html>