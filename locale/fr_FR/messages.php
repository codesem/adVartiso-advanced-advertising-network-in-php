<?php

 //general
 messages('S_REQUIRED','info','est requis!');
 messages('REQUIRED','danger','Remplissez les champs obligatoires.');
 messages('SOME_WRONG','danger','Quelque chose ne va pas! Veuillez réessayer.');
 messages('RECAPTCHA','danger','Captcha faux! Réessayer.');
 messages('SMALL_BALANCE','danger',"Vous n'avez pas assez d'équilibre.");
 messages('LESS_THEN','danger','Moins du minimum à commander');
 messages('AMOUNT_D_SMALL','danger',' Le montant minimum est '.do_amount(do_config(2)));
 messages('CREDITED','success','Le solde de votre compte a été crédité.');

 //support
 messages('CONTACT_SENT','success','Votre message a été envoyé!');
 messages('TICKETREPLY','success','Votre réponse a été envoyée!');

 //forgot password
 messages('USERNAME_NOTFOUND','danger',"Nom d'utilisateur introuvable");
 messages('FORGOT_CONFIRMATION_SENT','success',"Nous vous avons envoyé un e-mail de confirmation.");

 //publishers
 messages('WEB_ADDED','success','Votre site Web a été ajouté avec succès');
 messages('WEB_DELETED','success','Votre site Web a été supprimé avec succès');
 messages('WEB_EXIST','danger','Le site Web existe déjà.');
 messages('WEB_INACTIVE','danger','Site Web inactif.');
 messages('WITH_SCHEDULED','success','Votre demande de retrait a été planifiée.');

 //advertisers
 messages('TEMP_DEACTIVATED','success','Modèle désactivé avec succès');
 messages('TEMP_ACTIVATED','success','Modèle activé avec succès');
 messages('TEMP_DELETED','success','Modèle supprimé avec succès');
 messages('CAMP_UPDATED','success','Campagne mise à jour avec succès');
 messages('CAMP_DEACTIVATED','success','Campagne mise à jour avec succès');
 messages('CAMP_ACTIVATED','success','Campagne activée avec succès');
 messages('CAMP_DELETED','success','Campagne supprimée avec succès');
 
 //settings
 messages('PERSONAL','success','Vos informations personnelles ont été mises à jour.');
 messages('PASS_CHANGED','success','Votre mot de passe a été changé.');
 messages('PASS_NOTMATCH','danger','Les mots de passe ne correspondent pas.');
 messages('PASS_UNCHANGE','danger','Le mot de passe actuel entré est incorrect.');

 //login
 messages('INVALID','danger',"Nom d'utilisateur / mot de passe incorrect!");
 messages('BANNED','danger','Compte banni!');
 messages('EXPRESS','success',"S'il vous plait Connectez-vous d'abord.");
 messages('ACTIVATED','success',"Compte activé! S'il vous plait Connectez-vous d'abord.");
 messages('EXPIRED','warning','Votre session a expiré!');

 //register
 messages('IP_BLOCKED','danger','Votre adresse IP a été bloquée.');
 messages('PASSWORDS','danger','Les mots de passe ne correspondent pas.');
 messages('EXIST','danger',"L'e-mail existe déjà. Veuillez en choisir un autre.");
 messages('WHITESPACE','danger',"Assurez-vous que votre nom d'utilisateur ne contient pas d'espaces");
 messages('REPEAT','danger',"Veuillez choisir un autre nom d'utilisateur.");