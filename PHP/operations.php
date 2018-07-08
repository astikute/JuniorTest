<?php
require 'product.php';
class Operations
{
    private $servername = "localhost";
    private $username = "root";
    private $password = "";
    private $dbname = "product_list";
    private $conn;

    public function __construct()
    {
        $this->conn = new PDO("mysql:host=$this->servername; dbname=$this->dbname", $this->username, $this->password);
    }

    public function getProducts()
    {
        $stmt = $this->conn->prepare ("SELECT SKU, name, price, type_value, property, unit 
        FROM products INNER JOIN list_product_types 
        ON products.type=list_product_types.type_id");
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function addProduct(Product $product)
    {
        $stmt = $this->conn->prepare ("INSERT INTO products (SKU, name, price, type, type_value) 
        VALUES (:SKU, :name, :price, :type, :type_value)");
        $SKU = $product->getSKU();
        $name = $product->getName();
        $price = $product->getPrice();
        $type = $product->getType();
        $value =  $product->getValue();
        $stmt->bindParam(':SKU', $SKU);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':price', $price);
        $stmt->bindParam(':type', $type);
        $stmt->bindParam(':type_value', $value);
        $stmt->execute();
        header('Location: index.php');
        header('Refresh: 0');
    }

    public function getTypes()
    {
        $stmt = $this->conn->prepare ("SELECT type, type_id FROM list_product_types");  
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function deleteProducts($SKU)
    {
        $stmt = $this->conn->prepare ("DELETE FROM products WHERE SKU=?");
        $stmt->bindParam(1, $SKU);
        $stmt->execute();
        header('Location: index.php');
        header('Refresh: 0');
    }
}
