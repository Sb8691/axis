<?php


    function processFile($file)
    {
        $png = GetImage($file);
        $ok = 1;
        $f["blabla"] = $file;
        $params = array();
        $ow = 0;
        $oh = 0;
        $tw = 0;
        $th = 0;
        list($originalWidth, $originalHeight, $tpe, $attr) = getimagesize("images/uploaded/" . $file);
        resizeImage("images/uploaded/" . $file, "images/uploaded/mini/" . $file, 450, $ow, $oh, 400, $png);
        $params["or_width"] = ceil($originalWidth);
        $params["or_height"] = ceil($originalHeight);
        $params["width"] = ceil($ow);
        $params["height"] = ceil($oh);
        $params["size"] = filesize("images/uploaded/mini/" . $file);
        //$params["mime"]=$mime;
        // $params["extension"]=$ext;
        // $params["type"]=$type;
        $params["url"] = "images/uploaded/mini/" . $file;
        return json_encode($params);
    }

    function GetImage($path) {
        $mime = mime_content_type("images/uploaded/".$path);
        $png = false;
        switch($mime) {
            case 'image/png':
                $img = imagecreatefrompng("images/uploaded/".$path);
                $png = true;
                break;
            case 'image/gif':
                $img = imagecreatefromgif("images/uploaded/".$path);
                break;
            case 'image/jpeg':
                $img = imagecreatefromjpeg("images/uploaded/".$path);
                break;
            case 'image/bmp':
                $img = imagecreatefrombmp("images/uploaded/".$path);
                break;
            default:
                $img = null;
        }
        return $png;
    }

    function resizeImage($fn, $out, $width, &$oWidth, &$oHeight, $maxh = 1920, $png = false)
    {
        $im = ($png) ? imagecreatefrompng($fn) : imagecreatefromjpeg($fn);
        /*$exif = exif_read_data($fn);
        if(!empty($exif['Orientation'])) {
            switch($exif['Orientation']) {
                case 8:
                    $im = imagerotate($im,90,0);
                    break;
                case 3:
                    $im = imagerotate($im,180,0);
                    break;
                case 6:
                    $im = imagerotate($im,-90,0);
                    break;
            }
        }*/
        $w = imagesx($im);
        $h = imagesy($im);
        $ratio = $w / $h;
        if ($w > $width || $h > $maxh) {
            $nw = $width;
            $diff = $width / $w;
            $nh = $h * $diff;
            if ($nh > $maxh) {
                $scale = $maxh / $nh;
                $nh = $maxh;
                $nw = $nw * $scale;
            }
            $oWidth = $nw;
            $oHeight = $nh;
            $img_o = imagecreatetruecolor($nw, $nh);
            imagecopyresampled($img_o, $im, 0, 0, 0, 0, $nw, $nh, $w, $h);
            if ($png)
                imagepng($img_o, $out);
            else if (defined("USE_WEBP")) imagewebp($img_o, $out, 90);
            else imagejpeg($img_o, $out, 95);
        } else {
            $oWidth = $w;
            $oHeight = $h;
            if ($png)
                imagepng($im, $out);
            else if (defined("USE_WEBP")) imagewebp($im, $out, 90);
            else imagejpeg($im, $out, 85);
        }
    }
