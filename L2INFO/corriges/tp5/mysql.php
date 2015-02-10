<?php
error_reporting(E_ALL ^ E_DEPRECATED);
ini_set('display_errors', 1);

$host = "127.0.0.1";
$username = "root";
$password = "";

$connection = mysql_connect($host, $username, $password);
mysql_select_db("cours");



function listProducts() {
    $result = mysql_query("SELECT * FROM products");
    while ($row = mysql_fetch_assoc($result)) {
        var_dump($row);
    }
}


function addProduct($name, $price) {
    mysql_query(
        "INSERT INTO products (name, price) VALUES ('" . $name. "'," . $price .")"
    );
}

listProducts();
echo '<hr>';
addProduct('test', 200);
listProducts();
echo '<hr>';


mysql_close();
