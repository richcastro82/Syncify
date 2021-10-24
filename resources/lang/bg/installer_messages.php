<?php 

return [
    'title' => 'Инсталатор на Laravel',
    'next' => 'Следваща стъпка',
    'back' => 'Предишен',
    'finish' => 'Инсталирай',
    'forms' => [
        'errorTitle' => 'Възникнаха следните грешки:',
    ],
    'welcome' => [
        'templateTitle' => 'Добре дошли',
        'title' => 'Инсталатор на Laravel',
        'message' => 'Съветник за лесна инсталация и настройка.',
        'next' => 'Проверете изискванията',
    ],
    'requirements' => [
        'templateTitle' => 'Стъпка 1 | Изисквания към сървъра',
        'title' => 'Изисквания към сървъра',
        'next' => 'Проверете разрешенията',
    ],
    'permissions' => [
        'templateTitle' => 'Стъпка 2 | Разрешения',
        'title' => 'Разрешения',
        'next' => 'Конфигуриране на околната среда',
    ],
    'environment' => [
        'menu' => [
            'templateTitle' => 'Стъпка 3 | Настройки на околната среда',
            'title' => 'Настройки на околната среда',
            'desc' => 'Моля, изберете как искате да конфигурирате файла <code> .env </code> на приложенията.',
            'wizard-button' => 'Настройка на съветника за формуляри',
            'classic-button' => 'Класически текстов редактор',
        ],
        'wizard' => [
            'templateTitle' => 'Стъпка 3 | Настройки на околната среда | Воден съветник',
            'title' => 'Насочен съветник <code> .env </code>',
            'tabs' => [
                'environment' => 'Заобикаляща среда',
                'database' => 'База данни',
                'application' => 'Приложение',
            ],
            'form' => [
                'name_required' => 'Име на среда се изисква.',
                'app_name_label' => 'Име на приложението',
                'app_name_placeholder' => 'Име на приложението',
                'app_environment_label' => 'App Environment',
                'app_environment_label_local' => 'Местен',
                'app_environment_label_developement' => 'Развитие',
                'app_environment_label_qa' => 'Qa',
                'app_environment_label_production' => 'Производство',
                'app_environment_label_other' => 'Други',
                'app_environment_placeholder_other' => 'Въведете вашата среда ...',
                'app_debug_label' => 'Отстраняване на грешки в приложението',
                'app_debug_label_true' => 'Вярно',
                'app_debug_label_false' => 'Невярно',
                'app_log_level_label' => 'Ниво на регистрационния файл на приложението',
                'app_log_level_label_debug' => 'отстраняване на грешки',
                'app_log_level_label_info' => 'информация',
                'app_log_level_label_notice' => 'забележете',
                'app_log_level_label_warning' => 'внимание',
                'app_log_level_label_error' => 'грешка',
                'app_log_level_label_critical' => 'критичен',
                'app_log_level_label_alert' => 'тревога',
                'app_log_level_label_emergency' => 'спешен случай',
                'app_url_label' => 'URL адрес на приложението',
                'app_url_placeholder' => 'URL адрес на приложението',
                'db_connection_failed' => 'Не можа да се свърже с базата данни.',
                'db_connection_label' => 'Връзка с база данни',
                'db_connection_label_mysql' => 'mysql',
                'db_connection_label_sqlite' => 'sqlite',
                'db_connection_label_pgsql' => 'pgsql',
                'db_connection_label_sqlsrv' => 'sqlsrv',
                'db_host_label' => 'Хост на база данни',
                'db_host_placeholder' => 'Хост на база данни',
                'db_port_label' => 'Порт за база данни',
                'db_port_placeholder' => 'Порт за база данни',
                'db_name_label' => 'Име на базата данни',
                'db_name_placeholder' => 'Име на базата данни',
                'db_username_label' => 'Потребителско име на базата данни',
                'db_username_placeholder' => 'Потребителско име на базата данни',
                'db_password_label' => 'Парола за база данни',
                'db_password_placeholder' => 'Парола за база данни',
                'app_tabs' => [
                    'more_info' => 'Повече информация',
                    'broadcasting_title' => '',
                    'broadcasting_label' => 'Шофьор на излъчване',
                    'broadcasting_placeholder' => 'Шофьор на излъчване',
                    'cache_label' => 'Кеш драйвер',
                    'cache_placeholder' => 'Кеш драйвер',
                    'session_label' => 'Шофьор на сесия',
                    'session_placeholder' => 'Шофьор на сесия',
                    'queue_label' => 'Шофьор на опашката',
                    'queue_placeholder' => 'Шофьор на опашката',
                    'redis_label' => 'Шофьор на Redis',
                    'redis_host' => 'Водещ на Redis',
                    'redis_password' => 'Redis парола',
                    'redis_port' => 'Порт Редис',
                    'mail_label' => 'Поща',
                    'mail_driver_label' => 'Пощенски драйвер',
                    'mail_driver_placeholder' => 'Пощенски драйвер',
                    'mail_host_label' => 'Пощенски хост',
                    'mail_host_placeholder' => 'Пощенски хост',
                    'mail_port_label' => 'Порт за поща',
                    'mail_port_placeholder' => 'Порт за поща',
                    'mail_username_label' => 'Потребителско име за поща',
                    'mail_username_placeholder' => 'Потребителско име за поща',
                    'mail_password_label' => 'Парола за поща',
                    'mail_password_placeholder' => 'Парола за поща',
                    'mail_encryption_label' => 'Шифроване на пощата',
                    'mail_encryption_placeholder' => 'Шифроване на пощата',
                    'pusher_label' => 'Тласкач',
                    'pusher_app_id_label' => 'Идентификатор на приложението за изтласкване',
                    'pusher_app_id_palceholder' => 'Идентификатор на приложението за изтласкване',
                    'pusher_app_key_label' => 'Ключ на приложението Pusher',
                    'pusher_app_key_palceholder' => 'Ключ на приложението Pusher',
                    'pusher_app_secret_label' => 'Pusher App Secret',
                    'pusher_app_secret_palceholder' => 'Pusher App Secret',
                ],
                'buttons' => [
                    'setup_database' => 'Настройка на база данни',
                    'setup_application' => 'Приложение за настройка',
                    'install' => 'Инсталирай',
                ],
            ],
        ],
        'classic' => [
            'templateTitle' => 'Стъпка 3 | Настройки на околната среда | Класически редактор',
            'title' => 'Класически редактор на околната среда',
            'save' => 'Запазете .env',
            'back' => 'Използвайте съветника за формуляри',
            'install' => 'Запазете и инсталирайте',
        ],
        'success' => 'Настройките на вашия .env файл са запазени.',
        'errors' => 'Не можете да запазите .env файла, моля, създайте го ръчно.',
    ],
    'install' => 'Инсталирай',
    'installed' => [
        'success_log_message' => 'Laravel Installer успешно ИНСТАЛИРАН на',
    ],
    'final' => [
        'title' => 'Инсталацията завърши',
        'templateTitle' => 'Инсталацията завърши',
        'finished' => 'Приложението е инсталирано успешно.',
        'migration' => '',
        'console' => 'Изход на конзолата на приложението:',
        'log' => 'Вписване в регистрационния файл на инсталацията:',
        'env' => 'Окончателен .env файл:',
        'exit' => 'Щракнете тук, за да излезете',
    ],
    'updater' => [
        'title' => 'Laravel Updater',
        'welcome' => [
            'title' => 'Добре дошли в актуализатора',
            'message' => 'Добре дошли в съветника за актуализация.',
        ],
        'overview' => [
            'title' => 'Общ преглед',
            'message' => 'Има 1 актуализация. | Има: брой актуализации.',
            'install_updates' => 'Инсталирайте актуализации',
        ],
        'final' => [
            'title' => 'Готово',
            'finished' => 'Базата данни на приложението е актуализирана успешно.',
            'exit' => 'Щракнете тук, за да излезете',
        ],
        'log' => [
            'success_message' => 'Laravel Installer успешно АКТУАЛИЗИРАН на',
        ],
    ],
];