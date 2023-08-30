<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
 
// files needed to connect to database
include_once 'config/database.php';
include_once 'objects/cards_obj.php';
 
// get database connection
$database = new Database();
$db = $database->getConnection();
 
// instantiate product object
$user = new User($db);

date_default_timezone_set("Asia/Kolkata");
//$user->dd = date('F, d Y');


$user->id = $_POST['card_id'];
$user->image_name1 = $_POST['image_name1'];
$user->product_name = $_POST['product_name'];
$user->About_Price = $_POST['About_Price'];
$user->primary_Text = $_POST['primary_Text'];

// -----------images-------------------

$fileName = $_FILES["image"]["name"]; 
if($fileName != '')	{ 								
$fileTmpLoc = $_FILES["image"]["tmp_name"]; 
$fileType = $_FILES["image"]["type"];
$fileSize = $_FILES["image"]["size"];
$fileErrorMsg = $_FILES["image"]["error"];
$kaboom = explode(".", $fileName); 
$fileExt = end($kaboom);
        if (!$fileTmpLoc) 
        {
            $file = 'no_img.jpg';
        }
        else if($fileSize > 524288000)
        {
            $file = "ERROR: Your file was larger than 5 Mb in size."; unlink($fileTmpLoc);
            echo '2';
            exit();
        }
        else if (!preg_match("/.(gif|jpg|png|jpeg|svg|mp3|mp4|pdf)$/i", $fileName) )
        {
            $file = "ERROR: Your file format is bad."; unlink($fileTmpLoc);
            echo '3';
            exit();

        }
        else if ($fileErrorMsg == 1)
        {
            $file = "ERROR: An error occured while processing the file. Try again.";
        }
        $moveResult = move_uploaded_file($fileTmpLoc, "../../upload/cards/$fileName");
        if($moveResult!= true)
        {
             $fileName = $file;
        } 
$user->filename = $fileName;
    }else{
        
        $user->filename = $user->image_name1;
    }


// ----------------end images-------------------




    if($user->updateInfo()){
        echo '1';
        exit();
    } else{
        echo '0';
        exit();
    }



?>