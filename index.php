<?php
$url = $_SERVER['REQUEST_URI'];
$prefix = "/sprint3";

switch ($url) {
    case $prefix .'/' :
        require __DIR__ . '/src/views/emp.php';
        break;
    case $prefix.'/emp' :
        require __DIR__ . '/src/views/emp.php';
        break;
    case $prefix .'/proj' :
        require __DIR__ . '/src/views/proj.php';
        break;
        case $prefix .'/addEmp' :
            require __DIR__ . '/src/views/addEmp.php';
            break;
        case $prefix .'/addproj' :
            require __DIR__ . '/src/views/addproj.php';
            break;
    default:
        http_response_code(404);
        require __DIR__ . '/src/views/404.php';
        break;
}