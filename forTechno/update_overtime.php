<?php
	
		require("db.php");
		
		@$id 			= $_POST['ot_id'];
		@$overtime		= $_POST['rate'];


		$query = "UPDATE overtime SET rate='$overtime' WHERE ot_id='1'";
		$result = mysqli_query($connectDb, $query);

		if($result)
		{
			?>
		        <script>
		            alert('Overtime Rate has been updated!');
		            window.location.href='home_salary.php';
		        </script>
		    <?php 
		}
		else {
			echo "Something went wrong!"; 
		}
 ?>