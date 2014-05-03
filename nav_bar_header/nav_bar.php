<!DOCTYPE html>

<html>
<head>
  <link type="text/css" href="nav_bar.css" rel="stylesheet" />
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
  <link type='text/css' rel='stylesheet' href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" />
</head>
<script>
$(document).ready(function() {
  $("#search_by_program").on("keypress", function(e) {
   if(e.which == 13){
      window.location.href = "dummy_page.php";
       return false;
  }
  })
  $(".dummy_page").on("click", function(e) {
    window.location.href = 'dummy_page.php';
    return false;
  })
  $(".homehome").click(function(){
    window.location.href = 'user_prof2.php';
    return false;
  })
  
  $("#home_link").on("click", function(e) {   
    console.log("HOME"); 
    $("#home_link").css({ color: "blue" }); 
    $("#about_link").css({ color: "#777" });
    $("#home_link").css({ color: "#777" });   
  }); 
  
  $("#about_link").on("click", function(e) { 
    console.log("ABOUT");   
    $("#about_link").css({ color: "blue" });   
    $("#home_link").css({ color: "#777" });
    $("#program_link").css({ color: "#777" });  
  });
  
  $("#program_link").on("click", function(e) { 
    console.log("PROGRAM");   
    $("#program_link").css({ color: "blue" });
    $("#about_link").css({ color: "#777" });
    $("#home_link").css({ color: "#777" });   
  });
})
</script>
<body>
  <nav class="navbar navbar-default" role="navigation">
    <div class="container-fluid">

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul id="link_list" class="nav navbar-nav inline" style= "padding-right: 90px;">
          <li><a id= "home_link" href="../user_profile/user_prof2.php">Home</a></li>
          <li><a id= "about_link" href="#">About</a></li>
          <li><a id="program_link" href="../main_search_page/main_search_page.php">Find a Program</a></li>
        </ul>
      
      <div id= "logo" class="page-header inline homehome">
        <h1 style="font-family: 'Lobster', cursive; font-size: 60pt;">connect<span style= "color: blue;">ED</span></h1>
    </div>    
       
      <form id="search_bar" class="navbar-form navbar-right inline" role="search">
          <div class="form-group">
            <input type="text" class="form-control" id="search_by_program" placeholder="Know of a program by name?">
          </div>
          <button type="submit" class="btn btn-default dummy_page">
            <span class="glyphicon glyphicon-search"></span>
          </button>
      </form>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>
</body>
   
</html>