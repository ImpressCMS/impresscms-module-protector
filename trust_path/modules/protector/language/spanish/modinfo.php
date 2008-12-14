<?php

if( defined( 'FOR_XOOPS_LANG_CHECKER' ) ) $mydirname = 'protector' ;
$constpref = '_MI_' . strtoupper( $mydirname ) ;

if( defined( 'FOR_XOOPS_LANG_CHECKER' ) || ! defined( $constpref.'_LOADED' ) ) {

define( $constpref.'_LOADED' , 1 ) ;

// The name of this module
define($constpref."_NAME","Xoops Protector");

// A brief description of this module
define($constpref."_DESC","Este módulo protege su sitio xoops de diversos ataques como DoS, Injección SQL y contaminación de variables.");

// Menu
define($constpref."_ADMININDEX","Centro de protección");
define($constpref."_ADVISORY","Asesor de seguridad");
define($constpref."_PREFIXMANAGER","Gestor de prefijos");
define($constpref.'_ADMENU_MYBLOCKSADMIN','Permisos') ;

// Configs
define($constpref.'_GLOBAL_DISBL','Desactivado temporalmente');
define($constpref.'_GLOBAL_DISBLDSC','Todas las protecciones se desactivan temporalmente.<br />No se olvide de volver a activarlo tras resolver el problema');

define($constpref.'_DEFAULT_LANG','Lenguaje predeterminado');
define($constpref.'_DEFAULT_LANGDSC','Especifique el lenguaje en el que los mensajes se mostrarán antes de procesar common.php');

define($constpref.'_RELIABLE_IPS','IPs de confianza');
define($constpref.'_RELIABLE_IPSDSC','Establecer IPs de confianza separadas con |<br />^ se pone al inicio de la cadena, $ se pone al final de la cadena.');

define($constpref.'_LOG_LEVEL','Nivel de registro de eventos');
define($constpref.'_LOG_LEVELDSC','');

define($constpref.'_BANIP_TIME0','Tiempo (seg.) de suspensión de IP bloqueada (ban)');

define($constpref.'_LOGLEVEL0','Ninguno');
define($constpref.'_LOGLEVEL15','Modo Silencioso (mas que silencio, solo alto riesgo)');
define($constpref.'_LOGLEVEL63','modo silencioso (excluye bajo riesgo)');
define($constpref.'_LOGLEVEL255','Todos');

define($constpref.'_HIJACK_TOPBIT','Num. bits de IP protegidos durante la sesión');
define($constpref.'_HIJACK_TOPBITDSC','Anti-robo de sesión:<br />Por omisión: 32 bits (todos los bits protegidos)<br />Si su IP no es fija, establezca el rango de octetos según el número de bits.<br />Ej. está entre 192.168.0.0 y 192.168.0.255, ponga 24 (bits)');
define($constpref.'_HIJACK_DENYGP','Grupos cuya IP no ha de cambiar durante la sesión');
define($constpref.'_HIJACK_DENYGPDSC','Anti-robo de sesión:<br />Seleccione los grupos cuyos usuarios tienen prohibido que su IP cambie durante la sesión.<br />(Recomendado activar Administradores)');
define($constpref.'_SAN_NULLBYTE','Limpiar bytes nulos');
define($constpref.'_SAN_NULLBYTEDSC','El carácter de terminación "\\0" se usa con frecuencia en ataques malintencionados.<br />El carácter de byte nulo se sustituye por un espacio.<br />(Muy recomendado: Sí)');
define($constpref.'_DIE_NULLBYTE','Cerrar sesión si se detectan bytes nulos');
define($constpref.'_DIE_NULLBYTEDSC','El carácter de terminación "\\0" se usa con frecuencia en ataques malintencionados.<br />(Muy recomendado: Sí)');
define($constpref.'_DIE_BADEXT','Cerrar sesión si se suben ficheros peligrosos');
define($constpref.'_DIE_BADEXTDSC','Si alguien intenta subir ficheros con extensiones peligrosas como .php, este módulo le saca de su sitio XOOPS.<br />Si a menudo usted mismo adjunta ficheros php en módulos como B-Wiki o PukiWikiMod, póngala en No.');
define($constpref.'_CONTAMI_ACTION','Acción al detectar una contaminación de variables.');
define($constpref.'_CONTAMI_ACTIONDS','Acción cuando alguien intenta contaminar las variables globales del sistema dentro de XOOPS.<br />(Recomendado: pantalla en blanco)');
define($constpref.'_ISOCOM_ACTION','Acción al detectar un comentario solitario');
define($constpref.'_ISOCOM_ACTIONDSC','Anti-inyección SQL:<br />acción al detectar un "/*" solitario.<br />La opción "Limpieza" agrega otra "*/" al final.<br />(Recomendado: Limpieza)');
define($constpref.'_UNION_ACTION','Acción al detectar una UNION');
define($constpref.'_UNION_ACTIONDSC','Anti-inyección SQL:<br />acción al detectar alguna sintaxis de SQL como UNION.<br />La opción "Limpieza" cambia "union" por "uni-on".<br />(Recomendado: Limpieza)');
define($constpref.'_ID_INTVAL','Fijar variables tipo ID a núm. entero (intval)');
define($constpref.'_ID_INTVALDSC','Todas las peticiones con nombre "*id" se tratan como un entero (integer).<br />Esta opción le protege contra algunos ataques XSS e inyecciones SQL.<br />Aunque recomiendo activar esta opción, puede causar problemas con algunos módulos.');
define($constpref.'_FILE_DOTDOT','Protección contra saltos de directorio');
define($constpref.'_FILE_DOTDOTDSC','Elimina ".." de todas las peticiones que parezcan saltos de directorio');

define($constpref.'_BF_COUNT','Anti-fuerza bruta');
define($constpref.'_BF_COUNTDSC','Establece la cantidad permitida de intentos de inicio de sesión a un anónimo durante 10 minutos. Si no la inicia, se bloquea su IP.');

define($constpref.'_BWLIMIT_COUNT','Limitación de ancho de banda');
define($constpref.'_BWLIMIT_COUNTDSC','Especifique el acceso máximo al archivo mainfile.php durante un período de tiempo. Este valor debería ser 0 para entornos normales con bastante potencia de CPU. Valores más bajos que 10 serán ignorados.');

define($constpref.'_DOS_SKIPMODS','Modules exentos de comprobación DoS y Crawler');
define($constpref.'_DOS_SKIPMODSDSC','Directorios de los módulos, separados con |. En esta opción es conveniente incluir los módulos de chat, etc.');

define($constpref.'_DOS_EXPIRE','Tiempo de observación de recargas reiteradas (seg.)');
define($constpref.'_DOS_EXPIREDSC','Este valor especifica el tiempo de observación para peticiones de recarga muy frecuentes (ataque F5) y rastreos reiterados de crawlers.');

define($constpref.'_DOS_F5COUNT','Contador para ser considerado ataque F5');
define($constpref.'_DOS_F5COUNTDSC','Prevención contra ataques DoS.<br />Este valor especifica el número de peticiones de recarga para ser considerado un ataque malintencionado.');
define($constpref.'_DOS_F5ACTION','Acciones contra ataques F5');

define($constpref.'_DOS_CRCOUNT','Contador para ser considerado ataque Crawler');
define($constpref.'_DOS_CRCOUNTDSC','Prevención contra crawlers de rastreo reiterado.<br />Este valor especifica la cantidad de accesos para ser considerados un crawler malintencionado.');
define($constpref.'_DOS_CRACTION','Acción contra Crawlers de rastreo reiterado');

define($constpref.'_DOS_CRSAFE','User-Agent bienvenidos');
define($constpref.'_DOS_CRSAFEDSC','Patrón perl-regex para User-Agent.<br />Si concuerda, el crawler no se considera nunca un rastreador malintencionado.<br />Ej. /(msnbot|Googlebot|Yahoo! Slurp)/i');

define($constpref.'_OPT_NONE','Nada (solo registra evento)');
define($constpref.'_OPT_SAN','Limpieza');
define($constpref.'_OPT_EXIT','Pantalla en blanco');
define($constpref.'_OPT_BIP','Bloquear IP (sin final)');
define($constpref.'_OPT_BIPTIME0','Bloquear IP (por un tiempo)');

define($constpref.'_DOSOPT_NONE','Nada (solo registra evento)');
define($constpref.'_DOSOPT_SLEEP','Inactividad');
define($constpref.'_DOSOPT_EXIT','Pantalla en blanco');
define($constpref.'_DOSOPT_BIP','Bloquear IP (sin final)');
define($constpref.'_DOSOPT_BIPTIME0','Bloquear IP (por un tiempo)');
define($constpref.'_DOSOPT_HTA','DENY a través de .htaccess (experimental)');

define($constpref.'_BIP_EXCEPT','Grupos nunca considerados con IP maliciosa');
define($constpref.'_BIP_EXCEPTDSC','Un usuario que pertenece al grupo indicado jamás será bloqueado.<br />(Recomiendo activar el de Administradores)');

define($constpref.'_DISABLES','Deshabilitar características peligrosas de XOOPS');

define($constpref.'_BIGUMBRELLA','Habilitar anti-XSS (BigUmbrella)');
define($constpref.'_BIGUMBRELLADSC','Esto le protege de casi cualquier ataque vía vulnerabilidades XSS. Pero no al 100%');

define($constpref.'_SPAMURI4U','Anti-SPAM: URL de usuarios registrados');
define($constpref.'_SPAMURI4UDSC','Si esa cantidad de URL se encuentran en los datos de un POST de un usuario registrado que no sea administrador, el POST se considera SPAM. Cero (0) deshabilita esta característica.');
define($constpref.'_SPAMURI4G','Anti-SPAM: URLs de usuarios anónimos');
define($constpref.'_SPAMURI4GDSC','Si esa cantidad de URL se encuentran en los datos de un POST de un usuario anónimo, el POST se considera SPAM. Cero (0) deshabilita esta característica.');

}

?>