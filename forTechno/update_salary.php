<?php
	
		require("db.php");
		
		@$id 			= $_POST['salary_id'];
		@$salary		= $_POST['salary_rate'];


		$query = "UPDATE salary SET salary_rate='$salary' WHERE salary_id='1'";
		$result = mysqli_query($connectDb, $query);

		if($result)
		{
			?>
		        <script>
		            alert('Salary rate has been updated!');
		            window.location.href='home_salary.php';
		        </script>
		    <?php 
		}
		else {
			echo "Something went wrong, Please try again!"; 
		}
 ?>