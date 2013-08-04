<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>EICC 2012 Image Gallary</title>

<link rel="stylesheet" href="../css/style.packed.css" type="text/css" />
<link rel="stylesheet" href="../css/imageflow.packed.css" type="text/css" />
<script type="text/javascript" src="../js/imageflow.packed.js"></script>
</head>
<body>
<?php //path to directory to scan
$dir;
$dir=dir("./$folder/.");
echo '<div id="instanz_3" class="imageflow">';
while($image=$dir->read()) {

echo '<img src="'.$image.'" longdesc="'.$image.'" width="600" height="400" alt="" />';
}
$dir->close();
echo '</div>';
 
//get all image files with a .jpg extension.
//$images = glob($directory . "*.jpg");
 
//print each file name
//foreach($images as $image)
//
//echo '<img src="'.$image.'" longdesc="'.$image.'" width="600" height="400" alt="" />';
//
?>
					
</body>
</html>