<?php include("include/header.php"); ?>
<?php
 $admin_id=$_SESSION['id'];

//total earn
$TotalEarn ="SELECT `total_amount` FROM `order` WHERE `vendor_id` = '$admin_id'";
$TotalEarn_result = mysqli_query($conn, $TotalEarn);
//today earn
$TodayDate = date("Y-m-d");
$TodayEarn = "SELECT `total_amount` FROM `order` where `payment_date`='$TodayDate' AND  `vendor_id` = '$admin_id'";
$TodayEarn_result = mysqli_query($conn, $TodayEarn);

//total  bid products
$Totalbidproduct = "SELECT * FROM `bid_product_details` WHERE `vendor_id` = '$admin_id' ";
$Totalbidproducts_result = mysqli_query($conn, $Totalbidproduct);
$Totalbidproducts = mysqli_num_rows($Totalbidproducts_result);
//total  buy products
$Totalproduct = "SELECT * FROM `product_details`  WHERE `vendor_id` = '$admin_id'";
$Totalproducts_result = mysqli_query($conn, $Totalproduct);
$Totalproducts = mysqli_num_rows($Totalproducts_result);
//total  deal products
// $Totaldealproduct = "SELECT * FROM `deal_product_details` WHERE `vendor_id` = '$admin_id' ";
// $Totaldealproducts_result = mysqli_query($conn, $Totaldealproduct);
// $Totaldealproducts = mysqli_num_rows($Totaldealproducts_result);
//total order
$Totalorder = "SELECT * FROM `order` WHERE `vendor_id` = '$admin_id' ";
$Totalorder_result = mysqli_query($conn, $Totalorder);
$Totalorders = mysqli_num_rows($Totalorder_result);
//today order
$Todayorder = "SELECT * FROM `order` where `payment_date`='$TodayDate'  AND `vendor_id` = '$admin_id'";
$Todayorder_result = mysqli_query($conn, $Todayorder);
$Todayorders = mysqli_num_rows($Todayorder_result);
//total Return
$TotalReturn = "SELECT * FROM `order` where `return_order`='Return'";
$TotalReturn_result = mysqli_query($conn, $TotalReturn);

$TodayReturn = "SELECT * FROM `order` where `return_order`='Return' AND `return_order_date`='$TodayDate'";
$TodayReturn_result = mysqli_query($conn, $TodayReturn);

$TodayCancel = "SELECT * FROM `order` where `cancel_status`='Admin-canceled'&'User-canceled' AND `cancel_date`='$TodayDate'";
$TodayCancel_result = mysqli_query($conn, $TodayCancel);
// $TodayCancels = mysqli_num_rows($TodayCancel_result);
?>

<div id="page-wrapper">
    <div class="page-content">
        <!-- begin PAGE TITLE AREA -->
        <div class="row">
            <div class="col-lg-12">
                <div class="page-title">
                    <h1>Dashboard
                        <!-- <small>Content Overview</small> -->
                    </h1>
                    <ol class="breadcrumb">
                        <li class="active"><i class="fa fa-dashboard"></i> Dashboard</li>
                     
                    </ol>
                </div>
            </div>
            <!-- /.col-lg-12 -->
        </div>

        <!-- begin DASHBOARD CIRCLE TILES -->
        <div class="row">
            <div class="col-lg-2 col-sm-6">
                <div class="circle-tile">
                    <a href="Payments.php">
                        <div class="circle-tile-heading dark-blue">
                            <i class="fa fa-money fa-fw fa-3x"></i>
                        </div>
                    </a>
                    <div class="circle-tile-content dark-blue">
                        <div class="circle-tile-description text-faded">
                            Total Earnings
                        </div>
                        <div class="circle-tile-number text-faded">
                            <?php
                            $total = 0;
                            while ($row = mysqli_fetch_assoc($TotalEarn_result)) {
                                $total += $row['total_amount'];}
                                echo "₹" . $total;
                            ?>
                            <span id="sparklineA"></span>
                        </div>
                        <a href="Payments.php" class="circle-tile-footer">More Info <i class="fa fa-chevron-circle-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-sm-6">
                <div class="circle-tile">
                    <a href="Payments.php?id=1">
                        <div class="circle-tile-heading green">
                            <i class="fa fa-money fa-fw fa-3x"></i>
                        </div>
                    </a>
                    <div class="circle-tile-content green">
                        <div class="circle-tile-description text-faded">
                            Today Earnings
                        </div>
                        <div class="circle-tile-number text-faded">
                            <?php
                            $total = 0;
                            while ($row = mysqli_fetch_assoc($TodayEarn_result)) {
                                $total += $row['total_amount'];
                            }
                            echo "₹" . $total;
                            ?>
                        </div>
                        <a href="Payments.php?id=1" class="circle-tile-footer">More Info <i class="fa fa-chevron-circle-right"></i></a>
                    </div>
                </div>
            </div>
         

            <div class="col-lg-2 col-sm-6">
                <div class="circle-tile">
                    <a href="bid_hot.php?type=hot">
                        <div class="circle-tile-heading dark-blue">
                        <i class="fa fa-tags fa-fw fa-3x"></i>
                        </div>
                    </a>
                     <div class="circle-tile-content dark-blue">
                        <div class="circle-tile-description text-faded">
                            Total Bid Products
                        </div>
                        <div class="circle-tile-number text-faded">
                            <?php echo $Totalbidproducts?>

                            <span id="sparklineB"></span>
                        </div>
                        <a href="bid_hot.php?type=hot" class="circle-tile-footer">More Info <i class="fa fa-chevron-circle-right"></i></a>
                    </div> 
                </div>
            </div>
            <div class="col-lg-2 col-sm-6">
                <div class="circle-tile">
                    <a href="product.php">
                        <div class="circle-tile-heading dark-blue">
                            <i class="fa fa-tags fa-fw fa-3x"></i>
                        </div>
                    </a>
                    <div class="circle-tile-content dark-blue">
                        <div class="circle-tile-description text-faded">
                            Total Buy products
                        </div>
                        <div class="circle-tile-number text-faded">
                            <?php echo $Totalproducts ?>
                            <span id="sparklineA"></span>
                        </div>
                        <a href="product.php" class="circle-tile-footer">More Info <i class="fa fa-chevron-circle-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-sm-6">
                <div class="circle-tile">
                    <a href="orders.php">
                        <div class="circle-tile-heading green">
                            <i class="fa fa-tasks fa-fw fa-3x"></i>
                        </div>
                    </a>
                    <div class="circle-tile-content green">
                        <div class="circle-tile-description text-faded">
                            Total orders
                        </div>
                        <div class="circle-tile-number text-faded">
                            <?php echo $Totalorders ?>
                        </div>
                        <a href="orders.php" class="circle-tile-footer">More Info <i class="fa fa-chevron-circle-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-sm-6">
                <div class="circle-tile">
                    <a href="orders.php?id=1">
                        <div class="circle-tile-heading orange">
                            <i class="fa fa-bell fa-fw fa-3x"></i>
                        </div>
                    </a>
                    <div class="circle-tile-content orange">
                        <div class="circle-tile-description text-faded">
                            Today orders
                        </div>
                        <div class="circle-tile-number text-faded">
                            <?php echo $Todayorders ?>
                        </div>
                        <a href="orders.php?id=1" class="circle-tile-footer">More Info <i class="fa fa-chevron-circle-right"></i></a>
                    </div>
                </div>
            </div>
           
          
        </div>
        <div class="row">
            
       
       
       
            
           
            <!-- <div class="col-lg-2 col-sm-6">
                <div class="circle-tile">
                    <a href="orders_report.php?id=2">
                        <div class="circle-tile-heading red">
                            <i class="fa fa-undo fa-fw fa-3x"></i>
                        </div>
                    </a>
                    <div class="circle-tile-content red">
                        <div class="circle-tile-description text-faded">
                            Today return orders
                        </div>
                        <div class="circle-tile-number text-faded">
                            <?php echo $TodayReturns ?>

                            <span id="sparklineC"></span>
                        </div>
                        <a href="orders_report.php?id=2" class="circle-tile-footer">More Info <i class="fa fa-chevron-circle-right"></i></a>
                    </div> 
                </div>
            </div> -->
            <!-- <div class="col-lg-2 col-sm-6">
                <div class="circle-tile">
                    <a href="orders_report.php?id=3">
                        <div class="circle-tile-heading purple">
                            <i class="fa fa-times-circle fa-fw fa-3x"></i>
                        </div>
                    </a>
                    <div class="circle-tile-content purple">
                        <div class="circle-tile-description text-faded">
                            Total cancelled orders
                        </div>
                        <div class="circle-tile-number text-faded">
                            <?php echo $TotalCancels ?>
                            <span id="sparklineD"></span>
                        </div>
                        <a href="orders_report.php?id=3" class="circle-tile-footer">More Info <i class="fa fa-chevron-circle-right"></i></a>
                    </div>
                </div>
            </div> -->
            <!-- <div class="col-lg-2 col-sm-6">
                <div class="circle-tile">
                    <a href="orders_report.php?id=4">
                        <div class="circle-tile-heading purple">
                            <i class="fa fa-times-circle fa-fw fa-3x"></i>
                        </div>
                    </a>
                    <div class="circle-tile-content purple">
                        <div class="circle-tile-description text-faded">
                            Today cancelled orders
                        </div>
                        <div class="circle-tile-number text-faded">
                            <?php echo $TodayCancels ?>
                            <span id="sparklineD"></span>
                        </div>
                        <a href="orders_report.php?id=4" class="circle-tile-footer">More Info <i class="fa fa-chevron-circle-right"></i></a>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
    <!-- /.page-content -->
</div>
<!-- end MAIN PAGE CONTENT -->
<?php include("include/footer.php"); ?>