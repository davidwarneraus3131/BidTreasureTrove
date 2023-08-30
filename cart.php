
<?php include("include/head.php"); ?>


        
        <style>
            /* search */
      .search-box {
    position:absolute;
    transform:translate(10%, 20%);
    background:#2f3640;
    border-radius:40px;
    height:44px;
    padding:7px;
    margin-left: 100px;
    margin-top: -70px;
    box-shadow:0px 0px 10px 0px rbg(0,0,0,0.2);
}

.search-btn {
    border:none;
    background:crimson;
    border-radius:50%;
    float:right;
    display:flex;
    width:30px;
    height:30px;
    justify-content:center;
    align-items:center;
    outline:none;
    transition:0.6s;
    font-weight:bold;
    color:#FFFFFF;
    box-shadow:0px 0px 10px 0px crimson;
}

.search-txt {
    background:none;
    border:none;
    outline:none;
    float:left;
    padding:0px;
    font-size:16px;
    transition:0.6s;
    color:crimson;
    font-weight:bold;
    line-height:30px;
    width:0px;
}

.search-box:hover > .search-txt {
    width:240px;
    padding:0 6px;
}

.search-box:hover > .search-btn {
    background:crimson;
    color:#FFFFFF;
    box-shadow:0px 5px 20px 0px crimson;
}

/* sidenav */
.button-nav {
    position: relative;
    cursor: pointer;
    background: transparent;
    border: 1px solid silver;
    padding: 0.5em;
    display: inline-block;
    zoom: 1;
    border-radius: 4px;
}

.button-nav .line {
    display: block;
    background: #969696;
    height: 3px;
    width: 25px;
    margin: 3px 0;
}

.header-top {
    padding: 10px;
    background: #fff;
    border-bottom: 1px solid #dad5d5;
}

.header-top h1 {
    margin: 0;
    display: inline-block;
    font-size: 1.5em;
    vertical-align: text-bottom;
    line-height: 1;
    font-weight: 400;
}


.navigation-backdrop {
    position: fixed;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    z-index: 1000;
    background: rgba(212, 212, 212, 0.36);
}

.navigation {
    position: fixed;
    left: 0;
    top: 0;
    height: 100%;
    background: #fff;
    z-index: 1001;
    min-width: 250px;
    overflow: auto;
    display: none;
    box-shadow: -1px 2px 6px 1px #9e9e9e;
}

.navigation.open {
	display: block;
}

.navigation-button {
    padding: 10px;
    text-align: right;
}

.navigation-heading {
    margin: 0;
    font-weight: 400;
    color: #777777;
    padding: 10px;
}

.navigation-list {
    padding: 0;
    list-style: none;
  	margin: 0;
}

.navigation-list a {
    color: #159bfb;
    text-decoration: none;
    display: block;
    padding: 10px;
}
        </style>
    </head>

    <body>


     
    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                    
                        <h2> Cart</h2>
                        <!-- <?php print_r($_SESSION['cart']);?> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Shoping Cart Section Begin -->
    <section class="shoping-cart spad">
        <div class="container">
        <div class="row">
                    <div class="col-lg-9">
                        <div class="table-content table-responsive cart-table-content">
                    <table class="table table-bordered align-middle">
                        <thead>
                            <tr class="text-uppercase">
                                <th class="text-dark text-center fw-500 text-nowrap">Image</th>
                                <th class="text-dark text-center fw-500 text-nowrap">Product Name</th>
                                <th class="text-dark text-center fw-500 text-nowrap">Until Price</th>
                                <th class="text-dark text-center fw-500 text-nowrap">Qty</th>
                                <th class="text-dark text-center fw-500 text-nowrap">Subtotal</th>
                                <th class="text-dark fw-500 text-end text-nowrap">action</th>
                            </tr>
                        </thead>
                        <tbody class="fetch_cart">   

                        </tbody>
                    </table>
                </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card">
                            <div class="card-header bg-transparent py-3">
                                <h6 class="m-0 mb-1">Order Total</h6>
                            </div>
                            <div class="card-body ">
                                <ul class="list-unstyled">
                                    <li class="d-flex justify-content-between align-items-center mb-2 ">
                                        <h6 class="me-2 text-body">Subtotal</h6><span class="text-end fetch_cart_value" data-checkId></span>
                                    </li>
                                    <li class="d-flex justify-content-between align-items-center mb-2 ">
                                        <h6 class="me-2 text-body">Taxes</h6><span class="text-end fetch_cart_value_tax">Rs.0.00</span>
                                    </li>
                                    <li class="d-flex justify-content-between align-items-center border-top pt-3 mt-3">
                                        <h6 class="me-2">Grand Total</h6><span class="text-end text-dark fetch_cart_value_sub"></span>
                                    </li>
                                </ul>
                                <form action="checkout.php">
                               
                                    <li class="d-flex justify-content-between align-items-center">
                                        <style>
                                            .nice-select {
                                                width: 100%;
                                            }
                                        </style>  
                                <?php if (isset($_SESSION['user_details'])) {
								 echo '<div class="d-grid gap-2 mx-auto" style="color:#ec2474;"><button type="submit" class="btn btn-primary">
                                     <i class="fa fa-user"></i> Checkout</button></div>';
								} else {
                                echo '<div class="d-grid gap-2 mx-auto" style="color:#ec2474;"><a href="profile-authentication.php?page=cart" class="btn btn-primary">
                                     <i class="fa fa-user"></i> Login to checkout</a></div>';}
									 ?>
                                </form>            
                            </div>
                        </div>
                    </div>
             </div>
        </div>
    </section>
    <!-- Shoping Cart Section End --> 
    
   <!-- <?php 
        $reg_status = $_GET['reg_status'];
        if($reg_status != ''){ 
            if($reg_status == '1'){
    ?> -->
    
    <script> swal("", "Thank you registering with Bid TReasure!", "success");</script>
    
    <?php } 
    else if($reg_status == '2'){
    ?>
    
    <script> swal("", "Something is wrong please try again!", "warning");</script>
    
    <?php } 
        else{
            ?>
            <script> swal("", "Hi <?php echo $_SESSION['user_details']['user_name']; ?> Welcome Back", "success");</script>
            <?php
        }
    } ?>


<?php include("include/footer.php"); ?>


<script>
$(document).ready(function() {
    $(".fetch_cart_value").click(function() {

        var bidId = $_SESSION['userdetails'];
         alert(bidId);
        $.ajax({
            url: "get_checkout.php",
            type: "post",
            data: {
              checkId: bidId,
                model:'bid',
            },
            success: function(data){
                var rec=JSON.parse(data);
                console.log(data);
                //  alert(data);
                // console.log(rec.product_name);
                $(".product-title").text(rec.product_name);
                $(".oldprice").text(rec.product_old_price);
                $(".newPrice").text(rec.bid_new_price);
                $(".proDisc").text(rec.product_description);                              
                          
            }
        });
    });
});
</script>