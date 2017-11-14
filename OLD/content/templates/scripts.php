<?php

$incl = explode(";", INCLUDE_JAVASCRIPTS);
foreach ($incl as $val)
{
    echo '<script src="assets/js/' . $val . '"></script>' . PHP_EOL;
}

if (defined('PAGE_JAVASCRIPTS'))
{
    $incl = explode(";", PAGE_JAVASCRIPTS);
    foreach ($incl as $val)
    {
        echo '<script src="assets/js/' . $val . '"></script>' . PHP_EOL;
    }
}