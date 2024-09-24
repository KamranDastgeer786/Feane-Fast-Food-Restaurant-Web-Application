<?php $base_url = "http://" . $_SERVER['SERVER_NAME'] . '/';
?>

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from riday-admin-template.multipurposethemes.com/bs5/main-mini/index2.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Sep 2023 12:28:14 GMT -->

<!-- head -->
<?php
include ('../layouts/head.php');
?>
<!--End head -->
<?php
include ('../connect/connection.php');

$sql = "SELECT * FROM `order`";
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
							<h4 class="page-title">Order List</h4>
							<div class="d-inline-block align-items-center">
								<nav>
									<ol class="breadcrumb">
										<li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a>
										</li>
										<li class="breadcrumb-item" aria-current="page">Order</li>
										<li class="breadcrumb-item active" aria-current="page">Order List</li>
									</ol>
								</nav>
							</div>
						</div>

					</div>
				</div>

				<!-- Main content -->
				<section class="content">
					<div class="row">
						<div class="col-12">
							<div class="box">
								<div class="box-body">
									<div class="table-responsive rounded card-table">
										<table class="table border-no" id="example1">
											<thead>
												<tr>
													<th style="width: 111px;">Customer ID</th>
													<th style="width: 134px;">Customer Name</th>
													<th style="width: 126px;">Phone Number</th>
													<th>Location</th>
													<th>Date</th>
													<th>Status Order</th>
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
															<td> <?php echo $row["name"]; ?></td>
															<td> <?php echo $row["number"]; ?></td>
															<td> <?php echo $row["address"]; ?></td>
															<td> <?php echo $row["dateTime"]; ?></td>
															<td> <?php echo $row["payMode"]; ?></td>
															<td>
																<a href="delete_item.php?id=<?php echo $row['id']; ?>"
																	class="btn btn-circle btn-primary btn-xs" title=""
																	data-toggle="tooltip" data-original-title="Delete"><i
																		class="ti-trash"></i></a>
																<div class="btn-group">
																	<a class="hover-primary dropdown-toggle no-caret"
																		data-bs-toggle="dropdown"><i
																			class="fa fa-ellipsis-h"></i></a>
																	<div class="dropdown-menu">
																		<a class="dropdown-item" href="#">Accept Order</a>
																		<a class="dropdown-item" href="#">Reject Order</a>
																	</div>
																</div>
															</td>
														</tr>
														<?php
													}
												}
												?>

												<!-- <tr class="hover-primary">
													<td>#245889</td>
													<td>30 April 2020,<span class="fs-12"> 11:12 AM</span></td>
													<td>Melinda</td>
													<td>143 Portsmouth Cir, Glen Mills, PA, 19342</td>
													<td>$78.5</td>
													<td>
														<span class="badge badge-pill badge-warning-light">On Delivery</span>
													</td>
													<td>
														<div class="btn-group">
															<a class="hover-primary dropdown-toggle no-caret" data-bs-toggle="dropdown"><i class="fa fa-ellipsis-h"></i></a>
															<div class="dropdown-menu">
																<a class="dropdown-item" href="#">Accept Order</a>
																<a class="dropdown-item" href="#">Reject Order</a>
															</div>
														</div>
													</td>
												</tr> -->
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