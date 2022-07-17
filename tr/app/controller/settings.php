<?php


if (session('email')){
    require view('settings');
}else{
    require view('logout');
}

