<?php
use Illuminate\Support\Facades\Storage;

function printMe(): string
{
    return"hello bangladesh";
}
function handleJpgPhoto($imgFile, $folderName){
    $imageHeight = getimagesize($imgFile)[1];
    $imageWidth = getimagesize($imgFile)[0];
    $imageSize = filesize($imgFile)/1012;
    $image = $imgFile->store("public/".$folderName);
    $imageBaseName=explode("/", $image)[2];
    $imageName = explode('.',explode("/", $image)[2])[0];
    $imageLocationBefore = public_path("storage/".$folderName."/".$imageName.".jpg");

    $imageLocationAfter = public_path('storage/'.$folderName.'/'.$imageName.".webp");
    $img = imagecreatefromjpeg($imageLocationBefore);
    imagepalettetotruecolor($img);
    imagealphablending($img, true);
    imagesavealpha($img, true);
    imagewebp($img, $imageLocationAfter, 40);
    Storage::delete("public/".$folderName."/".$imageBaseName);
    return "storage/".$imageName.".webp";
}

function handlePngPhoto($imgFile, $folderName){
    $imageHeight = getimagesize($imgFile)[1];
    $imageWidth = getimagesize($imgFile)[0];
    $imageSize = filesize($imgFile)/1012;
    $image = $imgFile->store("public/".$folderName);
    $imageBaseName=explode("/", $image)[2];
    $imageName = explode('.',explode("/", $image)[2])[0];
    $imageLocationBefore = public_path("storage/".$folderName."/".$imageName.".png");

    $imageLocationAfter = public_path('storage/'.$folderName.'/'.$imageName.".webp");
    $img = imagecreatefrompng($imageLocationBefore);
    imagepalettetotruecolor($img);
    imagealphablending($img, true);
    imagesavealpha($img, true);
    imagewebp($img, $imageLocationAfter, 40);
    Storage::delete("public/".$folderName."/".$imageBaseName);
    return "storage/".$imageName.".webp";
}
