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
							<h4 class="page-title">Menu List</h4>
							<div class="d-inline-block align-items-center">
								<nav>
									<ol class="breadcrumb">
										<li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
										<li class="breadcrumb-item" aria-current="page">Menu</li>
										<li class="breadcrumb-item active" aria-current="page">Menu List</li>
									</ol>
								</nav>
							</div>
						</div>

					</div>
				</div>

				<!-- Main content -->
				<section class="content">
					<div class="row">
						<?php

						include('../connect/connection.php');

						$sql = "SELECT * FROM add_menu";
						$result = $conn->query($sql);
						if ($result->num_rows > 0) {
							// output data of each row
							while ($row = $result->fetch_assoc()) {

						?>

								<div class="col-xxxl-3 col-xl-4 col-lg-6 col-12">
									<div class="box food-box">
										<div class="box-body text-center">
											<div class="menu-item">
												<img src="../../images/img/<?php echo $row['uploadImage']; ?>"" class=" img-fluid w-p75" alt=""/>
											</div>
											<div class="menu-details text-center">
												<h4 class="mt-20 mb-10"><?php echo  $row["manuName"];  ?></h4>
												<span class="mt-20 mb-10">categories<?php echo  $row["categoryName"];  ?></span>
												<p>Fast Food</p>
											</div>
											<div class="act-btn d-flex justify-content-between">
												<div class="text-center mx-5">
													<a href="view_details.php?id=<?php echo  $row['id']; ?>" class="waves-effect waves-circle btn btn-circle btn-success-light btn-xs mb-5"><i class="fa fa-eye-slash"></i></a>
													<small class="d-block">View</small>
												</div>
												<div class="text-center mx-5">
													<a href="edit_add_menu.php?id=<?php echo  $row['id']; ?> " class="waves-effect waves-circle btn btn-circle btn-danger-light btn-xs mb-5"><i class="fa fa-edit"></i></a>
													<small class="d-block">Edit</small>
												</div>
												<div class="text-center mx-5">
													<a href="delete_add_menu.php?id=<?php echo  $row['id']; ?> " class="waves-effect waves-circle btn btn-circle btn-primary-light btn-xs mb-5"><i class="fa fa-trash"></i></a>
													<small class="d-block">Delete</small>
												</div>
											</div>
										</div>
									</div>
								</div>								
						<?php }
						}
						?>
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