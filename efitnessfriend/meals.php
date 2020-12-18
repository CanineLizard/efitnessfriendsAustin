<!DOCTYPE html>
<html lang="en">
<head>
  <title>Meals</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <!-- Link for the css folder -->
<link rel="stylesheet" type="text/css" href="meals.css">

</head>
<body>
<div id="page-wrap">   
                                                                               <!--This page belongs to:Kenny Nawotniak -->
<?php session_start() ?>


<!-- Padding for meals -->
<style>
.jumbotron {
  background-color: #4169E1;
  color: #fff;
  padding: 100px 25px;
}

.container-fluid {
  padding: 10px 50px;
}
</style>

                                                                                   <!--NAVAGATION BAR-->
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
      <li><a href="meals.html">Meals</a></li>
      <li><a href="edata.php">eData</a></li>
      <li><a href="profile.php">Profile</a></li>
      <li><a href="logout.php">Logout</a></li> 
      </ul>
    </div>
  </div>
</nav>

                                                            <!--Scrollspy "udpade nav bar when scrolling-->
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<div id="Dashboard" class="container-fluid">
<div id="Goals" class="container-fluid">
<div id="Meals" class="container-fluid">
<div id="eData" class="container-fluid">
<div id="Settings" class="container-fluid">







                                                                 <!-- INSERT CODE HERE -->



      <h1>Meals</h1>
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-12">
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
    <br></br>
       <br></br>
          <br></br>
          
    <div id="toprow" class="col-sm-12">
    <div id="recommended"class="col-sm-12">

<!-- UPCOMING MEAL BOX -->
      <h3>Upcoming Meal:</h3>

</a><a href="#" class="btn btn-primary btn-block" data-toggle="modal" data-target="#MealPlan4">
  Fettuccine Alfredo
</a>

          <!-- RECOMMENDED BREAKFAST-->
      <h3> Breakfast Meals</h3>

<a href="#" class="btn btn-primary btn-block" value="410" name="friedegg" "btn btn-primary btn-block" data-toggle="modal" data-target="#AddMealPlan">
  Fully Loaded Fried-Egg BLT 
</a>

<a href="#" class="btn btn-primary btn-block"value="205" name="berrysmoothie" "btn btn-primary btn-block" data-toggle="modal" data-target="#AddMealPlan2">
  Berry Yogurt Smoothie
</a>
<a href="#" class="btn btn-primary btn-block" value="321" name="burrito"data-toggle="modal" data-target="#AddMealPlan3">
  Breakfast Burrito
</a>

    </div>

    </div>

    <div id="toprow" class="col-sm-12">
    <div id="recommended"class="col-sm-12">



          <!-- RECOMMENDED LUNCH-->
      <h3> Lunch Meals</h3>

<a href="#" class="btn btn-primary btn-block" value="779" name="chickensalad" "btn btn-primary btn-block" data-toggle="modal" data-target="#AddMealPlan4">
  Chicken Salad
</a>

<a href="#" class="btn btn-primary btn-block" value="369" name="tunamelt" "btn btn-primary btn-block" data-toggle="modal" data-target="#AddMealPlan5">
  Tuna Melt
</a>
<a href="#" class="btn btn-primary btn-block" value="215" name="riceandlentils" data-toggle="modal" data-target="#AddMealPlan6">
  Middle Eastern Rice and Lentils 
</a>

    </div>

    </div>

    <div id="toprow" class="col-sm-12">
    <div id="recommended"class="col-sm-12">




      <!-- RECOMMENDED DINNER-->
      <h3> Dinner Meals</h3>

<a href="#" class="btn btn-primary btn-block" value="617" name="killet" "btn btn-primary btn-block" data-toggle="modal" data-target="#AddMealPlan7">
Lemon Garlic Butter Chicken and Green Beans Skillet
</a>

<a href="#" class="btn btn-primary btn-block" value="250" name="chickenalfredo" "btn btn-primary btn-block" data-toggle="modal" data-target="#AddMealPlan8">
  Chicken Alfredo
</a>
<a href="#" class="btn btn-primary btn-block" value="397" name="shoyuramen"  data-toggle="modal" data-target="#AddMealPlan9">
  Shoyu Ramen
</a>

    </div>
    </div>
    <div id="addmealandviewmealplan" class="col-sm-12">

      <div class= "col-sm-6">

</div>
    </div>

    <div id = "bottomrow" class="col-sm-12">
    <br></br>
    <br></br>
    <div id="upcoming" class="col-sm-6">




    </div>
    </div>
  </div>
</div>






      <!-- MODAL FOOD POPOUT -->
<div class="modal fade" id="AddMealPlan" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
      <h4 class="modal-title" id="AddMealPlan">Fully Loaded Fried-Egg BLT</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <h4>Calories = 410</h4>
        <h4>Time: Breakfast</h4>
		<h4>Good for: Hypertension, Obesity, Diabetes</h4>
		<img src="https://hips.hearstapps.com/ghk.h-cdn.co/assets/17/16/1280x1919/gallery-1492462652-ghk050117ykbreakfast01.jpg?resize=768:*" alt="BLT Image" height="266" width="177">
		<a href="https://www.goodhousekeeping.com/food-recipes/a43766/fully-loaded-fried-egg-blt-recipe/">Recipe</a>
        
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-default"  data-dismiss="modal">Add Meal</button>
      </div>
    </div>
  </div>
</div>






<div class="modal fade" id="AddMealPlan2" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myMealPlan"> Berry and Yogurt Smoothie </h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
	  
      <div class="modal-body">
        <h4>Calories = 205</h4>
        <h4>Time: Breakfast</h4>
		<h4>Good for: Hypertension, Obesity, Diabetes</h4>
        <img src="https://i0.wp.com/chefsavvy.com/wp-content/uploads/20141219-DSC_0807.jpg?w=665&ssl=1" alt="Smoothie Image" height="266" width="177">
		<a href="https://chefsavvy.com/healthy-berry-yogurt-smoothie/">Recipe</a>
        </div>
      
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-default"  data-dismiss="modal">Add Meal</button>
      </div>
    </div>
  </div>
</div>



<div class="modal fade" id="AddMealPlan3" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myMealPlan">Breakfast Burrito</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <h4>Calories = 321</h4>
        <h4>Time: Breakfast</h4>
		<h4>Good for: Obesity, Diabetes</h4>
		<h4>Bad for: Hypertension</h4>
        <img src="https://www.kimscravings.com/wp-content/uploads/2018/10/506A0372-640x960.jpg" alt="Burrito Image" height="266" width="177">
		<a href="https://www.kimscravings.com/healthy-breakfast-burrito-recipe/">Recipe</a>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-default" data-dismiss="modal"> Add Meal</button>
      </div>
    </div>
  </div>
</div>




<div class="modal fade" id="AddMealPlan4" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myMealPlan">  Chicken Salad</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div id = "mp4" class="modal-body">
          <div>
            <h4>Calories = 779</h4>
            <h4>Time: Lunch</h4>
			<h4>Good for: Hypertension, Obesity, Diabetes</h4>
			<img src="https://www.cookingclassy.com/wp-content/uploads/2019/05/chicken-salad-14-768x1152.jpg" alt="Chicken Salad Image" height="266" width="177">
            <a href="https://www.cookingclassy.com/chicken-salad-recipe/">Recipe</a>
          </div>
          <div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-default" data-dismiss="modal"> Add Meal</button>
      </div>
    </div>
  </div>
</div>





  </div><div class="modal fade" id="AddMealPlan5" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myMealPlan">Tuna Melt</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <div>
          <h4>Calories = 367</h4>
          <h4>Time: Lunch</h4>
		<h4>Good for: Hypertension, Obesity, Diabetes</h4>
		<img src="https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/tuna-melt-081-1550261085.jpg?crop=0.646xw:0.431xh;0.243xw,0.388xh&resize=768:*" alt="Tuna Melt Image" height="266" width="177">
        <a href="https://www.delish.com/cooking/recipe-ideas/a26146096/tuna-melt-recipe/">Recipe</a>
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Add Meal</button>
      </div>
    </div>
  </div>
</div>



  </div><div class="modal fade" id="AddMealPlan6" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myMealPlan">Middle Eastern Rice and Lentils</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <div>
          <h4>Calories = 215</h4>
          <h4>Time: Lunch</h4>
		<h4>Good for: Hypertension, Obesity, Diabetes</h4>
		<img src="https://food.fnr.sndimg.com/content/dam/images/food/fullset/2014/4/8/1/FNM_050114-Middle-Eastern-Rice-and-Lentils-Recipe_s4x3.jpg.rend.hgtvcom.966.725.suffix/1397166616290.jpeg" alt="Tuna Melt Image" height="266" width="266">
        <a href="https://www.foodnetwork.com/recipes/food-network-kitchen/middle-eastern-rice-and-lentils-3362812">Recipe</a>
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Add Meal</button>
      </div>
    </div>
  </div>
</div>



  </div><div class="modal fade" id="AddMealPlan7" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myMealPlan">Lemon Garlic Butter Chicken and Green Beans Skillet</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <div>
          <h4>Calories = 617</h4>
          <h4>Time: Dinner</h4>
        <h4>Good for: Obesity, Diabetes</h4>
		<h4>Bad for: Hypertension</h4>
        <img src="https://www.eatwell101.com/wp-content/uploads/2019/03/chicken-and-green-beans-recipe4.jpg" alt="Lemon Garlic Chicken Image" height="266" width="177">
		<a href="https://www.eatwell101.com/lemon-garlic-butter-thighs-and-green-beans-skillet">Recipe</a>
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Add Meal</button>
      </div>
    </div>
  </div>
</div>


  </div><div class="modal fade" id="AddMealPlan8" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myMealPlan">  Chicken Alfredo </h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <div>
          <h4>Calories = 250</h4>
          <h4>Time: Dinner</h4>
		<h4>Good for: Obesity, Diabetes</h4>
		<h4>Bad for: Hypertension</h4>
        <img src="https://food.fnr.sndimg.com/content/dam/images/food/fullset/2015/9/15/1/FNK_Chicken-Fettucine-Alfredo_s4x3.jpg.rend.hgtvcom.826.620.suffix/1442375396342.jpeg" alt="Alfredo Image" height="266" width="266">
		<a href="https://www.foodnetwork.com/recipes/food-network-kitchen/chicken-fettuccine-alfredo-3364118">Recipe</a>
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Add Meal</button>
      </div>
    </div>
  </div>
</div>



  </div><div class="modal fade" id="AddMealPlan9" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myMealPlan">SHOYU RAMEN – 醤油ラメーン</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <div>
          <h4>Calories = 397</h4>
          <h4>Time: Dinner</h4>
		<h4>Good for: Obesity, Diabetes</h4>
		<h4>Bad for: Hypertension</h4>
        <img src="https://pickledplum.com/wp-content/uploads/2018/02/shoyu-ramen-1OPTM.jpg" alt="Ramen Image" height="266" width="177">
		<a href="https://pickledplum.com/shoyu-ramen/">Recipe</a>
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Add Meal</button>
      </div>
    </div>
  </div>
</div>

</div>

                                                            <!--Up-arrow return to top-->
<style>
footer .glyphicon {
  font-size: 20px;
  margin-bottom: 20px;
  color: #f4511e;
}
</style>




<footer class="container-fluid text-center">
  <a href="#myPage" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
  <p>Back To The Top</a></p>
</footer>

</div>
</body>



</html> <!--END-->