<?php
    require preg_replace('#\[/\]{1}#', '/', BASE_PATH . "view/material/navbar.php");
    
    echo "<br>Transaksi penjualan";
    $tableHeaders = $tableHeaders1;
    $tableColoums = $tableColoums1;
    require preg_replace('#\[/\]{1}#', '/', BASE_PATH . "view/material/table.php");

    echo "<br>Transaksi pembelian";
    $tableHeaders = $tableHeaders2;
    $tableColoums = $tableColoums2;
    require preg_replace('#\[/\]{1}#', '/', BASE_PATH . "view/material/table.php");
?>