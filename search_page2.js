var Favorite = function(img, name, url) {
	this.img = img;
	this.name = name;
	this.url = url;
}

$(document).ready(function() {
var img_urls = [];
var favorites = [];
var favorite_names = [];
current_index = 0;
var left_hover;
var right_hover;

function set_hovers() {
	if (current_index > 0){
		right_hover = true;
	} else {
		right_hover = false;
	}
	if (current_index+3 < favorites.length){
		left_hover = true;
	}
	else {
		left_hover = false;
	}
}
set_hovers();

function build_favorites(){
	var string_div = "<div class='row'><div class='col-md-1'></div><div class='col-md-1'><span class='glyphicon glyphicon-chevron-left' id='left_arrow'></span></div>";
	var new_thumbnail;
	var max_index = Math.min(favorites.length-1, current_index + 2);
	var counter = 1;
	console.log("getting called");
	for (var i = current_index; i <= max_index; i++) {
		var img_url = favorites[i].img;
		var name = favorites[i].name;
		var link = favorites[i].url;
		console.log(i, "iterating");
		if ($("#fav_img"+counter).length !=0){
			$("#fav_img"+counter).attr({src:img_url, "data-link": link, "data-name": name});
			$("#p_name")[0].innerHTML = name;
		} else {
			$(".fav"+counter).append("<div class='caption'><h4 id='p_name'>"+name+"</h4>"+
				"<p id='prog_city'>Cambridge, MA </p>"+
				"<p><a href='"+link+"' class='label label-default fav_cap"+counter+"' rel='tooltip' title='Learn More'>Learn More</a></p></div>"+
				"<img class='fav_img' id='fav_img"+counter+"' src='"+img_url+"' +data-name='"+name+"'+ data-link='"+link+"'>");
			$(".fav"+counter).mouseenter(function() {
				$(".caption", this).show();
			});
			$(".fav"+counter).mouseleave(function() {
				$(".caption", this).hide();
			})
		}
		/*if ($("#fav_img"+counter).length==0){
			$(".fav"+counter).append("<div class='caption'><h4>"+name+"</h4>"+
				"<p id='prog_city'>Cambridge, MA </p>"+
				"<p><a href='"+link+"' class='label label-default fav_cap"+counter+"' rel='tooltip' title='Learn More'>Learn More</a></p></div>"+
				"<img class='fav_img' id='fav_img"+counter+"' src='"+img_url+"' +data-name='"+name+"'+ data-link='"+link+"'>");
			$(".fav"+counter).mouseenter(function() {
				$(".caption", this).show();
			});
			$(".fav"+counter).mouseleave(function() {
				$(".caption", this).hide();
			})
		} else {
			console.log(counter, "already exists");
			$("#fav_img"+counter).attr({src:img_url, "data-link": link, "data-name": name});
			$(".p_name")[0].innerHTML = "SUP";
		}*/
		counter +=1;
	}

	if (favorites.length > 3){
		$(".left_arrow_slot").html("<span class='glyphicon glyphicon-chevron-left' id='left_arrow'></span>");
		$(".right_arrow_slot").html("<span class='glyphicon glyphicon-chevron-right' id='right_arrow'></span>");
	
		$("#left_arrow").on("mouseenter", function(e){
			left_hover_func();
		})
		$("#left_arrow").on("mouseleave", function(e){
			$("#left_arrow").css("color", "black");
		})
		$("#right_arrow").on("mouseenter", function(e){
			right_hover_func();
		})
		$("#right_arrow").on("mouseleave", function(e){
			$("#right_arrow").css("color", "black");
		})

		$("#left_arrow").on("click", function(e) {
			if (left_hover){
				current_index += 1;
				build_favorites();
			}
		})
		$("#right_arrow").on("click", function(e) {
			if (right_hover){
				current_index -= 1;
				build_favorites();
			}	
		})
	}
	set_hovers();
}

function add_to_fav(favorite) {
	if (jQuery.inArray(favorite.name, favorite_names)==-1){
		favorite_names.push(favorite.name);
		favorites.unshift(favorite);
	}
}

$("#submit_search").click(function(e){
	$("#results_wrapper").load("search_page.html");
})

$(".container").on("click", ".btnAddToFavorites", function(e){
	if ($("#no_favorites").length != 0){
		$("#no_favorites").remove();
	}
	var url = $(this).data("url");
	var name = $(this).data("name");
	var new_fav = new Favorite(url, name, "program_page.html");
	add_to_fav(new_fav);
	build_favorites();
})

/*$(".fav_img").mouseenter(function(){
	console.log('entering');
	$(".caption").toggle();
});

$("#favorites_wrapper").mouseleave(function(){
	$(".caption").hide();
});*/


function right_hover_func(){
	if(right_hover){
		$("#right_arrow").css("color","blue");
	}
}
function left_hover_func() {
	if(left_hover){
		$("#left_arrow").css("color","blue");
	}
}
})