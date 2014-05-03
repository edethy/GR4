<!DOCTYPE html>
<html>
	<head>
		<!-- <link type="text/css" href="search_page.css" rel="stylesheet" /> -->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.0.3/angular.js"></script>
		<script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
		<link type='text/css' rel='stylesheet' href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" />
		<link type="text/css" href="search_page2.css" rel="stylesheet" />
		<script src="search_list_results.js"></script>
		<script src="search_page2.js"></script>
		<script src="search_list_results.js"></script>
		<script src="search_page2.js"></script>
		<script src="search_params_modal.js"></script>
		<script src="submit_search_func.js"></script>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	    <title>Main Search Page</title>
	    <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
	    <link type="text/css" href="../nav_bar_header/nav_bar.css" rel="stylesheet" />
	    <link type='text.css' rel='stylesheet' href='search_params_modal.css' />
	    <link type="text/css" href="search_param_tile/search_tile.css" rel="stylesheet" />
	</head> 

	<body>

		<?php include("../nav_bar_header/nav_bar.php") ?>
		<!-- <div class="container"> -->
		<!-- MODAL FOR UPDATE THE SEARCH -->
		<div class="modal fade" id="udpate_search_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		  <div class="modal-dialog">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		        <h4 class="modal-title">Add Search Parameters to Update Your Search!</h4>
		      </div>
		      <div class="modal-body">
		        
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
		        <button type="button" class="btn btn-primary" data-dismiss="modal" id="submit_search_button2">Update Search</button>
		      </div>
		    </div><!-- /.modal-content -->
		  </div><!-- /.modal-dialog -->
		</div><!-- /.modal -->
		<!-- MODAL FOR UPDATE THE SEARCH END -->
		<div id="search">
			<div class="row" id="search_row">
				<div class="col-md-3">
					<h2 style="color:blue">Search</h2>
				</div>
			</div>
			<!-- <div id="search_param_tiles" class="row"> -->
			<ul id="search_param_tiles" class="img-list">
				<li>	
					<button id="update_search" type="button" class="btn btn-default enter_modal" data-toggle="modal" data-target="#udpate_search_modal" style="width:200px; height:120px; background-color:grey;">
						Update Search
					</button>
				</li>
			</ul>
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