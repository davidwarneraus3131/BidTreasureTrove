<?php include("include/header.php");
?>
<!-- begin MAIN PAGE CONTENT -->
<div id="page-wrapper">
    <div class="page-content">
        <!-- begin PAGE TITLE ROW -->
        <div class="row">
            <div class="col-lg-12">
                <div class="page-title">
                    <h1>Add Activity image</h1>
                    <ol class="breadcrumb">
                        <li><i class="fa fa-dashboard"></i> <a href="index.php">Dashboard</a>
                        </li>
                        <li class="active">save  a Life</li>
                    </ol>
                </div>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <!-- end PAGE TITLE ROW -->
        <!-- begin MAIN PAGE ROW -->
        <button class="btn btn-green btn-sm">total earning <span style="background-color: whitesmoke; color: black;">1234</span></button>
        <div class="row" >
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <!-- <div class="panel-heading">Panel Heading</div> -->
                    <div class="panel-body" >
                        <form method="post" enctype="multipart/form-data" action="">
                        
                                <div class="form-group">
                                    <label for="">Background Image</label>
                                    <input type="file" name="image" id="" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="">Card-Title</label>
                                    <input type="text" name="heading" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="">Text</label>
                                    <input type="text" name="text" class="form-control">
                                </div>

                            <div class="form-group">
                                <button class="btn btn-primary" type="submit" name="add_cards" value="submit">Submit</button>
                            </div>
                        </form>
                        <a href="save_activities.php"><button class="btn btn-blue center-block"><i class="fa fa-backward" aria-hidden="true"></i>
                       <span>Go Back Slider page</span> </button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php 
    if(isset($_POST['add_cards'])){
        
        $image1=$_FILES['image']['name'];
        $heading=$_POST['heading'];
        $text=$_POST['text'];
        $allowedExtensions = array("jpg", "jpeg", "png", "gif");
        
    // Check the file extension 
    if($image1!=""){
        $image1Extension = strtolower(pathinfo($image1, PATHINFO_EXTENSION));
        if (
            !in_array($image1Extension, $allowedExtensions) 
           
        ) {
            echo "Only JPG, JPEG, PNG, and GIF files are allowed.";
        }
        // Move uploaded files to a permanent location
        $targetDir = "../upload/save_activities/";
        $target_image1 = $targetDir . basename($image1);
      
        move_uploaded_file($_FILES['image']['tmp_name'], $target_image1);
        }else{
            $product_image1="";
        }

        $sql="INSERT INTO `save_activities`(`background_image`, `title`,`heading`) VALUES ('$image1','$text',
        '$heading')";
          $res=mysqli_query($conn,$sql);
          if($res){
            echo "Cards added to successfully";
          }else{
            echo "insert error".$conn->error;
          }
    }
    ?>
    <?php include("include/footer.php"); ?>
  