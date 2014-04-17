$(document).ready(function() {
	
	$("#search_button").popover({ html : true, trigger: "click", width: "320px", height: "220px"});

	
	//$("#search_button").on("click", function (e) {
   	  //  var $target = $(e.target),
       // isPopover = $(e.target).is('#search_button'); 
        //inPopover = $(e.target).closest('.popover').length > 0; 
    
   		 //hide only if clicked on button or inside popover
    	//if (!isPopover && !inPopover) $popover.popover('hide');
	//});

	
	//<button id="search_button" type="button" class="sticky btn btn-default" data-container="body" data-toggle="popover" data-placement="right" data-content= "alert(widgets.insides();)"

})

