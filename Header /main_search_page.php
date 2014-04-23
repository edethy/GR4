<!DOCTYPE html>
<html>
	<head>
		<!-- <link type="text/css" href="search_page.css" rel="stylesheet" /> -->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.0.3/angular.js"></script>
		<script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
		<link type='text/css' rel='stylesheet' href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" />
		<link type='text/css' rel='stylesheet' href="default.css" />
		<link type="text/css" href="search_page2.css" rel="stylesheet" />
		<link type="text/css" href="widget_menu.css" rel="stylesheet" />
		<script src="search_list_results.js"></script>
		<script src="search_page2.js"></script>
		<script src="search_list_results.js"></script>
		<script src="search_page2.js"></script>
		<script src= "tile.js"></script>
		<script src= "tile_board.js"></script>
		<script src= "widget_menu.js"></script>
		<script src= "search_text.js"></script>

		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Main Search Page</title>
    <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
    <link type="text/css" href="nav_bar.css" rel="stylesheet" />
	</head> 

	<body>

		<?php include("main_search.php") ?>
		<div class="container">
			<div id="search">
			<div class="row" id="search_row">
				<div class="col-md-3">
					<h2 style="color:blue">Search</h2>
				</div>
			</div>
			<div class="row">&nbsp</div>
			<div class="search_wrapper">
			<div class="row">	
			<script>
				var widgets= new widget_menu();
				var inside = widgets.insides(); 
				console.log(inside); 
			</script>
				<div class="row">
					
					<div class="col-md-3">
						<button id="search_button" type="button" class="sticky btn btn-default" data-container="body" data-toggle="popover" data-placement="right" data-content= '<div id="widget_menu"><div class= "btn-group btn-group-justified"><div class="btn-group parameter"><button type="btn-group parameter" class="btn btn-default" id="cost_tile"><img src="menu_pictures/cost.png"></button></div><div class="btn-group parameter"><button type="btn-group parameter" class="btn btn-default" id="location_tile"><img src="menu_pictures/location.png"></button></div><div class="btn-group parameter"><button type="btn-group parameter" class="btn btn-default" id="age_tile"><img src="menu_pictures/age.png"></button></div></div><div class= "btn-group btn-group-justified"><div class="btn-group parameter"><button type="btn-group parameter" class="btn btn-default" id="activity_tile"><img src="menu_pictures/activity.png"></button></div><div class="btn-group parameter"><button type="btn-group parameter" class="btn btn-default" id="gender_tile"><img src="menu_pictures/gender.png"></button></div><div class="btn-group parameter"><button type="btn-group parameter" class="btn btn-default" id="time_tile"><img src="menu_pictures/time.png"></button></div></div></div>'  trigger= "click" html=true><span id="search_txt">Update Search </span></button>
					</div>
					
					
										
				<div id="tile_board" class="col-md-9"></div>
				<script>
				$(document).ready(function() {					 	
					var board = new tileBoard(); 	
					board.show("tile_board");					
				})				 			
				</script>
				
				
				<div class="row">
					<div class="col-md-2">
						<button type="button" class="btn btn-primary" id="submit_search">Submit Search
						</button>
					</div>
				</div>
			</div>
			<div style="margin-left:2%; margin-right:2%;">
			<div class="row row-xs-height">
				<div class="col-md-3">
					<h2 id='favorites' style="color:blue">Favorites</h2>
				</div>
			</div>
			<div id="favorites_wrapper">
				<div class="row" id="no_favorites">
					<div class="col-md-1"></div>
					<div class="well well-lg fav-well">You have no favorites yet!</div>
				</div>
				<div class="row">
					<div class="col-md-1"></div>
					<div class="col-md-1 left_arrow_slot"></div>
					<div class="wrapper_fav1">
						<div class="col-md-2 fav1"></div>
					</div>
					<div class="col-md-1"></div>
					<div class="wrapper_fav2">
						<div class="col-md-2 fav2"></div>
					</div>
					<div class="col-md-1"></div>
					<div class="wrapper_fav3">
						<div class="col-md-2 fav3"></div>
					</div>
					<div class="col-md-1 right_arrow_slot"></div>
				</div>
			</div>
			</div>
			<div style="margin-left:2%; margin-right:2%;">
				<div class="row" id="search_header">
					<div class="col-md-6">
						<h2 style="color:blue">Search Results </h2>
					</div>
				</div>
				
				<div id="results_wrapper">
					<div class="row search_res">
						<div class='col-md-1'></div>
						<div class="well well-lg search-well">You have no search results </div>
					</div>
				</div>
			</div>
	</body>
</html>