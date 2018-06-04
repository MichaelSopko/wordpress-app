<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'test');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'root');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'M$g)I]H;sAbH8mB<T/gnhILNd1hf>j?a-cY=6]r5A;.bBHlYqLKv<!QO=WOCao9I');
define('SECURE_AUTH_KEY',  'q4x<ye*po1,<#Sm!yM],N^XYkbxNk1]@133{,)D_)/T:4VH=f7^_-85&}iHL8%%j');
define('LOGGED_IN_KEY',    '>YWR9urKsjIqP]^kdD+]lA.DGC0X:eF)HP?^T*m0=hkU_)p^D@pY kqdYB]]mr[x');
define('NONCE_KEY',        'r~S&nO)L<TK57Zk_:J/u4u<q?t~wY(/|5=idE%8{3sJZU/6.RSe^KH!/u%:cEQH*');
define('AUTH_SALT',        '[f>b[SZgMG&J1Cot^E:erC[okf)X@7R/9gG:;,jzh^li_Q;A`<{W5kJr;i}-7.Z5');
define('SECURE_AUTH_SALT', 'jEmq@@Jn!NJ@U/Vij%`o{mLVcT:0lFDG[67QFN{[do*pF.ZHImVU/T(v1DT04([N');
define('LOGGED_IN_SALT',   'Cp[&MDh[?l>}It&kCSndJV)+= |J,dk-K([I+jSIowzi]tOGYvnblelt]E&`h6Tl');
define('NONCE_SALT',       'bYE IUYQ`r=yy/Z0~8jY.p>tvL19~8m!U@XTPq)Ab&/8x@O7|bpD6i:n$*JSIkd2');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
