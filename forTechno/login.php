<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  
  <title>Payroll System</title>


    <link rel="stylesheet" href="assets/css/login.css">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

</head>


<body class="hold-transition login-page">
<?php
  require_once('db.php');
  session_start();
    
    if (isset($_POST['username']))
    {
        $username = $_POST['username'];
        $password = $_POST['password'];

        
        
        $query = "SELECT * FROM `user` WHERE username='$username' and password='$password'";
        $result = mysqli_query($connectDb, $query);
        $rows = mysqli_num_rows($result);

        if($rows==1)
        {
          $_SESSION['username'] = $username;
          header("Location: index.php");
        }
        else
        {
          ?>
          <script>
            alert('Login Invalid, please try again.');
            window.location.href='login.php';
          </script>
          <?php
        }
    }
    else
    {
?>


<br><br><br><br><br><br><br><br>
<div class="container">
  <section id="content">
    <form action="" method="post">
    <img class = "welcomePic" src ="assets/avatarPic.png">
      <h1>Login Panel</h1>
      <div>
        <input name="username" type="text" placeholder="Username" autocomplete="off" required>
       
      </div>
      <div>
        <input name="password" type="password" placeholder="Password" autocomplete="off" readonly
         onfocus="this.removeAttribute('readonly');" , onfocusout ="this.setAttribute('readonly','readonly'); " required/>

      </div>
      <div>
        <input type="submit" value="Login" />
       
      </div>
    </form>
  </section>
</div>


<?php } ?>


  </body>
</html>