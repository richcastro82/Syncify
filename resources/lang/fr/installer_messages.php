<?php 

return [
    'title' => 'Installateur Laravel',
    'next' => 'L\'étape suivante',
    'back' => 'précédent',
    'finish' => 'Installer',
    'forms' => [
        'errorTitle' => 'Les erreurs suivantes sont survenues:',
    ],
    'welcome' => [
        'templateTitle' => 'Bienvenue',
        'title' => 'Installateur Laravel',
        'message' => 'Assistant d\'installation et de configuration facile.',
        'next' => 'Vérifier les exigences',
    ],
    'requirements' => [
        'templateTitle' => 'Étape 1 | Exigences du serveur',
        'title' => 'Exigences du serveur',
        'next' => 'Vérifier les autorisations',
    ],
    'permissions' => [
        'templateTitle' => 'Étape 2 | Autorisations',
        'title' => 'Autorisations',
        'next' => 'Configurer l\'environnement',
    ],
    'environment' => [
        'menu' => [
            'templateTitle' => 'Étape 3 | Paramètres d\'environnement',
            'title' => 'Paramètres d\'environnement',
            'desc' => 'Veuillez sélectionner la manière dont vous souhaitez configurer le fichier <code> .env </code> des applications.',
            'wizard-button' => 'Configuration de l\'assistant de formulaire',
            'classic-button' => 'Éditeur de texte classique',
        ],
        'wizard' => [
            'templateTitle' => 'Étape 3 | Paramètres d\'environnement | Assistant guidé',
            'title' => 'Assistant <code> .env </code> guidé',
            'tabs' => [
                'environment' => 'Environnement',
                'database' => 'Base de données',
                'application' => 'Application',
            ],
            'form' => [
                'name_required' => 'Un nom d\'environnement est requis.',
                'app_name_label' => 'Nom de l\'application',
                'app_name_placeholder' => 'Nom de l\'application',
                'app_environment_label' => 'Environnement d\'application',
                'app_environment_label_local' => 'Local',
                'app_environment_label_developement' => 'Développement',
                'app_environment_label_qa' => 'Qa',
                'app_environment_label_production' => 'Production',
                'app_environment_label_other' => 'Autre',
                'app_environment_placeholder_other' => 'Entrez dans votre environnement ...',
                'app_debug_label' => 'Débogage d\'application',
                'app_debug_label_true' => 'Vrai',
                'app_debug_label_false' => 'Faux',
                'app_log_level_label' => 'Niveau de journal d\'application',
                'app_log_level_label_debug' => 'déboguer',
                'app_log_level_label_info' => 'Info',
                'app_log_level_label_notice' => 'remarquer',
                'app_log_level_label_warning' => 'Attention',
                'app_log_level_label_error' => 'Erreur',
                'app_log_level_label_critical' => 'critique',
                'app_log_level_label_alert' => 'alerte',
                'app_log_level_label_emergency' => 'urgence',
                'app_url_label' => 'URL de l\'application',
                'app_url_placeholder' => 'URL de l\'application',
                'db_connection_failed' => 'Impossible de se connecter à la base de données.',
                'db_connection_label' => 'Connexion à la base de données',
                'db_connection_label_mysql' => 'mysql',
                'db_connection_label_sqlite' => 'sqlite',
                'db_connection_label_pgsql' => 'pgsql',
                'db_connection_label_sqlsrv' => 'sqlsrv',
                'db_host_label' => 'Hôte de la base de données',
                'db_host_placeholder' => 'Hôte de la base de données',
                'db_port_label' => 'Port de base de données',
                'db_port_placeholder' => 'Port de base de données',
                'db_name_label' => 'Nom de la base de données',
                'db_name_placeholder' => 'Nom de la base de données',
                'db_username_label' => 'Nom d\'utilisateur de la base de données',
                'db_username_placeholder' => 'Nom d\'utilisateur de la base de données',
                'db_password_label' => 'Mot de passe de la base de données',
                'db_password_placeholder' => 'Mot de passe de la base de données',
                'app_tabs' => [
                    'more_info' => 'Plus d\'informations',
                    'broadcasting_title' => '',
                    'broadcasting_label' => 'Pilote de diffusion',
                    'broadcasting_placeholder' => 'Pilote de diffusion',
                    'cache_label' => 'Pilote de cache',
                    'cache_placeholder' => 'Pilote de cache',
                    'session_label' => 'Pilote de session',
                    'session_placeholder' => 'Pilote de session',
                    'queue_label' => 'Pilote de file d\'attente',
                    'queue_placeholder' => 'Pilote de file d\'attente',
                    'redis_label' => 'Pilote Redis',
                    'redis_host' => 'Hôte Redis',
                    'redis_password' => 'Mot de passe Redis',
                    'redis_port' => 'Port de Redis',
                    'mail_label' => 'Courrier',
                    'mail_driver_label' => 'Pilote de messagerie',
                    'mail_driver_placeholder' => 'Pilote de messagerie',
                    'mail_host_label' => 'Hôte de messagerie',
                    'mail_host_placeholder' => 'Hôte de messagerie',
                    'mail_port_label' => 'Port de courrier',
                    'mail_port_placeholder' => 'Port de courrier',
                    'mail_username_label' => 'Nom d\'utilisateur de messagerie',
                    'mail_username_placeholder' => 'Nom d\'utilisateur de messagerie',
                    'mail_password_label' => 'Mot de passe de messagerie',
                    'mail_password_placeholder' => 'Mot de passe de messagerie',
                    'mail_encryption_label' => 'Cryptage du courrier',
                    'mail_encryption_placeholder' => 'Cryptage du courrier',
                    'pusher_label' => 'Poussoir',
                    'pusher_app_id_label' => 'Identifiant de l\'application Pusher',
                    'pusher_app_id_palceholder' => 'Identifiant de l\'application Pusher',
                    'pusher_app_key_label' => 'Clé de l\'application Pusher',
                    'pusher_app_key_palceholder' => 'Clé de l\'application Pusher',
                    'pusher_app_secret_label' => 'Secret de l\'application Pusher',
                    'pusher_app_secret_palceholder' => 'Secret de l\'application Pusher',
                ],
                'buttons' => [
                    'setup_database' => 'Base de données de configuration',
                    'setup_application' => 'Application de configuration',
                    'install' => 'Installer',
                ],
            ],
        ],
        'classic' => [
            'templateTitle' => 'Étape 3 | Paramètres d\'environnement | Éditeur classique',
            'title' => 'Éditeur d\'environnement classique',
            'save' => 'Enregistrer .env',
            'back' => 'Utiliser l\'assistant de formulaire',
            'install' => 'Enregistrer et installer',
        ],
        'success' => 'Les paramètres de votre fichier .env ont été enregistrés.',
        'errors' => 'Impossible d\'enregistrer le fichier .env, veuillez le créer manuellement.',
    ],
    'install' => 'Installer',
    'installed' => [
        'success_log_message' => 'Le programme d\'installation de Laravel a été installé avec succès sur',
    ],
    'final' => [
        'title' => 'Installation terminée',
        'templateTitle' => 'Installation terminée',
        'finished' => 'L\'application a été installée avec succès.',
        'migration' => '',
        'console' => 'Sortie de la console d\'application:',
        'log' => 'Entrée du journal d\'installation:',
        'env' => 'Fichier .env final:',
        'exit' => 'Cliquez ici pour quitter',
    ],
    'updater' => [
        'title' => 'Outil de mise à jour Laravel',
        'welcome' => [
            'title' => 'Bienvenue dans le programme de mise à jour',
            'message' => 'Bienvenue dans l\'assistant de mise à jour.',
        ],
        'overview' => [
            'title' => 'Aperçu',
            'message' => 'Il y a 1 mise à jour. | Il y a: mises à jour des nombres.',
            'install_updates' => 'Installer les mises à jour',
        ],
        'final' => [
            'title' => 'Fini',
            'finished' => 'La base de données de l\'application a été mise à jour avec succès.',
            'exit' => 'Cliquez ici pour quitter',
        ],
        'log' => [
            'success_message' => 'Le programme d\'installation de Laravel a été mis à jour avec succès le',
        ],
    ],
];