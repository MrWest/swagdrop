<?php 
header("Access-Control-Allow-Headers: Authorization");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: X-Requested-With, Content-Type, Origin, Cache-Control, Pragma, Authorization, Accept, Accept-Encoding");
require_once '../../includes/db.php'; // The mysql database connection script
require_once '../../api/v1/dbHandler.php'; 
$_POST = json_decode(file_get_contents("php://input"), true);

if( isset($_POST['slug']) && isset($_POST['products']) && isset($_POST['name']) && isset($_POST['header']) && isset($_POST['subtitle'])){
  
    $slug = $_POST['slug'];
    $products = $_POST['products'];
    $name = $_POST['name'];
    $company = $_POST['company'];
    $company_id = $_POST['company_id'];
    $isInternational = $_POST['isInternational'];
    $logo = $_POST['logo'];
    $product = $_POST['product'];
    $header = $_POST['header'];
    $subtitle = $_POST['subtitle'];
    $button = $_POST['button'];
    $status = $_POST['status'];
    $theme = $_POST['theme'];
    $last_modified = $_POST['last_modified'];

    

    $query="INSERT INTO `redeem`(`slug`, `name`, `company`, `company_id`, `products`, `isInternational`, `logo`, `product`, `header`, `subtitle`, `button`, `status`, `theme`, `last_modified`) VALUES ('$slug', '$name','$company', $company_id,'$products', $isInternational,'$logo','$product','$header','$subtitle','$button','$status', '$theme', '$last_modified')";
    $res = mysqli_query($mysqli, $query);


    $db = new DbHandler();
    $redeem = $db->getOneRecord("SELECT * FROM redeem WHERE id =".mysqli_insert_id());
   


    // JSON-ify all rows together as one big array
     echo json_encode($redeem);
    // echo json_encode($query);
   
}
//$status = '%';
//if(isset($_GET['status'])){
//$status = $_GET['status'];
//}

?>