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
define('DB_NAME', 'inturist');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'qwe012');

/** Имя сервера MySQL */
define('DB_HOST', '192.168.1.8');

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
define('AUTH_KEY',         '^|vmPCT*TYX}P]:qHH5}6H$m}6mSWW$q 36# AuQ1MY`ef]9I!+%x>YH-jDWk`;0');
define('SECURE_AUTH_KEY',  '@K:I{D!7;+#-o_ <O+u|A`nt@uu~aMXS:kJ+bC-j^GI/2`}CuaWs3if*E(]*M`=p');
define('LOGGED_IN_KEY',    'K;(@<D!LNGuW|[@-/EgU7}Xnn0@-J8_Hs+H$SUc$->cUt4*XqI|LkEu,Z| yR:W9');
define('NONCE_KEY',        'n3Kf#G:otdu>odfZqx*Y^{4-K+KoD8dx$?WwNv#|]l6[R,mz$|_5G@oUl-3UMd/&');
define('AUTH_SALT',        'GxX)Rp>U_?iLca+6ET1V$4-Yer)y]86pcF:+J-@g!8Fp;Mp<8__t$Y:mKjkpK^yS');
define('SECURE_AUTH_SALT', '[XtX*-<8B38qNi4g*2JSb4J :V#J-4U>2kQQhS]m3f+5RVwE:PNYP=Jii::lGG{!');
define('LOGGED_IN_SALT',   '8bq=zrUoq>k3bR]T>wf*vb,Jq2HO*7I_hFI3_VoJ9~zhBvoS0{i<Y8Jgv<|+_T!9');
define('NONCE_SALT',       '[}_sI%h~P$+:0VRB_!J|`=j/|cxP8V73IKSHEe|yE@V&_@_H%@=Xn{ <xBnw9<-m');
/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'int_';

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
define('FS_METHOD', 'direct');

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
