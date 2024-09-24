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

    <!-- food section -->
    <h1 class="page-header text-center">Cart Details</h1>
    <div class="row">
        <div class="col-lg-9">
            <?php
            if (isset($_SESSION['message'])) {
            ?>
                <div class="alert alert-info text-center">
                    <?php echo $_SESSION['message']; ?>
                </div>
            <?php
                unset($_SESSION['message']);
            }

            ?>
            <form method="POST" action="save_cart.php"  style="margin-left: 10px; padding-bottom: 50px;">
                <table class="table table-bordered table-striped">
                    <thead>
                        <th>Action</th>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Subtotal</th>
                    </thead>
                    <tbody>
                        <?php
                        //initialize total
                        $total = 0;
                        if (!empty($_SESSION['cart'])) {
                            //connection
                            include('../layouts/connection.php');
                            //create array of initail qty which is 1
                            $index = 0;
                            if (!isset($_SESSION['qty_array'])) {
                                $_SESSION['qty_array'] = array_fill(0, count($_SESSION['cart']), 1);
                            }
                            $sql = "SELECT * FROM add_menu WHERE id IN (" . implode(',', $_SESSION['cart']) . ")";
                            $query = $conn->query($sql);
                            while ($row = $query->fetch_assoc()) {
                        ?>
                                <tr>
                                    <td>
                                        <a href="delete_item.php?id=<?php echo $row['id']; ?>&index=<?php echo $index; ?>" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span></a>
                                    </td>
                                    <td><img src="../../images/img/<?php echo $row['uploadImage']; ?>"" class=" img-fluid w-p75" alt="" style="width: 80px; height: auto;" /></td>
                                    <td><?php echo $row['manuName']; ?></td>
                                    <td><?php echo number_format($row['number'], 2); ?></td>
                                    <input type="hidden" name="indexes[]" value="<?php echo $index; ?>">
                                    <td><input type="text" class="form-control" value="<?php echo $_SESSION['qty_array'][$index]; ?>" name="qty_<?php echo $index; ?>"></td>
                                    <td><?php echo number_format($_SESSION['qty_array'][$index] * $row['number'], 2); ?></td>
                                    <?php $total += $_SESSION['qty_array'][$index] * $row['number']; ?>
                                </tr>
                            <?php
                                $index++;
                            }
                        } else {
                            ?>
                            <tr>
                                <td colspan="5" class="text-center">No Item in Cart</td>
                            </tr>
                        <?php
                        }

                        ?>
                        <tr>
                            <td colspan="5" align="right"><b>Total</b></td>
                            <td><b><?php echo number_format($total, 2); ?></b></td>
                        </tr>
                    </tbody>
                </table>
                <a href="index1.php" class="btn btn-primary"><span class="glyphicon glyphicon-arrow-left"></span> Back</a>
                <button type="submit" class="btn btn-success" name="save">Save Changes</button>
                <a href="clear_cart.php" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Clear Cart</a>
                <a href="checkout.php" class="btn btn-success"><span class="glyphicon glyphicon-check"></span> Checkout</a>
            </form>
        </div>
        <div class="col-lg-3">
            <div class="border bg-light rounded p-4" style="margin-right: 10px;">
                <h4>Total Payment:</h4>
                <h5 class="text-right"><?php echo number_format($total, 2); ?> Rupees</h5>
                <br>
                <?php
                if (isset($_SESSION['cart']) && count ($_SESSION['cart'])>0)
                {
                ?>
                <form action="purchase.php" method="post">
                    <div class="form-group">
                        <label>Customer Name</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label>Phone Number</label>
                        <input type="number" class="form-control" id="number" name="number" required>
                    </div>
                    <div class="form-group">
                        <label>Address</label>
                        <input type="text" class="form-control" id="address" name="address" required>
                    </div>
                    <div class="form-group">
                        <label>Date Time</label>
                        <input type="datetime-local" class="form-control" id="dateTime" name="dateTime" required>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="payMode" id="cashOnDelivery" value="cashOnDelivery "  required checked style="margin-top: 1px;">
                        <label class="form-check-label" for="flexRadioDefault2" style="padding-left: 20px;">
                            Cash On Delivery
                        </label>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary btn-block" name="purchase">Make Purchase</button>
                </form>
                <?php
                }
                ?>
            </div>
        </div>
    </div>

    <!-- end food section -->


    <!-- footer section -->
    <?php
    //include '../layout/footer.php';
    ?>
    <!-- footer section -->

    <!-- script section -->
    <?php
    include '../layouts/script.php';
    ?>
    <!-- End script section -->
    </div>
</body>

</html>