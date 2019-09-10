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
define( 'DB_NAME', 'tour-club' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'JUP:daHM0Zy]UvwT_P8kkcKo5-}]}1}b2RTpwW8/^EUO5l^Mb8@o&0!3d$em] R=' );
define( 'SECURE_AUTH_KEY',  ',A7ja5Q6k(Uk=tu#A%kzfDK]{p1<D=:MzFXDsE| `Cr=%1zK/zT!]HhZC6}{:_-c' );
define( 'LOGGED_IN_KEY',    '#/TuDy^kF?#`b,R:f1y8b/mkr1e/+}`!G{_x5Bv;o.y NOgBhglHNFnC~]LL^u_I' );
define( 'NONCE_KEY',        'f]2QT-f;{jjjoeJ@.K5j{{ir[Dbay1=T??g>399R,NkOlq8}V=w;~?S0*qN#&=%k' );
define( 'AUTH_SALT',        '=tQ0gT~?kKTGI*kPfC?@MZgyYaL^6gdkiC0B qyBj1&;V*q-jAs<V0R37d5[Ew)x' );
define( 'SECURE_AUTH_SALT', 'o2pX*z#;v@hCG?U414-Jbiw[%aBnGr*j]*5e^LI@h1yeWMa8mF)(-AFbAP{fzGt<' );
define( 'LOGGED_IN_SALT',   '!8>&wg9GN>@OhDdp<wz^ZnK[xT?$um0 {yA!g6q([HAc5-TgVU$4QVIrZKeN 2[9' );
define( 'NONCE_SALT',       'q;TCT?&=<dJ+ee`<<=)l^{`L1~+i*EKe7xw4y-Y YnEMqzKv5D(ruDAF=g`*!L[z' );

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
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
