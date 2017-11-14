<?php
echo '<!DOCTYPE html>';
echo '<html lang="id">';

include "config.php";
include "server/preprocessor.php";
include "content/templates/head.php";
include "content/" . PAGE_BODY_FILE;

echo "</html>";