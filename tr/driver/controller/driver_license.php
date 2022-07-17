<?php


if(session('driver_email')){
	if(post("front")){
		$data = post('front');
	$dir = 'https://durak54.com.tr/tr/public/driver/driver_license'; //dosyalarin kaydedileceği klasor yolu
	$size_limit = 5000000; //dosya boyutu en fazla kac KB boyutunda olmali
	$extension = ".png"; //dosya uzantisi
		$image = file_get_contents($data); //veriyi oku
		if (strlen($image) < $size_limit){ //dosya boyutu uygunsa
			$file_name = $dir."/license_front".session('driver_id').'.'.$extension;
				$create_image = file_put_contents($file_name,$data); //olusturulan dosyanin içerigine resim verilerini isle, ekle
				if ($create_image){ //eklendiyse
					$result = 'success';
					echo json_encode($result);
				}else{
					$result = 'error';
					echo json_encode($result);
				}
		}else{
			$result = 'error message: Dosya boyutu '.$size_limit.' byte\'dan küçük olmalı';
			echo json_encode($result);
		}
}
	
		if(post("back")){
		$data = post('back');
	$dir = 'https://durak54.com.tr/tr/public/driver/driver_license'; //dosyalarin kaydedileceği klasor yolu
	$size_limit = 5000000; //dosya boyutu en fazla kac KB boyutunda olmali
	$extension = explode('/',explode(';',$data)[0])[1]; //dosya uzantisi
	if ($extension == 'jpeg' || $extension == 'png'){ //dosya uzantisi jped, png olmalı
		$image = file_get_contents($data); //veriyi oku
		if (strlen($image) < $size_limit){ //dosya boyutu uygunsa
			$file_name = $dir."/license_back".session('driver_id').'.'.$extension;
				$create_image = file_put_contents($file_name,$data); //olusturulan dosyanin içerigine resim verilerini isle, ekle
				if ($create_image){ //eklendiyse
					$result = 'success';
					echo json_encode($result);
				}else{
					$result = 'error';
					echo json_encode($result);
				}
		}else{
			$result = 'error message: Dosya boyutu '.$size_limit.' byte\'dan küçük olmalı';
			echo json_encode($result);
		}
	}else{
		$result = 'error message: Dosya uzantısı uygun değil';
		echo json_encode($result);
	}
}
	if(post("save")){
		drivers::updateLicenseNo(post('name'));
	}
	
	$license = drivers::find_driver(session('driver_email'));
	require driver_view('driver_license');	
}else{
	header('Location'.driver_url('logout'));	
}