<?php
  require_once 'db.php';

  if(isset($_POST['submit'])!="")
  {
    $lname      = $_POST['lname'];
    $fname      = $_POST['fname'];
    $gender     = $_POST['gender'];
    $type       = $_POST['emp_type'];
    $division   = $_POST['division'];
    $contact    = $_POST['contact'];
    $address    = $_POST['address'];
    $email    = $_POST['email'];

    $query = "INSERT into employee(lname, fname, gender, emp_type, division, contact, address, email)VALUES('$lname','$fname','$gender', '$type', '$division', '$contact', '$address', '$email')";
    $result = mysqli_query($connectDb, $query);
    if($result)
    {
      ?>
        <script>
            alert('Employee has been added!');
            window.location.href='home_employee.php?page=emp_list';
        </script>
      <?php 
    }

    else
    {
      ?>
        <script>
            alert('An Error Occured');
            window.location.href='index.php';
        </script>
      <?php 
    }
  }
?>