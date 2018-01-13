<?php
/**
 * WordPress için taban ayar dosyası.
 *
 * Bu dosya şu ayarları içerir: MySQL ayarları, tablo öneki,
 * gizli anahtaralr ve ABSPATH. Daha fazla bilgi için 
 * {@link https://codex.wordpress.org/Editing_wp-config.php wp-config.php düzenleme}
 * yardım sayfasına göz atabilirsiniz. MySQL ayarlarınızı servis sağlayıcınızdan edinebilirsiniz.
 *
 * Bu dosya kurulum sırasında wp-config.php dosyasının oluşturulabilmesi için
 * kullanılır. İsterseniz bu dosyayı kopyalayıp, ismini "wp-config.php" olarak değiştirip,
 * değerleri girerek de kullanabilirsiniz.
 *
 * @package WordPress
 */

// ** MySQL ayarları - Bu bilgileri sunucunuzdan alabilirsiniz ** //
/** WordPress için kullanılacak veritabanının adı */
define('DB_NAME', 'dbname');

/** MySQL veritabanı kullanıcısı */
define('DB_USER', 'dbuser');

/** MySQL veritabanı parolası */
define('DB_PASSWORD', 'dbpass');

/** MySQL sunucusu */
define('DB_HOST', 'dbhost');

/** Yaratılacak tablolar için veritabanı karakter seti. */
define('DB_CHARSET', 'utf8');

/** Veritabanı karşılaştırma tipi. Herhangi bir şüpheniz varsa bu değeri değiştirmeyin. */
define('DB_COLLATE', '');

/**#@+
 * Eşsiz doğrulama anahtarları.
 *
 * Her anahtar farklı bir karakter kümesi olmalı!
 * {@link http://api.wordpress.org/secret-key/1.1/salt WordPress.org secret-key service} servisini kullanarak yaratabilirsiniz.
 * Çerezleri geçersiz kılmak için istediğiniz zaman bu değerleri değiştirebilirsiniz. Bu tüm kullanıcıların tekrar giriş yapmasını gerektirecektir.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'o8Rr&pL8UX29[_/RWeI#hdYZ.zgLJd-<}sSkA!z4%-6?]Ov!>9S]qCP3ESdozoF~');
define('SECURE_AUTH_KEY',  'M}`H2#M{ZIe=sH;)/=dR6dK4d7Mz>~-eaM@mBS$sGME:L%Zi-p}ky^ysDoQ ZTG@');
define('LOGGED_IN_KEY',    'OX,fyVPC3;a8Fc:!A*Nw)P3?w_}VrBA(]+xj6)9p63E4l|[16D_r1_4ahiM?{_v2');
define('NONCE_KEY',        ')rQ`j#_6ZVMw-inB`/r(N U6ggs:H]/*2@jRS1Ac-HwLwv2;GuYCf~e0S,.PDMEP');
define('AUTH_SALT',        'F:FIsNjv.St2,tF@QH]`a?2Nv>uqs)2p=n/|G~2R>{WA)`<cANYhg8+NFVN{,Ua?');
define('SECURE_AUTH_SALT', '(N%f2<]G76oO9~*uTIs-oU+Pn8jxaHx~q#%?A[g6it9!z.n0@[9./ ^*U1L0u#(F');
define('LOGGED_IN_SALT',   'CvF24gELE H*fq-)4chu7Czk*WqdZUETG{TVIzGBhlC5wzinl@*o5?A+oc:|_&%U');
define('NONCE_SALT',       '=yHO0lR|kMXb,o]ji q9tGbL;e%L|MHZ|U/V@Zb4I5 u2}XA*zu!Fp?[QA))CTPw');
/**#@-*/

/**
 * WordPress veritabanı tablo ön eki.
 *
 * Tüm kurulumlara ayrı bir önek vererek bir veritabanına birden fazla kurulum yapabilirsiniz.
 * Sadece rakamlar, harfler ve alt çizgi lütfen.
 */
$table_prefix  = 'wp_';

/**
 * Geliştiriciler için: WordPress hata ayıklama modu.
 *
 * Bu değeri "true" yaparak geliştirme sırasında hataların ekrana basılmasını sağlayabilirsiniz.
 * Tema ve eklenti geliştiricilerinin geliştirme aşamasında WP_DEBUG
 * kullanmalarını önemle tavsiye ederiz.
 */
define('WP_DEBUG', false);

/* Hepsi bu kadar. Mutlu bloglamalar! */

/** WordPress dizini için mutlak yol. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** WordPress değişkenlerini ve yollarını kurar. */
require_once(ABSPATH . 'wp-settings.php');
