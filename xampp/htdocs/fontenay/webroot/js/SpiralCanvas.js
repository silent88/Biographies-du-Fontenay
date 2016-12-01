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
 * Returns the marker template from the canvas 
 * return element|null
 */
function getMarkerTemplate() {

	svg_element = document.getElementById("circle-template");
	//Get element otherwise return error
	
	if (svg_element === null) {
		alert('Error: SVG year element not found.');
		exit;
	}
	
	return svg_element;
}

/*
 * ObjDef VerticesObj 
 */
function VerticesObj(v_minX, v_maxX, v_minY, v_maxY) {
	this.minX = v_minX;
	this.maxX = v_maxX;
	this.maxY = v_maxY;
	this.minY = v_minY;
};

/*
 * ObjDef VerticePointObj
 */
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
 * ObjDef QuadrantCoordinates
 */
function QuadrantCoordinates(v_center, v_quadrant1, v_quadrant2, v_quadrant3, v_quadrant4) {
	this.center = v_center;
	this.quadrant1 = v_quadrant1;
	this.quadrant2 = v_quadrant2;
	this.quadrant3 = v_quadrant3;
	this.quadrant4 = v_quadrant4;
}

/*
 * Get year center quadrant
 * return QuadrantCoordinates
 */

function getYearCenter(yearNo) {
	yearElement = getYearElement(yearNo);
	
	//From http://stackoverflow.com/questions/1691928/put-label-in-the-center-of-an-svg-path
	var bbox = yearElement.getBBox();
	
	quad = new QuadrantCoordinates();
	
	quad.center = new VerticePointObj(	Math.floor(bbox.x + bbox.width/2.0), 
										Math.floor(bbox.y + bbox.height/2.0));
										
	quad.quadrant1 = new VerticePointObj(	Math.floor(bbox.x + bbox.width*3/4.0), 
											Math.floor(bbox.y + bbox.height*3/4.0));
										
	quad.quadrant2 = new VerticePointObj(	Math.floor(bbox.x + bbox.width/4.0), 
											Math.floor(bbox.y + bbox.height*3/4.0));
										
	quad.quadrant3 = new VerticePointObj(	Math.floor(bbox.x + bbox.width/4.0), 
											Math.floor(bbox.y + bbox.height/4.0));
	
	quad.quadrant4 = new VerticePointObj(	Math.floor(bbox.x + bbox.width*3/4.0), 
											Math.floor(bbox.y + bbox.height/4.0));

	return quad;
}


/*
 * Color a specific yearElement
 * return null
 */
function colorYearElement(yearNo, v_color) {
	getYearElement(yearNo).style.fill = v_color;
}

/*
 * Color the 'Neud Lunaires'
 * return null
 */
function couleurNeudLunaires(v_color) {
	// (18 + 7/12) * N 
	neuds = [18.58, 37.16, 55.75, 74.33, 92.91];
	
	for(i=0; i < neuds.length; i++) {
		colorYearElement(Math.floor(neuds[i]), v_color);
	}
}

/*
 * Add an event marker to the canvas
 */
function addEventMarker(yearNo, eventObj) {
	quad = getYearCenter(yearNo);
	
	new_marker = addSvgMarker(quad.center);
	
	//Add event data
	new_marker.id = "marker_" + eventObj.id;
	new_marker.attributes['data-event-id'].value = eventObj.id;
	new_marker.attributes['data-event-title'].value = eventObj.title;
	//@TODO 
	//Should be new_marker.dataset.eventID 
	
}

/*
 * Add SVG marker at position by cloning template
 * param VerticePointObj
 * return svg_element
 */
function addSvgMarker(point) {
	marker_template = getMarkerTemplate();
	
	marker = marker_template.parentNode.insertBefore(marker_template.cloneNode(true), marker_template);
	
	marker.id = "marker__";
	marker.setAttribute("cx", point.x*-1);
	marker.setAttribute("cy", point.y*-1);
	
	return marker;
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
 * Called when an event marker is clicked
 * return null
 */
function eventMarkerClick(marker) {
	s = "EventID: " + marker.attributes['data-event-id'].value + ", \nEventTitle: " + marker.attributes['data-event-title'].value;
	alert(s);
}

/*
 * ObjDef EventObj
 * Basic event definition
 */
function EventObj(v_id, v_title) {
	this.id = v_id;
	this.title = v_title;
}

function main() {
	e = new EventObj('2', 'Breakdown');
	addEventMarker('72', e);
}

function test_run() {
	
	addEventMarker("25", null);
	addEventMarker("30", null);
	addEventMarker("50", null);
	addEventMarker("70", null);
	addEventMarker("90", null);
	addEventMarker("108", null);
	addEventMarker("8", null);
	
	e = getYearElement("25");
	parseSvgPath(e);
}
