<?php
use Illuminate\Support\Facades\Cookie;
Cookie::forget('return_page');
Cookie::queue('return_page', Request::url(), 15);
?>