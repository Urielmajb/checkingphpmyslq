<?php

//Hacer una copia del wp-config.php antes de colocar en el siguiente codigo.

//generar llaves secretas para wordpress https://api.wordpress.org/secret-key/1.1/salt/ incluirlas despues de la configuracion de la bdo.
define('AUTH_KEY',         'D-Af66B*lZ}-`ZwM*j~^E>Bz V%;K&m>>V=A,k`BT,G3+lLAb&W3$1cK^/E$370a');
define('SECURE_AUTH_KEY',  ';z&x=Z(>(Myo^E<SNf:5P-3ur>RsKrX0L%!^1^{cgY_A/E^,X0kQ=C];B8]O9KT[');
define('LOGGED_IN_KEY',    '$~|8CXZP+^H:Z6qL N@1_~!P(&+1u|}t~Ron9CLF(Bx$^Byo(_d]UrQg~PlE%9+.');
define('NONCE_KEY',        'l{j|}_|*K)+oFH-$:V=J5,2.~fJAOxT#V3+S5@bPl?&k1?]wIfBNZ9Uop4r+%eq]');
define('AUTH_SALT',        'd<sp=_)j;[b+D%?NHmh7t/SMu.wfKAX+wVFXH@Q_F<k|d$0P$s(c}fIV~P=4|(Zy');
define('SECURE_AUTH_SALT', 'rH(2%0n3|~LYmGiTP$/.2<Wv{(`I+Lv?>vy:0uGC|E5D`n#gU?A(DA~:p(u1/jrf');
define('LOGGED_IN_SALT',   'qFehWEy=RJ/$R1T(d+(Pm<DoI2a vtngPKl=P_*:r/:%;pSJ$Gt5?ZE%rducHyBt');
define('NONCE_SALT',       '!}vVl|qcdQ}IM>1h1?)s(9;*azUWjX*-M(@M-F`z=~v$Rx>N7[I2--{ 56W;t-P9');

//Verificar de manera local
//activa el modo de “depuración” en todo WordPress
define( 'WP_DEBUG', true ); //Genera un log en wp-contets/debug.log
define( 'WP_DEBUG_LOG', true ); //genera logs

define('WP_DEBUG_DISPLAY', false ); //No muestra los errores en el sitio de manera publica, solo al administrador,
@ini_set('display_errors',0);

//depura errores si tenemos incluido javascrip en el sitioweb
define( 'SCRIPT_DEBUG', true);

//depura errores en la bdo
define( 'SAVEQUERIES', true );


//cambiar el log generado a otra ruta.
//pendientes

?>