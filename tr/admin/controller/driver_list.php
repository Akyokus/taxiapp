<?php

if(session('admin_email')){
	$drivers = admin::get_drivers();
	if(get('delete_id')){
		admin::delete_some("drivers",get('delete_id'));
		$success = "Taksi Başarıyla Silindi.";
		header("Location:".admin_url('driver_list'));
	}
	if(post('id')){
		$driver= drivers::get_driver_info(post('id'));
		echo  '<tr id="edit'.$driver["id"].'" >
		<td><input class="form-control form-control-user" type="text" id="uname|'.$driver['id'].'" value="'.$driver["uname"].'"></td>
		<td><input class="form-control form-control-user" type="text" id="telno|'.$driver['id'].'" value="'.$driver["telno"].'"></td>
		<td><input class="form-control form-control-user" type="text" id="email|'.$driver['id'].'" value="'.$driver["email"].'"></td>
		<td><input class="form-control form-control-user" type="text" id="plate|'.$driver['id'].'" value="'.$driver["plate"].'"></td>
		<td><input class="form-control form-control-user" type="text" id="marka|'.$driver['id'].'" value="'.$driver["marka"].'"></td>
		<td><input class="form-control form-control-user" type="text" id="model|'.$driver['id'].'" value="'.$driver["model"].'"></td>
											<td><a class="dropdown-item text-center" href="" onclick="edit('.$driver['id'].')" id="edit" >KAYDET</a></td>
                                        </tr>';
		exit();
	}
	if(post('save_edit')){
		
		$data = [
			'id' =>  post('save_edit'),
			'uname' =>  post('uname'),
			'email' =>  post('email'),
			'telno' =>  post('telno'),
			'plate' =>  post('plate'),
			'marka' =>  post('marka'),
			'model' =>  post('model'),
		];
		drivers::editDriverAllInfo($data);
		exit();
	}
	require admin_view('driver_list');
}else{
	require admin_url('logout');	
}