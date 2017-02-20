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
define('DB_NAME', 'blog_wp');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '$EWg`rI-Iiq 8js=:+:SM*g)he.G]|Bav%yTKw#-J1/1?9^em)+xZ%9nPk5ql|kE');
define('SECURE_AUTH_KEY',  '=?H%)EGQ[y6I$i+gekBnFw 4N9_=4YJ#Q|>M9`k]jOp^4XTG3SVD)~mr/CU0:po+');
define('LOGGED_IN_KEY',    'U-,.4XTDF/|b_$`q%^! B!W[-bAgips0>CmIG$)|e56rcD}4KuPb+[aVuh|X^Tr]');
define('NONCE_KEY',        'm%R|PBrE#+P.oimU6~mPNfP.fL:h6=xK!2&3LT%49}ru~+!%HY2*cvg;|E?|^V_z');
define('AUTH_SALT',        'y,Em%D;{K|YAL=jgsCe{HmvDz!]V0:zG;<y9KbTOJ,[G73KkPK)[dE;H92cAn|n0');
define('SECURE_AUTH_SALT', '-/;S*k)+TBRQ3)!;w =1t>WO$Q5 ve/$Za|krQfZeQA$TO*e!Ca%>&BD-ey-[q!B');
define('LOGGED_IN_SALT',   '+RpB,5+Cy(v!6AZ9&qJyxf9l:T+]_x|wy/A-|J~*+b|5OxN6T) V;CzVS-j;n#9&');
define('NONCE_SALT',       '-B-Z~~2Xb{{8-wWF^U8Q9yt+3yFQ&PxGys7sVEuLG(+c*&+0;jKf6Hd:W~6Q&^*F');

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
