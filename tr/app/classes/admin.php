<?php

class admin
{
    public static function login($data){

        $_SESSION['admin_email'] = $data['admin_email'];
    }
	public static function get_drivers(){
		global $db;
        $query = $db->prepare('SELECT * FROM drivers');
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
	}
	public static function get_users(){
		global $db;
        $query = $db->prepare('SELECT * FROM users');
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
	}
	public static function delete_some($table,$id){
		global $db;
		$query = $db->prepare('DELETE FROM '.$table.' WHERE id=:id');
		$query->execute([
			'id' => $id
		]);
		
	}
	
}