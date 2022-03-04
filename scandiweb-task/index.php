<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>
    <link rel="stylesheet" href="assets/bootstrap.min.css">
    <script src="assets/jquery.min.js"></script>
    <script src="assets/popper.min.js"></script>
    <script src="assets/bootstrap.min.js"></script>   
</head>
<body>
<form action="process.php" method="POST">
    <?php require_once 'process.php'; ?>
    <?php  
        $mysqli = new mysqli('localhost', 'root', '', 'scandiweb') or die(mysqli_error($mysqli));
        $result = $mysqli->query("SELECT * FROM products") or die($mysqli->error);
    ?>
       <div class="container">
          <div class="row" style="position:relative; justify-content:right;">
            <a href="productAdd.php"><input type="" class="btn btn-info" style="width:150px" value="ADD"></a>
            <input type="submit" name="massdelete" class="btn btn-danger" style="width:150px; margin-left:30px;" value="MASS DELETE">
          </div><br>
            <div class="row">
                <?php 
                    while($row = $result->fetch_assoc()) :?>
                <div class="card col-3 border-primary rounded w-25">
                    <div class="card-body text-center text-primary">
                    <input type="checkbox" name="delete-checkbox[]" value="<?= $row['id_product']; ?>">
                    <p id="sku"><?php echo $row['sku'];?></p>
                    <p id="name"><?php echo $row['name'];?></p>
                    <p id="price"><?php echo $row['price']." $";?></p>
                    <p id="size"><?php 
                    if($row['type']=="DVD"){
                        echo "Size ".$row['size']." MB";
                    }
                    else if($row['type']=="Book"){
                        echo "Weight ".$row['weight']." KG";
                    }
                    else if($row['type']=="Furniture"){
                        echo "Dimensions: ".$row['height']."x".$row['width']."x".$row['length'];
                    }
                    ?></p>
                    </div> <!-- end of card body -->
                </div><!--end of card -->
                <?php endwhile; ?>
            </div> <!--end of row-->      
        </div><!--end of container -->
     </form>  
</body>
</html>