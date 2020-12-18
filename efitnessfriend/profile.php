<!DOCTYPE html>
<html lang="en">
<?php
session_start();

 ?>
<head>
<body>
  <title>eFitnessFriend</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <!-- Link for the css folder -->
  <link rel="stylesheet" type="text/css" href="settings.css">

</head>
<div id="page-wrap"><!--delete if neecc -->



<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

  <div id="Dashboard" class="container-fluid">
    <div id="Goals" class="container-fluid">
      <div id="Meals" class="container-fluid">
        <div id="iData" class="container-fluid">
          <div id="Settings" class="container-fluid">

            <nav class="navbar navbar-default navbar-fixed-top">
              <div class="container">
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="dashboard.html">eFitnessFriend</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                  <ul class="nav navbar-nav navbar-right">
                    <li><a href="dashboard.php">Dashboard</a></li>
                    <li><a href="goals.php">Goals</a></li>
                    <li><a href="meals.php">Meals</a></li>
                    <li><a href="edata.php">eData</a></li>
                    <li><a href="profile.php">Profile</a></li>
                    <li><a href="logout.php">Logout</a></li>
                  </ul>
                </div>
              </div>
            </nav>
            <!--

             -->

             

            <!--Settings Page-->



            <div class="container-fluid settings">
              <h1>Profile</h1>

              <!--Top container-->
              <div class="top-container well">
                <div class="image-container">
                  <form  action ='upload.php' method="POST" enctype="multipart/form-data">
                    <input type="file" name="file">
                      <button type="submit" name="submit" >Upload</button>



                </div>


                </div>

              </div>

              <!-- Middle Container-->
              <div class="middle-container well">

                <div class="personal-info-container">
                  <h4>Personal Information</h4>
                  <div class="personal-info">
                  <div class="label-container">

                    <p>First Name:</p>
                    <p>Email:</p>
                    <p>Plan:</p>
                    <p>Helath Conditions:</p>

                  </div>
                  <div class="values-container">
                 <?php


                  $con = mysqli_connect('127.0.0.1', 'root','','e_fitness_friend');
                  $user_id = $_SESSION["userid"];
                  $query = "SELECT * FROM user_plans where `user_id`= $user_id";
                  $query_run = mysqli_query($con, $query);
                  while($row = mysqli_fetch_array($query_run)){

                  $plan = $row['monthly'];


                  }





                  echo "<p>" . $_SESSION["name"] . "</p>";

                  echo "<p>" . $_SESSION["email"] . "</p>";

                  echo "<p>" . $plan.  "</p>";



                    ?>




                  </div>
                </div>

                </div>




                <div class="display-info">


                  <hr>
                  <h4>Health Conditions</h4>

                          <?php
   $con = mysqli_connect('127.0.0.1', 'root','','e_fitness_friend');
                  $user_id = $_SESSION["userid"];
                  $query = "SELECT * FROM user_data where `user_id`= $user_id";
                  $query_run = mysqli_query($con, $query);
                  while($row = mysqli_fetch_array($query_run)){


                     echo $row['medicalConditions'];
                  }
                  ?>



                </div>
              </div>
              <!--Bottom container-->
              <div class="bottom-container well">
                <div class="payment-container ">
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addPaymentModal">Add
                    Payment</button>
                  <button type="button" class="btn btn-primary" data-toggle="modal"
                    data-target="#changeBillingModal">Change Health Info</button>
                  <button type="button" class="btn btn-primary" data-toggle="modal"
                    data-target="#changePlanModal">Change Plan</button>
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#removePlanModal">Deactivate Account</button>



                  <!-- Add payment Modal -->
                  <form action="cardsql.php" method="post">
                  <div class="modal fade" id="addPaymentModal" role="dialog">
                    <div class="modal-dialog">
                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title">Add Payment</h4>
                        </div>


                        <div class="modal-body add-payment-modal">

                         <input type="text" name ="nameOnCard" placeholder="Name on Card" >
                         <input type="text" name ="cardNumber"  placeholder="Card Number" >
                         <input type="text" name ="expirationDate"  placeholder="Expiration Date">
                         <input type="text" name ="cVV"  placeholder="CVV" >
                         <input type="text" name ="streetAddress"  placeholder="Street Address" >
                         <input type="text" name ="city"  placeholder="City" >
                         <input type="text" name ="state"  placeholder="State" >
                         <input type="text" name ="zipCode"  placeholder="Zipcode" >

                         </form>
                        <button type ="submit" name="submit">Submit</button>

                        <br><br>
                        <h4 class="modal-title">Card On File</h4>
                        <br><br>
                           <?php

                           $con = mysqli_connect('127.0.0.1', 'root','','e_fitness_friend');
                           $user_id = $_SESSION["userid"];
                           $query = "SELECT * FROM user_payment where `user_id`= $user_id";
                           $query_run = mysqli_query($con, $query);
                           while($row = mysqli_fetch_array($query_run)){


                            $nameOnCard = $row['nameOnCard'];
                            $streetAddress = $row['streetAddress'];
                            $zipCode = $row['zipCode'];

                  }
                    ?>
                        <p><b>Name On Card: </b><?php echo $nameOnCard ?> </p>
                        <p><b>Street Address: </b><?php echo $streetAddress ?> </p>
                        <p><b>Zipcode: </b><?php echo $zipCode ?> </p>
                        </div>


                        <div class="modal-body add-payment-modal">
                        </div>

                      </div>

                    </div>
                  </div>



                  <!-- Change Billing Modal -->
                    <form action="profileHealth.php" method="post">
                  <div class="modal fade" id="changeBillingModal" role="dialog">
                    <div class="modal-dialog">

                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title">Change Health Information</h4>
                        </div>

                        <div class="modal-body flex">

                         <div class="container labels column-flow">
                         <input type="text" name = "medicalConditions" placeholder="Medical Conditions" required>
                         <input type="text" name = "currentWeight" placeholder="Current Weight" required>
                         <input type="text" name = "targetWeight" placeholder="Target Weight" required>
                         <input type="text" name = "bloodPressure" placeholder="Blood Pressure" required>
                         <input type="text" name = "targetBloodPressure" placeholder="Target Blood Pressure" required>
                         <input type="text" name = "heatRate" placeholder="Heart Rate" required>
                         <input type="text" name = "bloodSugar" placeholder="Blood Sugar" required>
                         <input type="text" name = "targetBloodSugar" placeholder="Target Blood Sugar" required>
                         <input type="text" name = "targetCalories" placeholder="Target Calories" required>
                         <input type="text" name = "age" placeholder="age" required>
                         <input type="text" name = "height" placeholder="height" required>
                        </form>
                         <button type ="submit" name="submit">Submit</button>
                          </div>


                        </div>
                        <div class="modal-footer">

                        </div>
                      </div>

                    </div>
                  </div>

                  <!-- Change Plan Modal -->
                      <form action="plans.php" method="post">
                  <div class="modal fade" id="changePlanModal" role="dialog">
                    <div class="modal-dialog">

                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title">Change Plan</h4>
                        </div>
                        <div class="modal-body">
                          <label for="monthly" id="monthly">Monthly</label>
                          <input type="checkbox" value="Monthly" name="monthly" id="monthly">
                          <br></br>

                          <label for="three-month">3-month</label>
                          <input type="checkbox" value="Quarterly" name="quartly" id="three-month">
                          <br></br>

                          <label for="annual">Annual</label>
                          <input type="checkbox" value="Annual" name="annual" id="annual">
                          <br></br>

                          <label for="annual">Cancel Plan</label>
                          <input type="checkbox" >
                          </form>
                          <button type ="submit" name="submit">Submit</button>
                        </div>
                        <div class="modal-footer">

                        </div>
                      </div>

                    </div>
                  </div>

                  <!--Remove Plan Modal-->
                  <div class="modal fade" id="removePlanModal" role="dialog">
                    <div class="modal-dialog">

                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title">Deactivate account </h4>
                        </div>
                        <div class="modal-body">
                          <div class="alert alert-success">
                            <strong>Success!</strong> You have successfully deactivated your account.
                          </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Ok</button>
                        </div>
                      </div>

                    </div>
                  </div>


                </div>
                <!--Payment Container Ends-->

                <div class="notifications-container">
                  <h4>Notifications</h4>
                  <div class="meals-choice">
                    <label for="meals">Meals</label>
                    <input type="checkbox" id="meals">
                  </div>
                  <div class="exercise-choice">
                    <label for="exercise">Exercise</label>
                    <input type="checkbox" id="exercise">
                  </div>

                  <div class="email-choice">
                    <label for="email">By email</label>
                    <input type="checkbox" id="email">
                  </div>


                  <div class="desktop-choice">
                    <label for="desktop">On your desktop</label>
                    <input type="checkbox" id="desktop">
                  </div>

                </div>
              </div>


            </div>


          </div>


        </div>


<div class="bottom-container well">


                <div class="form-group">

                  <label for="comment">Status:</label>
          <?php
                include 'commentSystemDis.php';
                echo "<form method='POST' action='".setUserComments($con)."'>
                      <input type='hidden' name='uid' value='Anonymous'>
                      <input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'>
                      <textarea name='message'></textarea><br>
                      <button type='submit' name='commentSubmit'>Comment</button>
                      </form>";

                      getUserComments($con);

                  ?>

</div>

</div>










<!--Up-arrow return to top-->


<footer class="container-fluid text-center">
  <a href="#myPage" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
  <p>Back To The Top</a></p>
</footer>



</div>

</body>
</html>
<!--END-->
