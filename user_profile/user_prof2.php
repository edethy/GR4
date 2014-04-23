<!DOCTYPE html>

<html>

<script>
/*$(document).ready(function(){
  $(".thumbnail").click(function(){
    window.location.href = "program_page.php";
    return false;
  })
})*/
</script>
  <head>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.0.3/angular.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

    <title>Teacher Profile</title>
    <link type="text/css" href="user_prof.css" rel="stylesheet" />
    <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
    <link type="text/css" href="nav_bar.css" rel="stylesheet" />
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <link type='text/css' rel='stylesheet' href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" />
    <link type='text/css' rel='stylesheet' href="default.css" />
  </head>

  <body>
    <?php include("main_search.php") ?>
    <div id="container" style="margin-left:5%; margin-right:5%; margin-top:2%; margin-bottom:2%;">
    <div class="row">
      <div class="col-md-8">
        <h2 id="userheading">Welcome Back Shilpa!</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-md-8">
        <h3>Your Profile </h3>
      </div>
    </div>

    <div class="row">&nbsp</div>

    <div class="row">
      <div class="col-md-1"></div>
      <div class="col-md-2">
        <img src='teacher_pics/shilpa.jpg' id='teacher_pic'></img>
      </div>
      <div class="col-md-3">
        <div class="list-group">
          <a href="#" class="list-group-item">
            <h4 class="list-group-item-heading">School District:</h4>
            <p class="list-group-item-text">Boston Public Schools</p>
          </a>
        </div>
      </div>
      <div class="col-md-3">
        <div class="list-group">
          <a href="#" class="list-group-item">
            <h4 class="list-group-item-heading">School:</h4>
            <p class="list-group-item-text">Boston English High School</p>
          </a>
        </div>
      </div>
      <div class="col-md-3">
        <div class="list-group">
          <a href="#" class="list-group-item">
            <h4 class="list-group-item-heading">Teaching Grades:</h4>
            <p class = "list-group-item-text">Grades 9-12</p>
          </a>
        </div>
      </div>
    </div>

    <div class="row">&nbsp</div>
    <div class="row">&nbsp</div>
    <div class="row">&nbsp</div>
    <div class="row">
      <div class="col-md-8">
        <h3>Recently Reviewed Programs </h3>
      </div>
    </div>
    <div class="row">&nbsp</div>
    <div class="row">&nbsp</div>
    <div class="row">
      <div class="col-md-1"></div>
      <div class="col-md-2">
            <a href="program_page.php" class="thumbnail">
              <img src="program_logos/amphibious.png" alt="...">
            </a>
      </div>
      <div class="col-md-3">
            <a href="program_page.php" class="thumbnail">
              <img src="program_logos/lti.png" alt="...">
            </a>
      </div>
      <div class="col-md-3">
            <a href="program_page.php" class="thumbnail">
              <img src="program_logos/ymca.jpeg" alt="...">
            </a>
      </div>
      <div class="col-md-3">
            <a href="program_page.php" class="thumbnail">
              <img src="program_logos/cri.jpg" alt="...">
            </a>
      </div>
    </div>
  </body>
</html>

