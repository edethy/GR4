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
					
					<div class="col-md-3">
						<button type="button" class="sticky">New or update Search</button>
					</div>
					
					<div class="col-md-3">
						<div class="sticky">
							<div class="row">
								<div class="col-md-3"></div>
								<div class="col-md-6">
									<h3>Cost</h3>
								</div>
								<div class="row">
									<div class="col-md-3"></div>
									<div class="col-md-6">Free</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="sticky">
							<div class="row">
								<div class="col-md-3"></div>
								<div class="col-md-6">
									<h3>Location</h3>
								</div>
							</div>
							<div class="row">
								<div class="col-md-3"></div>
								<div class="col-md-6">02215</div>
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="sticky">
							<div class="row">
								<div class="col-md-3"></div>
								<div class="col-md-6">
									<h3>Cost</h3>
								</div>
								<div class="row">
									<div class="col-md-3"></div>
									<div class="col-md-6">Free</div>
								</div>
							</div>
						</div>
					</div>
				
				<div class="row">
					<div class="col-md-2">
						<button type="button" class="btn btn-primary" id="submit_search">Submit Search
						</button>
					</div>
				</div>
			</div>
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
					<div class="col-md-2 fav1"></div>
					<div class="col-md-1"></div>
					<div class="col-md-2 fav2"></div>
					<div class="col-md-1"></div>
					<div class="col-md-2 fav3"></div>
					<div class="col-md-1 right_arrow_slot"></div>
				</div>
			</div>
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
	</body>
</html>