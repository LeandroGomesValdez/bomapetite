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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'bd_cardapio' );

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
define( 'AUTH_KEY',         ' c@$eT5D7~[2iQ`T&0@G|/E1#>d!-P.@tzz6[-g ?-o7B[Co,csEKBt-7wT/R=sv' );
define( 'SECURE_AUTH_KEY',  ' X95ikY6=5zm=.xY>/TvLb8i5MjD`aAvSr5edFk5v_0<Dosp08;&y^:HfMQ&vC_.' );
define( 'LOGGED_IN_KEY',    'X38FY_y{]Zg(s,Jn8wj<d!so({`V6 ~cTV:Em(#K<*X^.rj$k1sK.[ Ie}l$r{+4' );
define( 'NONCE_KEY',        '{YV g5Orn>8ml5B1%O@POoe,K#O<yxfc#8ZLs@PKYZ~xfoQCQa *^$QEd/J4N`#.' );
define( 'AUTH_SALT',        '|N@PE/J/:L#=o5n(gHPk36<`>noa7Q:8xf79nTTD,)K&G/od;gE;3Cnb0HKm!d8t' );
define( 'SECURE_AUTH_SALT', '+Iv[D[]aU@$R^z1lup8#A`)e,=;s37.i:9c@M}U~V$P_>#8{JK7Nkx78PG2noYq6' );
define( 'LOGGED_IN_SALT',   't-M+}m3v,{GrpECTjG=/o9 ym-|}Gxzo&9pY9ssyLF}qFF#%6t%I2(^7/]@k;i)8' );
define( 'NONCE_SALT',       'iqg,p&I-d-Qf*OxuRKeGPHx+{DX:z;RV]SY(;Lzb]K`-:3wqMhTK?`koKamQeYZa' );

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

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
