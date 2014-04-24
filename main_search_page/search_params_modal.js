function create_individual_parameters(target_id) {
	$individual_parameter = $("<div></div>");
	$file_name = "select_"+target_id+".html";
	$.get($file_name, function(data) {
		$individual_parameter.html(data);
	})
	return $individual_parameter;
}

function create_all_parameters() {
	$all_parameters = $('<div id="all_parameters"></div>');
	return $all_parameters;
}

function items_in_dropdown(not_included){
	var all_items = ["cost", "location", "age", "activity"];
	for(var i=0;i<not_included.length;i++){
		all_items.splice(all_items.indexOf(not_included[i]));
	}
	return all_items;
}

function remove_params(params_not_included){
	for(var i=0;i<params_not_included.length;i++) {
		$("#"+params_not_included[i]).remove();
	}
}

function create_add_another_button() {
	console.log("Why again?");
	$buttons_wrapper_div = $('<div class="button_wrapper row">');

	$add_parameter_dropdown = $('<div class="dropdown add_param inline">'+
                '<a data-toggle="dropdown" data-target="#" class="btn btn-default dropdown-toggle">Add Another Search Parameter<b class="caret"></b></a>'+
                '<ul class="dropdown-menu">'+
                    '<li><a href="#" class="add_parameter" id="cost">Cost</a></li>'+
                    '<li><a href="#" class="add_parameter" id="location">Location</a></li>'+
                    '<li><a href="#" class="add_parameter" id="age">Age</a></li>'+
                    '<li><a href="#" class="add_parameter" id="activity">Activity</a></li>'+
               ' </ul>'+
            '</div>');

	$buttons_wrapper_div.append($add_parameter_dropdown);
	$buttons_wrapper_div.append('</div>');
	return $buttons_wrapper_div;
}

function alter_parameter(click_id){
	//We should re-do the tool bar and 
	var new_id = click_id.split("_")[0];
	var param_num = click_id.split("_")[1];
	$file_name = "select_"+new_id+".html";
	console.log($file_name);
	$.get($file_name, function(data) {
		$("#parameter_data_num"+param_num).html(data);
		});
	$("#parameter_header_num"+param_num).html("<h2>"+new_id+"</h2>");
}