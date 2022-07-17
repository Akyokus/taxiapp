<?php

if (session('driver_id')){
    if (get('id') && get('q') == $_COOKIE['dumatros']){
        require driver_view('route');
    }
}else{
    require driver_url('logout');
}
