<?php 
require_once '../PHP/controller.php'; 
$controller = new Controller();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" href="../CSS/style.css">
</head>
<body>
<div class="header">
    <div class="container-fluid">
        <div class= "row">
            <div id="title" class= "col">
                <h3>Product List</h3>
            </div>
            <div id="function" class= "col">
                <select>
                    <option>Mass delete Action</option>
                </select>
                <label id="btn" for="check-form" tabindex="0">Apply</label>
            </div>
        </div>
    </div>
</div>
<div class="content">
    <div class="container-fluid">
        <form action="<?php $controller->removeProducts()?>" method="post">
            <input type="submit" id="check-form" class="hidden"></input>
            <div class="row">
                <?php $controller->viewProducts()?>
             </div>
        </form>
    </div>
</div>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>    
</body>
</html>