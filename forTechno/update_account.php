<?php 

  include("db.php");
  include("auth.php");

  $id           = $_POST['id'];
  $deduction    = $_POST['deduction'];
  $overtime     = $_POST['overtime'];
  $bonus        = $_POST['bonus'];

  $query = "UPDATE employee SET deduction='$deduction', overtime='$overtime', bonus='$bonus' WHERE emp_id='$id'";
  $query = mysqli_query($connectDb, $query);

  if ($query)
  {
    ?>
    <script>
      alert('Account has been updated!');
      window.location.href='home_employee.php';
    </script>
    <?php 
  }
  else
  {
    echo "Something went wrong, Please try again!";
  }
?>