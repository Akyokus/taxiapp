<?php 


if(session('driver_email')){
	if(post('save')){
		damp('dasda');
		
	}
	require driver_view('add_car');	
}else{
	header('Location:'.driver_url('logout'));	
}