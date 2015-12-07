<?php
// An array with the names of the images.
$images = array("red", "blue");
  

// Was the form submitted?
if(!empty($_POST['input']))
{
  // $type is the variable that stores the data that was sent from the browser.
  // htmlentities() is used for security reasons.
 
  $type = htmlentities(strtolower($_POST['input']));
 
  // if the image exists in the array
  if (in_array($type, $images ))
  {
     // the $image_name variable stores its’ full name with extension.
    $image_name = 'images/'. $type.'.png';
    // and the script echoes the image.
    echo '<img src=" '.$image_name.' ">';
  }
  else
  {
    // An error message. 
    echo 'There is no image with this name. Please choose another image.';
  }
}
?>
