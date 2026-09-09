<?php

namespace App\Http\Controllers;

use App\Mail\ContactForm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Validator;

class mailer extends Controller
{

    public function checkCaptcha(){
        if(isset($_POST['g-recaptcha-response'])){
            $captcha = $_POST['g-recaptcha-response'];

            $postdata = http_build_query(
                array(
                    'secret'   => '6LeqKGkUAAAAAPDGBh5GiykJZAfqunmgZcjnusx1',
                    'response' => $captcha,
                    'remoteip' => $_SERVER['REMOTE_ADDR']
                )
            );

            $options = array('http' =>
                array(
                    'method'  => 'POST',
                    'header'  => 'Content-type: application/x-www-form-urlencoded',
                    'content' => $postdata
                )
            );
            $context = stream_context_create($options);
            $res = file_get_contents('https://www.google.com/recaptcha/api/siteverify', false, $context);
            $res = json_decode($res, true);
            return $res["success"] ? 'y' : 'n';
        }else{
            return false;
        }
    }

    public function send(Request $request) {

        if($this->checkCaptcha() != 'y' || isSpam($request->message) || (isset($request->website) && mb_strlen($request->website) > 0)){
            Session::flash('captcha_fail', 'Overenie reCAPTCHA zlyhalo.');
            return redirect(url()->previous() . '#napiste-nam')->withInput($request->all());
        }

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ], [
            'name.required' => 'Nevyplnili ste meno',
            'email.required' => 'Nevyplnili ste e-mail',
            'subject.required' => 'Nevyplnili ste predmet',
            'message.required' => 'Nevyplnili ste správu',
        ]);

        if ($validator->fails()) {
            return redirect(URL::previous() . '#napiste-nam')->withErrors($validator)->withInput();
        }

        $data = $request->all();
        //
        Mail::to('axisps@axis.sk')->send(new ContactForm($data));
        Session::flash('success', 'Vaša správa bola odoslaná');

        return redirect(URL::previous() . '#napiste-nam');
    }

}
