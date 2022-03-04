<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/bootstrap.min.css" media="screen">
    <link rel="stylesheet" href="assets/style.css">
    <title>Product Add</title>
    <script src="assets/jquery.min.js"></script>
    <script src="assets/popper.min.js"></script>
    <script src="assets/bootstrap.min.js"></script> 
    <script>
    $(document).ready(function(){
        $("#productType").change(function(){
        var selectedopt=$("#productType option:selected").val();
        //console.log(selectedopt);
        if(selectedopt == "DVD") {
        $('#details').text("Please provide the size in MB");
        $("#size").show();
        $("#weight").hide();
        $("#height").hide();
        $("#width").hide();
        $("#length").hide();
    } 
    else if(selectedopt == "Book") {
        $('#details').text("Please provide the weight in KG");
        $("#size").hide();
        $("#weight").show();
        $("#height").hide();
        $("#width").hide();
        $("#length").hide();
    }
    else if(selectedopt == "Furniture") {
        $('#details').text("Please provide the Dimensions in HxWxL format");
        $("#size").hide();
        $("#weight").hide();
        $("#height").show();
        $("#width").show();
        $("#length").show();
    }
    })
})
</script>
</head>
<body>
    <?php require_once 'process.php'; ?>
    <h1 class="text-primary">Product ADD</h1>
    <div class="container">
    <form id="product_form" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
        <div class="form-group">
        <label for="sku">SKU</label><br>
        <input id="sku" type="text" name="sku" value="" placeholder="SKU" pattern="[A-Za-z0-9]+" title="Five or more characters"><br><br>
        <label for="name">Name</label><br>
        <input id="name" type="text" name="name" value="" placeholder="Name" patter="[A-Za-z0-9 ]+" title="Enter a valid name"><br><br>
        <label for="price">Price ($)</label><br>
        <input id="price" type="number" name="price" value="" placeholder="Price" pattern="[0-9]" title="Numbers only"><br><br>
        <select id="productType" name="productType">
            <option value="0">Select your product type</option>
            <option value="DVD">DVD</option>
            <option value="Book">Book</option>
            <option value="Furniture">Furniture</option>
        </select><br><br>
            <div >
            <label id="details"></label><br>
            <input id="size" type="text" name="size" style="display:none" value="" placeholder="Size (MB)" pattern="[0-9]+" title="Numbers only"><br>
            <input id="weight" type="text" name="weight" style="display:none" value="" placeholder="Weight (KG)" pattern="[0-9]+([\,.][0-9]+)" title="Numbers only"><br>
            <input id="height" type="text" name="height" style="display:none" value="" placeholder="Height (CM)" pattern="[0-9]+" title="Numbers only"><br>
            <input id="width" type="text" name="width" style="display:none" value="" placeholder="Width (CM)" pattern="[0-9]+" title="Numbers only"><br>
            <input id="length" type="text" name="length" style="display:none" value="" placeholder="Length (CM)" pattern="[0-9]+" title="Numbers only"><br>
            </div> <br><br>
        <div class="row" style="justify-content:center">
        <button type="submit" name="save" class="btn btn-success" style="width:150px">SAVE</button>
        <a href="index.php"><input type="" class="btn btn-info" style="width:150px; margin-left:30px;" value="CANCEL"></a><br>
        </div><!--end of row-->
        </div> <!--end of formgroup-->
    </form>
    </div>
</body>
</html>