<?php

function driver_controller($controllerName){
    $controllerName = strtolower($controllerName);
    return PATH . '/driver/controller/' . $controllerName .'.php';
}

function driver_view($viewName){
    return PATH . '/driver/views/' . $viewName . '.php';
}

function driver_public($publicName){
    return PATH . '/public/driver/'. $publicName;
}

function driver_url($url = false){
    return URL . '/driver/' . $url;
}

function driver_public_url($url = false){
    return URL . '/public/driver/' . $url;

}
