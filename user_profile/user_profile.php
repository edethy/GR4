<?php
  $con=mysql_connect("sql.mit.edu","edethy","Persi123") or die('Could not connect: ' . mysql_error());
  mysql_select_db("edethy+connected") or die('Could not select database');
	//race_white
	$race_white = "SELECT Program_Name FROM `Out-of-School Programs` WHERE race_white=1";
	$result = mysql_query($race_white);
	$race_white_array = Array();
	while($row = mysql_fetch_array($result)) {
	 	array_push($race_white_array, $row['Program_Name']);
	}
  	// race_black
	$race_black = "SELECT Program_Name FROM `Out-of-School Programs` WHERE race_black=1";
	$result = mysql_query($race_black);
	$race_black_array = Array();
	while($row = mysql_fetch_array($result)) {
	 	array_push($race_black_array, $row['Program_Name']);
	}
	// race_hispanic
	$race_hispanic = "SELECT Program_Name FROM `Out-of-School Programs` WHERE race_hispanic=1";
	$result = mysql_query($race_hispanic);
	$race_hispanic_array = Array();
	while($row = mysql_fetch_array($result)) {
	 	array_push($race_hispanic_array, $row['Program_Name']);
	}
	// race_asian
	$race_asian = "SELECT Program_Name FROM `Out-of-School Programs` WHERE race_asian=1";
	$result = mysql_query($race_asian);
	$race_asian_array = Array();
	while($row = mysql_fetch_array($result)) {
	 	array_push($race_asian_array, $row['Program_Name']);
	}
	// race_other
	$race_other = "SELECT Program_Name FROM `Out-of-School Programs` WHERE race_other=1";
	$result = mysql_query($race_other);
	$race_other_array = Array();
	while($row = mysql_fetch_array($result)) {
	 	array_push($race_other_array, $row['Program_Name']);
	}
	// gpa_1 : all programs between 0.0-1.0
	$gpa_1 = "SELECT Program_Name FROM `Out-of-School Programs` WHERE GPA_1=1";
	$result = mysql_query($gpa_1);
	$gpa_1_array = Array();
	while($row = mysql_fetch_array($result)) {
	 	array_push($gpa_1_array, $row['Program_Name']);
	}
	// gpa_2 : all programs between 1.0-2.0
	$gpa_2 = "SELECT Program_Name FROM `Out-of-School Programs` WHERE GPA_2=1";
	$result = mysql_query($gpa_2);
	$gpa_2_array = Array();
	while($row = mysql_fetch_array($result)) {
	 	array_push($gpa_2_array, $row['Program_Name']);
	}
	// gpa_3 : all programs between 2.0-3.0
	$gpa_3 = "SELECT Program_Name FROM `Out-of-School Programs` WHERE GPA_3=1";
	$result = mysql_query($gpa_3);
	$gpa_3_array = Array();
	while($row = mysql_fetch_array($result)) {
	 	array_push($gpa_3_array, $row['Program_Name']);
	}
	// gpa_4 : all programs between 3.0-4.0
	$gpa_4 = "SELECT Program_Name FROM `Out-of-School Programs` WHERE GPA_4=1";
	$result = mysql_query($gpa_4);
	$gpa_4_array = Array();
	while($row = mysql_fetch_array($result)) {
	 	array_push($gpa_4_array, $row['Program_Name']);
	}
	// gender_f : females 
	$gender_f = "SELECT Program_Name FROM `Out-of-School Programs` WHERE gender_f=1";
	$result = mysql_query($gender_f);
	$gender_f_array = Array();
	while($row = mysql_fetch_array($result)) {
	 	array_push($gender_f_array, $row['Program_Name']);
	}
	// gender_m : males
	$gender_m = "SELECT Program_Name FROM `Out-of-School Programs` WHERE gender_m=1";
	$result = mysql_query($gender_m);
	$gender_m_array = Array();
	while($row = mysql_fetch_array($result)) {
	 	array_push($gender_m_array, $row['Program_Name']);
	}
	// gender_o : other
	$gender_o = "SELECT Program_Name FROM `Out-of-School Programs` WHERE gender_o=1";
	$result = mysql_query($gender_m);
	$gender_o_array = Array();
	while($row = mysql_fetch_array($result)) {
	 	array_push($gender_o_array, $row['Program_Name']);
	}
	// grade_k2 
	$grade_k2 = "SELECT Program_Name FROM `Out-of-School Programs` WHERE grade_k2=1";
	$result = mysql_query($grade_k2);
	$grade_k2_array = Array();
	while($row = mysql_fetch_array($result)) {
	 	array_push($grade_k2_array, $row['Program_Name']);
	}
	// grade_345
	$grade_35 = "SELECT Program_Name FROM `Out-of-School Programs` WHERE grade_345=1";
	$result = mysql_query($grade_35);
	$grade_35_array = Array();
	while($row = mysql_fetch_array($result)) {
	 	array_push($grade_35_array, $row['Program_Name']);
	}
	// grade_68
	$grade_68 = "SELECT Program_Name FROM `Out-of-School Programs` WHERE grade_68=1";
	$result = mysql_query($grade_68);
	$grade_68_array = Array();
	while($row = mysql_fetch_array($result)) {
	 	array_push($grade_68_array, $row['Program_Name']);
	}
	// grade_912
	$grade_912 = "SELECT Program_Name FROM `Out-of-School Programs` WHERE grade_912=1";
	$result = mysql_query($grade_912);
	$grade_912_array = Array();
	while($row = mysql_fetch_array($result)) {
	 	array_push($grade_912_array, $row['Program_Name']);
	}
	// cost_free
	$cost_free = "SELECT Program_Name FROM `Out-of-School Programs` WHERE cost_free=1";
	$result = mysql_query($cost_free);
	$cost_free_array = Array();
	while($row = mysql_fetch_array($result)) {
	 	array_push($cost_free_array, $row['Program_Name']);
	}
	// cost_10
	$cost_10 = "SELECT Program_Name FROM `Out-of-School Programs` WHERE cost_10=1";
	$result = mysql_query($cost_10);
	$cost_10_array = Array();
	while($row = mysql_fetch_array($result)) {
	 	array_push($cost_10_array, $row['Program_Name']);
	}
	// cost_20
	$cost_20 = "SELECT Program_Name FROM `Out-of-School Programs` WHERE cost_20=1";
	$result = mysql_query($cost_20);
	$cost_20_array = Array();
	while($row = mysql_fetch_array($result)) {
	 	array_push($cost_20_array, $row['Program_Name']);
	}
	// cost_35
	$cost_35 = "SELECT Program_Name FROM `Out-of-School Programs` WHERE cost_35=1";
	$result = mysql_query($cost_35);
	$cost_35_array = Array();
	while($row = mysql_fetch_array($result)) {
	 	array_push($cost_35_array, $row['Program_Name']);
	}
	// cost_more
	$cost_more = "SELECT Program_Name FROM `Out-of-School Programs` WHERE cost_more=1";
	$result = mysql_query($cost_more);
	$cost_more_array = Array();
	while($row = mysql_fetch_array($result)) {
	 	array_push($cost_more_array, $row['Program_Name']);
	}
	// time_summer
	$time_summer = "SELECT Program_Name FROM `Out-of-School Programs` WHERE time_summer=1";
	$result = mysql_query($cost_more);
	$time_summer_array = Array();
	while($row = mysql_fetch_array($result)) {
	 	array_push($time_summer_array, $row['Program_Name']);
	}
	// time_schoolyear
	$time_schoolyear = "SELECT Program_Name FROM `Out-of-School Programs` WHERE time_summer=1";
	$result = mysql_query($time_schoolyear);
	$time_schoolyear_array = Array();
	while($row = mysql_fetch_array($result)) {
	 	array_push($time_schoolyear_array, $row['Program_Name']);
	}
	// time_weekdays
	$time_weekdays = "SELECT Program_Name FROM `Out-of-School Programs` WHERE time_summer=1";
	$result = mysql_query($time_weekdays);
	$time_schoolyear_array = Array();
	while($row = mysql_fetch_array($result)) {
	 	array_push($time_schoolyear_array, $row['Program_Name']);
	}
	// time_weekends
	$time_weekends = "SELECT Program_Name FROM `Out-of-School Programs` WHERE time_summer=1";
	$result = mysql_query($time_weekends);
	$time_weekends_array = Array();
	while($row = mysql_fetch_array($result)) {
	 	array_push($time_weekends_array, $row['Program_Name']);
	}
	// focus_stem
	$focus_stem = "SELECT Program_Name FROM `Out-of-School Programs` WHERE focus_stem=1";
	$result = mysql_query($focus_stem);
	$focus_stem_array = Array();
	while($row = mysql_fetch_array($result)) {
	 	array_push($focus_stem_array, $row['Program_Name']);
	}
	// focus_testing
	$focus_testing = "SELECT Program_Name FROM `Out-of-School Programs` WHERE focus_testing=1";
	$result = mysql_query($focus_stem);
	$focus_testing_array = Array();
	while($row = mysql_fetch_array($result)) {
	 	array_push($focus_testing_array, $row['Program_Name']);
	}
	// focus_sports
	$focus_sports = "SELECT Program_Name FROM `Out-of-School Programs` WHERE focus_sports=1";
	$result = mysql_query($focus_sports);
	$focus_sports_array = Array();
	while($row = mysql_fetch_array($result)) {
	 	array_push($focus_sports_array, $row['Program_Name']);
	}
	// focus_mentoring
	$focus_mentoring = "SELECT Program_Name FROM `Out-of-School Programs` WHERE focus_mentoring=1";
	$result = mysql_query($focus_mentoring);
	$focus_mentoring_array = Array();
	while($row = mysql_fetch_array($result)) {
	 	array_push($focus_mentoring_array, $row['Program_Name']);
	}
	// focus_music
	$focus_music = "SELECT Program_Name FROM `Out-of-School Programs` WHERE focus_music=1";
	$result = mysql_query($focus_music);
	$focus_music_array = Array();
	while($row = mysql_fetch_array($result)) {
	 	array_push($focus_music_array, $row['Program_Name']);
	}
	// focus_academics
	$focus_academics = "SELECT Program_Name FROM `Out-of-School Programs` WHERE focus_academics=1";
	$result = mysql_query($focus_academics);
	$focus_academics_array = Array();
	while($row = mysql_fetch_array($result)) {
	 	array_push($focus_academics_array, $row['Program_Name']);
	}
	// focus_leadership
	$focus_leadership = "SELECT Program_Name FROM `Out-of-School Programs` WHERE focus_leadership=1";
	$result = mysql_query($focus_leadership);
	$focus_leadership_array = Array();
	while($row = mysql_fetch_array($result)) {
	 	array_push($focus_leadership_array, $row['Program_Name']);
	}
	// focus_college
	$focus_college = "SELECT Program_Name FROM `Out-of-School Programs` WHERE focus_college=1";
	$result = mysql_query($focus_college);
	$focus_college_array = Array();
	while($row = mysql_fetch_array($result)) {
	 	array_push($focus_college_array, $row['Program_Name']);
	}
	// focus_credit
	$focus_credit = "SELECT Program_Name FROM `Out-of-School Programs` WHERE focus_credit=1";
	$result = mysql_query($focus_credit);
	$focus_credit_array = Array();
	while($row = mysql_fetch_array($result)) {
	 	array_push($focus_credit_array, $row['Program_Name']);
	}
	mysql_close($con);
?>
<!DOCTYPE html>

<html>
  <head>	
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <script src="user_prof.js"></script>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

    <title>Teacher Profile</title>
    <link type="text/css" href="user_prof.css" rel="stylesheet" />
    <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
    <link type="text/css" href="../nav_bar_header/nav_bar.css" rel="stylesheet" />
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <link type='text/css' rel='stylesheet' href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" />
    <!-- <link type='text/css' rel='stylesheet' href="default.css" /> -->
   	<link type="text/css" href="../main_search_page/modal_search.css" rel="stylesheet" />
   	<script src="searchResults.js"></script>
    <style>
		div.recent_tile > span.tile-content {
			color: #003366;
			background-color:#99CC99;
			height: 205px; 
			width: 100%;	
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
			text-align: center; 
			padding-top: 20px; 
	
		}		
		div.thumbnail.recent_tile:hover span.tile-content{
			opacity:1;
			z-index: 1000;
		}    
    </style>
		<script>
			// given following lists (extracted through php code from the database):
				// race_white : all programs for white students
				// race_black: all programs for black students
				// race_hispanic
				// race_asian
				// race_other
				// gpa_1 : all programs between 0.0-1.0
				// gpa_2 : all programs between 1.0-2.0
				// gpa_3 : all programs between 2.0-3.0
				// gpa_4 : all programs between 3.0-4.0
				// gender_f : females 
				// gender_m : males
				// gender_o : other
				// grade_k2 
				// grade_35
				// grade_68
				// grade_912
				// cost_free
				// cost_10
				// cost_20
				// cost_35
				// cost_more
				// time_summer
				// time_schoolyear
				// time_weekdays
				// time_weekends
				// focus_stem
				// focus_testing
				// focus_sports
				// focus_mentoring
				// focus_music
				// focus_academics
				// focus_leadership
				// focus_college
				// focus_credit

			$(document).ready(function() {
				console.log("reached js");
				var parameters_dict = {
					"student_profile" : {
						"race": [],
						"gpa" : [],
						"gender" : [],
						"grade_level" :[]
					},
					"program_profile" : {
						"cost" : [],
						"time" : [],
						"location" : {
							"zip_code" : "",
						}
					},
					"program_focus" : []
				}

				<?php
					//race_white
			        $json_array = json_encode($race_white_array);
			        echo "var race_white = ". $json_array . ";\n";
			        //race_black
			        $json_array = json_encode($race_black_array);
			        echo "var race_black = ". $json_array . ";\n";
			        //race_hispanic
			        $json_array = json_encode($race_hispanic_array);
			        echo "var race_hispanic = ". $json_array . ";\n";
			        //race_asian
			        $json_array = json_encode($race_asian_array);
			        echo "var race_asian = ". $json_array . ";\n";
			        //race_other
			        $json_array = json_encode($race_other_array);
			        echo "var race_other = ". $json_array . ";\n";
			        //gpa_1
			        $json_array = json_encode($gpa_1_array);
			        echo "var gpa_1 = ". $json_array . ";\n";
			        //gpa_2
			        $json_array = json_encode($gpa_2_array);
			        echo "var gpa_2 = ". $json_array . ";\n";
			        //gpa_3
			        $json_array = json_encode($gpa_3_array);
			        echo "var gpa_3 = ". $json_array . ";\n";
			        //gpa_4
			        $json_array = json_encode($gpa_4_array);
			        echo "var gpa_4 = ". $json_array . ";\n";
			        //gender_f
			        $json_array = json_encode($gender_f_array);
			        echo "var gender_f = ". $json_array . ";\n";
			        //gender_m
			        $json_array = json_encode($gender_m_array);
			        echo "var gender_m = ". $json_array . ";\n";
			        //gpa_o
			        $json_array = json_encode($gender_o_array);
			        echo "var gender_o = ". $json_array . ";\n";
			        // var grade_k2
			        $json_array = json_encode($grade_k2_array);
			        echo "var grade_k2 = ". $json_array . ";\n";
			        // var grade_35
			        $json_array = json_encode($grade_35_array);
			        echo "var grade_35 = ". $json_array . ";\n";
			       	// var grade_68
			       	$json_array = json_encode($grade_68_array);
			        echo "var grade_68 = ". $json_array . ";\n";
			        // var grade_912
			        $json_array = json_encode($grade_912_array);
			        echo "var grade_912 = ". $json_array . ";\n";
			        // var cost_free
			        $json_array = json_encode($cost_free_array);
			        echo "var cost_free = ". $json_array . ";\n";
					// var cost_10
					$json_array = json_encode($cost_10_array);
			        echo "var cost_10 = ". $json_array . ";\n";
					// var cost_20
					$json_array = json_encode($cost_20_array);
			        echo "var cost_20 = ". $json_array . ";\n";
					// var cost_35
					$json_array = json_encode($cost_35_array);
			        echo "var cost_35 = ". $json_array . ";\n";
					// var cost_more
					$json_array = json_encode($cost_more_array);
			        echo "var cost_more = ". $json_array . ";\n";
			        // var time_schoolyear
					$json_array = json_encode($time_schoolyear_array);
			        echo "var time_schoolyear = ". $json_array . ";\n";
			        // var time_summer
					$json_array = json_encode($time_summer_array);
			        echo "var time_summer = ". $json_array . ";\n";
			        // var time_weekdays
					$json_array = json_encode($time_weekdays_array);
			        echo "var time_weekdays = ". $json_array . ";\n";
			        // var time_weekends
					$json_array = json_encode($time_weekends_array);
			        echo "var time_weekends = ". $json_array . ";\n";
			        // var focus_stem
			        $json_array = json_encode($focus_stem_array);
			        echo "var focus_stem = ". $json_array . ";\n";
			        // var focus_credit
					$json_array = json_encode($focus_credit_array);
			        echo "var focus_credit = ". $json_array . ";\n";
					// var focus_music
					$json_array = json_encode($focus_music_array);
			        echo "var focus_music = ". $json_array . ";\n";
					// var focus_academics
					$json_array = json_encode($focus_academics_array);
			        echo "var focus_academics = ". $json_array . ";\n";
					// var focus_college
					$json_array = json_encode($focus_college_array);
			        echo "var focus_college = ". $json_array . ";\n";
					// var focus_leadership
					$json_array = json_encode($focus_leadership_array);
			        echo "var focus_leadership = ". $json_array . ";\n";
					// var focus_sports
					$json_array = json_encode($focus_sports_array);
			        echo "var focus_sports = ". $json_array . ";\n";
					// var focus_testing
					$json_array = json_encode($focus_testing_array);
			        echo "var focus_testing = ". $json_array . ";\n";
			        // var focus_mentoring
					$json_array = json_encode($focus_mentoring_array);
			        echo "var focus_mentoring = ". $json_array . ";\n";
      			?>

      			console.log("race_white:", race_white);
      			console.log("race_black:", race_white);
      			console.log("race_hispanic:", race_white);
      			console.log("race_asian:", race_white);
      			console.log("race_other:", race_white);
      			console.log("gpa_1:", gpa_1);
      			console.log("gpa_2:", gpa_2);
      			console.log("gpa_3:", gpa_3);
      			console.log("gpa_4:", gpa_4);
      			console.log("gender_f:", gender_f);
      			console.log("gender_m:", gender_m);
      			console.log("gender_o:", gender_o);
				console.log("grade_k2:", grade_k2);
				console.log("grade_35:", grade_35);
				console.log("grade_68:", grade_68);
				console.log("grade_912:", grade_912);
      			console.log("cost_free:", cost_free);
      			console.log("cost_10:", cost_10);
      			console.log("cost_20:", cost_20);
      			console.log("cost_35:", cost_35);
      			console.log("cost_more:", cost_more);
      			console.log("time_schoolyear:", time_schoolyear);
      			console.log("time_summer:", time_summer);
      			console.log("time_weekends:", time_weekends);
      			console.log("time_weekdays:", time_weekdays);
      			console.log("focus_mentoring:", focus_mentoring);
      			console.log("focus_stem:", focus_stem);
      			console.log("focus_credit:", focus_credit);
      			console.log("focus_music:", focus_music);
      			console.log("focus_academics:", focus_academics);
      			console.log("focus_leadership:", focus_leadership);
				console.log("focus_sports:", focus_sports);
      			console.log("focus_testing:", focus_testing);
      			
				var selection_dict = {
					"focus_credit_recover":focus_credit,
					"focus_music":focus_music,
					"focus_academics":focus_academics,
					"focus_college_prep":focus_college,
					"focus_leadership":focus_leadership,
					"focus_mentoring":focus_mentoring,
					"focus_sports":focus_sports,
					"focus_testing":focus_testing,
					"focus_stem":focus_stem,
					"cost_free":cost_free,
					"cost_10":cost_10,
					"cost_20":cost_20,
					"cost_35":cost_35,
					"cost_more":cost_more,
					"school_year":time_schoolyear,
					"summer":time_summer,
					"weekends":time_weekends,
					"weekdays":time_weekdays,
					"gender_female":gender_f,
					"gender_male":gender_m,
					"gender_other":gender_o,
					"gpa_1":gpa_1,
					"gpa_2":gpa_2,
					"gpa_3":gpa_3,
					"gpa_4":gpa_4,
					"grade_3_5":grade_35,
					"grade_k_2":grade_k2,
					"grade_6_8":grade_68,
					"grade_hs":grade_912,
					"race_asian":race_asian,
					"race_other":race_other,
					"race_hispanic":race_hispanic,
					"race_black":race_black,
					"race_white":race_white
				}

				function setModalSize() {
					/** set height of modal **/
					var size = {width: $(window).width() , height: $(window).height() }
				    var offset = 50;
				    var offsetBody = 200;
				    $('#udpate_search_modal').css('height', size.height - offset );
				    $('.search_params').css('height', size.height - (offset + offsetBody));
				    $('#udpate_search_modal').css('top', 0);
				    /** set height of dropdowns **/
				}

				setModalSize();

				//favorites and toggles the heart button
				$('button.btnAddToFavorites.btn.btn-default.glyphicon.glyphicon-heart').on('click', function(e) {
					console.log("adding heart listener");
					var thisBtn= e.target; 
					var title= $(thisBtn).attr('id');
					
					//have to be able to get title
					if (favorites_dict[title]==false){
						$(thisBtn).css("background-color","red"); 
						$(thisBtn).css("color","white");
						favorites_dict[title]= true;  
						console.log(favorites_dict); 
					} else {
						$(thisBtn).css("background-color","white"); 
						$(thisBtn).css("color","black");
						favorites_dict[title]=false; 
					}
					 
				});
				$("#amphibious_review").on("click", function(e) {
					// should call search_program_name(name)
					window.location.href = '../program_page/program_page.php?program=amphibious_achievement';
					return false;
				});
				$("#lti_review").on("click", function(e) {
					// should call search_program_name(name)
					window.location.href = '../program_page/program_page.php?program=lti';
					return false;
				});
				$("#ymca_review").on("click", function(e) {
					// should call search_program_name(name)
					window.location.href = '../program_page/program_page.php?program=ymca';
					return false;
				});
				$('.dropdown-menu').on('click', function(e) {
					if($(this).hasClass('dropdown-menu-form')) {
						e.stopPropagation();
					}
				})
				$('.search_btn').on('click', function(e) {
					$('.dropdown.open .dropdown-toggle').dropdown('toggle');
					console.log("click");
				})
				$('.update_btn').on('click', function(e) {
					$('.dropdown.open .dropdown-toggle').dropdown('toggle');
					console.log(parameters_dict);
					console.log("running makeSearchResultsList():");
					console.log(makeSearchResultsList());
					var results = makeSearchResultsList();
					if (results.length != 0) {
						$('#no_results_container').hide();
						$('#results_container').html("");
						$('#results_container').append(results_html(results));
					}
					else {
						$('#results_container').html("");
						$('#no_results_container').show();
					}
					
					console.log("Finished updating the search results");
				})
				$(".race_checkbox").on("change", "input[type=checkbox]",function(e){
						//if checked is false, remove from list
						//if checked is true, add to list
						var id = e.target.id;
						var is_checked = this.checked;
						if (is_checked) {
							parameters_dict["student_profile"]["race"].push(id);
						} else {
							var change_array = parameters_dict["student_profile"]["race"];
							var index = change_array.indexOf(id);
							change_array.splice(index, 1);
						}
						console.log(parameters_dict["student_profile"]["race"]);
					})
				$(".gender_checkbox").on("change", "input[type=checkbox]", function(e){
						var id = e.target.id;
						var is_checked = this.checked;
						if (is_checked) {
							parameters_dict["student_profile"]["gender"].push(id);
						} else {
							var change_array = parameters_dict["student_profile"]["gender"];
							var index = change_array.indexOf(id);
							change_array.splice(index, 1);
						}
						console.log(parameters_dict["student_profile"]["gender"]);
				})
				$(".grade_level_checkbox").on("change", "input[type=checkbox]", function(e) {
						var id = e.target.id;
						var is_checked = this.checked;
						if (is_checked) {
							parameters_dict["student_profile"]["grade_level"].push(id);
						} else {
							var change_array = parameters_dict["student_profile"]["grade_level"];
							var index = change_array.indexOf(id);
							change_array.splice(index, 1);
						}
						console.log(parameters_dict["student_profile"]["grade_level"]);
				})
				$(".gpa_checkbox").on("change", "input[type=checkbox]", function(e){
					var id = e.target.id;
						var is_checked = this.checked;
						if (is_checked) {
							parameters_dict["student_profile"]["gpa"].push(id);
						} else {
							var change_array = parameters_dict["student_profile"]["gpa"];
							var index = change_array.indexOf(id);
							change_array.splice(index, 1);
						}
						console.log(parameters_dict["student_profile"]["gpa3"]);
				})
				$(".focus_checkbox").on("change", "input[type=checkbox]", function(e){
					var id = e.target.id;
						var is_checked = this.checked;
						if (is_checked) {
							parameters_dict["program_focus"].push(id);
						} else {
							var change_array = parameters_dict["program_focus"];
							var index = change_array.indexOf(id);
							change_array.splice(index, 1);
						}
						console.log(parameters_dict["program_focus"]);
				})
				$(".cost_checkbox").on("change", "input[type=checkbox]", function(e){
					var id = e.target.id;
						var is_checked = this.checked;
						if (is_checked) {
							parameters_dict["program_profile"]["cost"].push(id);
						} else {
							var change_array = parameters_dict["program_profile"]["cost"];
							var index = change_array.indexOf(id);
							change_array.splice(index, 1);
						}
						console.log(parameters_dict["program_profile"]["cost"]);
				})
				$(".year_checkbox").on("change", "input[type=checkbox]", function(e){
					var id = e.target.id;
						var is_checked = this.checked;
						if (is_checked) {
							parameters_dict["program_profile"]["time"].push(id);
						} else {
							var change_array = parameters_dict["program_profile"]["time"];
							var index = change_array.indexOf(id);
							change_array.splice(index, 1);
						}
						console.log(parameters_dict["program_profile"]["time"]);
				})	
				$(".day_checkbox").on("change", "input[type=checkbox]", function(e){
					var id = e.target.id;
						var is_checked = this.checked;
						if (is_checked) {
							parameters_dict["program_profile"]["time"].push(id);
						} else {
							var change_array = parameters_dict["program_profile"]["time"];
							var index = change_array.indexOf(id);
							change_array.splice(index, 1);
						}
						console.log(parameters_dict["program_profile"]["time"]);
				})

				// FUNCTION TO GENERATE LIST OF PROGRAMS PASSED INTO SEARCH RESULTS
				// RETURNS a list of all program names ****/
				function makeSearchResultsList() {
					// create a set of all programs with ethnicities checked
					var ethnicity_set = {};
					if (parameters_dict["student_profile"]["race"].length == 0) {
						ethnicity_set = null;
					}
					for (var i=0; i < parameters_dict["student_profile"]["race"].length; i++) {
						var list_to_add = selection_dict[parameters_dict["student_profile"]["race"][i]];
						for (var j=0; j<list_to_add.length; j++) {
							ethnicity_set[list_to_add[j]] = true;
						}
					}
					var gender_set = {};
					if (parameters_dict["student_profile"]["gender"].length == 0) {
						gender_set = null;
					}
					else {
						for (var i=0; i < parameters_dict["student_profile"]["gender"].length; i++) {
							var list_to_add = selection_dict[parameters_dict["student_profile"]["gender"][i]];
							for (var j=0; j<list_to_add.length; j++) {
								gender_set[list_to_add[j]] = true;
							}
						}
					}
					var grade_set = {};
					if (parameters_dict["student_profile"]["grade_level"].length == 0) {
						grade_set = null;
					}
					else {
						for (var i=0; i < parameters_dict["student_profile"]["grade_level"].length; i++) {
							var list_to_add = selection_dict[parameters_dict["student_profile"]["grade_level"][i]];
							for (var j=0; j<list_to_add.length; j++) {
								grade_set[list_to_add[j]] = true;
							}
						}
					}
					var focus_set = {};
					if (parameters_dict["program_focus"].length == 0) {
						focus_set = null;
					}
					else {
						for (var i=0; i < parameters_dict["program_focus"].length; i++) {
							var list_to_add = selection_dict[parameters_dict["program_focus"][i]];
							for (var j=0; j<list_to_add.length; j++) {
								focus_set[list_to_add[j]] = true;
							}
						}
					}
					var cost_set = {};
					if (parameters_dict["program_profile"]["cost"].length == 0) {
						cost_set = null;
					}
					for (var i=0; i < parameters_dict["program_profile"]["cost"].length; i++) {
						var list_to_add = selection_dict[parameters_dict["program_profile"]["cost"][i]];
						for (var j=0; j<list_to_add.length; j++) {
							cost_set[list_to_add[j]] = true;
						}
					}
					var gpa_set = {};
					if (parameters_dict["student_profile"]["gpa"].length == 0) {
						gpa_set = null;
					}
					for (var i=0; i < parameters_dict["student_profile"]["gpa"].length; i++) {
						var list_to_add = selection_dict[parameters_dict["student_profile"]["gpa"][i]];
						for (var j=0; j<list_to_add.length; j++) {
							gpa_set[list_to_add[j]] = true;
						}
					}
					var time_set = {};
					if (parameters_dict["program_profile"]["time"].length == 0) {
						time_set = null;
					}
					else {
						for (var i=0; i < parameters_dict["program_profile"]["time"].length; i++) {
							var list_to_add = selection_dict[parameters_dict["program_profile"]["time"][i]];
							for (var j=0; j<list_to_add.length; j++) {
								time_set[list_to_add[j]] = true;
							}
						}
					}
					var set_list = [ethnicity_set, gender_set, grade_set, focus_set, cost_set, gpa_set, time_set];
					var intersection_num = 0;  // number of selected parameter categories the search is satisfying
					var intersection_set = {}; // a program has intersected all requests 
					for (var i=0; i<set_list.length;i++) {
						if (set_list[i] != null) {
							var programs = Object.keys(set_list[i]);
							for (var j=0; j<programs.length; j++) {
								if (intersection_set[programs[j]] == undefined) {
									intersection_set[programs[j]] = 1;
								}
								else {
									intersection_set[programs[j]] = intersection_set[programs[j]] + 1;
								}
							}
							intersection_num++;
						}
					}
					var intersection_set_programs = Object.keys(intersection_set);
					console.log("intersection_set_programs: " + intersection_set_programs);
					var final_list = [];
					for (var i=0; i<intersection_set_programs.length; i++) {
						if (intersection_set[intersection_set_programs[i]] == intersection_num) {
							final_list.push(intersection_set_programs[i]);
						}
					}
					return final_list;
				}
			})
		</script>
  </head>

  <body>
  	<?php include("../nav_bar_header/nav_bar.php") ?>
  </body>
  <body class="body mybody">
  	<div class="page_margins">
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
			</div> <!-- end of row 1 -->
			<div class= "row"> <!-- row 2 -->
				<div class="col-md-5">
					<div class="list-group">
					<div class="list-group-item">
						<span style="cursor: pointer;" id="one" class="hover-content"><span class="glyphicon glyphicon-pencil"></span></span> 
						<h4 class="list-group-item-heading">School District:</h4>
						<p  id="onetext" class="list-group-item-text" contenteditable="true">Boston Public Schools</p>
						<p>&nbsp</p>
					</div>
					</div>
				</div>
				<div class="col-md-5">
					<div class="list-group">
					<div class="list-group-item">
						<span style="cursor: pointer;" id="two" class="hover-content"><span class="glyphicon glyphicon-pencil"></span></span>  
						<h4 class="list-group-item-heading">School:</h4>
						<p id="twotext" class="list-group-item-text" contenteditable="true">Boston Latin High School</p>
						<p>&nbsp</p>
					</div>
					</div>
				</div>
			</div> <!-- end of row 2 -->
			<div class= "row"> <!-- row 3 -->
				<div class="col-md-5">
					<div class="list-group">
					<div class="list-group-item">
						<span style="cursor: pointer;" id="three" class="hover-content"><span class="glyphicon glyphicon-pencil"></span></span> 
						<h4 class="list-group-item-heading">Teaching Grades:</h4>
						<p id="threetext" class = "list-group-item-text" contenteditable="true">Grades 9-12</p>
						<p>&nbsp</p>
					</div>
					</div>
				</div>
				<div class="col-md-5">
					<div class="list-group">
					<div class="list-group-item">
						<span style="cursor: pointer;" id="four" class="hover-content"><span class="glyphicon glyphicon-pencil"></span></span> 
						<h4 class="list-group-item-heading">Subjects:</h4>
						<p id="fourtext" class="list-group-item-text" contenteditable="true">English</p>
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

    <!-- Beginning of Find A Program well -->
    <div class="row">
    <div class="well well-lg" style="background-color: white;"> 
    	<div class="container">
    		<h2>Need to find an out-of-school program?</h2>
    		<p>We can help you find the perfect out-of-school program to fit your students' needs.</p>
			<button style="background-color:#99CC99;" id="search_btn" type="button" class="btn btn-default btn-lg">
				Find a Program&nbsp<span class="glyphicon glyphicon-search" style="background-color:#99CC99;"></span> 
			</button>

		</div>
    </div>
	</div>
    <!-- End of Find a Program well --> 
    <!-- BEGINNING OF FAVORITES -->
    <div>
		<div class="row row-xs-height">
			<div class="col-md-8">
				<h1 id='favorites'><span class="glyphicon glyphicon-heart" style="color:red;background-color:#F0F0F0;"></span>   Favorite Programs</h1>
			</div>
		</div>
		<div id="favorites_wrapper">
			<div class="row" id="no_favorites">
				<div class="col-md-1"></div>
				<div class="well well-lg" style="background-color: white;">
					<div class="container">
						You have no favorites yet!
					</div>
				</div>
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
    <div class="row row-xs-height">
		<div class="col-md-8">
			<h1 id='recently_reviewed'><span class="glyphicon glyphicon-star" style="color:gold;background-color:#F0F0F0;"></span>  Recently Reviewed Programs</h1>
		</div>
	</div>
    <div class="row">&nbsp</div>
    <div class="row">&nbsp</div>
    <div class="row">
      <div class="col-md-1"></div>
      <div class="col-md-3 recent_tile">   		
		<div id="amphibious_review" class="recent_tile thumbnail">
			<div class="row recent_tile_image">
			  <img class="recent_tile_image" src="../program_logos/amphibious.png" alt="...">
			</div>
			<div class="row recent_tile_name">
				<a style="color: #003366;"><h4>Amphibious Achievement</h4></a>
			</div>
			<span class="tile-content">Amphibious Achievement is an MIT-student run mentorship program for inner-city high school students. In the program, students learn how to row, swim, and becoming academically on-track at no cost.</span>        
		</div>
      </div>
      <div class="col-md-3">   		
		<div id="lti_review" class="recent_tile thumbnail">
			<div class="row recent_tile_image">
			  <img class="recent_tile_image" src="../program_logos/lti.png" alt="...">
			 </div>
			<div class="row recent_tile_name">
				<a style="color: #003366;"><h4>LTI</h4></a>
			</div>
			<span class="tile-content">The Leadership Training Institute is a program for high school students that helps develop leadership skills. Throughout our 12-week program, students implement what they learn as they work to create a sustainable community service project.</span>        
		</div>
      </div>
      <div class="col-md-3">     		
		<div id="ymca_review" class="recent_tile thumbnail">
			<div class="row recent_tile_image">
				  <img class="recent_tile_image" src="../program_logos/ymca.jpg" alt="...">
			</div>
			<div class="row recent_tile_name">
				<a style="color: #003366;"><h4>YMCA</h4></a>
			</div>
			<span class="tile-content">YMCA Cambridge offers the community a wide variety of opportunities to enrich the mind, body and spirit. We serve students of all ages.</span> 
		</div> 
      </div>    
    </div><!-- row -->
	</div>
	<!-- BEGINNING OF MODAL -->
	<div class="modal fade" id="udpate_search_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		  <div class="modal-dialog">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		        <h4 class="modal-title">Add Search Parameters to Update Your Search!</h4>
		      </div>
		
		<div style="background-color: #F0F0F0" class="modal-body">

		<div class="search_params">

			<div class="block student_profile_dropdown">
				<div class="dropdown">
					<button type="button" class="dropdown-toggle btn btn-default dropdown_btn" data-toggle="dropdown" href="#">Student Profile<b class="caret"></b>
					</button>
					<ul class="dropdown-menu dropdown-menu-form" role="menu">
						<li class="dropdown-title">Race/Ethnicity</li>
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
						<li class="dropdown-title">GPA</li>
						<li class="gp">
							<div class="gpa">
								<label class="checkbox gpa_checkbox">
									<input type="checkbox"  id="gpa_1">
									0.0-1.0
								</label>
							</div>
							<div class="gpa">
								<label class="checkbox gpa_checkbox">
									<input type="checkbox"  id="gpa_2">
									1.0-2.0
								</label>
							</div>
							<div class="gpa">
								<label class="checkbox gpa_checkbox">
									<input type="checkbox"  id="gpa_3">
									2.0-3.0
								</label>
							</div>
						</li>
						<li class="gp">
							<div class="gpa">
								<label class="checkbox gpa_checkbox">
									<input type="checkbox"  id="gpa_4">
									3.0-4.0
								</label>
							</div>
						</li>
						<li class="dropdown-title">Gender</li>
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
						<li class="dropdown-title">Grade-Level</li>
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
							<button type="button" class="update_btn btn btn-default btn-small" style="margin-bottom:10px;" href="#">Update</button>
						</li>	
					</ul>
				</div>
			</div>
			<div class="block program_profile_dropdown">
				<div class="dropdown">
					<button type="button" class="dropdown-toggle btn btn-default dropdown_btn" data-toggle="dropdown" href="#">Program Profile<b class="caret"></b>
					</button>
					<ul class="dropdown-menu dropdown-menu-form" role="menu">
						<li class="dropdown-title"> 
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
						<li class="dropdown-title">Time of year </li>
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
						<li class="dropdown-title">Days of the week</li>
						<li>
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
						<li class="dropdown-title">Location</li>
						<li class="w">
							<div class="set_location">
               		 			<input type='text' class='form-control' id='get_location' placeholder='zip code i.e. 02139'></input>
               		 		</div>
               		 	</li>
						<li>
							<button type="button" class="update_btn btn btn-default btn-small" style="margin-bottom:10px;" href="#">Update</button>
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
							<button type="button" class="update_btn btn btn-default btn-small" style="margin-bottom:10px;" href="#">Update</button>
						</li>	
					</ul>
				</div>
			</div>
			 <div id="results_wrapper">
				<div class="row search_res">
					<div class='col-md-1'></div>
						<div id="no_results_container" style="background-color: white" class="well-sm search-well no_results">You have no search results </div>
						<div id="results_container"></div>
				</div>

				</div>
		</div>		       
		      <div class="modal-footer">   
		        <button id="cancelBtn" type="button" class="btn btn-default" data-dismiss="modal">Exit</button>
		      </div>
		    </div><!-- /.modal-content -->
		  </div><!-- /.modal-dialog -->
		</div><!-- /.modal -->
	</div>
	<!-- END OF MODAL -->
  </body>
</html>