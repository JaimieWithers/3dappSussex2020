// JavaScript Gallery Generator

	// Create the XMLHttpRequest Object for communicating with the web server
	var xmlHttp = new XMLHttpRequest ();
	
	// Stores newly generated gallery HTML code
	var htmlCode = "";
	// Temporarily stores server response while code is generated
	var response;
$(document).ready(function() {
	// Set up a path variable to the PHP function that reads the image directory to find the thumbnail file names
	var send = "application/hook.php";
	// Open the connection to the web server
	xmlHttp.open("GET", send, true);
	// Tell the server that the client has no outgoing message, i.e. we are sending nothing to the server
	xmlHttp.send(null);
	// Check we get a valid server response
	xmlHttp.onreadystatechange = function() {
		if(xmlHttp.readyState == 4) {
			// Response handler code
			//alert(xmlHttp.responseText);
			response = xmlHttp.responseText.split("~");
			// Loop round the response array
			for (var i=0;i<response.length;i++) {
				// Handeler to build the HTML string
				// Use this to provide a link to the image
				htmlCode += '<a href="../assignment/application/'+ response[i] + '">';
				htmlCode += '<img class="card-img-top img-thumbnail" src="../assignment/application/' + response[i] + '"/>';
				htmlCode += '</a>';	
			
				
			}
			
			// Return the HTML string to each of the 4 3D App element blocks
			document.getElementById('gallery').innerHTML = htmlCode;
		}
	}
});
