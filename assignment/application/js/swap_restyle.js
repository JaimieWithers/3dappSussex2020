
// JavaScript Document
var counter = 0;
$(document).ready(function() {
	
	selectPage();
	selectModel();

	function selectPage() {

		$('#Home').show();
		$('#Models').hide();
		$('#interaction').hide();
		$('#LoungeDescription').hide();
		$('#DeskDescription').hide(); 
		$('#ChildDescription').hide(); 
		$('#DiningDescription').hide(); 


		$('#navHome').click(function(){
			$('#Home').show();
			$('#Models').hide();
			$('#interaction').hide();
			$('#LoungeDescription').hide();
			$('#DeskDescription').hide(); 
			$('#ChildDescription').hide(); 
			$('#DiningDescription').hide(); 	  
		});

		$('#navModels').click(function(){
			$('#Home').hide();
			$('#Models').show();
			$('#interaction').show(); 
			$('#LoungeDescription').show();
			$('#DeskDescription').hide(); 
			$('#ChildDescription').hide(); 
			$('#DiningDescription').hide(); 
		});
	}

	function selectModel() {

		$('#navLounge').click(function(){
			$('#Lounge').show();
			$('#Desk').hide();
			$('#Child').hide();
			$('#Dining').hide();
			$('#interaction').show(); 
			$('#LoungeDescription').show();
			$('#DeskDescription').hide(); 
			$('#ChildDescription').hide(); 
			$('#DiningDescription').hide(); 
		});

		$('#navDesk').click(function(){
			$('#Lounge').hide();
			$('#Desk').show();
			$('#Child').hide();
			$('#Dining').hide();
			$('#interaction').show(); 
			$('#LoungeDescription').hide();
			$('#DeskDescription').show(); 
			$('#ChildDescription').hide(); 
			$('#DiningDescription').hide();  	  	  
		});

		$('#navChild').click(function(){
			$('#Lounge').hide();
			$('#Desk').hide();
			$('#Child').show();
			$('#Dining').hide();
			$('#interaction').show(); 
			$('#LoungeDescription').hide();
			$('#DeskDescription').hide(); 
			$('#ChildDescription').show(); 
			$('#DiningDescription').hide();	   
		});

		$('#navDining').click(function(){
			$('#Lounge').hide();
			$('#Desk').hide();
			$('#Child').hide();
			$('#Dining').show();
			$('#interaction').show(); 
			$('#LoungeDescription').hide();
			$('#DeskDescription').hide(); 
			$('#ChildDescription').hide(); 
			$('#DiningDescription').show();	   
		});
	}

});


