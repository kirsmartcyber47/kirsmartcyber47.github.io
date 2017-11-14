<?php

function clean_request_uri(){
    $base = str_replace(SUBFOLDER_NAME, "", $_SERVER['REQUEST_URI']);
    $clean = explode("/", $base);
    return array_values(array_diff($clean, array("")));
}