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
define( 'DB_NAME', 'painter' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'uwu' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '0012' );

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
define( 'AUTH_KEY',         '#8]M}3nh,Z!!_9k]Yvh%WcPVj}0{qnPUNUT~i?zIa>&;YX~vhi/KH7o#RJ2-3inJ' );
define( 'SECURE_AUTH_KEY',  ']M9/{,Tu9I)(YgVeNZ=IZFAvg:)FA+z6e9V#N`B}=yDt7c-Q_D]jA=I4bc#_aD{&' );
define( 'LOGGED_IN_KEY',    '4eq@DH!!.&j;Gv~;)rhlG}v;gN19&:j hTEP}wvh;oT4.,^.y%-H.,$`K%_LArwA' );
define( 'NONCE_KEY',        '4M6d63TCP/GJc:nm2h7$|2zl?t;L:GHY&wP#&PdZ-i7<dFXr N&WDkeZ:TFXGE|r' );
define( 'AUTH_SALT',        'WF&5y]4+H*Ge`YP8GTFG>^!*9u8t(Z}:($D_T5<mBTD$-x0#aQSB40nt!O7MpNUl' );
define( 'SECURE_AUTH_SALT', 'cUL#|4vWyR{_os0 3m-8^RY2b$II-fHF3_j!D y:?d7VQqMUYH#wGs).}h-Pa/va' );
define( 'LOGGED_IN_SALT',   'y9GESXMxrY>ZwJg;_itzU1s-DN)5~MGA=krg*W3g>LY~#_FH&~K35b>NFaCOBVQP' );
define( 'NONCE_SALT',       'NLS@NSp&m8eEEWxU.Q.e?pL{~5`sPkpVYbk`,kC-d})Gi`Hj%M/$9{,2$<c^^d=g' );

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
