<?php


function upload($folderStoringPath, $image)
{

    $extension = strtolower($image->extension());
    $filename = time() . rand(1, 10000) . "." . $extension;
    $image->move($folderStoringPath, $filename);
    return $filename;


}
