<?php 

    if ($api == 'clientes') 
    {
        if ($method == 'GET')
        {
            include_once 'get.php';
        }

        if ($method == 'POST')
        {
            include_once 'post.php';
        }

        if ($method == 'PUT')
        {
            include_once 'update.php';
        }
    }

?>