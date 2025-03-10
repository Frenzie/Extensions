<?php

return [
	'share' => [
		'feedback' => [
			'failed' => 'L’email n’a pas pu être envoyé, merci de contacter votre administrateur.',
			'fields_required' => 'Tous les champs sont requis.',
			'sent' => 'L’email a bien été envoyé.',
		],
		'form' => [
			'cancel' => 'Annuler',
			'content' => 'Contenu',
			'content_default' => "Salut,\n\nJe pense que cet article pourrait te plaire !\n\n%s – %s\n\n---\n\nCet email vous a été envoyé par %s via %s ( %s )",
			'send' => 'Envoyer',
			'subject' => 'Sujet',
			'subject_default' => 'J’ai trouvé un article intéressant !',
			'to' => 'Pour',
		],
		'intro' => 'Vous êtes sur le point de partager cet article par courriel : « <strong>%s</strong> »',
		'title' => 'Partager un article par courriel',
		'manage' => [
			'mailer' => 'Système de messagerie',
			'mail' => 'PHP <code>mail()</code>',
			'smtp' => 'SMTP (envoyer en tant que %s)',
			'error' => 'Erreur',
			'help' => 'Éditer les paramètres SMTP ou PHP <code>mail()</code> dans <kbd>config.php</kbd> : voir <a href="https://freshrss.github.io/FreshRSS/en/admins/05_Configuring_email_validation.html#configure-the-smtp-server" target="_blank">la documentation</a>',
		]
	],
];
