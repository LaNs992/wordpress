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
define( 'DB_NAME', 'salon_krasot' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'kiril' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', 'BAZHINkirill2004' );

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
define( 'AUTH_KEY',         't>w)L1)9[2dZnmk4Lm3On?JfOxs&<=pS4vI8wh{dkh/2,~s^CjllY(8f0:B1pQyF' );
define( 'SECURE_AUTH_KEY',  '-NATBpN7-@=RvFR&SqXC2e&E[kl+@][a(rO~<W6+C++!,eD%8=_&jj%G%/la91+/' );
define( 'LOGGED_IN_KEY',    'X7fceSPkTvtKDou$H/q6fHdt$)2*@un,)a3.Tq/hv*Q2GT[XgD{Gh1*>C*&sV^Oo' );
define( 'NONCE_KEY',        '#/VP,BGRU5y0iYa=^l|5>SM=j`sKr4o?O{/[&czk6xG&B|i=PIv05`tB{Lmfp8nW' );
define( 'AUTH_SALT',        '5yB5XyFSz.xz)_;y:!pN3^;~71nq~kqX*azVS*mUR^&.v:Zf8reGAIb&l}}#iS8l' );
define( 'SECURE_AUTH_SALT', 'dn>iyWa+4S+mQdH`P~}!:R;`N=JIy5aa_.&^sA4!Wa4xwvs43xgAI7m=`mIIM tg' );
define( 'LOGGED_IN_SALT',   'qt{XXzNB1ll#ht]DNr0{d}qbi3Lll?/;L`qoYRVgG[1L;v?,&PqtVR0<W0SWnV>m' );
define( 'NONCE_SALT',       'jjM%Rz$fjW}!ko$@;Z7#b*DT!eS~{]rqxU?LZP2P2>#CJ?Rd{h_#T4B(a7{yMXQ`' );

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
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
