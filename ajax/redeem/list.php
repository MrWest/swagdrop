<?php 

header("Access-Control-Allow-Headers: Authorization");
require_once '../../includes/db.php'; // The mysql database connection script
require_once '../../api/v1/dbHandler.php'; 

if( isset($_GET['company_id'])){
  
    $company_id = $_GET['company_id'];
    

    $query="SELECT * FROM redeem WHERE company_id=$company_id";
    // $query="SELECT * FROM tours ";
    $res = mysqli_query($mysqli, $query);
	$rows = array();
    // iterate over every row
    while ($row = mysqli_fetch_assoc($res)) {
        // for every field in the result..
        for ($i=0; $i < mysqli_num_fields($res); $i++) {
            $info = mysqli_fetch_field($res, $i);
            $type = $info->type;

            // cast for real
            if ($type == 'real')
                $row[$info->name] = doubleval($row[$info->name]);
            // cast for int
            if ($type == 'int')
                $row[$info->name] = intval($row[$info->name]);
        }

        $rows[] = $row;
    }

    // JSON-ify all rows together as one big array
    echo json_encode($rows);
   
}
//$status = '%';
//if(isset($_GET['status'])){
//$status = $_GET['status'];
//}

?>