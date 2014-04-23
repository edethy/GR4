function create_individual_parameter(target_id) {
	$individual_parameter = $("<div class='ind_param'></div>");
	$select_parameter_header = $("<div class='select_param_header'></div>");
	$parameter_data = $("<div class='parameter_data'></div>");
	$change_parameter_dropdown = $('<div class="dropdown block change_param">'+
                '<a href="#" data-toggle="dropdown" class="btn btn-default dropdown-toggle">Change Search Parameter<b class="caret"></b></a>'+
                '<ul class="dropdown-menu">'+
                    '<li><a href="#" class="change_parameter" id="cost">Cost</a></li>'+
                    '<li><a href="#" class="change_parameter" id="location">Location</a></li>'+
                    '<li><a href="#" class="change_parameter" id="age">Age</a></li>'+
                    '<li><a href="#" class="change_parameter" id="activity">Activity</a></li>'+
               ' </ul>'+
            '</div>');
	$individual_parameter.append($select_parameter_header);
		$select_parameter_header.html("<div class='block parameter_header'><h2>"+target_id+"</h2></div>");
		$select_parameter_header.append($change_parameter_dropdown);
		$file_name = "select_"+target_id+".html";
		$.get($file_name, function(data) {
			$parameter_data.html(data);
		})
		$individual_parameter.append($parameter_data);
	//$(".dropdown-toggle").dropdown();
	return $individual_parameter;
}

function create_all_parameters() {
	$all_parameters = $('<div id="all_parameters"></div>');
	return $all_parameters;
}

function create_add_another_button() {
	$add_parameter_dropdown = $('<div class="dropdown add_param">'+
                '<a href="#" data-toggle="dropdown" class="btn btn-default dropdown-toggle">Add Another Search Parameter<b class="caret"></b></a>'+
                '<ul class="dropdown-menu">'+
                    '<li><a href="#" class="add_parameter" id="cost">Cost</a></li>'+
                    '<li><a href="#" class="add_parameter" id="location">Location</a></li>'+
                    '<li><a href="#" class="add_parameter" id="age">Age</a></li>'+
                    '<li><a href="#" class="add_parameter" id="activity">Activity</a></li>'+
               ' </ul>'+
            '</div>');
	return $add_parameter_dropdown;
}