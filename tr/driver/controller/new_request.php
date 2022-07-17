<?php


if (session('driver_email')){
    $active_calls = drivers::getDriverCall(1);
    for ($i=0;$i<count($active_calls);$i++){
        $active_calls[$i]['username'] = users::find_user_byID($active_calls[$i]['customer_id'])['uname'];
    }
    require driver_view('new_request');
}else{
    require driver_view('logout');
}
