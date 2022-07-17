<?php


if(post('res')){

	$dbname="durak54";
	$dbhost="localhost";
	$dbuser="durak54";
	$dbpass="Durak123!";

	try {
	$dbh = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);	
	$dbh->exec("set names utf8");
	$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$stmt = $dbh->query("SELECT * FROM drivers WHERE state=1");
	$employees = $stmt->fetchAll(PDO::FETCH_OBJ);
	$dbh = null;
	echo json_encode($employees); 
} catch(PDOException $e) {
	echo '{"error":{"text":'. $e->getMessage() .'}}'; 
}
 

}
?>