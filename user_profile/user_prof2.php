<!DOCTYPE html>

<html>
  <head>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.0.3/angular.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <script src="user_prof.js"></script>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

    <title>Teacher Profile</title>
    <link type="text/css" href="user_prof.css" rel="stylesheet" />
    <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
    <link type="text/css" href="../nav_bar_header/nav_bar.css" rel="stylesheet" />
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <link type='text/css' rel='stylesheet' href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" />

  </head>

  <body style="margin-left:5%; margin-right:5%; margin-top:2%; margin-bottom:2%;">
    <?php include("../nav_bar_header/nav_bar.php") ?>
    <div id="container">
   
    <div class="row"> <!-- top row -->
      <div class="col-md-8">
        <h1 id="userheading">Welcome Back Shilpa!</h1>
      </div>
    </div>
    
    <div class="row">&nbsp</div>

  <div class="row"> <!-- info row-->
      <div class="col-md-1"></div>
      <div id= "profDiv" class="col-md-4">
        <img id="prof_pic" src='../teacher_pics/shilpa.jpg' id='teacher_pic'>
      </div>
      <div class="col-md-1"></div>
      <!-- info div -->
      <div id="info_variables" class="col-md-5">
    <div class="row"> <!-- row 1-->
      <h3 id="userheading">Your Info:</h3>
    </div>
    <div class= "row"> <!-- row 2 -->
      <div class="col-md-5">
        <div class="list-group">
        <div class="list-group-item">
          <span class="hover-content"><span class="glyphicon glyphicon-pencil"></span></span> 
          <h4 class="list-group-item-heading">School District:</h4>
          <p class="list-group-item-text" contenteditable="true">Boston Public Schools</p>
          <p>&nbsp</p>
        </div>
        </div>
      </div>
      <div class="col-md-5">
        <div class="list-group">
        <div class="list-group-item">
          <span class="hover-content"><span class="glyphicon glyphicon-pencil"></span></span>  
          <h4 class="list-group-item-heading">School:</h4>
          <p class="list-group-item-text" contenteditable="true">Boston Latin High School</p>
          <p>&nbsp</p>
        </div>
        </div>
      </div>
    </div>
    <div class= "row"> <!-- row 3 -->
      <div class="col-md-5">
        <div class="list-group">
        <div class="list-group-item">
          <span class="hover-content"><span class="glyphicon glyphicon-pencil"></span></span> 
          <h4 class="list-group-item-heading">Teaching Grades:</h4>
          <p class = "list-group-item-text" contenteditable="true">Grades 9-12</p>
          <p>&nbsp</p>
        </div>
        </div>
      </div>
      <div class="col-md-5">
        <div class="list-group">
        <div class="list-group-item">
          <span class="hover-content"><span class="glyphicon glyphicon-pencil"></span></span> 
          <h4 class="list-group-item-heading">Subjects:</h4>
          <p class="list-group-item-text" contenteditable="true">English</p>
          <p>&nbsp</p>
        </div>
        </div>
      </div>
    </div> <!-- end of row 3 -->
  </div> <!-- end of column -->
  </div> <!-- end of top row -->
</div> <!-- end of container -->

    <div class="row">&nbsp</div>
    <div class="row">&nbsp</div>
    <div class="row">&nbsp</div>
    <div class="jumbotron"> 
      <div class="container">
        <h2>Need to find an after-school program?</h2>
        <p>We can help you find the perfect after-school program to fit your students' needs.</p>
      <button id="search_btn" type="button" class="btn btn-default btn-lg">
        Start New Search&nbsp<span class="glyphicon glyphicon-search"></span> 
      </button>       
    </div>
    </div>
    <div class="row">
      <div class="col-md-8">
        <h3>Recently Reviewed Programs </h3>
      </div>
    </div>
    <div class="row">&nbsp</div>
    <div class="row">&nbsp</div>
    <div class="row">
      <div class="col-md-1"></div>
      <div class="col-md-3">
            <a href="#" class="thumbnail">
              <img src="../program_logos/amphibious.png" alt="...">
            </a>
      </div>
      <div class="col-md-3">
            <a href="#" class="thumbnail">
              <img src="../program_logos/lti.png" alt="...">
            </a>
      </div>
      <div class="col-md-3">
            <a href="#" class="thumbnail">
              <img src="../program_logos/ymca.jpeg" alt="...">
            </a>
      </div>
      <!--<div class="col-md-3">
            <a href="#" class="thumbnail">
              <img src="../program_logos/cri.jpg" alt="...">
            </a>
            </div>
        -->
      
    </div><!-- row -->
  </body>
</html>

