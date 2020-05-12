<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>JSON Sample</title>
</head>
<body>

    <div id="placeholder"></div>

    <script src="../assignment/application/js/jquery-3.2.1.js"></script>
    <script>
	// Use a relative path so that it works on the ITS Web Server, 
    // or http:/.pageTextData.sussex.ac.uk/~your_user_name/[insert_rest_of_path]/[php_function]
    // A localhost path like below wobn't work on the ITS server:
    // $.getJSON('http://localhost:8888/lab7/part_./model/createJson.php', function(data) {
	$.getJSON('../3dapp/assignment/application/model/creatjson', function(data) {
  	console.log(data);
        var output="<ul>";
        for (var i in data.pageTextData) {
            output+="<li>" + data.pageTextData[i].title + "--" + data.pageTextData[i].subtitle + "--" + data.pageTextData[i].modelDescription +"--" + data.pageTextData[i].galleryTitle +"--" + data.pageTextData[i].x3dModelTitle +"--" + data.pageTextData[i].x3dCreation +"--" + data.pageTextData[i].subtitleType +"--" + data.pageTextData[i].descriptionType +"--" + data.pageTextData[i].subtitleMaterials +"--" + data.pageTextData[i].descriptionMaterials +"--" + data.pageTextData[i].subtitleOrigin +"--" + data.pageTextData[i].descriptionOrigin +"--" + data.pageTextData[i].subtitleGallery+"</li>";
        }

        output+="</ul>";
        console.log(output);
        // Assign HTML to the placeholder tag yuisnbg JQuery .htnl() method
        $('#placeholder').html(output);
       
        // Alternatively, you can use the JavaScript document.getElelementById() method
        //document.getElementById("placeholder").innerHTML=output;
  	});
    </script>
</body>
</html>