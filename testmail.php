<?php 	require 'includes/PHPMailer/PHPMailerAutoload.php';
	$dirigido = 'manuelf0710@gmail.com';
	$nombre_completo = 'prueba compras';
	$asunto = "mail de prueba";
	$cuerpo = "<p>este es el cuerpo del mail enviado por Navarro mail</p>";
	$mail = new PHPMailer;

	$mail->SMTPDebug = 3;                               			// Activaci�n de la salida de depuraci�n detallada

	$mail->isSMTP();                                      			// Gestor de correo configurado para utilizar SMTP
	$mail->Host 		= 'smtp.gmail.com';                       	// Especifique los servidores principales y de respaldo SMTP
	$mail->SMTPAuth 	= true;                              	    // Habilitar la autenticaci�n SMTP
	$mail->Username 	= 'compras@sanboni.edu.co';           		// nombre de usuario SMTP
	$mail->Password 	= '86101454551';                     		// contrase�a SMTP 
	$mail->SMTPSecure 	= 'ssl';                            		// Habilitar el cifrado TLS, `tambi�n ssl` aceptado
	$mail->Port 		= 465;                                    	// Puerto TCP para conectarse a
	//$mail->Port 		= 587;                                    	// Puerto TCP para conectarse a

	$mail->From 		= 'compras@sanboni.edu.co';
	$mail->FromName 	= 'San Bonifacio de las Lanzas';

	$mail->addAddress($dirigido, $nombre_completo);     			// A�adir un destinatario
	$mail->addAddress('');     		             					// Nombre es opcional
	$mail->addReplyTo('', 'Information');
	$mail->addCC('');
	$mail->addBCC('');

	$mail->WordWrap = 50;                                 			// Set palabra envolver 50 caracteres
	//$mail->addAttachment($RutaArchivoAdjunto);   			      	// A�adir archivos adjuntos
	$mail->addAttachment('', '');    		     					// nombre opcional
	$mail->isHTML(true);                                  			// Formato de correo electr�nico Conjunto de HTML

	$mail->Subject = $asunto;
	$mail->Body    = $cuerpo;
	$mail->AltBody = $cuerpo;
	if(!$mail->send()) 
	{
		echo "no enviado " . $mail->ErrorInfo;
	} else {
		echo("este mail se envio mira la bandeja de tu correo");
	}						
	
	?>