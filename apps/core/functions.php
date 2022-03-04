<?php

function show($data){
    echo"<pre>";
    print_r($data);
    echo"</pre>";
} 
function views_path($view)
{
    if (file_exists("../apps/views/$view.view.php"))
    {
    return "../apps/views/$view.view.php"; 
    }else{
        echo"view '$view' not found";
    }
}
function esc($str)
{
    return htmlspecialchars($str);
}