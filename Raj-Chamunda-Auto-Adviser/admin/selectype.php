<?php
session_start();
include_once("./db/connection.php");
$username = base64_decode($_SESSION['username']);
$password = base64_decode($_SESSION['password']);

if ($_SESSION['username'] && $_SESSION['password']) {

    if (isset($_GET['select'])){

      $select = mysqli_real_escape_string($con, $_GET['select']);
      $select = htmlspecialchars($select);

      $_SESSION['select'] = base64_encode($select);


      $cmd1 = "select * from vehicle_details where service_type='Insurance'";
      $result1 = mysqli_query($con, $cmd1) or die(mysqli_error($con));
      $Insurance = mysqli_num_rows($result1);

      $cmd1 = "select * from vehicle_details where service_type='Tax'";
      $result1 = mysqli_query($con, $cmd1) or die(mysqli_error($con));
      $Tax = mysqli_num_rows($result1);

      $cmd1 = "select * from vehicle_details where service_type='Permit'";
      $result1 = mysqli_query($con, $cmd1) or die(mysqli_error($con));
      $Permit = mysqli_num_rows($result1);

      $cmd1 = "select * from vehicle_details where service_type='Parsing'";
      $result1 = mysqli_query($con, $cmd1) or die(mysqli_error($con));
      $Parsing = mysqli_num_rows($result1);

      $cmd1 = "select * from vehicle_details where service_type='P.U.C'";
      $result1 = mysqli_query($con, $cmd1) or die(mysqli_error($con));
      $puc = mysqli_num_rows($result1);

      $cmd1 = "select * from vehicle_details where service_type='RC'";
      $result1 = mysqli_query($con, $cmd1) or die(mysqli_error($con));
      $rc = mysqli_num_rows($result1);

    
      // echo $homeloan;


?>


      <!DOCTYPE html>

      <html lang="en">



      <head>

            <meta charset="UTF-8">

            <meta http-equiv="X-UA-Compatible" content="IE=edge">

            <meta name="viewport" content="width=device-width, initial-scale=1.0">

            <title>Select Service Type</title>

            <link rel="icon" href="../Images/shiv-finance logo.png" type="image/x-icon">

            <link rel="stylesheet" href="./design/css/dash.css">

            <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->

            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

            <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
            <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>



      </head>



      <body>

            <input type="checkbox" id="nav-toggle">

            <div class="sidebar">

                  <div class="sidebar-brand">

                        <!-- <img class="logo-img" src="../Images/shiv-finance logo.png" alt="Raj chamunda auto adviser" align="left"> -->
                        <h3 class="logo-img">Raj chamunda auto adviser</h3>


                        <h3><span></span></h3>

                        <hr>

                  </div>

                  <div class="sidebar-menu">

                        <ul>

                              <li><a href="dash" ><span class="fa fa-dashboard"></span><span>Dashboard</span></a></li>

                              <li><a href="adduser" ><span class="fa fa-user-plus"></span><span>Add User</span></a></li>

                              <li><a href="userdetails"><span class="fa fa-list-alt"></span><span>User Details</span></a></li>

                              <li><a href="select" class="active"><span class="fa fa-comments"></span><span>Expiry</span></a></li>

                              <li><a href="admindetails" ><span class="fas fa-user-edit"></span><span>Admin Details</span></a></li>





                        </ul>



                  </div>










            </div>

            <div class="main-content">

                  <header>



                        <h2>

                              <label for="nav-toggle">

                                    <span class="fa fa-align-justify"></span>

                              </label>

                              Select Service Type

                        </h2>

  



                        <div class="user-wrapper">

                              <li class="user"><img class="" src="../Images/default-user.jpg" width="40px" height="40px" alt=""></li>

                              <div>

                                    <h4><?php echo $username ?></h4>
                              


                                    <small>Admin</small>



                              </div>

                              <div id="data-title" class="visible">

                                    <a href="./back/function/logout.php" data-title="Log out"><span class="fa fa-sign-out"></span></a>

                              </div>

                        </div>

                  </header>



                  <main>

                        <div class="cards">

                              <a href="expiredate.php?service_type=Insurance" class="card-single1">

                                    <div>
                                          <h2>Insurance</h2>
                                          

                                    </div>



                              </a>





                              <a href="expiredate.php?service_type=Tax" class="card-single2">

                                    <div>

                                          <h2>Tax</h2>


                                    </div>



                              </a>

                              <a href="expiredate.php?service_type=P.U.C" class="card-single3">

                                    <div>

                                          <h2>PUC</h2>


                                    </div>

                              </a>

                        

                              <a href="expiredate.php?service_type=Parsing" class="card-single4">

                                    <div>

                                          <h2>Parsing</h2>

                                    </div>

                              </a>
                           

                                    
                                    <a href="expiredate.php?service_type=Permit" class="card-single5">
                                          
                                          <div>
                                                
                                                <h2>Permit</h2>
                                                
                                                
                                          </div>
                                          
                                    </a>

                                    <a href="expiredate.php?service_type=RC" class="card-single6">
                                          
                                          <div>
                                                
                                                <h2>RC</h2>
                                                
                                                
                                          </div>
                                          
                                    </a>

                          
                           

            </div>

            </main>

            </div>


            <!-- script -->

            <!-- custom javascript  -->

            <script src="./js/check_session.js"></script>




      </body>



      </html>

      <?php
      } else {
      ?>
            <script>
                  alert('Page not found!');
                  window.location = './expiredate';
            </script>
<?php
      }
} else {
      echo header('Location:./account');
}
?>