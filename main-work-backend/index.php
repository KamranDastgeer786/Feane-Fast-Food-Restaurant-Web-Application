<?php $base_url = "http://" . $_SERVER['SERVER_NAME'] . '/';
?>

<!DOCTYPE html>
<html lang="en">

<!-- head -->

<?php
include ('layouts/head.php');
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

<body class="hold-transition light-skin sidebar-mini theme-primary fixed sidebar-collapse">

	<div class="wrapper">
		<div id="loader"></div>

		<!--start top header-->
		<?php
		include ('layouts/header.php');
		?>
		<!--end top header-->

		<!--start sidebar -->
		<?php
		include ('layouts/sidebar.php');
		?>
		<!--end sidebar -->

		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
			<div class="container-full">
				<!-- Main content -->
				<section class="content">
					<div class="row">
						<div class="col-xxxl-6 col-12">
							<div class="row">
								<div class="col-md-6 col-12">
									<div class="box box-body">
										<div class="d-flex align-items-center justify-content-between">
											<div class="text-start">
												<h5>Total Menu</h5>
												<h3 class="mb-0 fw-500">
													<?php

													$sql = "SELECT COUNT(*) as count FROM add_menu";
													$result = $conn->query($sql);

													$row = $result->fetch_assoc();
													$totalCount = $row['count'];
													echo $totalCount;
													?>
												</h3>
											</div>
											<div>
												<div id="progressbar1" class="mx-auto w-100 position-relative"></div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-6 col-12">
									<div class="box box-body">
										<div class="d-flex align-items-center justify-content-between">
											<div class="text-start">
												<h5>Total Orders</h5>
												<h3 class="mb-0 fw-500">
													<?php

													$sql = "SELECT COUNT(*) as count FROM order_detail";
													$result = $conn->query($sql);

													$row = $result->fetch_assoc();
													$totalCount = $row['count'];
													echo $totalCount;
													?>

												</h3>
											</div>
											<div>
												<div id="progressbar2" class="mx-auto w-100 position-relative"></div>
											</div>
										</div>
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
		include ('layouts/right_sidebar.php');
		?>
		<!-- /.Content Right Sidebar -->

		<!--start footer-->
		<?php
		include 'layouts/footer.php';
		?>
		<!--end footer-->

		<!-- Control Sidebar -->
		<?php
		include ('layouts/control_sidebar.php');
		?>
		<!-- /.control-sidebar -->

		<!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
		<div class="control-sidebar-bg"></div>

	</div>
	<!-- ./wrapper -->

	<!-- Page Content overlay -->
	<?php
	include 'layouts/script.php';
	?>

</body>

<!-- Mirrored from riday-admin-template.multipurposethemes.com/bs5/main-mini/index2.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Sep 2023 12:29:24 GMT -->

</html>