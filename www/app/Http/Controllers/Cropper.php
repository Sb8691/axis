<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class Cropper extends Controller
{
    public function crop(Request $request){
        include(app_path() . '/Http/Controllers/ImageResize.php');

        $png = GetImage($request->src);

        // original image
            $filename = public_path()."/images/uploaded/".$request->src;
        // get dimensions of the original image
            list($current_width, $current_height) = getimagesize($filename);
            $canvas = imagecreatetruecolor($request->width, $request->height);

        // create image object
            if(!$png)
                $current_image = imagecreatefromjpeg($filename);
            else {
                $current_image = imagecreatefrompng($filename);
                imagealphablending( $canvas, false );
                imagesavealpha( $canvas, true );
            }

        // get wanted parts of image
            imagecopy($canvas, $current_image, 0, 0, $request->x, $request->y, $current_width, $current_height);

        // return image

            if ($png)
                imagepng($canvas,  public_path() . "/images/uploaded/" . $request->src);
            else if (defined("USE_WEBP")) imagewebp($canvas,  public_path() . "/images/uploaded/" . $request->src);
            else {
                imagejpeg($canvas, public_path() . "/images/uploaded/" . $request->src, 100);

                if((filesize(public_path() . "/images/uploaded/" . $request->src) / 1024) > 1000) {
                    imagejpeg(imagecreatefromjpeg(public_path() . "/images/uploaded/" . $request->src), public_path() . "/images/uploaded/" . $request->src, 75);
                }
                else if((filesize(public_path() . "/images/uploaded/" . $request->src) / 1024) > 750) {
                    imagejpeg(imagecreatefromjpeg(public_path() . "/images/uploaded/" . $request->src), public_path() . "/images/uploaded/" . $request->src, 80);
                }
                else if((filesize(public_path() . "/images/uploaded/" . $request->src) / 1024) > 500) {
                    imagejpeg(imagecreatefromjpeg(public_path() . "/images/uploaded/" . $request->src), public_path() . "/images/uploaded/" . $request->src, 85);
                }
                else if((filesize(public_path() . "/images/uploaded/" . $request->src) / 1024) > 400) {
                    imagejpeg(imagecreatefromjpeg(public_path() . "/images/uploaded/" . $request->src), public_path() . "/images/uploaded/" . $request->src, 90);
                }
            }

        Session::flash('updated_post', 'Fotka bola orezaná.');
        return "<script>window.close();</script>";
    }
}
