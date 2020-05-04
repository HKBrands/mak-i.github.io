<?php
	session_start(); 
	if(isset($_SESSION['aid'])){
		
	}else{
	    header('location:index.php');
	}
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Mak-i - Add Product</title>
	<link rel="stylesheet" href="">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<br>
		<h1 class="text-center">Add Products</h1>
		<br>
		<div class="text-center">
			<a href="dashboard.php" class="btn btn-light">Orders</a>
			<a href="add-product.php" class="btn btn-light">Add Product</a>
			<a href="view-products.php" class="btn btn-light">View Products</a>
			<a href="messages.php" class="btn btn-light">Messages</a>
			<a href="logout.php" class="btn btn-light">Logout</a>
		</div>
		<br><br>
		<h5 id="success" class="text-white bg-primary text-center">Your product has uploaded!</h5>
		<form action="add-product.php" method="post" enctype="multipart/form-data">
		  <div class="form-group">
		  	<label for="productname" class="form-control-label">Product Name:</label>
		    <input type="text" id="productname" name="pname" class="form-control" required><br><br>
		  </div>
		  <div class="form-group">
		  	<label for="productquantity" class="form-control-label">Product Quantity:</label>
		    <input type="number" id="productquantity" name="pquantity" class="form-control" required><br><br>
		  </div>
		  <div class="form-group">
		  	<label for="productprice" class="form-control-label">Product Price:</label>
		    <input type="number" id="productprice" name="pprice" class="form-control" required><br><br>
		  </div>
		  <div class="form-group">
		  	<label for="productdescription" class="form-control-label">Description:</label>
		    <textarea name="pdescription" id="productdescription" cols="30" rows="10" class="form-control-plaintext" required></textarea><br><br>
		  </div>
		  <div class="form-group">
		  	<label for="productimage" class="form-control-label">Add Product Image (Primary):</label>
		    <input type="file" id="productimage" name="pimage" class="form-control-file" required><br><br>
		  </div>
		  <div class="form-group">
		  	<label for="productimage2" class="form-control-label">Add Product Image (Secondary):</label>
		    <input type="file" id="productimage" name="pimage1" class="form-control-file"><br><br>
		  </div>
		  <div class="form-group">
		  	<label for="productimage3" class="form-control-label">Add Product Image (Secondary):</label>
		    <input type="file" id="productimage" name="pimage2" class="form-control-file" ><br><br>
		  </div>
		  <div class="form-group">
		  	<label for="productimage4" class="form-control-label">Add Product Image (Secondary):</label>
		    <input type="file" id="productimage" name="pimage3" class="form-control-file" ><br><br>
		  </div>
		  <button class="btn btn-success" name="submit" id="submit">Submit</button>
		</form>
	</div>

	<script>
		$('#success').hide();
	</script>
</body>
</html>

<?php
    include ('add-product-action.php');
    
    if(isset($_GET['r'])){
        
        $check = $_GET['r'];
        if($check == "success"){
            ?>
        <script>
		$('#success').show();
	</script>
        <?php
        }
    }
?>