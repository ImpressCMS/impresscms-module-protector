<?php

// mymenu
define('_MD_A_MYMENU_MYTPLSADMIN','');
define('_MD_A_MYMENU_MYBLOCKSADMIN','Permisos');
define('_MD_A_MYMENU_MYPREFERENCES','Preferencias');

// index.php
define("_AM_TH_DATETIME","Fecha");
define("_AM_TH_USER","Usuario");
define("_AM_TH_IP","IP");
define("_AM_TH_AGENT","User AGENT");
define("_AM_TH_TYPE","Tipo");
define("_AM_TH_DESCRIPTION","Descripción de eventos");

define( "_AM_TH_BADIPS" , 'Lista de IPs bloqueadas (baneadas)<br /><br /><span style="font-weight:normal;">Escriba cada IP en una línea.<br />Todo en blanco supone que todas las IPs tienen permiso.</span>' ) ;

define( "_AM_TH_GROUP1IPS" , 'IPs permitidas para Grupo=1 (Admin) <br /><br /><span style="font-weight:normal;">Escriba cada IP en una línea.<br />192.168. significa 192.168.*<br />Todo en blanco, todas las IPs tienen permiso.</span>' ) ;

define( "_AM_LABEL_COMPACTLOG" , "Compactar el registro " ) ;
define( "_AM_BUTTON_COMPACTLOG" , "Compactarlo ahora" ) ;
define( "_AM_JS_COMPACTLOGCONFIRM" , "Eliminar los registros duplicados (por IP y Tipo)" ) ;
define( "_AM_LABEL_REMOVEALL" , "Eliminar todos los registros " ) ;
define( "_AM_BUTTON_REMOVEALL" , "Eliminar todos" ) ;
define( "_AM_JS_REMOVEALLCONFIRM" , "¿Está seguro de querer eliminar completamente todos los eventos?" ) ;
define( "_AM_LABEL_REMOVE" , "Eliminar los registros marcados: " ) ;
define( "_AM_BUTTON_REMOVE" , "Eliminar" ) ;
define( "_AM_JS_REMOVECONFIRM" , "¿Confirma que desea eliminarlos?" ) ;
define( "_AM_MSG_IPFILESUPDATED" , "Actualizados ficheros de IPs" ) ;
define( "_AM_MSG_BADIPSCANTOPEN" , "El fichero de IPs dañinas no se puede abrir" ) ;
define( "_AM_MSG_GROUP1IPSCANTOPEN" , "El fichero de acceso para Grupo=1 (admin) no se puede abrir" ) ;
define( "_AM_MSG_REMOVED" , "Eliminados los registros indicados..." ) ;
define( "_AM_FMT_CONFIGSNOTWRITABLE" , "Convierta el directorio «config» en escribible: %s" ) ;


// prefix_manager.php
define( "_AM_H3_PREFIXMAN" , "Gestor de prefijos" ) ;
define( "_AM_MSG_DBUPDATED" , "La base de datos se ha actualizado correctamente" ) ;
define( "_AM_CONFIRM_DELETE" , "¿Seguro que desea eliminar todos los datos de las tablas?" ) ;
define( "_AM_TXT_HOWTOCHANGEDB" , "Si quiere cambiar el prefijo,<br /> edite %s/mainfile.php manualmente.<br /><br />define('XOOPS_DB_PREFIX', '<b>%s</b>');" ) ;


// advisory.php
define("_AM_ADV_NOTSECURE","No es seguro");

define("_AM_ADV_REGISTERGLOBALS","Esta configuración invita a diversos ataques de inyección<br />Si puede poner un .htaccess, edite o cree:");
define("_AM_ADV_ALLOWURLFOPEN","Esta configuración permite que un atacante ejecute códigos dudosos en servidores remotos.<br />Sólo el administrador del alojamiento puede cambiar esta opción.<br />Si es admin., edite php.ini o httpd.conf.<br /><b>Ejemplo de httpd.conf:<br /> &nbsp; php_admin_flag &nbsp; allow_url_fopen &nbsp; off</b><br />Si no lo es, solicítelo a sus administradores.");
define("_AM_ADV_USETRANSSID","Su ID de sesión es visible en etiquetas como &lt;a&gt;,&lt;form&gt;, etc.<br />Para evitar el «robo de sesión», agrege o edite un .htaccess en su XOOPS_ROOT_PATH (raiz de xoops):<br />&nbsp;&nbsp;&nbsp; <b>php_flag&nbsp; session.use_trans_sid&nbsp; off</b>");
define("_AM_ADV_DBPREFIX","Esta configuración invita a 'inyecciones de SQL'.<br />No olvide activar	'Forzar limpieza *' en las preferencias del módulo.");
define("_AM_ADV_LINK_TO_PREFIXMAN","Ir al gestor de prefijos");
define("_AM_ADV_MAINUNPATCHED","Debe modificar el archivo mainfile.php como se recomienda en README.");

define("_AM_ADV_SUBTITLECHECK","Verificar si Protector funciona correctamente");
define("_AM_ADV_CHECKCONTAMI","Contaminación de variables");
define("_AM_ADV_CHECKISOCOM","Comentarios solitarios");



?>