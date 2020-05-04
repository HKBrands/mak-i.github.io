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
		<h1 class="text-center">All Messages</h1>
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
					<th>User Name</th>
					<th>User Number</th>
					<th>User Message</th>
				</thead>
				<tbody>
				    <?php
	$query1="SELECT * FROM `contact` order by id desc";
	    $run1= mysqli_query($con,$query1);
        $no=0;
	while ($result1 =  mysqli_fetch_array($run1)){
	    $no++;
		?>
		<form action="view-products.php" method="post">
		<tr>
			<td><?php echo $no?></td>
			<td><?php echo $result1['username']?></td>
			<td><?php echo $result1['usernumber']?></td>
			<td><?php echo $result1['usermessage']?></td>
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