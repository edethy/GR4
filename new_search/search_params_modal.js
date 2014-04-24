function create_individual_parameters(target_id) {
	$individual_parameter = $("<div></div>");
	//$parameter_data = $("<div></div>");
	/*$individual_parameter = $("<div class='ind_param' id='ind_param_"+target_id+"'></div>");
	$select_parameter_header = $("<div class='select_param_header'></div>");
	$parameter_data = $("<div class='parameter_data' id='param_data_"+target_id+"'></div>");
	$change_parameter_dropdown = $('<div class="dropdown block change_param">'+
                '<a data-toggle="dropdown" data-target="#" class="btn btn-default dropdown-toggle" id="change_drop'+num_parameter+
                '">Change Search Parameter<b class="caret"></b></a>'+
                '<ul class="dropdown-menu">'+
                    '<li><a href="#" class="change_parameter" id="'+target_id+'_cost">Cost</a></li>'+
                    '<li><a href="#" class="change_parameter" id="'+target_id+'_location">Location</a></li>'+
                    '<li><a href="#" class="change_parameter" id="'+target_id+'_age">Age</a></li>'+
                    '<li><a href="#" class="change_parameter" id="'+target_id+'_activity">Activity</a></li>'+
               ' </ul>'+
            '</div>');
	//$(".dropdown-toggle").dropdown();
	$individual_parameter.append($select_parameter_header);
	$select_parameter_header.html("<div class='block parameter_header'><h2>"+target_id+"</h2></div>");
	$select_parameter_header.append($change_parameter_dropdown);*/
	$file_name = "select_"+target_id+".html";
	$.get($file_name, function(data) {
		$individual_parameter.html(data);
	})

//	$individual_parameter.append($parameter_data);
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
	/*$param_list = items_in_dropdown(params_not_included);
	
	$add_parameter_dropdown = $('<div class="dropdown add_param">'+
                '<a data-toggle="dropdown" data-target="#" class="btn btn-default dropdown-toggle">Add Another Search Parameter<b class="caret"></b></a>'+
                '<ul class="dropdown-menu">');
	for (var i=0;i<$param_list.length;i++){
		$to_add = $param_list[i];
		$new_string = $('<li><a href="#" class="add_parameter" id="'+$to_add+'">'+$to_add+'</a></li>');
		console.log($new_string);
		$add_parameter_dropdown.append($new_string);
	}
	$add_parameter_dropdown.append($('</ul></div>'));*/

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

	$submit_button = $('<div type="button" class="btn btn-success inline" id="submit_search_button">Submit Search</div>');

	$buttons_wrapper_div.append($add_parameter_dropdown);
	$buttons_wrapper_div.append($submit_button);
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