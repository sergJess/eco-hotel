<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'eco-hotel' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'eco-hotel' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', 'eco-hotel2022!!@@' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '5;4#]<!zmerRu1,f(Jh1$*P+UGo+F7kq?tl#So0lOwz*qWh |k H)zBKZ;-;2G%A' );
define( 'SECURE_AUTH_KEY',  ' IEHG#xoj7Ct8x/F7kV<5ZZ/hjA?gbS)ED[ $1Q?g3xI<L+Yg$Et|sgNuZ<kuFH6' );
define( 'LOGGED_IN_KEY',    'ENHIu,tDtzw>C10QjF_GEDilXuP^!5r|C=T^rJT%U|<222q@k6&U15 X;z{L,;kG' );
define( 'NONCE_KEY',        '(n#1{-jRnFkW4!>f1fJ+zQ}@SLMPjTKZSwANUK>rN:U&9z) =]?vd51jiGINU[zu' );
define( 'AUTH_SALT',        'wq;dNBucDCq7!Oed}j[NS=@W[}[*m02y;My6asj]g>H.QtV<QreO4.CEi|&0BF~b' );
define( 'SECURE_AUTH_SALT', '{Bv#{Qz*$8ZS|PZiCrt?<yYZbPxn U}ExOV2+-HC^HHL~z2TN)hK|R>[c2^I$o{m' );
define( 'LOGGED_IN_SALT',   'aA.v~da_K72f1Q(9)[_f5zW$aGG3b+He_LHZZ}aj#gi`JSbK(8&zu]E*MfLPTZ3M' );
define( 'NONCE_SALT',       '970Pz/wXbS~x!r#1x!Rfu4Ngorb?wF{/n$fth:#;_o$g&vVU*83|(=(LF$</UY,m' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', true );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
