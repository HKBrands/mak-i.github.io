<?php
	session_start(); 
	if(isset($_SESSION['aid'])){
		
	}else{
	    header('location:index.php');
	}
	include ('../dbcon.php');
 ?>
 
 <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Admin - View Products</title>
	<link rel="stylesheet" href="">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<br>
		<h1 class="text-center">All Products</h1>
		<br>
		<div class="text-center">
			<a href="dashboard.php" class="btn btn-light">Orders</a>
			<a href="add-product.php" class="btn btn-light">Add Product</a>
			<a href="view-products.php" class="btn btn-light">View Products</a>
			<a href="messages.php" class="btn btn-light">Messages</a>
			<a href="logout.php" class="btn btn-light">Logout</a>
		</div>
		<br><br>
		<div class="table-responsive">
			<table class="table table-bordered table-striped text-center table-hover">
				<thead class="text-center bg-dark text-white">
					<th>S.No</th>
					<th>Product Name</th>
					<th>Product Picture Primary</th>
					<th>Product Picture Secondary</th>
					<th>Product Picture Secondary</th>
					<th>Product Picture Secondary</th>
					<th>Product Price</th>
					<th>Quantity</th>
					<th>Update</th>
					<th>Delete</th>
				</thead>
				<tbody>
				    <?php
	$query1="SELECT * FROM `products` order by id desc";
	    $run1= mysqli_query($con,$query1);
        $no=0;
	while ($result1 =  mysqli_fetch_array($run1)){
	   $no++;
		?>
		<form action="view-products.php" method="post">
		<tr>
			<td><?php echo $no; ?><input type="hidden" class="form-control text-center" name="id" value="<?php echo $result1['id']; ?>" readonly/></<td>
			<td><?php echo $result1['name']?></td>
			<td><img src="<?php echo $result1['image']?>" alt="productimaheprimary" width="100px" height="100px"></td>
			<td><img src="<?php echo $result1['image2']?>" alt="productimahesecondary" width="100px" height="100px"></td>
			<td><img src="<?php echo $result1['image3']?>" alt="productimahesecondary" width="100px" height="100px"></td>
			<td><img src="<?php echo $result1['image4']?>" alt="productimahesecondary" width="100px" height="100px"></td>
			<td><?php echo "Rs.".$result1['price']?></td>
			<td><input class="form-control" value="<?php echo $result1['quantity']?>" name="quantityupg" type="number" /></td>
			<td><button class="btn btn-primary" name="update">Update</button></td>
			<td><button class="btn btn-danger" name="delete">Delete</button></td>
		</tr>
		</form>
		<?php
	}
?>
				</tbody>
			</table>
		</div>
	</div>
</body>
</html>

<?php

    if(isset($_POST['update'])){
		$quantityupg=$_POST['quantityupg'];
		$id=$_POST['id'];
		$update="UPDATE `products` SET `quantity`='$quantityupg' WHERE `id`='$id'";
		$done=mysqli_query($con,$update);
		if($done==true){
		    ?>
			<script>
				window.open('view-products.php','_self');
			</script>
		<?php
		}else{
		    ?>
		    <script>
		        alert("Something went wrong");
		    </script>
		    <?php
		}
	}
	
	if(isset($_POST['delete'])){
		$id=$_POST['id'];
		$delete="DELETE FROM `products`  WHERE `id`='$id'";
		$done=mysqli_query($con,$delete);
		if($done==true){
		    ?>
			<script>
				window.open('view-products.php','_self');
			</script>
		<?php
		}else{
		    ?>
		    <script>
		        alert("Something went wrong");
		    </script>
		    <?php
		}
	}

?>