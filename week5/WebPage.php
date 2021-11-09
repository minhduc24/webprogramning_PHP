<?php
    include "Page.php";
    $newPage = new Page("Web Page ", 2021, ", Copyright by Bui Duc");
    echo $newPage->get();
?>