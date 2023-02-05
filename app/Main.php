<?php

define('BASE_PATH', rtrim(preg_replace('#[/\\\\]{1,}#', '/', realpath(dirname(__FILE__))), '/') . '/');
require preg_replace('#\[/\]{1}#', '/', BASE_PATH . "config/database.php");
require preg_replace('#\[/\]{1}#', '/', BASE_PATH . "app/Route.php");
require preg_replace('#\[/\]{1}#', '/', BASE_PATH . "controller/UserManagement.php");
require preg_replace('#\[/\]{1}#', '/', BASE_PATH . "controller/HomePage.php");
require preg_replace('#\[/\]{1}#', '/', BASE_PATH . "controller/Product.php");
require preg_replace('#\[/\]{1}#', '/', BASE_PATH . "controller/Laporan.php");
require preg_replace('#\[/\]{1}#', '/', BASE_PATH . "controller/Transaksi.php");


class Main {

    public function start() {
        $Route = new Route();

        // Home Page
        $Route->add('GET', '/', 'HomePage', 'home');
        
        // User Managemen
        $Route->add('GET', '/login', 'UserManagement', 'loginPage');
        $Route->add('POST', '/login', 'UserManagement', 'login');

        // Product
        $Route->add('GET', '/product', 'Product', 'productPage');
        $Route->add('GET', '/addproduct', 'Product', 'addProductPage');
        $Route->add('POST', '/addproduct', 'Product', 'addProduct');
        $Route->add('GET', '/updateproduct', 'Product', 'updateProductPage');
        $Route->add('POST', '/updateproduct', 'Product', 'updateProduct');
        $Route->add('GET', '/deleteproduct', 'Product', 'deleteProduct');

        // Laporan
        $Route->add('GET', '/laporan', 'Laporan', 'laporanPage');

        // Transaksi
        $Route->add('GET', '/transaksi', 'Transaksi', 'transaksiPage');

        $Route->run();
    }

}

?>