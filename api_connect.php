<?php

if($_POST['k_article'])
    $s_response = file_get_contents('http://laravel.local/api/blog/'.$_POST['k_article']);
else
    $s_response = file_get_contents('http://laravel.local/api/blog');

echo $s_response;
