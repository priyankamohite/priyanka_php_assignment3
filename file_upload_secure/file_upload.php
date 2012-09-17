<?php

    $validFiles = array(
    'image/png',
    'image/x-png',
    'image/gif',
    'image/jpeg',
    'image/pjpeg'
);

    $image= $_FILES['upfile'];

    if(!in_array($image['type'], $validFiles)) {
    echo "You are trying to upload invalid file";
}
    echo "<br/> Your file type is..... <br/>";
    echo $image['type'];

?>

