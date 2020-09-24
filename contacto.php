<?php
	if (isset($_POST['submit'])) {
		$name=$_POST['name'];
		$email=$_POST['email'];
		$message=$_POST['message'];

		$to = 'webdevcontactoinfo@gmail.com';
		$subject = 'Form Submission';
		$body = "Name: ".$name."\n"."Email: ".$email."\n"."Mensaje: "."\n\n".$message;
		$headers = "From: ".$email;
		if (mail($to, $subject, $body)) {
			echo "<h1>Enviado con éxito"." ".$name.", te contactarenos en un momento";
		}else{
			echo "Algo salió mal...";
		}
	}
?>
                           