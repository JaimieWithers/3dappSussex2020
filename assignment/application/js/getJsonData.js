//Javascript Document

$(document).ready(function(){

	var objID = 0;
	update(objID);
	
	//Update HTML page with new cultural object data from the AJAX request

	$( "#lounge" ).click(function() {
		update(objID=3);
	});
	$( "#desk" ).click(function() {
		update(objID=4);
	});
	$( "#child" ).click(function() {
		update(objID=5);
	});
	$( "#dining" ).click(function() {
		update(objID=6);
    });
});
    function update(objID) {
    //AJAX service request to get the main text data from the json data store
    $.getJSON('../assignment/application/model/data.json', function(jsonObj){
        console.log(jsonObj);
        //Get the homepage main text data
        $('#title_carousel1').html('<h2>' + jsonObj.pageTextData[0].title + '<h2>');
        $('#subtitle_carousel1').html('<h4>' + jsonObj.pageTextData[0].subtitle + '<h4>');
        $('#title_carousel2').html('<h2>' + jsonObj.pageTextData[1].title + '<h2>');
        $('#subtitle_carousel2').html('<h4>' + jsonObj.pageTextData[1].subtitle + '<h4>');
        $('#title_home').html('<h3>' + jsonObj.pageTextData[2].title + '<h3>');
        $('#home_text').html('<p>' + jsonObj.pageTextData[2].modelDescription + '<p>');

        //Galley title
        $('#Gallery_title').html('<h2>' + jsonObj.pageTextData[3].galleryTitle + '<h2>');

        //x3d
        $('#x3dcreation').html('<p>' + jsonObj.pageTextData[4].x3dCreation + '<p>');

        //Lounge chair page
        //x3d
        $('#x3dtitle_lounge').html('<h2>' + jsonObj.pageTextData[4].x3dModelTitle + '<h2>');
        //description
        $('#title_descriptionL').html('<h3>' + jsonObj.pageTextData[4].title + '<h3>');
        $('#sub_typeL').html('<h3>' + jsonObj.pageTextData[4].subtitleType + '<h3>');
        $('#sub_MaterialL').html('<h3>' + jsonObj.pageTextData[4].subtitleMaterials + '<h3>');
        $('#Lounge_type').html('<p>' + jsonObj.pageTextData[4].descriptionType + '<p>');
        $('#Lounge_material').html('<p>' + jsonObj.pageTextData[4].descriptionMaterials + '<p>');
        $('#sub_OriginLounge').html('<h3>' + jsonObj.pageTextData[4].subtitleOrigin + '<h3>');
        $('#Lounge_origin').html('<p>' + jsonObj.pageTextData[4].descriptionOrigin + '<p>');
        $('#Lounge_gallery').html('<h3>' + jsonObj.pageTextData[4].subtitleGallery + '<h3>');

        //Desk chair
        //x3d
        $('#x3dtitle_desk').html('<h2>' + jsonObj.pageTextData[5].x3dModelTitle + '<h2>');
        //description
        $('#title_descriptionD').html('<h3>' + jsonObj.pageTextData[5].title + '<h3>');
        $('#sub_typeD').html('<h3>' + jsonObj.pageTextData[5].subtitleType + '<h3>');
        $('#sub_MaterialD').html('<h3>' + jsonObj.pageTextData[5].subtitleMaterials + '<h3>');
        $('#Desk_type').html('<p>' + jsonObj.pageTextData[5].descriptionType + '<p>');
        $('#Desk_material').html('<p>' + jsonObj.pageTextData[5].descriptionMaterials + '<p>');
        $('#sub_OriginDesk').html('<h3>' + jsonObj.pageTextData[5].subtitleOrigin + '<h3>');
        $('#Desk_origin').html('<p>' + jsonObj.pageTextData[5].descriptionOrigin + '<p>');
        $('#Desk_gallery').html('<h3>' + jsonObj.pageTextData[5].subtitleGallery + '<h3>');

        //Child chair
        //x3d
        $('#x3dtitle_child').html('<h2>' + jsonObj.pageTextData[6].x3dModelTitle + '<h2>');
        //description
        $('#title_descriptionC').html('<h3>' + jsonObj.pageTextData[6].title + '<h3>');
        $('#sub_typeC').html('<h3>' + jsonObj.pageTextData[6].subtitleType + '<h3>');
        $('#sub_MaterialC').html('<h3>' + jsonObj.pageTextData[6].subtitleMaterials + '<h3>');
        $('#Child_type').html('<p>' + jsonObj.pageTextData[6].descriptionType + '<p>');
        $('#Child_material').html('<p>' + jsonObj.pageTextData[6].descriptionMaterials + '<p>');
        $('#sub_OriginChild').html('<h3>' + jsonObj.pageTextData[6].subtitleOrigin + '<h3>');
        $('#Child_origin').html('<p>' + jsonObj.pageTextData[6].descriptionOrigin + '<p>');
        $('#Child_gallery').html('<h3>' + jsonObj.pageTextData[6].subtitleGallery + '<h3>');

        //Dining chair
        //x3d
        $('#x3dtitle_dining').html('<h2>' + jsonObj.pageTextData[7].x3dModelTitle + '<h2>');
        //description
        $('#title_descriptionDin').html('<h3>' + jsonObj.pageTextData[7].title + '<h3>');
        $('#sub_typeDin').html('<h3>' + jsonObj.pageTextData[7].subtitleType + '<h3>');
        $('#sub_MaterialDin').html('<h3>' + jsonObj.pageTextData[7].subtitleMaterials + '<h3>');
        $('#Dining_type').html('<p>' + jsonObj.pageTextData[7].descriptionType + '<p>');
        $('#Dining_material').html('<p>' + jsonObj.pageTextData[7].descriptionMaterials + '<p>');
        $('#sub_OriginDining').html('<h3>' + jsonObj.pageTextData[7].subtitleOrigin + '<h3>');
        $('#Dining_origin').html('<p>' + jsonObj.pageTextData[7].descriptionOrigin + '<p>');
        $('#Dining_gallery').html('<h3>' + jsonObj.pageTextData[7].subtitleGallery + '<h3>');

        $('#lounge').attr('src', jsonObj.pageTextData[4].imageUrl);
		$('#desk').attr('src', jsonObj.pageTextData[5].imageUrl);
		$('#child').attr('src', jsonObj.pageTextData[6].imageUrl);
		$('#dining').attr('src', jsonObj.pageTextData[7].imageUrl);
		

    });
}
