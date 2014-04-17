/**
Class representing the search tiles in the 
Should have a function that adds tiles, updates the view, removes tiles
**/
function tileBoard() {

this.tiles= new Array(); 
this.html= ""; 
this.size= this.tiles.length; 

/**
Adds an instance of tile to the internal array of the tileBoard. 
Also updates the view.
**/
this.addTile = function(tile) {
	
	var index = this.tiles.length; 
	this.tiles[index] = tile; 
	this.html= this.html+ tile.insides(); 


}

/**
Fills the html 
Should be placed in the div that we want the tile to occupy.
**/
this.show= function(div) {
	var show_div = document.getElementById(div); 
	show_div.innerHTML= this.html; 
}




/**
Should be implemented for the final. 
Ignoring it for now
**/
this.removeTile= function(tile) {

}

}