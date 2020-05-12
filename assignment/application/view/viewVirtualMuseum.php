<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Chairs - Virtual Museum Assignment/application</title>
    <link rel="stylesheet" href="../assignment/application/css/custom.css">

    <link rel="stylesheet" href="../assignment/application/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/e97f93f9b5.js" crossorigin="anonymous"></script>

    <link rel='stylesheet' type='text/css' href='../assignment/application/css/x3dom.css'></link>

</head>

<body>
<!--Logo and Navigation-->
<nav class="navbar navbar-expand-sm navbar-dark navbar_chair_museum">
        <div class="container-fluid">
        
            <!-- Brand -->
            <div class="logo">
                <a class="navbar-brand" href="index.php">
                <h1>Chair</h1><h2>Museum</h2></a>
                <a class="strapline"><small>Sit down, Take a seat and Admire the Ingenuity of Chairs</small>
                </a>
            </div>   
        
            <!-- Collapsible Navbar Menu Icon-->
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarSupportedContent">
                <span class="navbar-toggler-icon"></span>
            </button>
                
            <!-- Link Menu item button to the links class navbar-collapse selector-->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Links -->
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a id="navHome" class="nav-link active" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a id="navModels" class="nav-link" href="#">Models</a>
                    </li>
                </ul>
            </div>
        </div>    
</nav>
<!--Navigation bar end-->
<div class="container-fluid">
<!--Home page-->
<div class="main_contents" id="Home">
    <div class="row">
    <div class="col-sm-12">  
    <div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel">
        <!--Carousel indicators-->
        <ul class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
        </ul>
        <!--Carousel slides-->
        <div class="carousel-inner">
            <div class="carousel-item active" data-interval="6000" data-touch="true">
                <img src="../assignment/application/assets/images/unique chair.jpg" alt="Unique chair">
                <div id="carousel_text" class="carousel-caption">
                   <div class="homeText" id="title_carousel1"></div>
                   <div class="homeText" id="subtitle_carousel1"></div>
                </div>
            </div>
            <div class="carousel-item" data-interval="6000" data-touch="true">
                <img  src="../assignment/application/assets/images/wood.jpg" alt="Lounge chair" >
                <div class="carousel-caption">
                    <div class="homeText" id="title_carousel2"></div>
                    <div class="homeText" id="subtitle_carousel2"></div>
                </div>
            </div>
        </div>
          
              <!-- Left and right controls -->
              <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#myCarousel" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
</div>
</div>  
</div>  
<div class="row">
<div class="col-sm-12">    
    <div class="card bg-light" style="width:100%;">
        <div class="card-body">
            <div id="title_home" class="card-title homeText"></div>
            <div id="home_text" class="homeText"></div>
        </div>
    </div>
</div>
</div>
</div>
<!--Home page end-->

<!--Models - Lounge chair page-->
<div class="main_contents" id="Models">
    <div class="row">    
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body text-center">
                    <div id="chairs">
                        <div id="x3dtitle_lounge" class="card-title"></div>
                        <div class="3DModel">
                            <x3d id="wire">
                                <scene>
                                    <Switch whichChoice="0" id='SceneSwitch'>
                                        <transform>
                                            <inline  nameSpaceName="model" mapDEFToID="true" onclick="animateModel();" url="../assignment/application/assets/x3d/loungechair.x3d"></inline>
                                        </transform>
                                        <transform>
                                            <inline  nameSpaceName="model" mapDEFToID="true" onclick="animateModel();" url="../assignment/application/assets/x3d/desk_chair.x3d"></inline>
                                        </transform>
                                        <transform>
                                            <inline  nameSpaceName="model" mapDEFToID="true" onclick="animateModel();" url="../assignment/application/assets/x3d/childs_chair.x3d"></inline>
                                        </transform>
                                        <transform>
                                            <inline  nameSpaceName="model" mapDEFToID="true" onclick="animateModel();" url="../assignment/application/assets/x3d/dining_chair.x3d"></inline>
                                        </transform>
                                    </switch>
                                </scene>
                            </x3d>
                        </div>
                    </div>
                    <button type="button" id="navLounge" class="btn btn-success btn-responsive" onMouseUp="loungeScene();">Lounge chair</button>
                    <button type="button" id="navDesk" class="btn btn-success btn-responsive" onMouseUp="deskScene();">Desk chair</button>
                    <button type="button" id="navChild" class="btn btn-success btn-responsive" onMouseUP="childScene();">Child's chair</button>
                    <button type="button" id="navDining" class="btn btn-success btn-responsive" onMouseUP="diningScene();">Dining chair</button>
                </div>
            </div>
        </div>  
        <div id="LoungeDescription" class="col-sm-6">
            <div class="card-description" >
                    <div class="card-header text-center">
                        <div class="chairText" id="title_descriptionL"></div>
                    </div>
                    <div id="description_body">
                        <div class="chairText" id="sub_typeL"></div>
                        <div class="chairText" id="Lounge_type"></div>
                        <div class="chairText" id="sub_MaterialL"></div>
                        <div class="chairText" id="Lounge_material"></div>
                        <div class="chairText" id="sub_OriginLounge"></div>
                        <div class="chairText" id="Lounge_origin"></div>
                        <div class="text-right chairText" id="Lounge_gallery"></div>
                    </div>
            </div>
        </div> 
        <!--Lounge chair page end-->
        
        <!--Desk chair page-->
                <div id="DeskDescription" class="col-sm-6">
                    <div class="card-description">
                        <div class="card-header text-center">
                            <div class="chairText" id="title_descriptionD"></div>
                        </div>
                        <div id="description_body">
                            <div class="chairText" id="sub_typeD"></div>
                            <div class="chairText" id="Desk_type"></div>
                            <div class="chairText" id="sub_MaterialD"></div>
                            <div class="chairText" id="Desk_material"></div>
                            <div class="chairText" id="sub_OriginDesk"></div>
                            <div class="chairText" id="Desk_origin"></div>
                            <div class="text-right chairText" id="Desk_gallery"></div>
                        </div>
                </div>
                </div>    
        <!--Desk chair page end-->
        
        <!--Child's chair page-->
                <div id="ChildDescription" class="col-sm-6">
                    <div class="card-description">
                        <div class="card-header text-center">
                            <div id="title_descriptionC"></div>
                        </div>
                        <div class="chairText" id="description_body">
                            <div class="chairText" id="sub_typeC"></div>
                            <div class="chairText" id="Child_type"></div>
                            <div class="chairText" id="sub_MaterialC"></div>
                            <div class="chairText" id="Child_material"></div>
                            <div class="chairText" id="sub_OriginChild"></div>
                            <div class="chairText" id="Child_origin"></div>
                            <div class="text-right chairText" id="Child_gallery"></div>
                        </div>
                </div>
                </div>   
        <!--Child's chair page end-->
        
        <!--Dining chair page-->
                <div id="DiningDescription" class="col-sm-6">
                    <div class="card-description">
                        <div class="card-header text-center">
                            <div id="title_descriptionDin"></div>
                        </div>
                        <div class="chairText" id="description_body">
                            <div class="chairText" id="sub_typeDin"></div>
                            <div class="chairText" id="Dining_type"></div>
                            <div class="chairText" id="sub_MaterialDin"></div>
                            <div class="chairText" id="Dining_material"></div>
                            <div class="chairText" id="sub_OriginDining"></div>
                            <div class="chairText" id="Dining_origin"></div>
                            <div class="text-right chairText" id="Dining_gallery"></div>
                        </div>
                </div>
                </div>     
        <!--Dining chair page end-->
    </div>  
</div>
    <div id="interaction" class="row">
    <div class="col-sm-6">
        <div class="card">
            <div class="card-header">
                <h3>Camera Views</h3>
            </div>
            <div class="card-body">
                    <div class="btn-group" role="group">
                        <button type="button" class="btn btn-outline-light btn-secondary btn-responsive" onclick="camera1()">Camera 1</a>
                        <button type="button" class="btn btn-outline-light btn-secondary btn-responsive" onclick="camera2()">Camera 2</a>
                        <button type="button" class="btn btn-outline-light btn-secondary btn-responsive" onclick="camera3()">Camera 3</a>
                    </div>
            </div>    
        </div>
    </div> 
    <div class="col-sm-6">
        <div class="card">
            <div class="card-header">
                <h3>Visual Change</h3>
            </div>
            <div class="card-body">
                    <div class="btn-group" role="group">
                        <button type="button" class="btn btn-outline-light btn-secondary btn-responsive"  onclick="wireframe()">Wireframe</a>
                        <button type="button" class="btn btn-outline-light btn-secondary btn-responsive"  onclick="Headlight()">Lighting</a>
                        <button type="button" class="btn btn-outline-light btn-secondary btn-responsive" onclick="spin()">Spin</a>
                        <button type="button" class="btn btn-outline-light btn-secondary btn-responsive" onclick="stopRotation()">Stop</a>
                    </div> 
            </div>
        </div> 
    </div>      
    </div>
<!--3D Image gallery-->
    <div class="row">
        <div class="card text-center" style="width:100%;">
        <div class="card-header text-center"><h2>3D Image Gallery</h2></div>
        <div class="card-body text-center"><table id="gallery"></table></div>
        </div>
    </div>
</div>





<nav class="d-block navbar navbar-fixed-bottom navbar-expand-sm navbar-dark navbar_footer">
    <div class="container-fluid">
        <div class="navbar-text float-left copyright">
            <p><span class="align-baseline"></span>&copy 2020 Mobile Web 3D applications </span></p>
        </div> 
        <ul class="navbar-nav">
        <li>
            <a class="nav-link" href="#">Codebase</a>
        </li>
        <li>
            <a class="nav-link" href="#">3ds_max archive</a>
        </li>
        <li>
            <a class="nav-link" href="#">VRML models</a>
        </li>
        </ul>
</nav>  
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../assignment/application/js/jquery-3.2.1.js"></script>
    <script src="../assignment/application/js/popper.min.js"></script>
    <script src="../assignment/application/js/bootstrap.min.js"></script>
    <script src='../assignment/application/js/x3dom.js' ></script>
    <script src="../assignment/application/js/modelInteraction.js"></script>
    <script src='../assignment/application/js/swap_restyle.js' ></script>
    <script src='../assignment/application/js/gallery_generator.js' ></script>
    <script src="../assignment/application/js/getJsonData.js"></script>

</body>
</html>
