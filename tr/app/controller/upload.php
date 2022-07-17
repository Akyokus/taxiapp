<?php
if (post('veri')){
	$data = post('veri');
	$dir = 'https://durak54.com.tr/tr/public/profile_photos'; //dosyalarin kaydedileceği klasor yolu
	$size_limit = 5000000; //dosya boyutu en fazla kac KB boyutunda olmali
	$extension = explode('/',explode(';',$data)[0])[1]; //dosya uzantisi
	if ($extension == 'jpeg' || $extension == 'png'){ //dosya uzantisi jped, png olmalı
		$image = file_get_contents($data); //veriyi oku
		if (strlen($image) < $size_limit){ //dosya boyutu uygunsa
			$file_name = $dir."/profile_photo".session('id').'.'.$extension;
				$create_image = file_put_contents($file_name,$data); //olusturulan dosyanin içerigine resim verilerini isle, ekle
				if ($create_image){ //eklendiyse
					$result = 'success';
				}else{
					$result = 'error';
				}
		}else{
			$result = 'error message: Dosya boyutu '.$size_limit.' byte\'dan küçük olmalı';
		}
	}else{
		$result = 'error message: Dosya uzantısı uygun değil';
	}
}else{
	$result = 'POST sırasında bir hata meydana geldi';
}
echo json_encode($result); //json formatında veriyi geri gönder