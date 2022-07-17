<?php
if(!route(1)){
    $route[1] = 'sign_up';
}

if(!file_exists(admin_controller(route(1)))){
    $route[1] = 'sign_up';
}


require admin_controller(route(1));
