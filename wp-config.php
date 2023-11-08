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
define('DB_NAME', 'banco_segurancamix');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

/** Nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8');

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

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
define('AUTH_KEY',         '-jVKC/}+V=%Ji;T&|.Pp93@wdUXS&L(M{Gy`uHhHqZ:r3^V),|F~K*8x!58|7mDW');
define('SECURE_AUTH_KEY',  'c 0|2F)>h,vVQ(TNsghDO)<<C~oBHXoWyq)G1A41,t:%S-4>}8O-;:Zz/Y0kka9 ');
define('LOGGED_IN_KEY',    'v)7@;9r#:pt_cSA cV{.Gga;KYT#9(S_jC${Y+gI&lVydMU|gXUR#`peGL_ =0(e');
define('NONCE_KEY',        'JCnGP?|vsgz$7T1LC4d5tZm1%7)EuD{-+BPG%CHzW)4p0f <=]*I*j~.mQu,a>BM');
define('AUTH_SALT',        'rf-I0<5U&31L?jUM6E^V`7|!wCU?-uvX+:wO.<+mjpob|VKR.y1#??_sEX9VB[&l');
define('SECURE_AUTH_SALT', '  3yc-y_{s5yI:ZhFXnK-u O<Pq`.8qoh:9mHh}ONV?KYk>d-pz~F||)+E6>*CR#');
define('LOGGED_IN_SALT',   '9DwnTTz~ L/W6=OQau6^|0*&0X%+U16(/4<gT{|{P-$?&&W#L--JVe8R.dgwJeYw');
define('NONCE_SALT',       'm>P))--+EsC2E$0UUc<0`Q@(YYb/GyA+v$Z)h%4g{6@@uAcLnEgo/.=G=?Hc|t?b');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wpsm_';

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
define('WP_DEBUG', false);

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if (!defined('ABSPATH')) {
    define('ABSPATH', __DIR__ . '/');
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
