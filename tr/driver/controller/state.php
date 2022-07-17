<?php
if(post('check')){
	$state = drivers::find_driver(session('driver_email'));
	if($state['state'] == 0){
		$res = drivers::updateState(1);
		echo 'Artık çağrı alabilirsiniz...';
	}else{
		$res = drivers::updateState(0);
		echo 'Çevrimdışı oldunuz...';
	}
	
}