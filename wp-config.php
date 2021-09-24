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
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'meublog' );

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
define( 'AUTH_KEY',         'p/Fa[ncw&NG!FkP1`9mw|EW@Ih6DR 44^.:KQIo`.TSWW<a,QqfQo@p&BNfd;K9.' );
define( 'SECURE_AUTH_KEY',  '7H^mtf8uMef 7#^Ts1.7FU:YE[L&nQl?AWC/6*Q^=8bTjmf+V#8!>AWiypqb.ndU' );
define( 'LOGGED_IN_KEY',    '$Z$U+t0x!`wD34,A 9JCX9]qzBi(>2x#)Y_<.gPtoZF Sox|2AVI$0JA#&Y.vH#L' );
define( 'NONCE_KEY',        'R|e@-F@1%~u2z_jtLt1aXcYN(F/.@1WUuUA-`m#;:Iih(4y<bk|bTnSK)#_T<@nz' );
define( 'AUTH_SALT',        'AJNmr}oe!Vrw iny% jDjLi<3/=+cG$D]UwuQ=b;de]OA(U-0AHR}s-I<5{k-e+N' );
define( 'SECURE_AUTH_SALT', '?}3x4)0m#k`p,oF~NEDNz,6&`$SJM6fksEEcHC7?m=![Urfru[O?wasZdVR8_M Y' );
define( 'LOGGED_IN_SALT',   'b>OD._foebxvx;KuSH>>D|4K#3*+2lW*<HXy_Ug#IXRo{M%u:5-6lC6$ML-2ane#' );
define( 'NONCE_SALT',       ')E|XzqH!)b0P70zK5k@+M>>5na;QB79IU*p,O7{BjSW~vtz!.<4W5.M#{;60!n(L' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
