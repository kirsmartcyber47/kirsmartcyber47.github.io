<?php

$incl = explode(";", INCLUDE_STYLESHEETS);
foreach ($incl as $val)
{
    echo '<link href="assets/css/' . $val . '" rel="stylesheet">' . PHP_EOL;
}

if (defined('PAGE_STYLESHEETS'))
{
    $incl2 = explode(";", PAGE_STYLESHEETS);
    foreach ($incl2 as $val)
    {
        echo '<link href="assets/css/' . $val . '" rel="stylesheet">' . PHP_EOL;
    }
}