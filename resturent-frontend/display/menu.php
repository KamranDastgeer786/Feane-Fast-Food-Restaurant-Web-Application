<?php
session_start();
//initialize cart if not set or is unset
if (!isset($_SESSION['cart'])) {
  $_SESSION['cart'] = array();
}

//unset qunatity
unset($_SESSION['qty_array']);
?>

<?php $base_url = "http://" . $_SERVER['SERVER_NAME'] . '/';
?>
<!DOCTYPE html>
<html>
<!-- head -->
<!-- head -->
<?php
include ('../layouts/card_head.php');
?>
<!--End head -->
<?php
include ('../layouts/connection.php');
?>

<body class="sub_page">

  <div class="hero_area">
    <div class="bg-box">
      <img src="../images/hero-bg.jpg" alt="">
    </div>
    <!-- header section strats -->
    <?php
    include ('../layouts/header.php');
    ?>
    <!-- end header section -->
  </div>

  <!-- food section -->

  <section class="food_section layout_padding-bottom">
    <div class="container" style="font-size: 18px;">
      <div class="heading_container heading_center">
        <h2 style="padding-top: 120px; font-size: 4rem; font-weight: bold;">
          Our Menu
        </h2>
      </div>


      <ul class="filters_menu">
        <!-- Category buttons -->
        <li onclick="fetchMenuItems()">All</li>
        <li onclick="fetchMenuItems(3)">Burger</li>
        <li onclick="fetchMenuItems(4)">Pizza</li>
        <li onclick="fetchMenuItems(5)">Pasta</li>
        <li onclick="fetchMenuItems(6)">Fries</li>

      </ul>
      <!-- Container to display menu items -->
      <div id="menuItemsContainer" class="filters-content">
        <!-- Placeholder message -->
      </div>

      <div class="filters-content">
        <div class="row grid">
          <script>
            function fetchMenuItems(categoryId) {
              var url = 'http://localhost/jutt-food/main-work-backend/fetch_menu_items.php';
              if (categoryId) {
                url += '?category_id=' + categoryId;
              }
              $.ajax({
                url: url,
                type: 'GET',
                dataType: 'json', // Ensure the response is treated as JSON
                success: function (response) {
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
                error: function (xhr, status, error) {
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
              menuItems.forEach(function (item) {
                var menuItemHTML = `
            <div class="col-sm-6 col-lg-4 all pizza">
              <div class="box">
                <div>
                  <div class="img-box">
                    <img src="../../images/img/${item.uploadImage}" class=" img-fluid w-p75" alt="" />
                  </div>
                  <div class="detail-box"> 
                    <h5>
                      ${item.manuName}
                    </h5>
                    <p>
                      ${item.textArea}
                    </p>
                    <div class="options">
                      <h6 style="font-size: 20px;">
                        ${item.number}
                        $
                      </h6>
                      <a href="add_cart.php?id=${item.id}" class="btn btn-primary btn-sm" style="margin-left: 180px;"><span class="glyphicon glyphicon-plus"></span> Cart</a>
                      <a href="view_cart.php?id=${item.id}">
                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 456.029 456.029" style="enable-background:new 0 0 456.029 456.029;" xml:space="preserve">
                          <g>
                            <g>
                              <path d="M345.6,338.862c-29.184,0-53.248,23.552-53.248,53.248c0,29.184,23.552,53.248,53.248,53.248
                                c29.184,0,53.248-23.552,53.248-53.248C398.336,362.926,374.784,338.862,345.6,338.862z" />
                            </g>
                          </g>
                          <g>
                            <g>
                              <path d="M439.296,84.91c-1.024,0-2.56-0.512-4.096-0.512H112.64l-5.12-34.304C104.448,27.566,84.992,10.67,61.952,10.67H20.48
                                C9.216,10.67,0,19.886,0,31.15c0,11.264,9.216,20.48,20.48,20.48h41.472c2.56,0,4.608,2.048,5.12,4.608l31.744,216.064
                                c4.096,27.136,27.648,47.616,55.296,47.616h212.992c26.624,0,49.664-18.944,55.296-45.056l33.28-166.4
                                C457.728,97.71,450.56,86.958,439.296,84.91z" />
                            </g>
                          </g>
                          <g>
                            <g>
                              <path d="M215.04,389.55c-1.024-28.16-24.576-50.688-52.736-50.688c-29.696,1.536-52.224,26.112-51.2,55.296
                                c1.024,28.16,24.064,50.688,52.224,50.688h1.024C193.536,443.31,216.576,418.734,215.04,389.55z" />
                            </g>
                          </g>
                          <g>
                          </g>
                          <g>
                          </g>
                          <g>
                          </g>
                          <g>
                          </g>
                          <g>
                          </g>
                          <g>
                          </g>
                          <g>
                          </g>
                          <g>
                          </g>
                          <g>
                          </g>
                          <g>
                          </g>
                          <g>
                          </g>
                          <g>
                          </g>
                          <g>
                          </g>
                          <g>
                          </g>
                          <g>
                          </g>
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

            // Fetch menu items on page load based on URL query parameter
            window.onload = function () {
              const urlParams = new URLSearchParams(window.location.search);
              const category = urlParams.get('category');

              let categoryId;
              switch (category) {
                case 'burger':
                  categoryId = 3; // Assuming 3 is the ID for burgers
                  break;
                case 'pizza':
                  categoryId = 4; // Assuming 1 is the ID for pizza
                  break;
                case 'pasta':
                  categoryId = 5; // Assuming 2 is the ID for pasta
                  break;
                case 'fries':
                  categoryId = 6; // Assuming 4 is the ID for fries
                  break;
                default:
                  categoryId = null;
              }
              fetchMenuItems(categoryId);
            };
          </script>
        </div>
      </div>
    </div>
    <div class="btn-box">
      <a href="#">
        View More
      </a>
    </div>
  </section>
  <!-- end food section -->

  <?php
  //footer section
  include '../layouts/footer.php';
  //script section
  include '../layouts/script.php';
  ?>

</body>

</html>