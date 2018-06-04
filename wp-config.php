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
define('DB_NAME', 'test_db');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '123456');

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
define('AUTH_KEY',         'm ;Xc))A>)#f[=WQo]^NnHC?U <4}v+tshZ~aVQ_7~A!x{}=@v!E(paqsn5)b3(l');
define('SECURE_AUTH_KEY',  '*ancXEyI9lH,e}$r4BoDb[f84sm=Ds}GSI5W`Z%8p=kU/hpfU2:X=f|EobTmotpJ');
define('LOGGED_IN_KEY',    'kGy2m-q+%@G&S[FKPA=3Av@6jpOs`^:mM;ThfU9??xe&CJJ#.[D))0+)qbKw9OW,');
define('NONCE_KEY',        '( P$Eq2Ih4&?R?fFX[w@jY#D.B]sE;kKe(K45`U`ly1:Mrf%(w6]+HtOM612IAwy');
define('AUTH_SALT',        'iSE(?swr#0*a!9s+=+>LAs-PB ^ O{~XUwi(.h)`v]8`klCKG`GT7@FWOf%9H0>v');
define('SECURE_AUTH_SALT', ' MfHqN<:.S4VB]J/Z,W@`f&dm`m|E9@T%wk`obl@Z^,`N{5c>)8K_G9Gju7Ko4h}');
define('LOGGED_IN_SALT',   'M6Xhp^}*(NSXf7k QHuep5BJ2rz1g<.Nrxr8e3V`FAN9/a@0CNN`<DR:$b/~]kl:');
define('NONCE_SALT',       'jUnp5L^jL}@t]()Z7WJ_4HU,/&G5-JEfvueoFacn~7k{oK(iFr}O%{kvRNzWc8am');

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
