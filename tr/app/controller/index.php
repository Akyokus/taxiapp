<?php
$info = '';
if (session('user_name')){
    if (post('latitude')){
		echo "adsda";
        users::updateLocation(post('latitude'),post('longtitude'));
    }
    if(post('id')){
		
        $taxiloc=post('tloc');
        $taxiloc2=post('tloc2');
        $userloc=post('uloc');
        $userloc2=post('uloc2');
        $info = drivers::get_driver_info(post('id'));
        $plaka = explode('%',$info['plate']);
        $info['plate'] = implode(' ',$plaka);
        $value=''.$userloc.','.$userloc2.'';
        $value2=''.$taxiloc.','.$taxiloc2.'';


        $distance_data = file_get_contents('https://maps.googleapis.com/maps/api/distancematrix/json?units=metric&origins='.$value.'&destinations='.$value2.'&language=tr&key=AIzaSyCi0-VOCMROD8IveAQf9Q_UF9cR5qqQKu4');
        $distance_arr = json_decode($distance_data);
        if ($distance_arr->status=='OK') {
            $destination_addresses = $distance_arr->destination_addresses[0];
            $origin_addresses = $distance_arr->origin_addresses[0];
        } else {
            echo "<p>İstek Geçersiz!!!</p>";
            exit();
        }
        if ($origin_addresses=="" or $destination_addresses=="") {
            echo "<p>Başlangıç Veya Hedef adresi bulunamadı!!!</p>";
            exit();
        }
        // Get the elements as array
        $elements = $distance_arr->rows[0]->elements;
        $distance = $elements[0]->distance->text;
        $duration = $elements[0]->duration->text;
		if($distance=="" && $duration=="")
		{
			  $distance = "Güzergah Bulunamadı!";
        $duration = "Güzergah Bulunamadı!";
		}
      //  echo "Başlangıç: ".$origin_addresses."<br/> Hedef: ".$destination_addresses."<br/> Mesafe: <strong>".$distance ."</strong><br/>";
       // echo "Süre: <strong>".$duration."";

        $result = '
                    <div class="about-section-2">
                        <div class="about-section-title">
                            <div class="about-section-title">
                                <span style="font-size: 20px;font-weight: bold" class="black-text">Taksiniz size doğru geliyor. Lütfen bekleyiniz.</span><br>
                                <span class="black-text">Taksi Plakası:'.$info["plate"].'</span><br>
                                <span class="black-text">Şoför Adı:'.$info["uname"].'</span><br>
                                <span class="black-text">Araç Markası:'.$info["marka"].'</span><br>
								   <span class="black-text">Araç Modeli:'.$info["model"].'</span><br>
                            </div>
                        </div>
                        <div class="about-section-more">
                            NOT: En kısa sürede taksiniz gelecektir. Lütfen konumunuzdan ayrılmayınız.
                        </div>
                    </div>';
      echo $result;
      exit();
    }
	if(post('driver_id')){
		//arama butonu. ÇALIŞTI
		echo post('driver_id');
	$user = users::find_user(session('email'));
	$driver = drivers::get_driver_info(post('driver_id'));
	$homepage = file_get_contents('http://su2.nac.com.tr/api/call.php?token=JFH7634HJD82JSHGD532QKU&dahili=9'.$user["telno"].'&telefon=9'.$driver["telno"]);
	
		exit();
	}
	
	print_r($info);
    require view('index');
}else{
	
    $error = 'Henüz giriş yapmadınız.';
    //header('Location:'.site_url('logo'));
	require view('logo');
	//exit();
	//echo $error;
}


