<?php 
set_time_limit(0);

$file = 'http://markdesign.net/gianni/.dev/upload.zip';
$newfile = 'upload.zip';

if ( copy($file, $newfile) ) {
    echo "Copy success!";
}else{
    echo "Copy failed.";
}

?>