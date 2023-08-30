<?php
include("include/database.php");
session_start();
$bidId=$_POST['bid'];
$newBid = $_POST['bid_amount']; 
$userr = $_POST['user_id_no']; 
// $userr=$_SESSION['user_details']['user_id'];

// Prepare the SQL statement with placeholders to prevent SQL injection


// $sql = "UPDATE bid_product_details SET product_new_price = '$newBid' WHERE `bid_id` ='$bidId'";
// $sql = "UPDATE bid_product_details
// JOIN user_details ON bid_product_details.user_id = user_details.user_id
// SET bid_product_details.product_new_price = '$newBid',
// user_details.user_id='$userr'  
// WHERE `bid_id` ='$bidId'";
if (isset($_SESSION['user_details'])) {
$sql="UPDATE `bid_product_details` SET `user_id` = '$userr',product_new_price = '$newBid' WHERE `bid_product_details`.`bid_id` = '$bidId'";
$stmt = $db->query($sql);}
else if (isset($_SESSION['vendor_details'])) {

    $sql="UPDATE `bid_product_details` SET `vendor_id` = '$userr',product_new_price = '$newBid' WHERE `bid_product_details`.`bid_id` = '$bidId'";
    $stmt = $db->query($sql);} 

// Execute the SQL statement
if ($stmt==TRUE) {
    
    $get_qry="SELECT * FROM `bid_product_details` WHERE `bid_id`='$bidId'";
    $exc = $db->query($get_qry);
    $result=$exc->fetch_assoc();
    echo json_encode($result);
    // $price=$result['product_new_price'];
    //    echo $price;
} else {
    echo "Error updating bid";
}  


if (isset($_SESSION['user_details'])) {

    $sqlf="INSERT INTO `bid_userlist`(`bidlist_userid`,`bidlist_amount`,`bid_id`) VALUES ('$userr','$newBid','$bidId')";
    $result = $db->query($sqlf);
    $resultf=$exc->fetch_assoc();
    // echo json_encode($resultf);
    // $price=$result['product_new_price'];

    $red = $db->query($sqlf);

if($red==TRUE){
    echo "datas inserted  are successfullly";
}
else{
    echo "not inserted the datas";
}

    }
    else if (isset($_SESSION['vendor_details'])) {
        $sqlf="INSERT INTO `bid_userlist`(`bidlist_userid`,`bidlist_amount`,`bid_id`) VALUES ('$userr','$newBid','$bidId')";
        $result= $db->query($sqlf);
        $resultf=$exc->fetch_assoc();
        // echo json_encode($resultf);
        // $price=$result['product_new_price'];
    
        $red = $db->query($sqlf);
    
    if($red==TRUE){
        echo "datas inserted  are successfullly";
    }
    else{
        echo "not inserted the datas";
    }
    
       }
   


?>
