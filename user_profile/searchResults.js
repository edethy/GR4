var favorite_html= '<div class="col-md-3">'+     		
						'<div class="favorite_tile thumbnail">'+
							'<div class="favorite_tile_image row"></div>'+
							'<div class="favorite_tile_name row"></div>'+
							'<span class="favorite-hover-x glyphicon glyphicon-trash"></span> '+
						'</div>'+
					'</div>'; 
					    
var result_html = 	'<div class="row">'+
						'<div class="col-md-3">'+
							'<div class="logo_div"></div>'+
							'<div style="font-size:15pt; margin-left:5%; color:gold; margin-top: -10%;">'+
								'<span height="250">&#9733;</span><span>&#9733;</span><span>&#9733;</span><span>&#9733;</span><span>&#9733;</span>'+
							'</div>'+
						'</div>'+
						'<div class="col-md-7">'+
							'<div class="row" style="height:100%;">'+
								'<div class="title_div"></div>'+
								'<div class="location_div"></div>'+
								'<div class="description_div"></div>'+
							'</div>'+										
						'</div>'+
						'<div class="col-md-1" style="padding-left:13%">'+
							'<button type="button" class="btnAddToFavorites btn btn-default glyphicon glyphicon-heart"></button>'+
						'</div>'+
					'</div>'; 
			

var program_logo = [];
var program_location= []; 
var program_description= []; 
var program_website= []; 
var results_container= document.getElementById("#results_container"); 

//WEBSITE values
program_website.push({
    key:   "Amphibious Achievement",
    value: "http://amphibious.mit.edu"
});
program_website.push({
    key:   "YMCA Cambridge",
    value: "http://www.cambridgeymca.org/"
});
program_website.push({
    key:   "Leadership Training Institute",
    value: "http://lti.mit.edu/"
});
program_website.push({
    key:   "MITES: Minority Introduction to Engineering & Science",
    value: "http://mit.edu/mites"
});
var website_result = {};
for(var i = 0; i < program_website.length; i++)
{
    website_result[program_website[i].key] = program_website[i].value;
}


//LOGO values
program_logo.push({
    key:   "Amphibious Achievement",
    value: "../program_logos/amphibious.png"
});
program_logo.push({
    key:   "YMCA Cambridge",
    value: "../program_logos/ymca.jpg"
});
program_logo.push({
    key:   "Leadership Training Institute",
    value: "../program_logos/lti.png"
});
program_logo.push({
    key:   "MITES: Minority Introduction to Engineering & Science",
    value: "../program_logos/mites.png"
});
var logo_result = {};
for(var i = 0; i < program_logo.length; i++)
{
    logo_result[program_logo[i].key] = program_logo[i].value;
}

//LOCATION values
program_location.push({
    key:   "Amphibious Achievement",
    value: "Cambridge, MA"
});
program_location.push({
    key:   "YMCA Cambridge",
    value: "02139"
});
program_location.push({
    key:   "Leadership Training Institute",
    value: "Cambridge, MA"
});
program_location.push({
    key:   "MITES: Minority Introduction to Engineering & Science",
    value: "Cambridge, MA"
});

var location_result = {};
for(var i = 0; i < program_location.length; i++)
{
    location_result[program_location[i].key] = program_location[i].value;
}

//DESCRIPTION values
program_description.push({
    key:   "Amphibious Achievement",
    value: "Amphibious Achievement is an MIT-student run mentorship program for inner-city high school students. In the program, students learn how to row, swim, and becoming academically on-track at no cost."
});
program_description.push({
    key:   "YMCA Cambridge",
    value: "We offer our community a wide variety of opportunities to enrich the mind, body and spirit."
});
program_description.push({
    key:   "Leadership Training Institute",
    value: "The Leadership Training Institute is a program for high school students that helps develop leadership skills. Throughout our 12-week program, students implement what they learn as they work to create a sustainable community service project."
});
program_description.push({
    key:   "MITES: Minority Introduction to Engineering & Science",
    value: "MITES offers three rigorous residential and on-line, academic enrichment programs for promising high school juniors who are interested in studying and exploring careers in science and engineering."
});

var description_result = {};
for(var i = 0; i < program_description.length; i++)
{
    description_result[program_description[i].key] = program_description[i].value;
}

//dictionary to keep track of favorites
var favorites_dict= []; 	
var favorites_list={}; 

function add_favorite(title, isFav) {
	favorites_dict[title]= isFav; 
	var website_result = {};
	
}


function hide_NoResults() {
	
	console.log('hiding'); 
	var noresults_well = $('document').find($('#noresults_container')); 
	console.log(noresults_well); 
	noresults_well.css('opacity', '0'); 
	noresults_well.css('height', '0px'); 
}

function show_NoResults() {
	var noresults_well = $('document').find('noresults_container'); 
	noresults_well.css('opacity', '1'); 
	noresults_well.css('height', '38px'); 
}

//updates the dictionary that keeps track of what programs are favorites
function results_html(newList) {
	var outer_row = $('<div></div'); 	
	var arrayLength = newList.length;
	
	if (arrayLength==0) {
		show_NoResults(); 
	} else {
		console.log('starting to hide'); 
		hide_NoResults(); 
		for (var i = 0; i < arrayLength; i++) {
			
			
			//making inner_row	
		   var inner_row= $('<div></div'); 
		   inner_row.attr('class', 'thumbnail program'); 
		   inner_row.attr('id', newList[i]+'_container'); 
	  
		   //getting everything from the dictionaries
		   var logo= logo_result[ newList[i]]; 
		   var website=  website_result[newList[i]]; 
		   var description= description_result[newList[i]]; 
		   var location= location_result[newList[i]]; 
	   
	   
		   inner_row.append(result_html); 

		   //set title
		   var titleDiv= inner_row.find(".title_div"); 
		   var newTitle = $('<h3></h3>');
		   newTitle.css('margin-top', '2%'); 
		   newTitle.css('margin-bottom', '1%'); 
		   newTitle.text(newList[i]); 
		   titleDiv.append(newTitle); 
	   
		   //set logo
		   var logoDiv= inner_row.find(".logo_div"); 
		   var newLogo = $('<img>'); 
		   newLogo.attr('class', 'result_img logo_div'); 
		   newLogo.attr('id', newList[i]+'_logo'); 
		   newLogo.attr('src', logo);  
		   newLogo.css('padding-bottom', '20%'); 
		   newLogo.css('padding-left', '15%'); 
		   logoDiv.append(newLogo); 

		   //set website
		   var newWebsite = $('<a>Learn More</a>'); 
		   newWebsite.attr('id', newList[i]+'_website'); 
		   newWebsite.attr('href',website); 
	   
		   //set description
		   var descriptionDiv= inner_row.find('.description_div'); 
		   var newDescription= $('<p></p>');
		   newDescription.attr('id', newList[i]+'_description');
		   newDescription.text(description); 
		   newDescription.append(newWebsite);   
		   descriptionDiv.append(newDescription); 
	   
		   //set location
		   var locationDiv= inner_row.find('.location_div'); 
		   var newLocation= $('<div id="'+newList[i]+'_location"></div>'); 
		   newLocation.text(location);  
		   locationDiv.append(newLocation); 
	   
		
			outer_row.append(inner_row); 
			add_favorite(newList[i], false); 
	  
		}
	}
	
	return outer_row;
}

//adds a favorite to the favorites bar
function addFavorite(newFav) {

	//getting everything from the dictionaries
	var logo= logo_result[newFav]; 
	var website=  website_result[newFav]; 
	
	var container= $('<div></div>'); 
	container.attr('id', newFav+'_favTile'); 
	container.append(favorite_html); 
	
	//add image
	var imageDiv= container.find('.favorite_tile_image'); 
	var newImage= $('<img>'); 
	newImage.attr('id', newFav+'favImage'); 
	newImage.attr('src', logo); 
	imageDiv.append(newImage); 
	
	
	//add name with link to website
	var titleDiv= container.find('.favorite_tile_name'); 
	var newTitleLink= $('<a style="color:#003366;"></a>'); 
	var newTitle= $('<h4></h4>'); 
	newTitle.text(newFav); 
	newTitleLink.append(newTitle); 
	titleDiv.append(newTitleLink); 
	
	//add id to the button
	var deleteButton= container.find('.favorite-hover-x.glyphicon.glyphicon-trash'); 
	deleteButton.attr('id', newFav); 
	deleteButton.css('cursor', 'pointer'); 
	deleteButton.css('font-size', '15pt'); 
	deleteButton.css('padding-left', '10%'); 
	deleteButton.css('padding-top', '3%'); 

	
	return container; 

}



$(document).ready( function() {

//deleting a favorite
function deleteFavorite(oldFav) {
	
	console.log('deleting'); 
	var toDelete = document.getElementById(oldFav+'_favTile');
	toDelete.parentNode.removeChild(toDelete);

}

//listener to delete a favorite
$('.favorite-hover-x.glyphicon.glyphicon-trash').on('click', function(e) {
	var program= $(e.target).attr('id'); 
	deleteFavorite(program); 	
	
}); 





	//favorites and toggles the heart button
	$('button.btnAddToFavorites.btn.btn-default.glyphicon.glyphicon-heart').on('click', function(e) {
		var thisBtn= e.target; 
		var title= $(thisBtn).attr('id');
		console.log(favorites_dict);  
		console.log(title);
		
		//have to be able to get title
		if (favorites_dict[title]==false){
			$(thisBtn).css("background-color","red"); 
			$(thisBtn).css("color","white");
			favorites_dict[title]= true;  
			console.log(favorites_dict); 
		} else {
			$(thisBtn).css("background-color","white"); 
			$(thisBtn).css("color","black");
			favorites_dict[title]=false; 
		}
		 
	}); 
}); 

//console.log(_html(['YMCA Cambridge', 'Amphibious Achievement', 'Leadership Training Institute'])); 
//$("#results_container").append(search_html(['YMCA Cambridge', 'Amphibious Achievement', 'Leadership Training Institute']));  
