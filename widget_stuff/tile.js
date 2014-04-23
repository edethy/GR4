/**
Class representing the search tiles in the 
**/
function tile(title, value)
{
	this.title= title; 
	this.value= value;  
	
	/**
	Allows users to set the title
	**/
	this.setTitle= function(title) {
		title_6.html("<h3>"+this.title+"</h3>"); 
	
	}
	
	/**
	Allows users to set the value of the parameter
	**/
	this.setValue= function(value) {
		value_6.text(this.value); 
	}



	var outer_row = $("<div>", { class: "row"});
	var title_3 = $("<div>", { class: "col-md-3"});
	var title_6 = $("<div>", { class: "col-md-6"});
	title_6.attr("id", "title"); 
		
	var value_row =$("<div>", { class: "row"});
	var value_3 = $("<div>", { class: "col-md-3"});
	var value_6 = $("<div>", { class: "col-md-6"});
	
	value_6.attr("id", "value"); 
	value_row.append(value_3); 
	value_row.append(value_6); 
		
	outer_row.append(title_3); 
	outer_row.append(title_6); 
	outer_row.append(value_row); 
	
	var sticky= $("<div>", { class: "sticky"});
	var outer_3= $("<div>", { class: "col-md-3"});
	outer_3.attr("id", title+value); 
	
	sticky.append(outer_row); 
	outer_3.append(sticky); 
	
//	value_6.text(this.value); 
//	title_6.html("<h3>"+this.title+"</h3>");
	this.setTitle(this.title); 
	this.setValue(this.value); 

	this.html= outer_3.html(); 
	
	/**
	displays the tile in the div with an id that corresponds
	to the parameter passed in
	**/
	this.show = function(div) {
		var show_div = document.getElementById(div); 
		show_div.outerHTML= this.html; 
	}	
	
	/**
	returns the inner html of the tiles
	**/
	this.insides = function() {
		return this.html; 
	}
	
}