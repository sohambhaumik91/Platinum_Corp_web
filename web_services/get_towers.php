	
<?php

$host = '127.0.0.1:3306';
$user = 'root';
$password = 'Kuttuness@123';
$dbname = 'shareablelinks';

// Set DSN
$dsn = 'mysql:host='. $host . ';dbname=' . $dbname;


if(!empty($_POST['getHash'])) {
	$getHash = $_POST['getHash'];
	try{
		$pdo = new PDO($dsn, $user, $password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));    
	    $stmt = $pdo->query("select * from shareablelinks.sharedtable where link='$getHash'");
	    
	    while($row = $stmt->fetch(PDO::FETCH_OBJ)) {
			response(200, "Success", $row->config_string);
		}
	}
	catch(PDOException $ex){
	    die(json_encode(array('outcome' => false, 'message' => 'Unable to connect')));
	}

}


function response($status,$status_message,$data)
{
	header("HTTP/1.1 ".$status);
	
	$response['status']=$status;
	$response['status_message']=$status_message;
	$response['data']=$data;
	
	$json_response = json_encode($response);
	echo $json_response;
}



?>