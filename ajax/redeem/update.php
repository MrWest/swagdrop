<?php 
header("Access-Control-Allow-Headers: Authorization");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: X-Requested-With, Content-Type, Origin, Cache-Control, Pragma, Authorization, Accept, Accept-Encoding");
require_once '../../includes/db.php'; // The mysql database connection script
require_once '../../api/v1/dbHandler.php'; 

$_POST = json_decode(file_get_contents("php://input"), true);

if(isset($_POST['id']) && isset($_POST['products']) && isset($_POST['name']) && isset($_POST['header']) && isset($_POST['subtitle'])){
  
    $id = $_POST['id'];
    $slug = $_POST['slug'];
    $products = $_POST['products'];
    $name = $_POST['name'];
    $isInternational = $_POST['isInternational'];
    $logo = $_POST['logo'];
    $product = $_POST['product'];
    $header = $_POST['header'];
    $subtitle = $_POST['subtitle'];
    $button = $_POST['button'];
    $status = $_POST['status'];
    $theme = $_POST['theme'];
    $last_modified = $_POST['last_modified'];

    $query="UPDATE  redeem SET slug = '$slug', product = '$product', products = '$products', name = '$name', logo = '$logo', isInternational = $isInternational, header = '$header', subtitle = '$subtitle', button = '$button', status = '$status', theme = '$theme',  last_modified = '$last_modified' WHERE id = $id";

	// $query="SELECT * FROM tours ";
    $res = mysqli_query($mysqli, $query);

    $db = new DbHandler();
    $redeem = $db->getOneRecord("SELECT * FROM redeem WHERE id ='$id'");


    // JSON-ify all rows together as one big array
     echo json_encode($redeem);
    // echo json_encode($query);
   
}
//$status = '%';
//if(isset($_GET['status'])){
//$status = $_GET['status'];
//}

?>