<?php
  include("auth.php"); 
  include("add_employee.php");
  require_once 'db.php';
?>

<?php

  $query  ="SELECT * from deductions";
  $result = mysqli_query($connectDb, $query);
  while($row=mysqli_fetch_array($result))
  {
    $id           = $row['deduction_id'];
    $philhealth   = $row['philhealth'];
    $providentfund          = $row['providentfund'];
    $pagibig       = $row['pagibig'];
    $SSS         = $row['SSS'];
    $loans        = $row['loans'];

    $total        = $philhealth + $providentfund + $pagibig + $SSS + $loans;
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>

   
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Payroll System</title>
    <link href="assets/css/justified-nav.css" rel="stylesheet">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link href="assets/css/search.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/dataTables.min.css">

  </head>
  <body>

    <div class="container">
      <div class="masthead">
        <h3>
        <b><a href="index.php" style="text-decoration:none; color:#3fb1d4;"><img src="assets/testLogo.png" alt="lg" width="28px;"> Alcala Saves</a></b>
            <a data-toggle="modal" style="text-decoration:none; color:#3fb1d4;" href="#colins" class="pull-right"><b><button class="btn btn-danger" style="border-radius: 0%;"><i class="fas fa-sign-out-alt"></i> Exit</button></b></a>
        </h3>
        <nav>
          <ul class="nav nav-justified" style="border-radius:0%">
            <li>
              <a href="home_employee.php">Employee Section <span class="label label-primary"><?php include 'total_count.php'?></span></a>
            </li>
            <li class="active">
              <a data-toggle="modal" href="#deductions">Manage Deductions</a>
            </li>
            <li>
              <a href="home_salary.php">Payroll Section</a>
            </li>
          </ul>
        </nav>
      </div><br><br>

              <form class="form-horizontal" action="#" name="form">
                <table class="table table-hover table-bordered">
                  <thead>
                    <tr>
                      <th><p align="center">PhilHealth:</p></th>
                      <th><p align="center">Provident Fund:</p></th>
                      <th><p align="center">Pag-Ibig:</p></th>
                      <th><p align="center">SSS:</p></th>
                      <th><p align="center">Loans:</p></th>
                    </tr>
                    
                  </thead>

                  <tbody>
                    <tr>
                      <td align="center"><?php echo $philhealth; ?>.00</td>
                      <td align="center"> <?php echo $providentfund; ?>.00</td>
                      <td align="center"><?php echo $pagibig; ?>.00</td>
                      <td align="center"><?php echo $SSS; ?>.00</td>
                      <td align="center"><?php echo $loans; ?>.00</td>
                    </tr>
                  </tbody>
                </table>

               


                <br>

                <div class="form-group">
                  <h4><label class="col-lg-12 control-label">Total Deductions : <?php echo $total; ?>.00</label></h4>
                </div>

                <div class="form-group">
                  <label class="col-lg-12 control-label"><button type="button" data-toggle="modal" data-target="#deductions" class="btn btn-danger" style="border-radius:0%"> <i class="fa fa-edit"></i> Update Deduction Details</button></label>
                </div>
              </form>

     
      <div class="modal fade" id="deductions" role="dialog">
        <div class="modal-dialog">
        
          <div class="modal-content">
            <div class="modal-header" style="padding:20px 50px;">
              <button type="button" class="close" data-dismiss="modal" title="Close">&times;</button>
              <h3 align="center"><b>Payroll Deduction List</b></h3>
            </div>
            <div class="modal-body" style="padding:40px 50px;">

              <form class="form-horizontal" action="add_deductions.php" name="form" method="post">
                <div class="form-group">
                  <label class="col-sm-4 control-label">PhilHealth</label>
                  <div class="col-sm-8">
                    <input type="text" name="philhealth" class="form-control" required="required" value="<?php echo $philhealth; ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-4 control-label">Provident Fund</label>
                  <div class="col-sm-8">
                    <input type="text" name="providentfund" class="form-control" value="<?php echo $providentfund; ?>" required="required">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-4 control-label">Pag-Ibig</label>
                  <div class="col-sm-8">
                    <input type="text" name="pagibig" class="form-control" value="<?php echo $pagibig; ?>" required="required">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-4 control-label">SSS</label>
                  <div class="col-sm-8">
                    <input type="text" name="SSS" class="form-control" value="<?php echo $SSS; ?>" required="required">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-4 control-label">Loans</label>
                  <div class="col-sm-8">
                    <input type="text" name="loans" class="form-control" value="<?php echo $loans; ?>" required="required">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-4 control-label"></label>
                  <div class="col-sm-8">
                    <input type="submit" name="submit" class="btn btn-primary" style="border-radius:0%" value="Make Changes">
                  </div>
                </div>
              </form>

            </div>
          </div>
        </div>
      </div>

    
      <div class="modal fade" id="colins" role="dialog">
        <div class="modal-dialog modal-sm">
              
       
          <div class="modal-content">
            <div class="modal-header" style="padding:20px 50px;">
              <button type="button" class="close" data-dismiss="modal" title="Close">&times;</button>
              <h3 align="center">You are logged in as <b><?php echo $_SESSION['username']; ?></b></h3>
            </div>
            <div class="modal-body" style="padding:40px 50px;">
              <div align="center">
                <a href="logout.php" class="btn btn-block btn-danger">Logout</a>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>

  
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
   
    <script src="assets/js/search.js"></script>
    <script type="text/javascript" charset="utf-8" language="javascript" src="assets/js/dataTables.min.js"></script>

    
    <script>
      {
        $(document).ready(function()
        {
          $('#myTable').DataTable();
        });
      }
    </script>
    <script>
      $(document).ready(function()
      {
        $("#myBtn").click(function()
        {
          $("#myModal").modal();
        });
      });
    </script>

  </body>
</html>