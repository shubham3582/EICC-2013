<?php
$rename = "Anything";
$old_name = 'shubham3582@gmail.com-demo.docx_safe';
$read_extension = explode(".", $old_name);
$ext = $read_extension[2];
if($ext =='docx_safe')
{ $ext='docx';
} 
elseif($ext=='doc_safe') {
	$ext='doc';}
	elseif($ext='pdf_safe'){
	$ext='pdf';
	}
$new_name = $rename.".".$ext;
rename("upload/".$old_name, "upload/".$new_name);

?>