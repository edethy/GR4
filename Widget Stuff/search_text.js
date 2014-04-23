$(document).ready(function() {

      var board = new tileBoard(); 
	
	$("#search_button").popover({ 
		html : true, 
		trigger: "click", 
		width: "320px", 
		height: "220px"
	}); 
		
		//.parent().delegate('#cost_tile', 'click', function() {}); 
      	    	
	
	$('body').on('click', function (e) {
    $('[data-toggle="popover"]').each(function () {
        //the 'is' for buttons that trigger popups
        //the 'has' for icons within a button that triggers a popup
        if (!$(this).is(e.target) && $(this).has(e.target).length === 0 && $('.popover').has(e.target).length === 0) {
            $(this).popover('hide');
        }
        					 	
		$("#cost_tile").on("click", function (e) {
			var cost_tile= new tile("Cost", "Free"); 
			board.addTile(cost_tile);
			board.show("tile_board"); 	
			console.log("cost"); 
   	   
		});
					
		$("#location_tile").on("click", function (e) {
			var location_tile= new tile("Location", "02139"); 
			board.addTile(location_tile);
			board.show("tile_board"); 	
			console.log("location"); 
   	   
		});
					
		$("#gender_tile").on("click", function (e) {
			var gender_tile= new tile("Gender", "female"); 
			board.addTile(gender_tile);
			board.show("tile_board"); 	
			console.log("gender"); 
   	   
		});
					
		$("#time_tile").on("click", function (e) {
			var time_tile= new tile("Time", "afternoons"); 
			board.addTile(time_tile);
			board.show("tile_board"); 
			console.log("time"); 	
   	   
		});
					
		$("#age_tile").on("click", function (e) {
			var age_tile= new tile("Age", "10 years"); 
			board.addTile(age_tile);
			board.show("tile_board"); 	
   	   
		});
					
		$("#activity_tile").on("click", function (e) {
			var activity_tile= new tile("Activity", "academics"); 
			board.addTile(activity_tile); 
			board.show("tile_board"); 	
   	   	});
				
    });
    	
});
	
	//tooltips to add text to the icons of the widget board
	/**
	$('#cost_tile').tooltip({
              'placement': 'bottom',
              'title' : 'cost'
    });
    
    $('#cost_tile').tooltip('show');
    **/

})

