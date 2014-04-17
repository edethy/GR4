<!DOCTYPE html>
<html>
	<head>		
		<link type="text/css" href="program_page.css" rel="stylesheet" />
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.0.3/angular.js"></script>
		<script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
		<link type='text/css' rel='stylesheet' href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" />
		<link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
    	<link type="text/css" href="nav_bar.css" rel="stylesheet" />
		<script type="text/javascript">

		$(document).ready(function() {
			$('.rating span').click(function() {
				$('.rating .selected').removeClass('selected');
				$(this).addClass('selected');
			})

			$("#addReviewBtn").click(function(evt) {
				var new_comment_text = $('#review_text').val();
				if (new_comment_text != "") {
					$('#review_text').val('');
					var new_comment = $('<div>').addClass('thumbnail comment');
							
					var teacher_img = $('<div>').addClass('col-md-2');
			        var img = $('<img>').attr('src', 'teacher_pics/shilpa.jpg');
			        img.css({width: '75%', 'margin-left': '15%'});
			        teacher_img.append(img);

			        var teacher_description = $('<div>').addClass('col-md-10 teacher_description');
			        var teacher_name = $('<div>').addClass('row').text('Ms. Shilpa Agrawal');
			        var school = $('<div>').addClass('row').text('Boston English High School');
			        var new_rating = $('.rating').clone();
			        new_rating.addClass('comment_rating row');
			        new_rating.removeClass('rating');
			        teacher_description.append(teacher_name);
			        teacher_description.append(school);
			        teacher_description.append(new_rating);			        

					var comment_top_row = $('<div>').addClass('row');
			        comment_top_row.append(teacher_img);
			        comment_top_row.append(teacher_description);

			        var comment_text = $('<div>').addClass('row');
			        comment_text.css({width:'92%', 'margin-left':'4%', 'margin-top':'1%', 'margin-bottom':'1%'});
			        comment_text.text(new_comment_text);

			        new_comment.append(comment_top_row);
			        new_comment.append(comment_text);
			        $('#comment_list').prepend(new_comment);
		    	}
			});

    	});
		</script>
	</head>
	<body>
		<?php include("main_search.php") ?>
		<div id="program_title"> Amphibious Achievement </div>
		<table>
			<tr>
				<td>
					<div id="title_logo_stars">
						<div id="program_logo_box"><img id="program_logo" src="program_logos/amphibious.png"></div>
						<div style="font-size:25pt; color:yellow; margin-left:8px;">
							<span height="250">&#9733;</span><span>&#9733;</span><span>&#9733;</span><span>&#9733;</span><span>&#9733;</span>
						</div>
					</div>
				</td>
				<td>
					<div style="position:relative; margin-left:5%; margin-right:5%;">
						<p> <b> Location: </b> Cambridge, MA </p>
						<p> <b> Cost: </b> Free </p>
						<p> <b> Age: </b> 9-12 Graders </p>
						<p> <b> Activity: </b> Academics, Athletics, College-Prep </p>
						<p> <b> Description: </b> Amphibious Achievement is a dual athletic and academic mentorship program for inner-city high school students from the Boston Public School system. It was founded in 2010 by MIT student-athletes who saw the benefits that athletics can have on academic and personal success. Through the synergy of coaching in swimming and rowing and tutoring in college preparatory academics, the program fosters success in and out of the water for low-income urban high school students. </p>
					</div>
				</td>
			</tr>
		</table>
		<div id="comment_table">
			<div class="thumbnail comment">
				<div class="row">
					<input type="text" id="review_text" class="form-control " placeholder="E.g. What do you think of Amphibious Achievement?" style="width:96%; margin-left:2%;height:50px;">
				</div>
				<div class="row">
					<div class="col-md-10">
						<div class="rating">
							<span height="250">&#9734;</span><span>&#9734;</span><span>&#9734;</span><span>&#9734;</span><span>&#9734;</span>
						</div>
					</div>
					<div>
						<button id="addReviewBtn" type="button" class="btn btn-default" style="height:100%; margin-top:6px;">Add A Review!</button>
					</div>
				</div>
			</div>
			<div id="comment_list">
				<div class="thumbnail comment">
					<div class="row">
						<div class="col-md-2">
							<img src="teacher_pics/liz.jpg" style="width:75%; margin-left:15%;">
						</div>
						<div class="col-md-10 teacher_description">
							<div class="row">
								Ms. Elizabeth Dethy
							</div>
							<div class="row">
								John D. O'Bryant High School
							</div>
							<div class="row" style="float:left; color:yellow;">
								<span>&#9733;</span><span>&#9733;</span><span>&#9733;</span><span>&#9733;</span><span>&#9733;</span>
							</div>
						</div>					
					</div>
					<div class="row" style="width:92%; margin-left:4%;margin-top:1%; margin-bottom:1%">
							<div id="comment_text"> Amphibious Achievement is a great program for inner-city students. I love the program at MIT! Amphibious Achievement is a great program for inner-city students. I love the program at MIT! Amphibious Achievement is a great program for inner-city students. I love the program at MIT! Amphibious Achievement is a great program for inner-city students. I love the program at MIT! </div>
					</div>
				</div>
					<div class="thumbnail comment">
						<div class="row">
							<div class="col-md-2">
								<img src="teacher_pics/fernanda.png" style="width:75%; margin-left:15%;">
							</div>
							<div class="col-md-10 teacher_description">
								<div class="row">
									Ms. Fernanda Lavalle
								</div>
								<div class="row">
									Fenway High School
								</div>
								<div class="row" style="float:left; color:yellow;">
									<span>&#9733;</span><span>&#9733;</span><span>&#9733;</span><span>&#9733;</span><span>&#9733;</span>
								</div>
							</div>					
						</div>
						<div class="row" style="width:92%; margin-left:4%;margin-top:1%; margin-bottom:1%">
								<div id="comment_text"> I love Amphibious Achievement! Weee! I love Amphibious Achievement! Weee! I love Amphibious Achievement! Weee! I love Amphibious Achievement! Weee! I love Amphibious Achievement! Weee! I love Amphibious Achievement! Weee! I love Amphibious Achievement! Weee! </div>
						</div>
					</div>
			</div>
		</div>
	</body>
</html>
 