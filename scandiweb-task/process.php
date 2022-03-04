<?php
    require_once("validation.php");
    $validation = new Validation();
    $mysqli = new mysqli('localhost', 'root', '', 'scandiweb') or die(mysqli_error($mysqli));

    if (isset($_POST['save'])){
        $sku = $mysqli->escape_string($_POST['sku']);
        $name = $_POST['name'];
        $price = $_POST['price'];
        $type = $_POST['productType'];
        $size = $_POST['size'];
        $weight = $_POST['weight'];
        $height = $_POST['height'];
        $width = $_POST['width'];
        $length = $_POST['length'];

        $msg = $validation->check_empty($_POST, array('sku', 'name', 'price'));

        if($msg != null) {
          echo $msg;		
        }
        else {

        $mysqli->query("INSERT INTO products (sku, name, price, type, size, weight, height, width, length) 
        VALUES('$sku','$name','$price','$type','$size','$weight','$height','$width','$length')") 
        or die($mysqli->error);
      
        header('location: index.php');
        }
    }
      if (isset($_POST['massdelete'])){
        if(isset($_POST['delete-checkbox'])){
          foreach($_POST['delete-checkbox'] as $deleteid){
            $mysqli->query("DELETE FROM products WHERE id_product = '$deleteid'");
            header('location: index.php');
          }
        }
      }
      
?>