<?php
if (session('driver_id')){
    if (get('id') && get('token') == $_COOKIE['quadros']){
        if (calls::updateState(get('id'),1,session('driver_id'))){
            $token = RandomString();
            setcookie('dumatros',$token);
            header('Location:'.driver_url('route?id='.get('id').'&q='.$token));
        }

    }
}else{
    header('Location:'.site_url('logout'));
}
