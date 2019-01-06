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
define('DB_NAME', 'tommywebwork55_farmada');

/** Имя пользователя MySQL */
define('DB_USER', 'tommywebwork55_admin');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'casiko55');

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
define('AUTH_KEY',         'xVn^}VQ2!F~]rUOVo@zDI1`7VuZ)K~dYlpn_9BE-m!&h*3[gwM)p=Dq&;6ek:cUe');
define('SECURE_AUTH_KEY',  'LG,S5^9uTVjIB.1{q%1&W-Og>Ny3jlg6T&?1Wc~):,HqPh`6An{gSp b+p(@EMX8');
define('LOGGED_IN_KEY',    '5!4[W##[wh%wC%,}wq:&)>}AxWAXVChYr~vzj~8g8XB|8TQGSKrG-K69XlbH$DV$');
define('NONCE_KEY',        ';HA(C/q9VR)qX,UBifn0O+5b ( F!=-th!Zyi#v>JXRL0Ig/S*G|ToWKVXI0#:Vx');
define('AUTH_SALT',        'V`Y;cW%W-Zh&FFH& U8WHnUj-Z[~l(qON.fiX5>eb/*xg,waPE$X)-1qhq6 *bQ,');
define('SECURE_AUTH_SALT', 'zz)=#gS/BQ?sc{$(s(jYZqaQ+SNU^M/N1|-k6 <ZaCLX#|_Fjk7Oy7e}lKnOQW*5');
define('LOGGED_IN_SALT',   '05yVe5uP_h-9%AY>kqpeX3/P7D13Z,O,-kjr.h_x#KMUOudhY8t=`| G>HCx7 ~:');
define('NONCE_SALT',       'MSG}=5+.et&k68lSG@zhw DiXEFQ(El%S}ea.+2DW!:0tTaj(}>O^(LqaaGQC)q0');

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
