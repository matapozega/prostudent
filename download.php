<?php
include_once "konfig.php";


if(isset($_GET['link'])){
	
	 $doc = "doc/";
	 $file = $doc . $_GET['link'];
	 echo $file;
}else{
	header("location: natjecaj17.php");
}


if (file_exists($file)) {
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename='.basename($file));
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($file));
    ob_clean();
    flush();
    readfile($file);
    exit;
}

?>