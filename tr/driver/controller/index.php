<?php

if (session('driver_email')){
    if (post('latitude')){
        drivers::updateLocation(post('latitude'),post('longtitude'));
    }

    require driver_view('index');
}else{
    $error = 'Henüz giriş yapmadınız.';
    header('Location:'.driver_url('logout'));
}



if(post('setMarker')){

    $dbname="durak54";
    $dbhost="localhost";
    $dbuser="durak54";
    $dbpass="Durak123!";

    try {
        $dbh = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
        $dbh->exec("set names utf8");
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $dbh->query("SELECT * FROM drivers WHERE id=:id");
        $stmt->execute([
            'id' => session("driver_id")
        ]);
        $employees = $stmt->fetchAll(PDO::FETCH_OBJ);
        $dbh = null;
        echo json_encode($employees);
    } catch(PDOException $e) {
        echo '{"error":{"text":'. $e->getMessage() .'}}';
    }


}
