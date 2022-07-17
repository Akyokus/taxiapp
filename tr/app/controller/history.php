<?php
if (session('email')){

    $deactive_calls = calls::getCallUser(session('user_id'),0);
    $active_calls = calls::getCallUser(session('user_id'),1);
    $completed_calls = calls::getCallUser(session('user_id'),2);

    if (get('id')){
        calls::updateState(get('id'),0);
        header("Location:".site_url('history'));
    }
    //TODO:koordinat ayıklanması yapılacaktır.


    require view('history');
}else{
    require view('logout');
}

