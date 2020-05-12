<?php
//Specify the path to the thumbnail images
$directory = 'assets/images/gallery_images';
//Only load files with the following extensions
$allowed_extensions = array('jpg', 'jpeg', 'gif', 'png', 'JPG');
//An array used to separate the extenstion from each file
$file_parts = array();
//Response message
$response = "";
//Opens the directory ro parse the images
$dir_handle = opendir($directory);
//Iterate through the files
while ($file = readdir($dir_handle)) {
    //First check for hidden files
    if (substr($file, 0, 1) != '.') {
        //Split each file name to extract the file extension
        $file_components = explode('.', $file);
            //Grab the extension token
        $extension = strtolower(array_pop($file_components));
        //Is this file a valid image. If so, add it to response
        if (in_array($extension, $allowed_extensions))
        {
            //Build a response string using the ~ symbol as a string separator
            $response .=$directory.'/'.$file.'~';
        }
    }
}
closedir($dir_handle);
//return response while removing the last ~ separatpr
echo substr_replace($response,"",-1);
?>