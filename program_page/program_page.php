<?php 
			$db = mysql_connect("sql.mit.edu", "edethy", "Persi123");
			if(!$db){
				die("Could not connect:". mysql_error());
			}
			mysql_select_db("edethy+connected") or die("Could not select Database");

			$program_id=$_GET['program'];

			$query = "SELECT * FROM `Out-of-School Programs` WHERE `Program_ID` = '".$program_id."'";
			if(!$query){
				trigger_error(mysql_error()." in " .$query);
			}
			$result = mysql_query($query, $db);
			$rows[]  = array();
			while($row = mysql_fetch_assoc($result)) {
				$rows[] = $row;
			}
			mysql_close($db);
		?>

<!DOCTYPE html>
<html>
	<head>		
		<link type="text/css" href="program_page.css" rel="stylesheet" />
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.0.3/angular.js"></script>
		<script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
		<link type='text/css' rel='stylesheet' href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" />
		<link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
    	<link type="text/css" href="../nav_bar_header/nav_bar.css" rel="stylesheet" />
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
			        var img = $('<img>').attr('src', '../teacher_pics/shilpa.jpg');
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
		<?php include('../nav_bar_header/nav_bar.php') ?>
		<div id="program_title"> <?php echo $rows[1]['Program_Name']; ?></div>
		<table>
			<tr>
				<td>
					<div id="title_logo_stars">
						<div id="program_logo_box"><img id="program_logo" src="../<?php echo $rows[1]['Program_Logo']; ?> "></div>
						<div style="font-size:25pt; color:gold; margin-left:8px;">
							<span height="250">&#9733;</span><span>&#9733;</span><span>&#9733;</span><span>&#9733;</span><span>&#9733;</span>
						</div>
					</div>
				</td>
				<td>
					<div style="position:relative; margin-left:5%; margin-right:5%;">
						<p> <b> Location: </b> <?php echo $rows[1]["Program_Location"]; ?> </p>
						<p> <b> Cost: </b> <?php echo $rows[1]["Program_Cost"]; ?> </p>
						<p> <b> Age: </b> <?php echo $rows[1]["Program_Age"]; ?> </p>
						<p> <b> Activity: </b> <?php echo $rows[1]["Program_Focus"]; ?> </p>
						<p> <b> Program Contact: </b> <?php echo $rows[1]["Program_Contact"]; ?> </p>
						<p> <b> Program Website: </b><a href="<?php echo $rows[1]['Program_Website']; ?>"> <?php echo $rows[1]["Program_Website"]; ?></a> </p>
						<p><b> Description: </b> <?php echo $rows[1]["Program_Description"]; ?> </p>
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
							<img src="../teacher_pics/liz.jpg" style="width:75%; margin-left:15%;">
						</div>
						<div class="col-md-10 teacher_description" >
							<div class="row">
								Ms. Elizabeth Dethy
							</div>
							<div class="row">
								John D. O'Bryant High School
							</div>
							<div class="row" style="float:left; color:gold;">
								<span>&#9733;</span><span>&#9733;</span><span>&#9733;</span><span>&#9733;</span><span>&#9733;</span>
							</div>
						</div>					
					</div>
					<div class="row" style="width:92%; margin-left:4%;margin-top:1%; margin-bottom:1%">
							<div id="comment_text"> I could not have been more please with the program.  The instructors were patient and kind and really willing to work with my student to help her learn new things. </div>
					</div>
				</div>
					<div class="thumbnail comment">
						<div class="row">
							<div class="col-md-2">
								<img src="../teacher_pics/fernanda.png" style="width:75%; margin-left:15%;">
							</div>
							<div class="col-md-10 teacher_description">
								<div class="row">
									Ms. Fernanda Lavalle
								</div>
								<div class="row">
									Fenway High School
								</div>
								<div class="row" style="float:left; color:gold;">
									<span>&#9733;</span><span>&#9733;</span><span>&#9733;</span><span>&#9733;</span><span>&#9733;</span>
								</div>
							</div>					
						</div>
						<div class="row" style="width:92%; margin-left:4%;margin-top:1%; margin-bottom:1%">
								<div id="comment_text"> This program changed my student's life.  She had such a fun time learning and making new friends and it was really great. </div>
						</div>
					</div>
			</div>
		</div>
	</body>
</html>
 
