<?php
include('RecaptchaV3.php');
include('RecaptchaV2.php');
/*EXAMPLE*/

$siteurl = "https://digitask.ru/";
$sitekey = "6LcFFTUdAAAAAEymFZkvdT8drUyluozILp45BeWk";
$apikey = "YOUR_API_KEY";

/*RECAPTCHA V3 */
$RecaptchaV3 = RecaptchaV3($siteurl,$sitekey,$apikey);
/* Respon example *
03AGdBq27XJ9KfYpeD6sAu7-SlYyJppricdQsn4lx8BeKbCbb0mwYQxENgEfMNZGGeeZKkdsJyCgwpPOFE6QVnB3v3OrPoAfL5n9m-oNLGESI--2_N3Ni9X-gg8TtogGtl8Ze9DEsSYOKFH3wOU4d2rPEf1DJsvhpMIY-XPBzOAYt27hsgJiHB_dVf9x3RVSGPjw1sBiNFmO23fP7v3ZyVyaqVEp6qS2QOQridMnoCsTaN-cA49NwWwIkWh6cpkRWEwsk147quPMsq_iA2MzNN-oj1eVm36_Q9RHUtWCmQEU4qFnOCbcXEamTr7w3o2vy7sm7yY_AcQ2A8m4sF170JlWPcJBm53PnxQSpE1XIVmOY2keKXKWnk47fZvp4d4AP4p6pkgLcPobj3HOmZM_ou1J7yjVuIUEdinii_KDKA4X40no2zoBTdwqbBEIeME1CNgAIhsomlFh5icRZ2rngEe-UysXsG_PVXpax0yj52_K_uPE6SatUef4mVkfhI9jeHFIZTccP4R4g5z6Qh2pyVOihTYxm4mC0KLA
*/

/*RECAPTCHA V2 */
$RecaptchaV3 = RecaptchaV2($siteurl,$sitekey,$apikey);
/* Respon example *
03AGdBq27XJ9KfYpeD6sAu7-SlYyJppricdQsn4lx8BeKbCbb0mwYQxENgEfMNZGGeeZKkdsJyCgwpPOFE6QVnB3v3OrPoAfL5n9m-oNLGESI--2_N3Ni9X-gg8TtogGtl8Ze9DEsSYOKFH3wOU4d2rPEf1DJsvhpMIY-XPBzOAYt27hsgJiHB_dVf9x3RVSGPjw1sBiNFmO23fP7v3ZyVyaqVEp6qS2QOQridMnoCsTaN-cA49NwWwIkWh6cpkRWEwsk147quPMsq_iA2MzNN-oj1eVm36_Q9RHUtWCmQEU4qFnOCbcXEamTr7w3o2vy7sm7yY_AcQ2A8m4sF170JlWPcJBm53PnxQSpE1XIVmOY2keKXKWnk47fZvp4d4AP4p6pkgLcPobj3HOmZM_ou1J7yjVuIUEdinii_KDKA4X40no2zoBTdwqbBEIeME1CNgAIhsomlFh5icRZ2rngEe-UysXsG_PVXpax0yj52_K_uPE6SatUef4mVkfhI9jeHFIZTccP4R4g5z6Qh2pyVOihTYxm4mC0KLA
*/
