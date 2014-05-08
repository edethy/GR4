<?php
	$con=mysql_connect("sql.mit.edu","edethy","Persi123") or die('Could not connect: ' . mysql_error());
	mysql_select_db("edethy+connected") or die('Could not select database');
	$program_names = "SELECT Program_Name FROM `Out-of-School Programs";
	$result = mysql_query($program_names);
	$programs_array = Array();
	while($row = mysql_fetch_array($result)) {
		array_push($programs_array, $row['Program_Name']);
	}
	mysql_close($con);
?>

<!DOCTYPE html>

<html>
<head>
  <link type="text/css" href="nav_bar.css" rel="stylesheet" />
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
  <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
  <script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
  <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
  <link type='text/css' rel='stylesheet' href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" />
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:300' rel='stylesheet' type='text/css'>
  <script>
		$(document).ready(function() {

			//var program_names = ['Amphibious Achievement', 'Leadership Training Institute', 'SailFuture']; // this needs to be  gotten from the database of programs
			<?php
		        $json_array = json_encode($programs_array);
		        echo "var program_names = ". $json_array . ";\n";
			?>

			$("#search_by_program").on("keypress", function(e) {
				if(e.which == 13){
					// should call search_program_name(name)
					window.location.href = "../program_page/program_notFound.php";
					return false;
		  		}
		  	});

			$("#search_button").on("click", function(e) {
				// should call search_program_name(name)
				window.location.href = "../program_page/program_notFound.php";
				return false;
			});

			$(".homehome").click(function(){
				window.location.href = "user_profile.php";
				return false;
			});
  
			$("#home_link").on("click", function(e) { 	
				$("#home_link").css({ color: "#99CC99" }); 
				$("#about_link").css({ color: "#CCCCCC" });
			}); 
  
			$("#about_link").on("click", function(e) { 
				$("#about_link").css({ color: "#99CC99" });   
				$("#home_link").css({ color: "#CCCCCC" });
			});

			$("#search_by_program").autocomplete({ 
				source: program_names,
				minLength: 2,
				select: function(event, ui) {
					var selected_word = ui.item.value;
					program_name_search(selected_word);
					console.log(selected_word);
				}
			});

			function program_name_search(name) {
			  	if ($.inArray(name, program_names) > -1) { // the name that is being searched is actually an existing program
			  		// load HTML page of the form ./program_page/ID
			  	}
			  	else {
			  		// load HTML page for program name not found
			  	}
			  	$("#search_by_program").autocomplete.close();
			}

		})
  </script>
</head>
<body>
  <nav class="navbar navbar-default" role="navigation">
    <div class="container-fluid">

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul id="link_list" class="nav navbar-nav inline" style= "padding-right: 90px; color: #CCCCCC;">
          <li><a style= "color: #CCCCCC;" id= "home_link" href="../user_profile/user_profile.php">Home</a></li>
          <li><a style= "color: #CCCCCC;"id= "about_link" href="#">About</a></li>
        </ul>
      
		<div class="page-header inline homehome">
    		<h1 id= "logo" style="margin-left:40%; border-bottom: none; font-size:60px;">connect<span style= "color: #99CC99;">ed</span></h1>
		</div>    
       
		  <form id="search_bar" class="navbar-form navbar-right inline" role="search">
			  <div class="form-group">
				<input type="text" class="form-control" id="search_by_program" placeholder="Know of a program by name?">
			  </div>
			  <button type="submit" id="search_button" class="btn btn-default dummy_page">
				<span class="glyphicon glyphicon-search"></span>
			  </button>
		  </form>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>
</body>   
</html>