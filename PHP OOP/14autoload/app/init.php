<?php
// memanggil seluruh class yang ada di folder produk
spl_autoload_register(function($class) {
    
    require_once __DIR__ . '/Produk/' . $class . '.php';
});