<?php
require 'operations.php';

class Controller 
{
    private $operation;

    public function __construct()
    {
        $this->operation = new Operations();
    }

    public function registerProduct() 
    {
        if ($_SERVER['REQUEST_METHOD'] == "POST") 
        {
            $product = new Product (array_values($_POST));
            foreach($this->operation->getTypes() as $type)
            {
                if ($type['type'] == $_POST['type']) {
                    $product->setType($type['type_id']);
                }
            }
            $this->operation->addProduct($product); 
        }
    }

    public function viewProducts()
    {
        foreach($this->operation->getProducts() as $product) {?> 
            <div class="product-window">
                <input type="checkbox" name="checkbox[]" id="checkbox" value="<?=$product['SKU']?>"</input>
                <ul>
                    <li> <?= $product['SKU']; ?></li>
                    <li> <?= $product['name']; ?></li>
                    <li> <?= $product['price']; ?> $ </li>
                    <li> <?= $product['property']; ?>: 
                    <?= $product['type_value']; ?>
                    <?= $product['unit']; ?></li>
                </ul>
            </div>
        <?php }
    }

    public function removeProducts()
    {
        if ($_SERVER['REQUEST_METHOD'] == "POST") 
        {
            foreach($_POST['checkbox'] as $check) {
                if (!empty($check)) {
                    $this->operation->deleteProducts($check);
                }
            }
         }   
    }
}
