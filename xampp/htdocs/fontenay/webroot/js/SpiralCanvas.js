/**
 * SpiralCanvas
 * @author Sven Godo
 * Copyright (c) Atelier du Fontenay
 * Licensed under the MIT License
 */

/*
 * Returns a specific year section from the canvas 
 * return element|null
 */
function getYearElement(yearNo) {

	svg_element = document.getElementById("year_" + yearNo);
	//Get element otherwise return error
	//alert(svg_element);
	
	if (svg_element === null) {
		alert('Error: SVG year element not found.');
		exit;
	}
	
	return svg_element;
}

/*
 * Color a specific yearElement
 * return null
 */
function colorYearElement(yearNo, v_color) {
	getYearElement(yearNo).style.fill = v_color;
}

/*
 * Add an event marker to the canvas
 */
function addEventMarker(yearNo, eventObj) {
	yearElement = getYearElement(yearNo);
	yearElement.addMarker();
	yearElement.marker.add(eventObj);
}

/*
 * Get the person event tree
 * return obj|null
 */
function getPersonEventTree(personId) {
	//AJAX request to get the tree
}

/*
 * Parse the person event tree
 * return obj|null
 */
function parsePersonEventTree(tree) {
	
}

/*
 * Basic event definition
 */
var EventObj = {
		id: '',
		title: ''
	};

function main() {
	
}

function test_run() {
	e = new EventObj('2', 'Breakdown');
	addEventMarker('72', e);
}
