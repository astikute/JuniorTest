<?php
$types = array(
    "Book"=>"../HTML/book.html", 
    "DVD disc"=>"../HTML/disc.html", 
    "Furniture"=>"../HTML/furniture.html"
);

$typeSelected = $_POST['selected'];

foreach($types as $type => $form) {
    if ($type == $typeSelected){
        echo $form;
    }
}
