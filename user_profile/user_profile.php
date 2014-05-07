<!DOCTYPE html>

<html>
  <head>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.0.3/angular.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <script src="search_page3.js"></script>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

    <title>Teacher Profile</title>
    <link type="text/css" href="user_prof.css" rel="stylesheet" />
    <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
    <link type="text/css" href="../nav_bar_header/nav_bar.css" rel="stylesheet" />
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <link type='text/css' rel='stylesheet' href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" />
    <link type='text/css' rel='stylesheet' href="default.css" />
    <link type='text/css' rel='stylesheet' href="modal.css" />
    <style>
    
		div.recent_tile > span.tile-content {
			color: #CCCCCC;
			background-color:#003366;
			height: 205px; 
			width: 255px;	
			left: 0;
			top: 0;
			right: 50px;
			opacity: 0;
			position:absolute;
			display: table;
			cursor: pointer;
			margin-left:15px;
			-webkit-transition: opacity 500ms;
			-moz-transition: opacity 500ms;
			-o-transition: opacity 500ms;
			transition: opacity 500ms;
			margin-left: 15px; 
	
		}
		
		div.thumbnail.recent_tile:hover span.tile-content{
			opacity:1;
			z-index: 1000;
			

		}
    
    </style>
  </head>

  <body style="margin-left:5%; margin-right:5%; margin-top:2%; margin-bottom:2%;">
    <?php include("../nav_bar_header/nav_bar.php") ?>
    <div id="container">
   
    <div class="row"> <!-- top row -->
      <div class="col-md-8">
        <h1 id="userheading">Welcome Back Ms. Agrawal!</h1>
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
			<button style="background-color:#99CC99;" id="search_btn" type="button" class="btn btn-default btn-lg" data-target="#udpate_search_modal">
				Start New Search&nbsp<span class="glyphicon glyphicon-search"></span> 
			</button>
				<!-------------- MODAL SEARCH DIV BEGIN ---------------------------->
			<div class="modal fade" id="udpate_search_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		  <div class="modal-dialog">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		        <h4 class="modal-title">Add Search Parameters to Update Your Search!</h4>
		      </div>
		      <div class="modal-body">

		<div class="search_params">

			<div class="block student_profile_dropdown">
				<div class="dropdown">
					<button type="button" class="dropdown-toggle btn btn-default dropdown_btn" data-toggle="dropdown" href="#">Student Profile<b class="caret"></b>
					</button>
					<ul class="dropdown-menu dropdown-menu-form" role="menu">
						<li>Race/Ethnicity</li>
							<li class="r">
							<div class="race">
								<label class="checkbox race_checkbox">
									<input type="checkbox" id="race_white">
								White
								</label>
							</div>

							<div class="race">
								<label class="checkbox race_checkbox" >
									<input type="checkbox" id="race_hispanic">
										Hispanic
								</label>
							</div>
							<div class="race">
								<label class="checkbox race_checkbox" >
									<input type="checkbox" id="race_black">
									Black
								</label>
							</div>
						</li>
						<li class="r">
							<div class="race">
								<label class="checkbox race_checkbox" >
									<input type="checkbox" id="race_asian">
									Asian
								</label>
							</div>
							<div class="race">
								<label class="checkbox race_checkbox" >
									<input type="checkbox" id="race_other">
									Other
								</label>
							</div>
						</li>
						</li>
						<li>GPA</li>
						<li class="gpa">
							<div class="slider slider-horizontal" style="width: 140px;">
								<div class="slider-track">
									<div class="slider-selection" style="left:0%; width:100%;"></div>

								</div>
							</div>
						</li>
						<li>Gender</li>
						<li class="g">
							<div class="gender">
								<label class="checkbox gender_checkbox">
									<input type="checkbox"  id="gender_female">
									Female
								</label>
							</div>
							<div class="gender">
								<label class="checkbox gender_checkbox" >
									<input type="checkbox" id="gender_male">
									Male
								</label>
							</div>
							<div class="gender">
								<label class="checkbox gender_checkbox" >
									<input type="checkbox" id="gender_other">
									Other
								</label>
							</div>
						</li>
						<li>Grade-Level</li>
						<li class="gl">
							<div class="grade_level">
								<label class="checkbox grade_level_checkbox">
									<input type="checkbox"  id="grade_k_2">
									K-2
								</label>
							</div>
							<div class="grade_level">
								<label class="checkbox grade_level_checkbox" >
									<input type="checkbox" id="grade_3_5">
									3-5
								</label>
							</div>
							<div class="grade_level">
								<label class="checkbox grade_level_checkbox">
									<input type="checkbox" id="grade_6_8">
									6-8
								</label>
							</div>
						</li>
						<li class="gl">
							<div class="grade_level">
								<label class="checkbox grade_level_checkbox">
									<input type="checkbox" id="grade_hs">
									9-12
								</label>
							</div>
						</li>
						<li>
							<button type="button" class="btn btn-default btn-small update_btn" href="#">Update</button>
						</li>	
					</ul>
				</div>
			</div>


			<div class="block program_profile_dropdown">
				<div class="dropdown">
					<button type="button" class="dropdown-toggle btn btn-default dropdown_btn" data-toggle="dropdown" href="#">Program Profile<b class="caret"></b>
					</button>
					<ul class="dropdown-menu dropdown-menu-form" role="menu">
						<li> 
								Cost
						</li>
						<li class="c">
							<div class="cost">
								<label class="checkbox cost_checkbox">
									<input type="checkbox" id="cost_free">
								Free
								</label>
							</div>
							<div class="cost">
								<label class="checkbox cost_checkbox">
									<input type="checkbox" id="cost_10">
								Up to $10/hour
								</label>
							</div>
						</li>
						<li class="c">
							
							<div class="cost">
								<label class="checkbox cost_checkbox">
									<input type="checkbox" id="cost_20">
								$10-$20/hour
								</label>
							</div>
							<div class="cost">
								<label class="checkbox cost_checkbox">
									<input type="checkbox" id="cost_35">
								$20-$35/hour 
								</label>
							</div>
						</li>
						<li class="c">
							
							<div class="cost">
								<label class="checkbox cost_checkbox">
									<input type="checkbox" id="cost_more">
								$35+/hour
								</label>
							</div>
						</li>	
						<li>Time of year </li>
						<li class="y">
							<div class="time_of_year">
								<label class="checkbox year_checkbox">
									<input type="checkbox" id="school_year">
									School Year
								</label>
							</div>
							<div class="time_of_year">
								<label class="checkbox year_checkbox">
									<input type="checkbox" id="summer">
									Summer
								</label>
							</div>
						</li>
						<li>Days of the week</li>
						<li class="w">
							<div class="day">
								<label class="checkbox day_checkbox">
									<input type = "checkbox" id="weekdays">
									Weekdays
								</label>
							</div>
							<div class="day">
								<label class="checkbox day_checkbox">
									<input type="checkbox" id="weekends">
									Weekends
								</label>
							</div>
						</li>
						<li>Location</li>
						<li class="w">
							<div class="set_location">
               		 			<input type='text' class='form-control' id='get_location' placeholder='zip code i.e. 02139'></input>
               		 		</div>
               		 	</li>
						<li>
							<button type="button" class="btn btn-default btn-small update_btn" href="#">Update</button>
						</li>
					</ul>
				</div>
			</div>

			<div class="block program_focus_dropdown">
				<div class="dropdown">
					<button type="button" class="dropdown-toggle btn btn-default dropdown_btn" data-toggle="dropdown" href="#">Program Focus<b class="caret"></b>
					</button>
					<ul class="dropdown-menu dropdown-menu-form" role="menu">						
						<li>
							<label class="checkbox focus_checkbox">
								<input type="checkbox" id="focus_academics">
								Academics
							</label>
						</li>

						<li>
							<label class="checkbox focus_checkbox">
								<input type="checkbox" id="focus_college_prep">
								College-Prep
							</label>
						</li>						
						<li>
							<label class="checkbox focus_checkbox">
								<input type="checkbox" id="focus_credit_recover">
								Credit-Recovery
							</label>
						</li>
						<li>
							<label class="checkbox focus_checkbox">
								<input type="checkbox" id="focus_leadership">
								Leadership
							</label>
						</li>
						<li>
							<label class="checkbox focus_checkbox">
								<input type="checkbox" id="focus_mentoring">
								Mentoring
							</label>
						</li>						
						<li>
							<label class="checkbox focus_checkbox">
								<input type="checkbox" id="focus_music">
								Music
							</label>
						</li>
						<li>
							<label class="checkbox focus_checkbox">
								<input type="checkbox" id="focus_sports">
								Sports
							</label>
						</li>
						<li>
							<label class="checkbox focus_checkbox">
								<input type="checkbox" id="focus_stem">
								Stem
							</label>
						</li>
						<li>
							<label class="checkbox focus_checkbox">
								<input type="checkbox" id="focus_testing">
								Testing
							</label>
						</li>
						<li>
							<button type="button" class="btn btn-default btn-small update_btn" href="#">Update</button>
						</li>	
					</ul>
				</div>
			</div>
			
	 <div id="results_wrapper">
		<div class="row search_res">
			<div class='col-md-1'></div>
				<div class="well well-sm search-well">You have no search results </div>
		</div>
	</div>
	</div>
		       
		      <div class="modal-footer">
		        <button type="button" class="btn btn-default" data-dismiss="modal">Exit</button>
		      </div>
		    </div><!-- /.modal-content -->
		  </div><!-- /.modal-dialog -->
		</div><!-- /.modal 
		<!-- MODAL FOR UPDATE THE SEARCH END -->







		</div>
    </div>
    <!-- BEGINNING OF FAVORITES -->
    <div style="margin-left:0%; margin-right:0%;">
			<div class="row row-xs-height">
				<div class="col-md-3">
					<h1 id='favorites'>Favorites</h1>
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
	<!-- END OF FAVORITES -->
    <div class="row">
      <div class="col-md-8">
        <h3>Recently Reviewed Programs </h3>
      </div>
    </div>
    <div class="row">&nbsp</div>
    <div class="row">&nbsp</div>
    <div class="row">
      <div class="col-md-1"></div>
      <div class="col-md-3 recent_tile">   		
		<div class="recent_tile thumbnail">
			<div class="row recent_tile_image">
			  <img class="recent_tile_image" src="../program_logos/amphibious.png" alt="...">
			</div>
			<div class="row recent_tile_name">
				<a href="#"><h4>Amphibious Achievement</h4></a>
			</div>
			<span class="tile-content">JUST TRYING TO MAKE THIS WORK</span>        
		</div>
      </div>
      <div class="col-md-3">   		
		<div class="recent_tile thumbnail">
			<div class="row recent_tile_image">
			  <img class="recent_tile_image" src="../program_logos/lti.png" alt="...">
			 </div>
			<div class="row recent_tile_name">
				<a href="#"><h4>LTI</h4></a>
			</div>
			<span class="tile-content">JUST TRYING TO MAKE THIS WORK</span>        
		</div>
      </div>
      <div class="col-md-3">     		
		<div class="recent_tile thumbnail">
			<div class="row recent_tile_image">
				  <img class="recent_tile_image" src="../program_logos/ymca.jpeg" alt="...">
			</div>
			<div class="row recent_tile_name">
				<a href="#"><h4>YMCA</h4></a>
			</div>
			<span class="tile-content">JUST TRYING TO MAKE THIS WORK</span> 
		</div> 
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

