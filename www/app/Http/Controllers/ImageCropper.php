<?php
function imageType($path) {
    $mime = mime_content_type($path);
    $png = false;
    switch($mime) {
        case 'image/png':
            $img = imagecreatefrompng($path);
            $png = true;
            break;
        case 'image/gif':
            $img = imagecreatefromgif($path);
            break;
        case 'image/jpeg':
            $img = imagecreatefromjpeg($path);
            break;
        case 'image/bmp':
            $img = imagecreatefrombmp($path);
            break;
        default:
            $img = null;
    }
    return $png;
}

function resizeShit($fn, $out, $idealWidth, $idealHeight){
    $png = imageType($fn);
    $im = ($png) ? imagecreatefrompng($fn) : imagecreatefromjpeg($fn);

    $originalWidth=imagesx($im);
    $originalHeight=imagesy($im);

    /*if($originalHeight>$originalWidth){
        $temp = $idealWidth;
        $idealWidth = $idealHeight;
        $idealHeight = $idealWidth;
    }*/

    $ratio = $originalWidth / $originalHeight;
    $newWidth = $idealWidth;
    $newHeight = round($newWidth / $ratio);

    if($newHeight < $idealHeight){
        $ratio = $idealHeight/$newHeight;
        $newHeight = $idealHeight;
        $newWidth = $newWidth * $ratio;
    }

    $ni = imagecreatetruecolor($newWidth, $newHeight);
    if(!$png)
        imagecopyresampled($ni, $im, 0, 0, 0, 0, $newWidth, $newHeight, $originalWidth, $originalHeight);
    else {
        imagealphablending( $ni, false );
        imagesavealpha( $ni, true );
        imagecopyresampled($ni, $im, 0, 0, 0, 0, $newWidth, $newHeight, $originalWidth, $originalHeight);
    }

    if ($png)
        imagepng($ni, $out);
    else if (defined("USE_WEBP")) imagewebp($ni, $out);
    else imagejpeg($ni, $out);
    //imagejpeg($ni, $out);
}

function ImageCropper($originalWidth, $originalHeight, $resWidth = 3000, $resHeight = 3000, $filename, $miniature = false, $miniature_Width = 500, $miniature_Height = 500) {
    if($originalWidth > $resWidth || $originalHeight > $resHeight) {
        list($width, $height, $type, $attr) = getimagesize(public_path().'/images/uploaded/'.$filename);
        // decide, whether the resize to fit height or width, so that when user crops the photo, it has ideal dimensions

        /*
            if(($resWidth > $resHeight) && ($resWidth / ($width / $resWidth)) >= $resHeight ) {
                $resHeight = 3000;
            } else if(($resWidth < $resHeight) && ($resHeight / ($width / $resWidth)) >= $resHeight ) {
                $resHeight = 3000;
            } else {
                $resWidth = 3000;
            }
           */
            /*if(($resWidth > $resHeight) && ($height / ($width / $resWidth)) >= $resHeight ) {
                $resHeight = 3000;
            } else {
                $resWidth = 3000;
            }*/

           /* $ratio = $originalWidth/$originalHeight;
            $resHeight = $resWidth / $ratio;
*/
            $idealWidth=$resWidth;
            $idealHeight=$resHeight;

            resizeShit("images/uploaded/" . $filename, "images/uploaded/" . $filename, $idealWidth, $idealHeight);

        //resizeImage("images/uploaded/" . $filename, "images/uploaded/" . $filename, $newWidth, $ow, $oh, $newHeight, false);

        if($miniature) {
            $ow = 0;
            $oh = 0;
            resizeImage("images/uploaded/" . $filename, "images/uploaded/mini/" . $filename, $miniature_Width, $ow, $oh, $miniature_Height, false);
        }

        return true;
    }
}

?>