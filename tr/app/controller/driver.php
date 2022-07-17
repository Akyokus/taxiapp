<?php
if(!route(1)){
    $route[1] = 'logo';
}

if(!file_exists(driver_controller(route(1)))){
    $route[1] = 'logo';
}


require driver_controller(route(1));
