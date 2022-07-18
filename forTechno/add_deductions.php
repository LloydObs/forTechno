<?php
	
		require_once 'db.php';
		
		@$id 			= $_POST['deduction_id'];
		@$philhealth	= $_POST['philhealth'];
		@$providentfund 			= $_POST['providentfund'];
		@$pagibig			= $_POST['pagibig'];
		@$SSS 			= $_POST['SSS'];
		@$loans 		= $_POST['loans'];


		$query = "UPDATE deductions SET providentfund='$providentfund', pagibig='$pagibig', SSS='$SSS', loans='$loans', philhealth='$philhealth' WHERE deduction_id='1'";
		$result = mysqli_query($connectDb, $query);

		if($query)
		{
			?>
		        <script>
		            alert('Deductions updated!');
		            window.location.href='home_deductions.php';
		        </script>
		    <?php 
		}
		else {
			echo "Something went wrong, Please try again!"; 
		}
 ?>