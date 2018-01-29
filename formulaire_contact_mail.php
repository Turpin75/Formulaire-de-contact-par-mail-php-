<?php
	
if(isset($_POST['formMail']))
{
	if(!empty($_POST['name']) AND !empty($_POST['mail']) AND !empty($_POST['message']))
	{
		$header = "MIME-Version: 1.0\r\n";
		$header .= 'From:"Turpin.com"<contact@turpin.com>' . "\n";
		$header .= 'Content-Type:text/html; charset="utf-8"' . "\n";
		$header .= 'Content-Transfer-Encoding: 8bit';

		$message = '

			<html>
				<body>
					<div align="center">
						<img src="http://primfx.com/mailing/banniere.png" /> <br />
						<p> Nom de l\'expédiyeur :' . $_POST['name'] . '</p>
						<p> Mail de l\'expédiyeur :' . $_POST['mail'] . '</p>
						<p>' . nl2br($_POST['message']). '</p>
						<img src="http://primfx.com/mailing/separation.png" />
					</div>
				</body>
			</html>


		';

	mail("testturpin@gmail.com", "Contact - monsite.com", $message, $header);

	$msg = "Votre message a bien été envoyé !";

	}
	else
	{
		$msg = "Tous les champs doivent être complétés !";
	}

	
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title> Contact </title>
</head>
<body>
	<h2> Formulaire de contact ! </h2>
	<form method="POST" action="">
	<input type="text" name="name" placeholder="Votre nom" value="<?php if(isset($_POST['name'])) { echo $_POST['name']; } ?>" /> <br/> <br/>
	<input type="email" name="mail" placeholder="Votre email" value="<?php if(isset($_POST['mail'])) { echo $_POST['mail']; } ?>"/> <br/> <br/>
	<textarea name="message" placeholder="Votre Message"><?php if(isset($_POST['message'])) { echo $_POST['message']; } ?></textarea> <br/> <br/>
	<input type="submit" value="Envoyer !" name="formMail" />
	</form> <br/> <br/>

	<?php 
		if(isset($msg))
		{
			echo $msg;
		}
 
	?>

</body>
</html>
