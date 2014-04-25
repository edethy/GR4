var Favorite = function(img, name, url) {
	this.img = img;
	this.name = name;
	this.url = url;
}

var searched_params = ['location'];

$(document).ready(function() {
var img_urls = [];
var favorites = [];
var favorite_names = [];
current_index = 0;
var left_hover;
var right_hover;

	$(".modal-body").append(create_all_parameters());
 	$pop_mod = create_individual_parameters("location");
    $("#all_parameters").append($pop_mod);
    if(!$(".button_wrapper").length > 0) {
    	$(".modal-body").append(create_add_another_button());
    	remove_params(searched_params);
    }

    $(".add_parameter").click(function(e){
        searched_params.push(e.target.id);
        var added_p = create_individual_parameters(e.target.id);
        $("#all_parameters").append(added_p);
        $(".dropdown-toggle").dropdown();
        remove_params(searched_params);
        e.stopImmediatePropagation();
    });

    $("#submit_search_button2").on('click', function(e){
        for(var i=0;i<searched_params.length;i++){
        	$param = searched_params[i] 
                switch($param){
                    case 'cost':
                        $cost_tile = get_checked_cost();
                        create_search_tile('cost',$cost_tile.values[0]);
                        break;
                    case 'location':
                        $location_tile = get_location_tile();
                        create_search_tile('location',$location_tile.location);
                        break;
                   	case 'age':
                   		$age_tile = get_age_tile();
                   		create_search_tile('age',$age_tile.age);
                        break;
                    case 'activity':
                    	$activity_tile = get_activity_tile();
                    	create_search_tile('activity',$activity_tile.activity_values[0]);
                        break;
                }
        }
        $("#results_wrapper").load("search_results.html");
    });


if (favorites.length != 0){
	build_favorites();
}

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

function make_hovers(){
	if (favorites.length <= 3){
		$(".left_arrow_slot").html("");
		$(".right_arrow_slot").html("");
	} else {
		$(".left_arrow_slot").html("<span class='glyphicon glyphicon-chevron-left' id='left_arrow'></span>");
		$(".right_arrow_slot").html("<span class='glyphicon glyphicon-chevron-right' id='right_arrow'></span>");

		if (left_hover){
			$("#left_arrow").css("color","black");
		} else {
			$("#left_arrow").css("color","grey");
		}
		if (right_hover) {
			$("#right_arrow").css("color","black");
		} else {
			$("#right_arrow").css("color","grey");
		}

		$("#left_arrow").on("mouseenter", function(e){
			left_hover_func();
		})
		$("#left_arrow").on("mouseleave", function(e){
			if(left_hover){
				$("#left_arrow").css("color", "black");
			} else {
				$("#left_arrow").css("color", "grey");
			}
		})
		$("#right_arrow").on("mouseenter", function(e){
			right_hover_func();
		})
		$("#right_arrow").on("mouseleave", function(e){
			if(right_hover){
				$("#right_arrow").css("color", "black");
			} else {
				$("#right_arrow").css("color", "grey");
			}
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
}

function build_favorites(){
	var new_thumbnail;
	var max_index = Math.min(favorites.length-1, current_index + 2);
	var counter = 1;

	if (favorites.length == 0){
		//We have no favorites and should say that
		$("#favorites_wrapper").html('<div class="row" id="no_favorites">'+
			'<div class="col-md-1"></div>'+
			'<div class="well well-lg fav-well">You have no favorites!</div>'+
			'</div>'+
			'<div class="row">'+
			'<div class="col-md-1"></div>'+
			'<div class="col-md-1 left_arrow_slot"></div>'+
			'<div class="wrapper_fav1">'+
			'<div class="col-md-2 fav1"></div>'+
			'</div>'+
					'<div class="col-md-1"></div>'+
					'<div class="wrapper_fav2">' +
						'<div class="col-md-2 fav2"></div>' +
					'</div>' +
					'<div class="col-md-1"></div>' +
					'<div class="wrapper_fav3">' +
						'<div class="col-md-2 fav3"></div>' +
					'</div>' +
					'<div class="col-md-1 right_arrow_slot"></div>' +
				'</div>'
			)
	} else{

	for (var j=1;j<=3;j++){
		var node_remove=$(".wrapper_fav"+j);
		$(".fav"+j).remove();
		node_remove.append("<div class='col-md-2 fav"+j+"'></div>")
	}

	for (var i = current_index; i <= max_index; i++) {
		if (favorites.length == 0){
			
		}
		var img_url = favorites[i].img;
		var name = favorites[i].name;
		var link = favorites[i].url;
		if ($("#fav_img"+counter).length !=0){
			$("#fav_img"+counter).attr({src:img_url, "data-link": link, "data-name": name});
			$("#p_name"+counter)[0].innerHTML = name;
		} else {
			$(".fav"+counter).append("<div class='caption'><h4 id='p_name"+counter+"'>"+name+"</h4>"+
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
		counter +=1;
	}
	set_hovers();
	make_hovers();
}
}

function add_to_fav(favorite) {
	if (jQuery.inArray(favorite.name, favorite_names)==-1){
		favorite_names.unshift(favorite.name);
		favorites.unshift(favorite);
		build_favorites();
	} else {
		favorites.splice(favorite_names.indexOf(favorite.name),1);
		favorite_names.splice(favorite_names.indexOf(favorite.name),1);
		build_favorites();
	}
}


$(".container").on("click", ".btnAddToFavorites", function(e){
	if ($("#no_favorites").length != 0){
		$("#no_favorites").remove();
	}
	$(this).toggleClass("clicked");
	var url = $(this).data("url");
	var name = $(this).data("name");
	var new_fav = new Favorite(url, name, "program_page.php");
	add_to_fav(new_fav);
	e.stopImmediatePropagation();
})

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

function create_search_tile(tile_type, response) {

	if (tile_type == "cost") {
		var search_param = $('<p>').addClass('search_param').text("Cost");
		var img = $('<img>').attr('src', '../menu_pictures/cost.png').width('100%').height('80%');
	}
	else if (tile_type=="location") {
		var search_param = $('<p>').addClass('search_param').text("Location");
		var img = $('<img>').attr('src', '../menu_pictures/location.png').width('100%').height('80%');
	}
	else if (tile_type=="activity") {
		var search_param = $('<p>').addClass('search_param').text("Activity");
		var img = $('<img>').attr('src', '../menu_pictures/activity.png').width('100%').height('80%');	
	}
	else if (tile_type=="age") {
		var search_param = $('<p>').addClass('search_param').text("Age");
		var img = $('<img>').attr('src', '../menu_pictures/gender.png').width('100%').height('80%');
	}

	var list_wrapper = $('<li>');
	var new_tile = $('<div>').addClass('thumbnail tile');
	var new_row = $('<div>').addClass('row cost_tile').height('100%');
	var pic_col = $('<div>').addClass('col-md-5').height('95%');
	img.css({width:'100%', height:'80%', 'margin-top':'7.5%', 'margin-left':'15%'});
	var second_col = $('<div>').addClass('col-md-7');
	search_param.css({'margin-left':'2%'});
	var response = $('<p>').addClass('response').text(response);
	search_param.css({'margin-left':'2%'});
	var buttons_row = $('<div>').addClass('row');
	buttons_row.append('<button type="button" class="glyphicon glyphicon-edit btn btn-default btnEdit" data-toggle="modal" data-target="#sample_modal"></button> <button type="button" class="btn btn-default glyphicon glyphicon-trash btnTrash"></button>');

	pic_col.append(img);
	second_col.append(search_param);
	second_col.append(response);
	second_col.append(buttons_row);
	new_row.append(pic_col);
	new_row.append(second_col);
	new_tile.append(new_row);
	list_wrapper.append(new_tile);
	$('#search_param_tiles').append(list_wrapper);

}

})