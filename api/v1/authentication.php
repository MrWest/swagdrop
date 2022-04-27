<?php 
$app->get('/session', function() {
    $db = new DbHandler();
    $session = $db->getSession();
    $response["uid"] = $session['uid'];
    $response["email"] = $session['email'];
    $response["name"] = $session['name'];
	$response["type"] = $session['type'];
    echoResponse(200, $session);
});

$app->post('/login', function() use ($app) {
    require_once 'passwordHash.php';
    $r = json_decode($app->request->getBody());
    verifyRequiredParams(array('email', 'password'),$r->customer);
    $response = array();
    $db = new DbHandler();
    $password = $r->customer->password;
    $email = $r->customer->email;
    $user = $db->getOneRecord("select Id,Name,Password,Email, Type, DateCreated, Status from user_tb where Name='$email' or Email='$email'");
    if ($user != NULL) {
        if(passwordHash::check_password($user['Password'],$password)){
	  if(($user['Status'] == 'Locked')|| ($user['Status'] == 'Disabled') ){
		   $userstatus = $user['Status'];
		    $response['status'] = "error";
            $response['message'] = 'Login failed. User '.$user['Name'].' is: '.$userstatus.'.';
	  }
	  else{
        $response['status'] = "success";
        $response['message'] = 'Logged in successfully.';
        $response['name'] = $user['Name'];
        $response['Id'] = $user['Id'];
        $response['email'] = $user['Email'];
        $response['createdAt'] = $user['DateCreated'];
        if (!isset($_SESSION)) {
            session_start();
        }
        $_SESSION['uid'] = $user['Id'];
        $_SESSION['email'] =  $user['Email'];
        $_SESSION['name'] = $user['Name'];
		$_SESSION['type'] = $user['Type'];
	  }
        } else {
            $response['status'] = "error";
            $response['message'] = 'Login failed. Incorrect credentials';
        }
    }else {
            $response['status'] = "error";
            $response['message'] = 'No such user is registered';
        }
		

    echoResponse(200, $response);
});
$app->post('/signUp', function() use ($app) {
    $response = array();
    $r = json_decode($app->request->getBody());
    verifyRequiredParams(array('email', 'password'),$r->customer);
    require_once 'passwordHash.php';
    $db = new DbHandler();
   // $phone = $r->customer->phone;
   // $name = $r->customer->name;
    $email = $r->customer->email;
   // $address = $r->customer->address;
    $password = $r->customer->password;
    $isUserExists = $db->getOneRecord("select 1 from user_tb where Name='$email' or Email='$email'");
    if(!$isUserExists){
        $r->customer->password = passwordHash::hash($password);
        $tabble_name = "customers_auth";
        $column_names = array( 'Name', 'Email', 'Password');
        $result = $db->SingInUserDb($r->customer->email, $r->customer->email, $r->customer->password);
        if ($result != NULL) {
            $response["status"] = "success";
            $response["message"] = "User account created successfully";
            $response["Id"] = $result;
            if (!isset($_SESSION)) {
                session_start();
            }
            $_SESSION['uid'] = $response["Id"];
            //$_SESSION['phone'] = $phone;
           // $_SESSION['name'] = $name;
            $_SESSION['email'] = $email;
            echoResponse(200, $response);
        } else {
            $response["status"] = "error";
            $response["message"] = "Failed to create customer. Please try again";
            echoResponse(201, $response);
        }            
    }else{
        $response["status"] = "errors";
        $response["message"] = "An user with the provided phone or email exists!";
        echoResponse(201, $response);
    }
});
$app->get('/logout', function() {
    $db = new DbHandler();
    $session = $db->destroySession();
    $response["status"] = "info";
    $response["message"] = "Logged out successfully";
    echoResponse(200, $response);
});
?>