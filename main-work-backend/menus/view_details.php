<?php $base_url = "http://" . $_SERVER['SERVER_NAME'] . '/';
?>
<!DOCTYPE html>
<html lang="en">
<!-- head -->
<?php
include ('../layouts/head.php');
?>
<!--End head -->
<?php
include ('../connect/connection.php');

$id = $_GET['id'];

$sql = "SELECT * FROM add_menu where id =$id";
$result = $conn->query($sql);
$record = $result->fetch_row();

// $conn->close();

?>

<body class="hold-transition light-skin sidebar-mini theme-primary fixed sidebar-collapse">

	<div class="wrapper">
		<div id="loader"></div>

		<!--start top header-->
		<?php
		include ('../layouts/header.php');
		?>
		<!--end top header-->

		<!-- Left side column. contains the logo and sidebar -->
		<!--start sidebar -->
		<?php
		include ('../layouts/sidebar.php');
		?>
		<!--end sidebar -->

		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
			<div class="container-full">
				<!-- Content Header (Page header) -->
				<div class="content-header">
					<div class="d-flex align-items-center">
						<div class="me-auto">
							<h4 class="page-title">Details</h4>
							<div class="d-inline-block align-items-center">
								<nav>
									<ol class="breadcrumb">
										<li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a>
										</li>
										<li class="breadcrumb-item" aria-current="page">Menu</li>
										<li class="breadcrumb-item active" aria-current="page">Details</li>
									</ol>
								</nav>
							</div>
						</div>

					</div>
				</div>

				<!-- Main content -->
				<section class="content">
					<div class="row">
						<div class="col-lg-12">
							<div class="box">
								<div class="box-body">
									<div class="row">
										<div class="col-md-4 col-sm-6">
											<div class="box box-body b-1 text-center no-shadow">
												<img src="../../images/img/<?php echo $record[10]; ?>"
													class="img-fluid" alt="" />
											</div>
											<div class="clear"></div>
										</div>
										<div class="col-md-8 col-sm-6">
											<h2 class="box-title mt-0"><?php echo $record[1]; ?></h2>
											<div class="list-inline">
												<a class="text-warning"><i class="mdi mdi-star"></i></a>
												<a class="text-warning"><i class="mdi mdi-star"></i></a>
												<a class="text-warning"><i class="mdi mdi-star"></i></a>
												<a class="text-warning"><i class="mdi mdi-star"></i></a>
												<a class="text-warning"><i class="mdi mdi-star"></i></a>
											</div>
											<h1 class="pro-price mb-0 mt-20">
												<span><?php echo $record[5]; ?></span>
												<span class="text-danger"><?php echo $record[6]; ?>off</span>
											</h1>
											<hr>
											<h3 class="box-title mt-0"><?php echo $record[2]; ?></h3>
											<p><?php echo $record[7]; ?></p>
											<div class="row">
												<div class="col-sm-12">
													<h6>Color</h6>
													<div class="input-group">
														<ul class="icolors">
															<li class="bg-danger rounded-circle"></li>
															<li class="bg-info rounded-circle"></li>
															<li class="bg-primary rounded-circle active"></li>
														</ul>
													</div>
													<h6 class="mt-20">Available Size</h6>
													<p class="mb-0">
														<span
															class="badge badge-pill badge-lg badge-secondary-light">S</span>
														<span
															class="badge badge-pill badge-lg badge-secondary-light">M</span>
														<span
															class="badge badge-pill badge-lg badge-secondary-light">L</span>
													</p>
												</div>
											</div>
											<hr>
											<div class="gap-items">
												<button class="btn btn-success"><i class="mdi mdi-shopping"></i> Buy
													Now!</button>
												<button class="btn btn-primary"><i class="mdi mdi-cart-plus"></i> Add To
													Cart</button>
												<button class="btn btn-info"><i class="mdi mdi-compare"></i>
													Compare</button>
												<button class="btn btn-danger"><i class="mdi mdi-heart"></i>
													Wishlist</button>
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
		include ('../layouts/right_sidebar.php');
		?>
		<!-- /.Content Right Sidebar -->

		<!--start footer-->
		<?php
		include '../layouts/footer.php';
		?>
		<!--end footer-->
		<!-- Control Sidebar -->
		<?php
		include ('../layouts/control_sidebar.php');
		?>
		<!-- /.control-sidebar -->

		<!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
		<div class="control-sidebar-bg"></div>
	</div>
	<!-- ./wrapper -->


	<!-- Vendor JS -->
	<?php
	include '../layouts/script.php';
	?>


</body>

</html>