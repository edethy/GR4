/**
Class representing the search tiles in the 
Should have a function that adds tiles, updates the view, removes tiles
**/

var wrapper= $("<div>", { id: "widget_menu"});

function widget_menu() {

this.html= '<div id="widget_menu"><div class= "btn-group btn-group-justified">'; 

this.makeButton = function(source, name) {
	var outer_div= $("<div>", { class: "btn-group parameter"});
	var button=  $("<button>", { type: "btn-group parameter", class: "btn btn-default"});
	var image= "<img src="+source+">"; 
	
	button.html(image); 
	outer_div.append(button); 
	button.attr("id", name); 
	
	return outer_div; 

}

this.makeRow= function(source1, one, source2, two, source3, three) {
	var row= $("<div>", { class: "btn-group btn-group-justified"});
	var button1= this.makeButton(source1, one);
	var button2= this.makeButton(source2, two); 
	var button3= this.makeButton(source3, three); 
	
	row.append(button1); 
	row.append(button2); 
	row.append(button3); 
	
	this.html= this.html+row.html(); 
	
	
}

var source1= "menu_pictures/cost.png"; 
var source2= "menu_pictures/location.png"; 
var source3= "menu_pictures/age.png";
var source4= "menu_pictures/activity.png";
var source5= "menu_pictures/gender.png";
var source6= "menu_pictures/time.png";

var row1= this.makeRow(source1, "cost_tile", source2, "location_tile", source3, "age_tile"); 
this.html= this.html+'</div>';
this.html= this.html+'<div class= "btn-group btn-group-justified">';
var row2= this.makeRow(source4, "activity_tile", source5, "gender_tile", source6, "time_tile"); 
this.html=this.html+'</div></div>';


wrapper.append(row1); 
wrapper.append(row2); 




this.insides= function() {
	return this.html; 
}

this.show= function(div) {
	var show_div = document.getElementById(div); 
	show_div.innerHTML= this.html; 
}


}

