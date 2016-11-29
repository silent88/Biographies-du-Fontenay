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

function VerticesObj(v_minX, v_maxX, v_minY, v_maxY) {
	this.minX = v_minX;
	this.maxX = v_maxX;
	this.maxY = v_maxY;
	this.minY = v_minY;
};

function VerticePointObj(v_x, v_y) {
	this.x = v_x;
	this.y = v_y;
};

/*
 * Parse SVG path to find vertices
 * return vertices
 */
function parseSvgPath(svg_element) {
	 
	path_description = svg_element.attributes['d'].value;
	
	//Don't forget to use 'M' also
	m_start = path_description.indexOf("m");
	m_stop = path_description.indexOf("c");
	z_stop = path_description.indexOf("z");

	m_string = path_description.slice(m_start+2, m_stop);
	c_string = path_description.slice(m_stop+2, z_stop);
	
	z_array = c_string.split(",");
	
	//split each point into x,y
	path_points = new Array;
	for(i=1; i < z_array.length; i++) {
		path_points[i] = z_array[i].split(" ");
	}
	//path_points[i][0] is x, path_points[i][0] is y
	
	//Initialize
	obj_vertices = new VerticesObj();
	
	
	//Find min X
	//Set first point
	minPointX = new VerticePointObj(path_points[1][0], path_points[1][1]);
	for(i=2; i < path_points.length; i++) {
		if (Number(minPointX.x) > Number(path_points[i][0])) {
			minPointX.x = path_points[i][0];
			minPointX.y = path_points[i][1];
		}
	}
	obj_vertices.minX = minPointX;
	
	//Find max X
	//Set first point
	maxPointX = new VerticePointObj(path_points[1][0], path_points[1][1]);
	for(i=2; i < path_points.length; i++) {
		if (Number(maxPointX.x) < Number(path_points[i][0])) {
			maxPointX.x = path_points[i][0];
			maxPointX.y = path_points[i][1];
		}
	}
	obj_vertices.maxX = maxPointX;


	//Find min Y
	//Set first point
	minPointY = new VerticePointObj(path_points[1][0], path_points[1][1]);
	for(i=2; i < path_points.length; i++) {
		if (Number(minPointY.x) > Number(path_points[i][1])) {
			minPointY.x = path_points[i][0];
			minPointY.y = path_points[i][1];
		}
	}
	obj_vertices.minY = minPointY;
	
	//Find max Y
	//Set first point
	maxPointY = new VerticePointObj(path_points[1][0], path_points[1][1]);
	for(i=2; i < path_points.length; i++) {
		if (Number(maxPointY.x) < Number(path_points[i][1])) {
			maxPointY.x = path_points[i][0];
			maxPointY.y = path_points[i][1];
		}
	}
	obj_vertices.maxY = maxPointY;
	
	
	alert(obj_vertices);
	
	return obj_vertices;
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
	e = getYearElement("25");
	parseSvgPath(e);
}

function test_run() {
	e = new EventObj('2', 'Breakdown');
	addEventMarker('72', e);
}
