<?php
// $Id$ Russian translation. Charset: utf-8 (without BOM)
// mymenu
define('_MD_A_MYMENU_MYTPLSADMIN','');
define('_MD_A_MYMENU_MYBLOCKSADMIN','Права доступа');
define('_MD_A_MYMENU_MYPREFERENCES','Настройки');

// index.php
define("_AM_TH_DATETIME","Время");
define("_AM_TH_USER","Пользователь");
define("_AM_TH_IP","IP");
define("_AM_TH_AGENT","User-Agent");
define("_AM_TH_TYPE","Тип");
define("_AM_TH_DESCRIPTION","Описание");

define( "_AM_TH_BADIPS" , "Запрещенные IP" ) ;

define( "_AM_TH_GROUP1IPS" , 'Разрешенные IP для  Group=1 (Администратор)<br /><br /><span style="font-weight:normal;">Ввести разрешенные IP по одному на строку.<br />192.168. значит 192.168.*<br />незаполнение этого окна означает, что все IP имеют доступ</span>' ) ;

define( "_AM_LABEL_COMPACTLOG" , "Сжать журнал" ) ;
define( "_AM_BUTTON_COMPACTLOG" , "Сжать!" ) ;
define( "_AM_JS_COMPACTLOGCONFIRM" , "Дублированные записи (IP, Тип) будут удалены" ) ;
define( "_AM_LABEL_REMOVEALL" , "Удалить все записи" ) ;
define( "_AM_BUTTON_REMOVEALL" , "Удалить все!" ) ;
define( "_AM_JS_REMOVEALLCONFIRM" , "Абсолютно все записи в журнале будет удалены. Вы уверены?" ) ;
define( "_AM_LABEL_REMOVE" , "Удалить отмеченые записи:" ) ;
define( "_AM_BUTTON_REMOVE" , "Удалить" ) ;
define( "_AM_JS_REMOVECONFIRM" , "Удаляем?" ) ;
define( "_AM_MSG_IPFILESUPDATED" , "Файлы для IP были обновлены" ) ;
define( "_AM_MSG_BADIPSCANTOPEN" , "Файл для плохого IP не может быть открыт" ) ;
define( "_AM_MSG_GROUP1IPSCANTOPEN" , "файл для доступа group=1 не может быть открыт" ) ;
define( "_AM_MSG_REMOVED" , "Записи удалены" ) ;
define( "_AM_FMT_CONFIGSNOTWRITABLE" , "Сделайте каталог configs доступным для записи: %s" ) ;


// prefix_manager.php
define( "_AM_H3_PREFIXMAN" , "Управление префиксом таблиц" ) ;
define( "_AM_MSG_DBUPDATED" , "База данных успешно обновлена!" ) ;
define( "_AM_CONFIRM_DELETE" , "Все данные будут уничтожены. Продолжать?" ) ;
define( "_AM_TXT_HOWTOCHANGEDB" , "Если вы хотите изменить префикс таблиц, отредактируйте Ваш конфигурационный файл *.php в трастовом каталоге вручную, внеся изменения в строку, указаную ниже.<br /><br />define('SDATA_DB_PREFIX', '<b>%s</b>');" ) ;


// advisory.php
define("_AM_ADV_NOTSECURE","Тест не пройден");

define("_AM_ADV_REGISTERGLOBALS","Текущая конфигурация позволяет проводить целый спектр атак с замещением значений переменных.<br />Если вы имеете доступ к файлу .htaccess создайте его или отредактируйте этот файл добавив к нему строку указаную ниже.");
define("_AM_ADV_ALLOWURLFOPEN","Текущая конфигурация позволяет атакующим выполнять произвольные скрипты на удаленных машинах.<br />Только администратор сервера может изменить эту опцию.<br />Если вы являетесь администратором отредактируйте файл php.ini или httpd.conf.<br /><b>Пример для httpd.conf:<br /> &nbsp; php_admin_flag &nbsp; allow_url_fopen &nbsp; off</b><br />Или попросите об этом Вашего администратора.");
define("_AM_ADV_USETRANSSID","ID вашей сессии отображается в тегах ссылок и др.<br />	Во избежание использования ID вашей сессии третьими лицами добавьте следующую строку в ваш файл .htaccess расположеный в каталоге: 'XOOPS_ROOT_PATH<br /><b>php_flag session.use_trans_sid off</b>");
define("_AM_ADV_DBPREFIX","Текущее значение префикса таблиц БД позволяет проводить класс т.н. 'SQL Injecting' атак.<br />Не забудьте включить 'Принудительную очистку переменных *' в конфигурационном разделе этого модуля.");
define("_AM_ADV_LINK_TO_PREFIXMAN","Перейти к разделу управления префиксами БД.");
define("_AM_ADV_MAINUNPATCHED","Вы должны отредактировать Ваш файл mainfile.php так, как это описано в README.");

define("_AM_ADV_SUBTITLECHECK","Проверка работоспособности");
define("_AM_ADV_CHECKCONTAMI","Порча переменных");
define("_AM_ADV_CHECKISOCOM","Изолированые комментарии");



?>