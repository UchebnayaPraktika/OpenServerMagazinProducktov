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
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'yupideliclub' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'admin' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'admin' );

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
define( 'AUTH_KEY',         'Kf*<zV$1SjmeLG7T.~.j H]H+lc9%=F7^wrpDXUL;?:3Ur%Ttq[,S 0PGN(O%tgQ' );
define( 'SECURE_AUTH_KEY',  '@N,bNaB.Uk#Dc9Bp9 CX8YwDT[]/s`737!ZM2~X>cd): {/#.8Ouf#b52+FF }__' );
define( 'LOGGED_IN_KEY',    'd~u-w^k,Rg2fAJD:7WUbMYh0D?){7phs)uPS=W$%<5!2(#`NeEC+22FGkh&Ek?SH' );
define( 'NONCE_KEY',        'mk&W<:2XC|+eJlG,mmqj7&b>=U_.DNXs8U;+_ %K(}KH WV<^>!5Do.`PwyLAxCU' );
define( 'AUTH_SALT',        'Ss^s5zWOyCeKbt.5ethkRATq*PQ!Ag^J7>K3zpT4ar qSC:r&m=4/ev}2b>T34{p' );
define( 'SECURE_AUTH_SALT', 'V|bJo~p~odM$Xh2juWeSJ0-6E4gzv+Y0m!/@S*aI;*W_!6742*C<~GHM)h?@+dfv' );
define( 'LOGGED_IN_SALT',   'q&}jJ0`-90xAM2@H=nC2<}zE|s:ngLGxz2S|Yv-t$Y R&$?%el,3wb$Jv21{zL(r' );
define( 'NONCE_SALT',       ';&qSC5Ja/mX]6#$`!D/dr{g-!yON/ce@NKGbaKH5.rXX=uSjPZ#!,9E_# a9bLU*' );

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

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
