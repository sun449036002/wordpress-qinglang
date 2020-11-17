<?php
/**
 * WordPress基础配置文件。
 *
 * 这个文件被安装程序用于自动生成wp-config.php配置文件，
 * 您可以不使用网站，您需要手动复制这个文件，
 * 并重命名为“wp-config.php”，然后填入相关信息。
 *
 * 本文件包含以下配置选项：
 *
 * * MySQL设置
 * * 密钥
 * * 数据库表名前缀
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/zh-cn:%E7%BC%96%E8%BE%91_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL 设置 - 具体信息来自您正在使用的主机 ** //
/** WordPress数据库的名称 */
define('DB_NAME', 'wordpress');

/** MySQL数据库用户名 */
define('DB_USER', 'root');

/** MySQL数据库密码 */
define('DB_PASSWORD', 'mm');

/** MySQL主机 */
define('DB_HOST', 'localhost');

/** 创建数据表时默认的文字编码 */
define('DB_CHARSET', 'utf8mb4');

/** 数据库整理类型。如不确定请勿更改 */
define('DB_COLLATE', '');

/**#@+
 * 身份认证密钥与盐。
 *
 * 修改为任意独一无二的字串！
 * 或者直接访问{@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org密钥生成服务}
 * 任何修改都会导致所有cookies失效，所有用户将必须重新登录。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '^qM58HkZ<gV4h8Ql7N,srXma8E|;a/0ZIud HBcBtCGcsN[+86{m>>2E,.H(.[ =');
define('SECURE_AUTH_KEY',  ':B>[v$70o$V$ iw<[G+|0G%xKBTus^,YrbLyOs8}gB5]`$o|uy%S7<G^uhyvh)3S');
define('LOGGED_IN_KEY',    'n0Zx^s8_zV:#_KCHm;S/b,67*PGx^(N%v1<@vk( Q3O&GAQUj~Y}6>I_ kAde9+p');
define('NONCE_KEY',        '`r8fyHN=H$+ZfW@,`IQDU%U#74QIFygG(`,S&`&razmbd)[GbqSElF`Mxq- m+K~');
define('AUTH_SALT',        'Y17Aa)iZr;1>r$&(t/S3xbf4AX|}3 .yr-qK%7U8j)W8TDRu-|FWI[CK-2WYyX|W');
define('SECURE_AUTH_SALT', 'F-[[7+PCGfgc 2{](q-I}9YkXBM}$kXl4l@K1PG:r8_fI}uC9;86W`des`WVvAH5');
define('LOGGED_IN_SALT',   'P5cVO^)GmA~=V5o%4KEeT(o.];n}2*6W#>^7P5h`j.(+c*WbR5)w0h1,3{H<^/} ');
define('NONCE_SALT',       '3Y*Ph[Lu_q+3E+mh}jYqs|K9A&|{j:V,uit3d!X<%lG_GJE`_blpxK_=rgf==*CD');

/**#@-*/

/**
 * WordPress数据表前缀。
 *
 * 如果您有在同一数据库内安装多个WordPress的需求，请为每个WordPress设置
 * 不同的数据表前缀。前缀名只能为数字、字母加下划线。
 */
$table_prefix  = 'wp_';

/**
 * 开发者专用：WordPress调试模式。
 *
 * 将这个值改为true，WordPress将显示所有用于开发的提示。
 * 强烈建议插件开发者在开发环境中启用WP_DEBUG。
 *
 * 要获取其他能用于调试的信息，请访问Codex。
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* 好了！请不要再继续编辑。请保存本文件。使用愉快！ */

/** WordPress目录的绝对路径。 */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** 设置WordPress变量和包含文件。 */
require_once(ABSPATH . 'wp-settings.php');
