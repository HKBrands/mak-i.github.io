<?php 
	

	if(isset($_POST['login'])){
		
		$username =$_POST['username'];
		$password =$_POST['password'];

		$query="SELECT * FROM `admin` WHERE `username`='$username' AND `pass`='$password'";
		$run=mysqli_query($con,$query);
		$result=mysqli_num_rows($run);

		if($result >0){
			$data=mysqli_fetch_assoc($run);
			$id=$data['id'];
			
			$_SESSION['aid']=$id;
			?>
			<script>
			window.location='dashboard.php'
			</script>
			<?php
		}else{
			echo "<script>$('#error').show();</script>";
		}

		}
 ?>