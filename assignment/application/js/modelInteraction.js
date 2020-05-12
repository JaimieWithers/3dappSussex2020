//adapted from example code 'benskitchen.com' and labs  
function loungeScene(){
    nSwitch = 0;
    document.getElementById('SceneSwitch').setAttribute('whichChoice', nSwitch);
}

function deskScene(){
    nSwitch = 1;
    document.getElementById('SceneSwitch').setAttribute('whichChoice', nSwitch);
}

function childScene(){
    nSwitch = 2;
    document.getElementById('SceneSwitch').setAttribute('whichChoice', nSwitch);
}

function diningScene(){
    nSwitch = 3;
    document.getElementById('SceneSwitch').setAttribute('whichChoice', nSwitch);
}

var spinning = false;

function spin()
{
	spinning = !spinning;
	document.getElementById('model__Seat-RotateTimer').setAttribute('loop', spinning.toString());
}

function stopRotation()
{
	spinning = false;
	document.getElementById('model__Seat-RotateTimer').setAttribute('loop', spinning.toString());
}

function animateModel()
{
    if(document.getElementById('model__Seat-RotateTimer').getAttribute('loop')!= 'true')
        document.getElementById('model__Seat-RotateTimer').setAttribute('loop', 'true');
    else
        document.getElementById('model__Seat-RotateTimer').setAttribute('loop', 'false');
}

function wireframe()
{
	var e = document.getElementById('wire');
	e.runtime.togglePoints(true);
    e.runtime.togglePoints(true);
}

var Spotlight = true;

function Headlight()
{
	Spotlight = !Spotlight;
    document.getElementById('model__NavInfo001').setAttribute('headlight', Spotlight.toString());
    console.log(Spotlight);
}



function camera1()
{
   document.getElementById('model__PhysCamera001').setAttribute('bind', 'true');

}
function camera2()
{
    document.getElementById('model__PhysCamera002').setAttribute('bind', 'true');


}

function camera3()
{
    document.getElementById('model__PhysCamera003').setAttribute('bind', 'true');

 
}




