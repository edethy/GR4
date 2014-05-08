	
var result_html = 	'<div class="row">'+
						'<div class="col-md-3">'+
							'<div class="logo_div"></div>'+
							'<div style="font-size:25pt; margin-left:15%; color:yellow">'+
								'<span height="250">&#9733;</span><span>&#9733;</span><span>&#9733;</span><span>&#9733;</span><span>&#9733;</span>'+
							'</div>'+
						'</div>'+
						'<div class="col-md-8">'+
							'<div class="row" style="height:100%;">'+
								'<div class="title_div"></div>'+
								'<div class="location_div"></div>'+
								'<div class="description_div"></div>'+
							'</div>'+										
						'</div>'+
						'<div class="col-md-1">'+
							'<button type="button" class="btn btn-default btnAddToFavorites glyphicon glyphicon-heart"></button>'+
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

//updates the dictionary that keeps track of what programs are favorites
function favorites_html(newList) {
	var outer_row = $('<div></div'); 	
	var arrayLength = newList.length;
	for (var i = 0; i < arrayLength; i++) {
	
	  	//making inner_row	
	   var inner_row= $('<div></div'); 
	   inner_row.attr('class', 'thumbnail program'); 
	   inner_row.attr('id', newList[i]); 
	  
	   //getting everything from the dictionaries
	   var logo= logo_result[ newList[i]]; 
	   var website=  website_result[newList[i]]; 
	   var description= description_result[newList[i]]; 
	   var location= location_result[newList[i]]; 
	   
	   
	   inner_row.append(result_html); 
	   
	   //set title
	   var titleDiv= inner_row.find(".title_div"); 
	   var newTitle = $('<h3></h3>');
	   newTitle.text(newList[i]); 
	   titleDiv.append(newTitle); 
	   
	   //set logo
	   var logoDiv= inner_row.find(".logo_div"); 
	   var newLogo = $('<img>'); 
	   newLogo.attr('class', 'result_img logo_div'); 
	   newLogo.attr('id', newList[i]+'_logo'); 
	   newLogo.attr('src', logo);  
	   logoDiv.append(newLogo); 

	   //set website
	   var newWebsite = $('<a>Learn More</a>'); 
	   newWebsite.attr('id', newList[i]+'_website'); 
	   newWebsite.attr('href',website); 
	   
	   //set description
	   var descriptionDiv= inner_row.find('.description_div'); 
	   var newDescription= $('<div></div>');
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
	  
	}
	
	return outer_row;
}

console.log(favorites_html(['YMCA Cambridge', 'Amphibious Achievement', 'Leadership Training Institute'])); 
$("#results_container").append(favorites_html(['YMCA Cambridge', 'Amphibious Achievement', 'Leadership Training Institute']));  
