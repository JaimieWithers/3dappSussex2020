<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Test View</title>
    <style>
        h1 {
            color:black;
            margin-left: 5px;
        }
        h2 {
            color:green;
            margin: 5px;
        }
        p {
            color:black;
            margin-left: 5px;
        }
        .imgBox {
            background-color: green;
            padding: 0.25rem;
            margin-top: 5px;
            margin-bottom: 5px;
            border: 1px solid #dee2e6;
            border-radius: 0.25rem;
            width: 300px;
        }

        .box{
            border: 1px solid rgba(0, 0, 0, 1.0);
            padding: 5px;
            float: left;
            margin: 5px;
            height: 350px;
        }
    </style>

</head>
<body>
    <h1>Second 3D App Test View </h1>
    <p>If you are seeing the test Model 3D Image Data below, then your basic MVC framework is working </p>
    <div class="box">
        <h2><?php echo $model_1 ?></h2>
        <img class="imgBox" src='../3dapp/assignment/application/assets/images/gallery_images/<?php echo $image3D_1?>.JPG'>
    </div>
    <div class="box">
        <h2><?php echo $model_2 ?></h2>
        <img class="imgBox" src='../3dapp/assignment/application/assets/images/gallery_images/<?php echo $image3D_2 ?>.JPG'>
    </div>
    <div class="box">
        <h2><?php echo $model_3 ?></h2>
        <img class="imgBox" src='../3dapp/assignment/application/assets/images/gallery_images/<?php echo $image3D_3 ?>.JPG'>
    </div>
    <div class="box">
        <h2><?php echo $model_4 ?></h2>
        <img class="imgBox" src='../3dapp/assignment/application/assets/images/gallery_images/<?php echo $image3D_4 ?>.JPG'>
    </div>

</body>
</html>