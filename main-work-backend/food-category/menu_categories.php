<?php $base_url = "http://" . $_SERVER['SERVER_NAME'] . '/';
?>

<!DOCTYPE html>
<html lang="en">
<!-- head -->
<?php
include('../layouts/head.php');
?>
<!--End head -->

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
							<h4 class="page-title">Menu Categories</h4>
							<div class="d-inline-block align-items-center">
								<nav>
									<ol class="breadcrumb">
										<li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
										<li class="breadcrumb-item" aria-current="page">Menu</li>
										<li class="breadcrumb-item active" aria-current="page">Menu Categories</li>
									</ol>
								</nav>
							</div>
						</div>

					</div>
				</div>

				<!-- Main content -->
				<section class="content">
					<div class="row">
						<div class="col-xxxl-4 col-xl-6 col-lg-6 col-12">
							<div class="box overflow-h">
								<div class="box-body p-0">
									<div>
										<img class="rounded img-fluid" src="../images/food/sandwich.jpg" alt="">
									</div>
								</div>
								<div class="box-body">
									<div class="info-content">
										<h4 class="mb-10 mt-0">Sandwich</h4>
										<div class="d-flex justify-content-between align-items-center">
											<h4 class="mb-0 text-primary">$6.53 to $10.99</h4>
											<div class="d-flex align-items-center">
												<span class="fs-18 mx-10 text-primary icon-Burger"><span class="path1"></span><span class="path2"></span><span class="path3"></span></span>
												<h5 class="text-black mb-0">12 Item</h5>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xxxl-4 col-xl-6 col-lg-6 col-12">
							<div class="box overflow-h">
								<div class="box-body p-0">
									<div>
										<img class="rounded img-fluid" src="../images/food/salads.jpg" alt="">
									</div>
								</div>
								<div class="box-body">
									<div class="info-content">
										<h4 class="mb-10 mt-0">Salads</h4>
										<div class="d-flex justify-content-between align-items-center">
											<h4 class="mb-0 text-primary">$6.53 to $10.99</h4>
											<div class="d-flex align-items-center">
												<span class="fs-18 mx-10 text-primary icon-Carrot"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></span>
												<h5 class="text-black mb-0">12 Item</h5>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xxxl-4 col-xl-6 col-lg-6 col-12">
							<div class="box overflow-h">
								<div class="box-body p-0">
									<div>
										<img class="rounded img-fluid" src="../images/food/burgers.jpg" alt="">
									</div>
								</div>
								<div class="box-body">
									<div class="info-content">
										<h4 class="mb-10 mt-0">Burgers</h4>
										<div class="d-flex justify-content-between align-items-center">
											<h4 class="mb-0 text-primary">$6.53 to $10.99</h4>
											<div class="d-flex align-items-center">
												<span class="fs-18 mx-10 text-primary icon-Burger"><span class="path1"></span><span class="path2"></span><span class="path3"></span></span>
												<h5 class="text-black mb-0">12 Item</h5>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xxxl-4 col-xl-6 col-lg-6 col-12">
							<div class="box overflow-h">
								<div class="box-body p-0">
									<div>
										<img class="rounded img-fluid" src="../images/food/pizza.jpg" alt="">
									</div>
								</div>
								<div class="box-body">
									<div class="info-content">
										<h4 class="mb-10 mt-0">Pizza's</h4>
										<div class="d-flex justify-content-between align-items-center">
											<h4 class="mb-0 text-primary">$6.53 to $10.99</h4>
											<div class="d-flex align-items-center">
												<span class="fs-18 mx-10 text-primary icon-Pizza"></span>
												<h5 class="text-black mb-0">12 Item</h5>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xxxl-4 col-xl-6 col-lg-6 col-12">
							<div class="box overflow-h">
								<div class="box-body p-0">
									<div>
										<img class="rounded img-fluid" src="../images/food/soups.jpg" alt="">
									</div>
								</div>
								<div class="box-body">
									<div class="info-content">
										<h4 class="mb-10 mt-0">Soups</h4>
										<div class="d-flex justify-content-between align-items-center">
											<h4 class="mb-0 text-primary">$6.53 to $10.99</h4>
											<div class="d-flex align-items-center">
												<span class="fs-18 mx-10 text-primary icon-Miso-soup"><span class="path1"></span><span class="path2"></span></span>
												<h5 class="text-black mb-0">12 Item</h5>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xxxl-4 col-xl-6 col-lg-6 col-12">
							<div class="box overflow-h">
								<div class="box-body p-0">
									<div>
										<img class="rounded img-fluid" src="../images/food/main.jpg" alt="">
									</div>
								</div>
								<div class="box-body">
									<div class="info-content">
										<h4 class="mb-10 mt-0">Main Course</h4>
										<div class="d-flex justify-content-between align-items-center">
											<h4 class="mb-0 text-primary">$6.53 to $10.99</h4>
											<div class="d-flex align-items-center">
												<span class="fs-18 mx-10 text-primary icon-Dinner1"><span class="path1"></span><span class="path2"></span></span>
												<h5 class="text-black mb-0">12 Item</h5>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xxxl-4 col-xl-6 col-lg-6 col-12">
							<div class="box overflow-h">
								<div class="box-body p-0">
									<div>
										<img class="rounded img-fluid" src="../images/food/noodles.jpg" alt="">
									</div>
								</div>
								<div class="box-body">
									<div class="info-content">
										<h4 class="mb-10 mt-0">Noodles</h4>
										<div class="d-flex justify-content-between align-items-center">
											<h4 class="mb-0 text-primary">$6.53 to $10.99</h4>
											<div class="d-flex align-items-center">
												<span class="fs-18 mx-10 text-primary icon-Sushi"><span class="path1"></span><span class="path2"></span></span>
												<h5 class="text-black mb-0">12 Item</h5>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xxxl-4 col-xl-6 col-lg-6 col-12">
							<div class="box overflow-h">
								<div class="box-body p-0">
									<div>
										<img class="rounded img-fluid" src="../images/food/rice.jpg" alt="">
									</div>
								</div>
								<div class="box-body">
									<div class="info-content">
										<h4 class="mb-10 mt-0">Rice</h4>
										<div class="d-flex justify-content-between align-items-center">
											<h4 class="mb-0 text-primary">$6.53 to $10.99</h4>
											<div class="d-flex align-items-center">
												<span class="fs-18 mx-10 text-primary icon-Miso-soup"><span class="path1"></span><span class="path2"></span></span>
												<h5 class="text-black mb-0">12 Item</h5>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xxxl-4 col-xl-6 col-lg-6 col-12">
							<div class="box overflow-h">
								<div class="box-body p-0">
									<div>
										<img class="rounded img-fluid" src="../images/food/starters.jpg" alt="">
									</div>
								</div>
								<div class="box-body">
									<div class="info-content">
										<h4 class="mb-10 mt-0">Starters</h4>
										<div class="d-flex justify-content-between align-items-center">
											<h4 class="mb-0 text-primary">$6.53 to $10.99</h4>
											<div class="d-flex align-items-center">
												<span class="fs-18 mx-10 text-primary icon-Fish"><span class="path1"></span><span class="path2"></span></span>
												<h5 class="text-black mb-0">12 Item</h5>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xxxl-4 col-xl-6 col-lg-6 col-12">
							<div class="box overflow-h">
								<div class="box-body p-0">
									<div>
										<img class="rounded img-fluid" src="../images/food/subziyan.jpg" alt="">
									</div>
								</div>
								<div class="box-body">
									<div class="info-content">
										<h4 class="mb-10 mt-0">Subziyan</h4>
										<div class="d-flex justify-content-between align-items-center">
											<h4 class="mb-0 text-primary">$6.53 to $10.99</h4>
											<div class="d-flex align-items-center">
												<span class="fs-18 mx-10 text-primary icon-Miso-soup"><span class="path1"></span><span class="path2"></span></span>
												<h5 class="text-black mb-0">12 Item</h5>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xxxl-4 col-xl-6 col-lg-6 col-12">
							<div class="box overflow-h">
								<div class="box-body p-0">
									<div>
										<img class="rounded img-fluid" src="../images/food/dals.jpg" alt="">
									</div>
								</div>
								<div class="box-body">
									<div class="info-content">
										<h4 class="mb-10 mt-0">Dals</h4>
										<div class="d-flex justify-content-between align-items-center">
											<h4 class="mb-0 text-primary">$6.53 to $10.99</h4>
											<div class="d-flex align-items-center">
												<span class="fs-18 mx-10 text-primary icon-Miso-soup"><span class="path1"></span><span class="path2"></span></span>
												<h5 class="text-black mb-0">12 Item</h5>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xxxl-4 col-xl-6 col-lg-6 col-12">
							<div class="box overflow-h">
								<div class="box-body p-0">
									<div>
										<img class="rounded img-fluid" src="../images/food/breads.jpg" alt="">
									</div>
								</div>
								<div class="box-body">
									<div class="info-content">
										<h4 class="mb-10 mt-0">Breads</h4>
										<div class="d-flex justify-content-between align-items-center">
											<h4 class="mb-0 text-primary">$6.53 to $10.99</h4>
											<div class="d-flex align-items-center">
												<span class="fs-18 mx-10 text-primary icon-French-Bread"></span>
												<h5 class="text-black mb-0">12 Item</h5>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xxxl-4 col-xl-6 col-lg-6 col-12">
							<div class="box overflow-h">
								<div class="box-body p-0">
									<div>
										<img class="rounded img-fluid" src="../images/food/biryanis.jpg" alt="">
									</div>
								</div>
								<div class="box-body">
									<div class="info-content">
										<h4 class="mb-10 mt-0">Pulao / Biryanis</h4>
										<div class="d-flex justify-content-between align-items-center">
											<h4 class="mb-0 text-primary">$6.53 to $10.99</h4>
											<div class="d-flex align-items-center">
												<span class="fs-18 mx-10 text-primary icon-Miso-soup"><span class="path1"></span><span class="path2"></span></span>
												<h5 class="text-black mb-0">12 Item</h5>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xxxl-4 col-xl-6 col-lg-6 col-12">
							<div class="box overflow-h">
								<div class="box-body p-0">
									<div>
										<img class="rounded img-fluid" src="../images/food/dessert.jpg" alt="">
									</div>
								</div>
								<div class="box-body">
									<div class="info-content">
										<h4 class="mb-10 mt-0">Dessert</h4>
										<div class="d-flex justify-content-between align-items-center">
											<h4 class="mb-0 text-primary">$6.53 to $10.99</h4>
											<div class="d-flex align-items-center">
												<span class="fs-18 mx-10 text-primary icon-Ice-cream1"><span class="path1"></span><span class="path2"></span></span>
												<h5 class="text-black mb-0">12 Item</h5>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xxxl-4 col-xl-6 col-lg-6 col-12">
							<div class="box overflow-h">
								<div class="box-body p-0">
									<div>
										<img class="rounded img-fluid" src="../images/food/mocktails.jpg" alt="">
									</div>
								</div>
								<div class="box-body">
									<div class="info-content">
										<h4 class="mb-10 mt-0">Smoothies & Mocktails</h4>
										<div class="d-flex justify-content-between align-items-center">
											<h4 class="mb-0 text-primary">$6.53 to $10.99</h4>
											<div class="d-flex align-items-center">
												<span class="fs-18 mx-10 text-primary icon-Wine"><span class="path1"></span><span class="path2"></span></span>
												<h5 class="text-black mb-0">12 Item</h5>
											</div>
										</div>

									</div>
								</div>
							</div>
						</div>
						<div class="col-xxxl-4 col-xl-6 col-lg-6 col-12">
							<div class="box overflow-h">
								<div class="box-body p-0">
									<div>
										<img class="rounded img-fluid" src="../images/food/icecream.jpg" alt="">
									</div>
								</div>
								<div class="box-body">
									<div class="info-content">
										<h4 class="mb-10 mt-0">Ice Cream</h4>
										<div class="d-flex justify-content-between align-items-center">
											<h4 class="mb-0 text-primary">$6.53 to $10.99</h4>
											<div class="d-flex align-items-center">
												<span class="fs-18 mx-10 text-primary icon-Ice-cream"><span class="path1"></span><span class="path2"></span></span>
												<h5 class="text-black mb-0">12 Item</h5>
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

	<?php
	include '../layouts/script.php';
	?>
</body>
</html>