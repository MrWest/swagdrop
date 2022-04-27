<?php
header("Access-Control-Allow-Headers: Authorization");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: X-Requested-With, Content-Type, Origin, Cache-Control, Pragma, Authorization, Accept, Accept-Encoding"); 
require_once '../../includes/db.php'; // The mysql database connection script
require_once '../../api/v1/dbHandler.php'; 
$_POST = json_decode(file_get_contents("php://input"), true);
if( isset($_POST['id'])){
  
    $id = $_POST['id']; 
    $query = "DELETE FROM redeem WHERE id =$id";
    $res = mysqli_query($mysqli, $query);
     // JSON-ify all rows together as one big array
     echo json_encode($res);
}
//$status = '%';
//if(isset($_GET['status'])){
//$status = $_GET['status'];
//}

?>