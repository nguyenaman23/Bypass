<?php
include('RecaptchaV3.php');

/*EXAMPLE*/

$siteurl = "https://digitask.ru/";
$sitekey = "6LcFFTUdAAAAAEymFZkvdT8drUyluozILp45BeWk";
$apikey = "YOUR_API_KEY";

/*RECAPTCHA V3 */
$RecaptchaV3 = RecaptchaV3($siteurl,$sitekey,$apikey);
