<?php include("include/head.php"); ?>
</div>
</div>

<?php   

$id=$_GET['ads'];


$sql = "SELECT * FROM `all_ads` JOIN `advertise` ON  `advertise`.`ads_id`=`all_ads`.`category_name` WHERE `ads_id`='$id'";

//    echo $sql;
$result = $db->query($sql);
    $row=mysqli_fetch_assoc($result);
?>
        <!-- Start Gallery Area -->
        <h1 class="text-center"> <?php echo  $row['ads_name']?></h1><br>
        <div class="gallery-area pt-100 pb-75" style="padding-top: 15px;">
            <div class="container" >
                <div class="row" style="display:flex;">  
<?php while($row=mysqli_fetch_assoc($result)){
    // print_r($result);
    $id=$row['ads_id'];
    $ad_id=$row['ad_id'];
   $ads_img=$row['ads_img'];
   $ad_name=$row['ad_name'];
   $ads_name=$row['ads_name'];
   $category_name=$row['category_name'];
     
?>
                    <div class="col-lg-4 col-md-6 col-6">
                        <div class="single-gallery-item">
                            <a data-fancybox="gallery" href="./upload/ads/<?php echo $ads_img;?>">
                                <img style="object-fit: cover" src="./upload/ads/<?php echo $ads_img;?>" alt="image">
                            </a>
                        </div>
                    </div>                  
                    <?php }?>
                </div>
            </div>
        </div>

   
<body>
    <h2 style="text-align: center;">Title Of the video</h2>
    <div class="container_video">
        <div class="video">
            <iframe src="https://www.youtube.com/embed/your_video_id" frameborder="0" allowfullscreen></iframe>
        </div>
        <div class="description">
            <h2>Video Title</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sed urna nec orci volutpat cursus a in mi. Nulla nec congue lectus, nec gravida erat. Nulla facilisi. Nunc vel tristique felis. Vivamus in lorem ac dui mattis finibus ac quis justo. Duis tempor vel turpis a gravida. Praesent ut mauris sed mi semper luctus a a nulla. Nullam non nisl nec odio fermentum sagittis a vitae ipsum. Nulla facilisi. Mauris vitae rhoncus magna. Curabitur accumsan feugiat est nec dignissim.</p>
        </div>
    </div>
</body>
</html>

<style>
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}

.container_video {
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 20px;
}

.video {
    flex: 1;
    margin-right: 20px;
}

.video iframe {
    width: 100%;
    height: 300px; /* Adjust the height as needed */
}

.description {
    flex: 1;
}

.description h2 {
    margin-top: 0;
}

.description p {
    line-height: 1.6;
}


</style>

</style>




</style>

        <!-- End Gallery Area -->

        <?php include("include/footer.php"); ?>