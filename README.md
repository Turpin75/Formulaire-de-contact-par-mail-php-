# Formulaire-de-contact-par-mail-php-
Envoyer un mail par formulaire de contact

Envoie de mail par formulaire de contact : readme

Télécharger fake sendmail pour uitlisateurs de windows pour venir simuler l'envoie de mail en local : http://glob.com.au/sendmail/ 
Le désarchiver et le placer dans le même dossier que wamp.

Configurer ensuite le fichier sendmail.ini. Cas avec gmail
smtp_server=smtp.gmail.com
smtp_port=587(celui de google)
default_domain=gmail.com
auth_username=testturpin@gmail.com(Utiliser un compte simple sans grosse protection pour la simulation)
auth_password=****
force_sender=testturpinp@gmail.com

Modifier ensuite le fichier php.ini de wamp
recherhcer la ligne sendmail_path avec un crtl + f
Décommenter cette ligne et y mettre comme contenu le chemin total de la l'application de senmail  à savoir :
sendmail_path = "C:\wamp64\sendmail\sendmail.exe"

Redémarrer les sevices sur wamp




