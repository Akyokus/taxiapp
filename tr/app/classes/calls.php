<?php


class calls
{
    public static function getCallUser($user_id,$state){
        global $db;
        $query = $db->prepare('SELECT * FROM calls  WHERE customer_id =:customer_id AND state=:state ORDER BY id DESC');
        $query->execute([
            'customer_id' => $user_id,
            'state' => $state
        ]);
        $row = $query->fetchAll(PDO::FETCH_ASSOC);
//        $row = self::changeFormat($row);  //TODO: Format değştir.
        return $row;
    }
    public static function changeFormat($objects){
        $format = “d/m/Y”;
        foreach ($objects as $object){
            print_r($object);
            $object['created_at']=DateTime::createFromFormat($format,strtotime($object['created_at']));
        }
        return $objects;
    }
    public static function updateState($id,$state,$driver_id=0){
        global $db;
        if ($driver_id == 0){
            $query = $db->prepare('UPDATE calls SET state=:state WHERE id=:id');
            $res = $query->execute([
                'state'=>$state,
                'id'=>$id
            ]);
            if ($res){
                return true;
            }else{
                return false;
            }
        }else{
            $query = $db->prepare('UPDATE calls SET driver_id=:driver_id,state=:state WHERE id=:id');
            $result = $query->execute([
                'driver_id' => $driver_id,
                'state'=>$state,
                'id'=>$id
            ]);
            if ($result){
                return true;
            }else{
                return false;
            }
        }
    }
    public static function create_call($driver_id,$customer_loc){
        global $db;
        $query = $db->prepare('INSERT INTO calls SET customer_id=:c_id,driver_id=:d_id,customer_location=:c_loc');
        $row = $query->execute([
            'c_id' => session('user_id'),
            'd_id' => $driver_id,
            'c_loc' => $customer_loc
        ]);
        if ($row){
            return 1;
        }else{
            return 0;
        }
    }
    public static function calling_api($arayan,$aranan){
  

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'su2.nac.com.tr/api/add.php',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
  CURLOPT_POSTFIELDS =>'{
"token":"JFH7634HJD82JSHGD532QKU",
"did":"908504805445",
"caller":"'.$arayan.'",
"callee":"'.$aranan.'",
"timeout":"1800"
}
',
  CURLOPT_HTTPHEADER => array(
    'Content-Type: application/json'
  ),
));

$response = curl_exec($curl);

curl_close($curl);



    }
	 public static function decalling_api(){
  

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'su2.nac.com.tr/api/del.php',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
  CURLOPT_POSTFIELDS =>'{
"token":"JFH7634HJD82JSHGD532QKU",
"did":"908504805445",
"caller":"905321365743",
"callee":"905525871269",
"timeout":"1800"
}
',
  CURLOPT_HTTPHEADER => array(
    'Content-Type: application/json'
  ),
));

$response = curl_exec($curl);

curl_close($curl);



    }
}
