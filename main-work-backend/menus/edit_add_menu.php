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
$sql = "SELECT * FROM add_menu WHERE id=$id";
$result = $conn->query($sql);
$record = $result->fetch_assoc();
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
                            <h4 class="page-title">Add/Edit Menu</h4>
                            <div class="d-inline-block align-items-center">
                                <nav>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a>
                                        </li>
                                        <li class="breadcrumb-item" aria-current="page">Menu</li>
                                        <li class="breadcrumb-item active" aria-current="page">Add/Edit</li>
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
                                    <form action="update_add_menu.php" method="post" enctype="multipart/form-data">
                                        <div class="form-body">
                                            <div class="row">
                                                <div class="col-md-6">

                                                    <div class="form-group">
                                                        <input type="hidden" name="id" id="id"
                                                            value="<?php echo $record['id']; ?>">
                                                        <label class="fw-700 fs-16 form-label">Menu Name</label>
                                                        <input type="text" class="form-control" name="manuName"
                                                            id="manuName" value="<?php echo $record['manuName']; ?>"
                                                            placeholder="Product Name">
                                                    </div>
                                                </div>
                                                <!--/span-->
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="fw-700 fs-16 form-label">Ingredients</label>
                                                        <input type="text" class="form-control" name="ingredients"
                                                            id="ingredients"
                                                            value="<?php echo $record['ingredients']; ?>"
                                                            placeholder="Lorem Ipsum Text...">
                                                    </div>
                                                </div>
                                                <!--/span-->
                                            </div>
                                            <!--/row-->
                                            <!--/row-->
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="fw-700 fs-16 form-label">Category</label>
                                                        <select class="form-select" name="categoryName"
                                                            id="categoryName"
                                                            value="<?php echo $record['categoryName']; ?>"
                                                            data-placeholder="Choose a Category">
                                                            <option value="">Select Class</option>
                                                            <?php
                                                            $query = "SELECT id, categoryName FROM category ";
                                                            $result = $conn->query($query);
                                                            if ($result->num_rows > 0) {
                                                                while ($optionData = $result->fetch_assoc()) {
                                                                    $option = $optionData['categoryName'];
                                                                    $id = $optionData['id'];
                                                                    ?>
                                                                    <option value="<?php echo $id; ?>"><?php echo $option; ?>
                                                                    </option>
                                                                    <?php
                                                                }
                                                            }
                                                            ?>
                                                        </select>
                                                        </select>
                                                    </div>
                                                </div>
                                                <!--/span-->
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="fw-700 fs-16 form-label">Status</label>
                                                        <div class="radio-list">
                                                            <label class="radio-inline p-0 me-10">
                                                                <div class="radio radio-info">
                                                                    <input type="radio" name="radio" id="radio1"
                                                                        value="published1" <?php echo ($record['radio'] == 'published1') ? 'checked' : ''; ?>>
                                                                    <label for="radio1">Published</label>
                                                                </div>
                                                            </label>
                                                            <label class="radio-inline">
                                                                <div class="radio radio-info">
                                                                    <input type="radio" name="radio" id="radio2"
                                                                        value="draft2" <?php echo ($record['radio'] == 'draft2') ? 'checked' : ''; ?>>
                                                                    <label for="radio2">Draft</label>
                                                                </div>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--/span-->
                                            </div>
                                            <!--/row-->
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="fw-700 fs-16 form-label">Price</label>
                                                        <div class="input-group">
                                                            <div class="input-group-addon"><i class="ti-money"></i>
                                                            </div>
                                                            <input type="text" class="form-control" name="number"
                                                                id="number" value="<?php echo $record['number']; ?>"
                                                                placeholder="270">
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--/span-->
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="fw-700 fs-16 form-label">Discount</label>
                                                        <div class="input-group">
                                                            <div class="input-group-addon"><i class="ti-cut"></i></div>
                                                            <input type="text" class="form-control" name="percent"
                                                                id="percent" value="<?php echo $record['percent']; ?>"
                                                                placeholder="50%">
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--/span-->
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="fw-700 fs-16 form-label">Ingredients and
                                                            Description</label>
                                                        <textarea class="form-control p-20" name="textArea"
                                                            id="textArea" value="<?php echo $record['textArea']; ?>"
                                                            rows="4">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable.</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/row-->
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="fw-700 fs-16 form-label">Meta Title</label>
                                                        <input type="text" name="title" id="title"
                                                            value="<?php echo $record['title']; ?>"
                                                            class="form-control">
                                                    </div>
                                                </div>
                                                <!--/span-->
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="fw-700 fs-16 form-label">Meta Keyword</label>
                                                        <input type="text" class="form-control" name="keyword"
                                                            id="keyword" value="<?php echo $record['keyword']; ?>">
                                                    </div>
                                                </div>
                                                <!--/span-->
                                                <div class="col-md-3">
                                                    <h4 class="box-title mt-20">Uploaded Image</h4>
                                                    <div class="product-img text-start">
                                                        <img src="../images/product/product-9.png" alt="" class="mb-15">
                                                        <p>Upload Anonther Image</p>
                                                        <div class="btn btn-info mb-20">
                                                            <input type="file" class="upload" name="uploadImage"
                                                                id="uploadImage"
                                                                value="<?php echo $record['uploadImage']; ?>">
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="form-actions mt-10">
                                            <button type="submit" value="submit" class="btn btn-primary"> <i
                                                    class="fa fa-check"></i> Save / Add</button>
                                        </div>
                                    </form>
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