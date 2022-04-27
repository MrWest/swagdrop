<?php 
header("Access-Control-Allow-Headers: Authorization");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: X-Requested-With, Content-Type, Origin, Cache-Control, Pragma, Authorization, Accept, Accept-Encoding");
require_once '../../includes/db.php'; // The mysql database connection script
require_once '../../api/v1/dbHandler.php'; 


if(isset($_GET['id'])){
  
    $id = $_GET['id'];

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