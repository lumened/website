/*Linking CSS for the google maps iframe*/

var cssLink = document.createElement("link") 
    		cssLink.href = "iframe.css"; 
    		cssLink .rel = "stylesheet"; 
    		cssLink .type = "text/css"; 
				
				var doc=document.getElementById("edit").contentWindow.document 

    		//Then append child
doc.body.appendChild(cssLink);