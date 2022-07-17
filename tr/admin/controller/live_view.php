<?php
if(session('admin_email')){

	require admin_view('live_view');
}else{
	require admin_url('logout');	
}