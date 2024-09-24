<?php
session_start();
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

<body class="sub_page">

  <div class="hero_area">
    <div class="bg-box">
      <img src="../images/hero-bg.jpg" alt="">
    </div>
    <!-- header section strats -->
    <?php
    include('../layouts/header.php');
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
  //footer section
  include '../layouts/footer.php';
  //script section
  include '../layouts/script.php';
  ?>
</body>

</html>