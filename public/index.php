<?php

require "../apps/core/init.php";

$controller = $_GET['page_name'] ?? "home";
$controller = strtolower ($controller);


if (file_exists("../apps/controllers/".$controller  . ".php"))
{
    require "../apps/controllers/".$controller  . ".php";
} else{
    echo "controller not found";
}

/*
switch(variable){
    case 'value':
    // code..
    break;
    // code..
    break;
}
*/
