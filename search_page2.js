
$(document).ready(function() {
var img_urls = ['program_logos/dynaMIT.png'];
var current_index = 0;

function scroll_fav(){
	if (index >= img_urls.length-3 || index <= 0){
		return false;
	}
	return true;
};

function update_fav(new_index){
	var new_array = img_urls.slice(new_index, new_index+3);
	return new_array;
};


function set_new_index(direction){
	if (direction=="left"){
		return current_index += 1;
	} else {
		return current_index -= 1;
	}
};


function add_to_fav(){
	img_urls.append("program_logos/amphibious.png");
}
function update_div(){
	$("#favorites_wrapper").html("<div class='row'><div class='col-md-1'></div><div class='col-md-3'><img id='fav_img' src='program_logos/amphibious.png'></div></div>");
}
$("#add_favorite").click(function(e) {
	/*$("#favorites_wrapper").html("<div class='row'><div class='col-md-1'></div><div class='col-md-3'><img src='program_logos/amphibious.png'></div></div>");*/
	update_div();
})

$("#submit_search").click(function(e){
	$("#results_wrapper").load("search_page.html");
})


})