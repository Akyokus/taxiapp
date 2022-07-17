<?php
if(session('driver_email')){
	
	require driver_view('driver_verification');
	
}else{
	header("Location:".driver_url('logout'));
}

