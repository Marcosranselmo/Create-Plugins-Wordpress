<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do banco de dados
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'wordpress' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'T|`(TCvYg:]Um]eoy9Rje-dKBn1)DU?^WxVng!bi- mEvR]Ey3+*ZtB[?WeQ]grA' );
define( 'SECURE_AUTH_KEY',  '0r P%Qt*RRvijEyOZs0rYP1:ZIU/ZC>?FBA_}j7drOX2!tZAZ[c&5}/_1a5m>d={' );
define( 'LOGGED_IN_KEY',    '&M1OKM#QND=N/X`!uywI X-_H)!+aDXyulphKz|H?j6Bp[`V3IWB:{c.f/rWCz{0' );
define( 'NONCE_KEY',        '#g9=e~oR;!2/=A^$ije 0_5sr`NxzPBCwDr)CLgO>/_y%/UoXy`Qs:FiqFyb{_+e' );
define( 'AUTH_SALT',        ':DbT%!Pc0{-N}p0jk[[^;c@2;|=DdG7^pmKIS:&$hs!jQ5!to[en}MM5U0y+o)fW' );
define( 'SECURE_AUTH_SALT', 'y!{C[To#{CAEY0jf2eNqm[^Dz{Et=V>3.T rf%0IP>NT4+fFhE}b*R%1iT<-^HqY' );
define( 'LOGGED_IN_SALT',   'C?VugK16ccEmbDyK7+r qlqY&HW8`$U_Q`5#9BF!R8H,eljwwv]Bou W!d#K4<Jm' );
define( 'NONCE_SALT',       'O%1KTwy,q1oZCd6yB3Ri Y4Iqm988{ihF2-c:zgu> Ww_EAW siBs+dJn66:GB:z' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', true );

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
