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

$sql = "SELECT *, add_menu.manuName as manu_name FROM order_detail join add_menu on order_detail.id = add_menu.id";
$result = $conn->query($sql);

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
							<h4 class="page-title">Order Details</h4>
							<div class="d-inline-block align-items-center">
								<nav>
									<ol class="breadcrumb">
										<li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a>
										</li>
										<li class="breadcrumb-item" aria-current="page">Order</li>
										<li class="breadcrumb-item active" aria-current="page">Order Details</li>
									</ol>
								</nav>
							</div>
						</div>

					</div>
				</div>

				<!-- Main content -->
				<section class="content">
					<div class="row">
						<div class="col-xxxl-4 col-12">
							<div class="box">
								<div class="box-body">
									<div class="d-flex align-items-center">
										<img class="me-10 rounded-circle avatar avatar-xl b-2 border-primary"
											src="../../images/avatar/1.jpg" alt="">
										<div>
											<h4 class="mb-0">Johen doe</h4>
											<span class="fs-14 text-info">Customer</span>
										</div>
									</div>
								</div>
								<div class="box-body border-bottom">
									<div class="d-flex align-items-center">
										<i class="fa fa-phone me-10 fs-24"></i>
										<h4 class="mb-0">+1 123 456 7890</h4>
									</div>
								</div>
								<div class="box-body border-bottom">
									<div class="d-flex align-items-center">
										<i class="fa fa-map-marker me-10 fs-24"></i>
										<h4 class="mb-0 text-black">1623 E Updahl Ct, Harrison, ID, 83833</h4>
									</div>
								</div>
								<div class="box-body">
									<h4 class="mb-10">Order Nots</h4>
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
								</div>
							</div>
							<div class="row">
								<div class="col-xxxl-12 col-lg-6 col-12">
									<div class="box">
										<div class="box-header no-border">
											<h4 class="box-title">Delivery Person</h4>
										</div>
										<div class="box-body text-center">
											<div class="text-center">
												<img src="../../images/avatar/3.jpg"
													class="mb-20 avatar avatar-xxl b-2 border-primary" alt="">
												<div>
													<h4 class="mb-10 fw-500">Boone Doe</h4>
													<span class="fs-14 font-w400">Join since April 21, 2019</span>
												</div>
											</div>
											<div class="user-social-acount mt-20">
												<a href="javascript:void(0);"
													class="btn btn-circle btn-primary-light"><i
														class="fa fa-phone"></i></a>
												<a href="javascript:void(0);"
													class="btn btn-circle btn-primary-light"><i
														class="fa fa-map-marker"></i></a>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xxxl-12 col-lg-6 col-12">
									<div class="box">
										<div class="box-header no-border">
											<h4 class="box-title">
												Customer Favourite
											</h4>
										</div>
										<div class="box-body text-center">
											<div class="bar mx-auto"
												data-peity='{ "fill": ["#2196f3", "#3da643", "#FDAC42"], "height": 150, "width": 320, "padding":0.2 }'>
												52,38,24</div>
											<div class="d-flex justify-content-center mt-30">
												<div class="d-flex text-start">
													<i class="fa fa-circle text-info me-5"></i>
													<h4 class="fw-600">25% <br><small class="text-fade">Pizza</small>
													</h4>
												</div>
												<div class="d-flex text-start mx-50">
													<i class="fa fa-circle text-danger me-5"></i>
													<h4 class="fw-600">15% <br><small class="text-fade">Juice </small>
													</h4>
												</div>
												<div class="d-flex text-start">
													<i class="fa fa-circle text-primary me-5"></i>
													<h4 class="fw-600">21% <br><small class="text-fade">Dessert </small>
													</h4>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xxxl-8 col-12">
							<div class="box">
								<div class="box-body">
									<ol class="c-progress-steps">
										<li class="c-progress-steps__step  done"><span>Order Created</span></li>
										<li class="c-progress-steps__step  done"><span>Payment Success</span></li>
										<li class="c-progress-steps__step  current"><span>On Delivery</span></li>
										<li class="c-progress-steps__step"><span>Order Delivered</span></li>
									</ol>
								</div>
							</div>
							<div class="box">
								<div class="box-body">
									<div class="table-responsive-xl">
										<table class="table product-overview">
											<thead>
												<tr>
													<th>Id</th>
													<th>Product Id</th>
													<th>Price</th>
													<th>Quantity</th>
													<th>Total</th>
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
															<td> <?php echo $row["id"]; ?> </td>
															<td> <?php echo $row["manuName"]; ?></td>
															<td> <?php echo $row["price"]; ?></td>
															<td> <?php echo $row["qty"]; ?></td>
															<td> <?php echo $row["total"]; ?></td>
															<td>
																<a href="delete_item.php?id=<?php echo $row['id']; ?>"
																	class="btn btn-circle btn-primary btn-xs" title=""
																	data-toggle="tooltip" data-original-title="Delete"><i
																		class="ti-trash"></i></a>
															</td>
														</tr>
														<?php
													}
												}
												?>
											</tbody>
										</table>
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

	<!-- Page Content overlay -->

	<?php
	include '../layouts/script.php';
	?>


</body>

</html>