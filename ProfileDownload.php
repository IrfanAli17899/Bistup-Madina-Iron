<?php

$name= $_GET['file'];
$name = 'UGMeritlistforcampuses.pdf';
    header('Content-Description: File Transfer');
    header('Content-Type: application/force-download');
    header("Content-Disposition: attachment; filename=\"" . basename($name) . "\";");
    header('Content-Transfer-Encoding: binary');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($name));
    ob_clean();
    flush();
    readfile("Files/".$name); //showing the path to the server where the file is to be download
    exit;

// header("Content-Type: application/octet-stream");

// $file = $_GET["file"] .".txt";
// header("Content-Disposition: attachment; filename=" . urlencode($file));   
// header("Content-Type: application/octet-stream");
// header("Content-Type: application/download");
// header("Content-Description: File Transfer");            
// header("Content-Length: " . filesize($file));
// flush(); // this doesn't really matter.
// $fp = fopen($file, "r");
// while (!feof($fp))
// {
//     echo fread($fp, 65536);
//     flush(); // this is essential for large downloads
// } 
// fclose($fp);

//






?> 

