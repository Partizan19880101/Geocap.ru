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
define('DB_NAME', 'user2064533_geocap');

/** Имя пользователя MySQL */
define('DB_USER', 'Partizan88');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'Partizan88');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         ';$u/mng$FGuiZ/)z7U{L32u B*D/)EOeu++vRy.QdoMNj^f_#L)t1odHWiq; 1`[');
define('SECURE_AUTH_KEY',  '_ZKTkGB1sH0IM4^[=X+TS`%5k9PZt;JK*D&MH Mr4d1_>(?w_AN!6Br3#%M#CLhS');
define('LOGGED_IN_KEY',    'y?+W:5EDKn|(Si!sscBQZtEB*c(zJdoGR2Q ^jcj;kn4S)9+MfbSA%5OcEh^mtl3');
define('NONCE_KEY',        '<rY?IB%~67|ny?J?*VU]{u<BrP*$pGKvl4e|PoVHoBf=zl8flDHY+i2>;Tbja9Qu');
define('AUTH_SALT',        'azs0M3.Jir+-OyI.CjHT`[.0Y4TJs&c$e4}u?a}_Hm4Ww{.]Eamhq>)!B0P%6%Da');
define('SECURE_AUTH_SALT', '|Z[G jtWevqMChV/J5@^oz~_ _Kj_,C(bUY;UMxIe SD|;w];Vg)XcFmof~tVFz!');
define('LOGGED_IN_SALT',   '>WO=4)96H^GQnxX2lOu:^:gualwgCQ+nr8E PgNMdkl]d]6AZ~Q[K!Om@GO}PKNv');
define('NONCE_SALT',       ';`g1H3*y[~B3/Lk`ub.K09ITKR=9ZS#2+>?(/52M1d2/a?s{]m#;J>wuu6U5MZ!~');

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
