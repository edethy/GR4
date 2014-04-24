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
	
	
	$(".teacher_description").popover({
		html: true,
		placement: 'top', 
		trigger: 'hover',
		content: "Anything so we can see if its not showing up because it's empty"
	}); 

}); 