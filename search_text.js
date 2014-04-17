$(document).ready(function() {
	var isNew= true; 
	var search_btn= document.getElementById("search_button"); 
	var search_txt= document.getElementById("search_txt");

	
	$("#search_button").popover({ html : true, trigger: "click"});

	
	search_btn.onClick(function(e){
		isNew= false; 
		$("search_txt").val("Update Search"); 
	});

	
	//<button id="search_button" type="button" class="sticky btn btn-default" data-container="body" data-toggle="popover" data-placement="right" data-content= "alert(widgets.insides();)"

})

