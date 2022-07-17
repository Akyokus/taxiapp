<?php


if(session('driver_email')){
	if(post('save')){
		drivers::editpersonal(post('tcno'));
	}
	$tc = drivers::find_driver(session('driver_email'));
	require driver_view('personal_verification');	
}else{
	header('Location:'.driver_url('logout'));	
}