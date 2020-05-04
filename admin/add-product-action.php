<?php
	include ('../dbcon.php');
	$upg_id="SELECT * FROM `products`";
		$upg_run=mysqli_query($con,$upg_id);
		if($upg_run==true){
		    while($upg_fetch=mysqli_fetch_array($upg_run)){
		        $id_found=$upg_fetch['id'];
		        if($id_found==1){
		            $id_plus=$id_found+1;
					$updatedb="UPDATE `products` SET `id`='$id_plus' WHERE `id`='$id_found'";
					$runn=mysqli_query($con,$updatedb);
					if($runn==true){
					    echo "done";
					}else{
					    echo "undone";
					}
		        }else{
		            
		        }
		    }
		}else{
		    ?>
		    <script>
		        alert("Something went wrong");
		    </script>
		    <?php
		}
	if(isset($_POST['submit'])){
		
		

	}
	

?>