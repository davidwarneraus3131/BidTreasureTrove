<?php
include('./include/header.php');
include('./include/conn.php');
$id = $_GET['edit'];
// echo $id;
$sql = "SELECT * FROM `wearhouse_products` WHERE product_id=$id";
$result = mysqli_query($conn, $sql);
// print_r($res);  
$row = mysqli_fetch_assoc($result);
$pname = $row['product_name'];
$product_new_price = $row['product_new_price'];
$product_old_price = $row['product_old_price'];
$product_image1 = $row['product_image1'];
$product_image2 = $row['product_image2'];
$product_image3 = $row['product_image3'];
$product_image4 = $row['product_image4'];
$product_image5 = $row['product_image5'];
$category_id = $row['category_id'];
$category_name = $row['category_name'];
$sub_category_id = $row['sub_category_id'];
$specification = $row['specification'];
$product_description = $row['product_description'];
$brand_name = $row['brand_name'];
$Product_added_date = $row['Product_added_date'];
$Product_updated_datete = $row['Product_updated_datete'];
$hours = $row['hours'];
$min = $row['min'];
$sec = $row['sec'];
$retail = $row['retail'];
?>
<div id="page-wrapper">
    <div class="page-content">
        <!-- begin PAGE TITLE ROW -->
        <div class="row">
            <div class="col-lg-12">
                <div class="page-title">
                    <h1>Edit Warehouse Products</h1>
                    <ol class="breadcrumb">
                        <li><i class="fa fa-dashboard"></i> <a href="index.php">Dashboard</a>
                        </li>
                        <li class="active">warehoouse</li>
                    </ol>
                </div>
            </div>
            <!-- /.col-lg-12 -->
        </div>

        <div class="row" id="service_list">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-body" id="cards_banner">
                    <form method="post" enctype="multipart/form-data">
                           
                            <!-- the bid form  detilas  -->
                            <div class="form-group">
                                <label for="">product name</label>
                                <input type="text" name="product_name" value="<?= $pname ?>" class="form-control">
                            </div>
                            <div class="row">
                                <div class="form-group col-lg-2 col-md-2">
                                    <label for="">image1</label>
                                    <img src="../upload/wearhouse/<?= $product_image1 ?>" alt="" style="width:150px;height:150px" style="">
                                    <input type="file" name="image"  id="uploadfile" class="form-control">
                                </div>
                                <div class="form-group col-lg-2 col-md-2">
                                    <label for="">image2</label>
                                    <img src="../upload/wearhouse/<?= $product_image2 ?>" alt="" style="width:150px;height:150px" style="">
                                    <input type="file" name="image2" id="uploadfile2" class="form-control">
                                </div>
                                <div class="form-group col-lg-2 col-md-2">
                                    <label for="">image3</label>
                                    <img src="../upload/wearhouse/<?= $product_image3 ?>" alt="" style="width:150px;height:150px" style="">
                                    <input type="file" name="image3" id="uploadfile3" class="form-control">
                                </div>
                                <div class="form-group col-lg-2 col-md-2">
                                    <label for="">image4</label>
                                    <img src="../upload/wearhouse/<?= $product_image4 ?>" alt="" style="width:150px;height:150px" style="">
                                    <input type="file" name="image4" id="uploadfile4" class="form-control">
                                </div>
                                <div class="form-group col-lg-2 col-md-2">
                                    <label for="">image5</label>
                                    <img src="../upload/wearhouse/<?= $product_image5 ?>" alt="" style="width:150px;height:150px" style="">
                                    <input type="file" name="image5" id="uploadfile5" class="form-control">
                                </div>
                            </div>
                            <div class="select-box">
                                <label>category name</label>
                                <select class="form-control get_cat" id="getcategory" name="category_name">
                                    <option value="">Select Category</option>
                                    <?php
                                    $result = mysqli_query($conn, "SELECT * FROM category");
                                    while ($row = mysqli_fetch_array($result)) {
                                        ?>
                                        <option value="<?php echo $row['category_id']; ?>"><?php echo $row["category_name"]; ?></option>
                                        <?php
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="select-box">
                                <label>sub_category name</label>
                                <!-- <select class="form-control" id="getsubcategory" name="subcategory_name">
                                    <option style="color:black;" value="<?= $sub_category_id ?>">Select SubCategory
                                    </option>
                                </select> -->
                                <input type="text" name="subcategory_name" value="<?= $sub_category_id ?>" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="">New price</label>
                                <input type="text" value="<?= $product_new_price ?>" name="price" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">old price</label>
                                <input type="text" value="<?= $product_old_price ?>" name="old_price"
                                    class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Brand Name</label>
                                <input type="text" name="brand_name" value="<?= $brand_name ?>" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">description</label>
                                <input type="text" name="description" value="<?= $product_description ?>"
                                    class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">specification</label>
                                <input type="text" name="specification" value="<?= $specification ?>"
                                    class="form-control">
                            </div>
                            <!-- <div class="form-group">
                                    <label for="">Days</label>
                                    <input type="text" name="bid_days" class="form-control" >
                                </div> -->
                            <div class="form-group">
                                <label for="">Hours</label>
                                <input type="text" value="<?= $hours ?>" name="hours" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Minutes</label>
                                <input type="text" name="min" value="<?= $min ?>" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Seconds</label>
                                <input type="text" name="sec" value="<?= $sec ?>" class="form-control">
                            </div>


                            <!--  end of the bid form  detilas  -->

                            <div class="form-group">
                                <button class="btn btn-primary" id="btn_cards" type="submit" name="submit"
                                    value="submit">Submit</button>
                            </div>
                        </form>

                        <a href="wearhouse_products.php"><button class="btn btn-blue center-block"><i class="fa fa-backward"
                                    aria-hidden="true"></i>
                                <span>Go Back Top Banner page</span> </button></a>
                    </div>
                    <!-- <div class="panel-footer">Panel Footer</div> -->
                </div>
            </div>
            <!-- /.col-lg-12 -->
        </div>
    </div>
</div>

<?php
if (isset($_POST['submit'])) {
    $pname = $_POST['product_name'];
    $product_new_price = $_POST['price'];
    $product_old_price = $_POST['old_price'];
    $product_image1 = $_FILES['image'][''];
    $product_image2 = $_FILES['image2']['name'];
    $product_image3 = $_FILES['image3']['name'];
    $product_image4 = $_FILES['image4']['name'];
    $product_image5 = $_FILES['image5']['name'];
    $category_name = $_POST['category_name'];
    $sub_category_id =$_POST['subcategory_name'];
    $specification = $_POST['specification'];
    $product_description = $_POST['description'];
    $brand_name = $_POST['brand_name'];
    $hours = $_POST['hours'];
    $min = $_POST['min'];
    $sec = $_POST['sec'];
    $allowedExtensions = array("jpg", "jpeg", "png", "gif");

    // check the file extension 
    $product_image1Extension = strtolower(pathinfo($product_image1, PATHINFO_EXTENSION));
    $product_image2Extension = strtolower(pathinfo($product_image2, PATHINFO_EXTENSION));
    $product_image3Extension = strtolower(pathinfo($product_image3, PATHINFO_EXTENSION));
    $product_image4Extension = strtolower(pathinfo($product_image4, PATHINFO_EXTENSION));
    $product_image5Extension = strtolower(pathinfo($product_image5, PATHINFO_EXTENSION));
    if (
        !in_array($product_image1Extension, $allowedExtensions) ||
        !in_array($product_image2Extension, $allowedExtensions) ||
        !in_array($product_image3Extension, $allowedExtensions) ||
        !in_array($product_image4Extension, $allowedExtensions) ||
        !in_array($product_image5Extension, $allowedExtensions)
    ) {
        echo "Only JPG, JPEG, PNG, and GIF files are allowed.";
        exit;
    }
    



   


















    // Move uploaded files to a permanent location
    $targetDir = "../upload/wearhouse/";
    $targetproduct_image1 = $targetDir . basename($product_image1);
    $targetproduct_image2 = $targetDir . basename($product_image2);
    $targetproduct_image3 = $targetDir . basename($product_image3);
    $targetproduct_image4 = $targetDir . basename($product_image4);
    $targetproduct_image5 = $targetDir . basename($product_image5);
    move_uploaded_file($_FILES['image']['tmp_name'], $targetproduct_image1);
    move_uploaded_file($_FILES['image2']['tmp_name'], $targetproduct_image2);
    move_uploaded_file($_FILES['image3']['tmp_name'], $targetproduct_image3);
    move_uploaded_file($_FILES['image4']['tmp_name'], $targetproduct_image4);
    move_uploaded_file($_FILES['image5']['tmp_name'], $targetproduct_image5);



    
        
   
    $sql = "UPDATE `wearhouse_products` SET `product_name`='$pname',
    `product_new_price`='$product_new_price',`product_old_price`='$product_old_price',
    `product_image1`='$product_image1',`product_image2`='$product_image2',`product_image3`='$product_image3',
    `product_image4`='$product_image4',`product_image5`='$product_image5',`category_name`='$category_name',`sub_category_id`='$sub_category_id',`specification`='$specification',
    `product_description`='$product_description',`brand_name`='$brand_name',`hours`='$hours',`min`='$min',`sec`='$sec' WHERE product_id=$id";
    $resul=mysqli_query($conn,$sql);
    if ($resul) {
        echo "<script>alert('warehouse products Updated successfully!');</script>";
        echo "<script>window.location.href ='wearhouse_products.php'</script>";
    } else {
        echo "<script>alert('Data insertion error');</script>";
        echo "Error: " . mysqli_error($conn);
    }
}
include('./include/footer.php');

?>