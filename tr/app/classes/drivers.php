<?php


class drivers
{
    public static function login($data){

        $_SESSION['driver_id'] = $data['id'];
        $_SESSION['driver_name'] = self::find_driver($data['email'])['uname'];
        $_SESSION['driver_email'] = $data['email'];
        $_SESSION['time_stamp'] = time();
    }
    public static function driverExist($email){
        global $db;
        $query = $db->prepare('SELECT * FROM drivers WHERE email=:email');
        $query->execute([
            'email' => $email
        ]);
        $row = $query->fetch(PDO::FETCH_ASSOC);

        if ($row == ''){
            return false;
        }else{
            return $row;
        }
    }
    public static function find_driver($email){
        global $db;
        $query = $db->prepare('SELECT * FROM drivers WHERE email=:email');
        $query->execute([
            'email' => $email
        ]);
        return $query->fetch(PDO::FETCH_ASSOC);
    }
    public static function driver_newpassword($newpassword){
        global $db;
        $query = $db->prepare('UPDATE drivers SET password=:password WHERE email=:email');
        return $query->execute([
            'password' => $newpassword,
            'email' => session('driver_email')
        ]);

    }
    public static function editDriver($data){
        global $db;
        $query = $db->prepare('UPDATE users SET uname=:uname,telno=:telno,tc_no=:tc WHERE email=:email');
        return $query->execute($data);
    }
	public static function editDriverAllInfo($data){
        global $db;
        $query = $db->prepare('UPDATE drivers SET uname=:uname,email=:email,telno=:telno,plate=:plate,marka=:marka,model=:model WHERE id=:id');
        return $query->execute($data);
    }
	public static function editpersonal($tc_no){
        global $db;
        $query = $db->prepare('UPDATE drivers SET tc_no=:tc WHERE email=:email');
        return $query->execute([
			'tc' => $tc_no,
			'email' => session('driver_email')
		]);

    }
    public static function register($data){
        global $db;
        $query = $db->prepare('INSERT INTO drivers SET uname =:uname,email =:email,password=:password,telno=:telno,plate=:plate,marka=:marka,model=:model');
        $row = $query->execute($data);
        if ($row){
            return true;
        }else{
            return false;
        }
    }
    public static function getDriverCall($state){
        global $db;
        $query = $db->prepare('SELECT * FROM calls WHERE state=:state AND driver_id=:driver_id');
        $query->execute([
            'state' => $state,
            'driver_id' => 0
        ]);
        $row = $query->fetchAll(PDO::FETCH_ASSOC);
//        $row = self::changeFormat($row);  //TODO: Format değştir.
        return $row;
    }
    public static function updateLocation($enlem,$boylam){
        global $db;
        $query = $db->prepare('UPDATE drivers SET latitude=:enlem,longitude=:boylam WHERE email=:email');
        return $query->execute([
            'enlem' => $enlem,
            'boylam' => $boylam,
            'email' => session('driver_email')
        ]);
    }
	public static function updateLicenseNo($license){
        global $db;
        $query = $db->prepare('UPDATE drivers SET license_no=:license_no WHERE email=:email');
        return $query->execute([
            'license_no' => $license,
            'email' => session('driver_email')
        ]);
    }
	public static function updateState($state){
        global $db;
        $query = $db->prepare('UPDATE drivers SET state=:state WHERE email=:email');
        return $query->execute([
            'state' => $state,
            'email' => session('driver_email')
        ]);
    }
    public static function updateBusy($id){
        global $db;
        $query = $db->prepare('UPDATE drivers SET busy=:busy WHERE id=:id');
        $result = $query->execute([
            'busy' => 1,
            'id' => $id
        ]);
        if ($result){
            return 1;
        }else{
            return 0;
        }
    }
    public static function get_driver_info($id){
        global $db;
        $query = $db->prepare('SELECT * FROM drivers WHERE id=:id');
        $query->execute([
            'id' => $id
        ]);
        return $query->fetch(PDO::FETCH_ASSOC);
    }
	public static function get_all_driver(){
        global $db;
        $query = $db->prepare('SELECT * FROM drivers');
		$query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

}
