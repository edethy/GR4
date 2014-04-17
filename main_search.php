<!DOCTYPE html>

<html>
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
})
</script>
<nav class="navbar navbar-default" role="navigation">
  <div class="container-fluid">

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav inline" style= "padding-right: 90px;">
        <li><a href="user_prof2.php">Home</a></li>
        <li><a href="#">About</a></li>
		<li><a href="main_search_page.php">Find a Program</a></li>
      </ul>
    
    <div id= "logo" class="page-header inline homehome">
  		<h1 style="font-family: 'Lobster', cursive; font-size: 60pt;">connect<span style= "color: blue;">ED</span></h1>
	</div>    
     
    <form class="navbar-form navbar-right inline" role="search">
        <div class="form-group">
          <input type="text" class="form-control" id="search_by_program" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default dummy_page">
        	<span class="glyphicon glyphicon-search"></span>
        </button>
    </form>

    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
   
</html>