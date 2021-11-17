<?php

define('_PATH', dirname(__FILE__));

if(isset($_GET['zip'])){
	$zip=$_GET['zip'];
}else{
	echo "no item that need to be zip";
	return 0;
}

$filename = $zip;
$zip = new ZipArchive;
$res = $zip->open($filename);
if ($res === TRUE) {

 $path = _PATH;
 
 $zip->extractTo($path);
 $zip->close();

 echo 'File has been successfully Unzipped! Name file : '.$filename;
 unlink($filename);
} else {
 echo 'Im sorry, failed to zip! Unknown problem detected';
}
?>