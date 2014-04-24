var cost_tile = function(param_type, param_values){
	this.type = param_type;
	this.values = param_values;
}

var location_tile = function(param_type, location, radius_values) {
	this.type = param_type;
	this.location = location;
	this.radius = radius_values;
}

function get_checked_cost(){
	$cost_params = [];
	console.log("YIPPE");

	if ($("#free").is(":checked")){
		$cost_params.push("free");
	}
	if ($("#zeroten").is(":checked")){
		$cost_params.push("zero ten");
	}
	if ($("#tenthirty").is(":checked")){
		$cost_params.push("ten thirty");
	}
	if ($("#thirtyfifty").is(":checked")){
		$cost_params.push("thirty fifty");
	}
	if ($("#overfifty").is(":checked")){
		$cost_params.push("over fifty");
	}
	var new_param_tile = new cost_tile("cost", $cost_params);
	return new_param_tile;
}

function get_location_tile() {
	console.log("YAY");
	$radius_params = [];
	$location_city = $("#get_location").val();
	if ($("#5").is(":checked")){
		$radius_params.push("less than 5");
	}
	if ($("#5_10").is(":checked")){
		$radius_params.push("five to ten");
	}
	if ($("#over_10").is(":checked")){
		$radius_params.push("over ten");
	}
	var new_location_tile = new location_tile("location", $location_city, $radius_params);
	return new_location_tile;
}