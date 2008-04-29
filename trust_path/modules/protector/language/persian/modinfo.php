<?php

if( defined( 'FOR_XOOPS_LANG_CHECKER' ) ) $mydirname = 'protector' ;
$constpref = '_MI_' . strtoupper( $mydirname ) ;

if( defined( 'FOR_XOOPS_LANG_CHECKER' ) || ! defined( $constpref.'_LOADED' ) ) {



// Appended by Xoops Language Checker -GIJOE- in 2007-07-30 16:31:33
define($constpref.'_BANIP_TIME0','Banned IP suspension time (sec)');
define($constpref.'_OPT_BIPTIME0','Ban the IP (moratorium)');
define($constpref.'_DOSOPT_BIPTIME0','Ban the IP (moratorium)');

// Appended by Xoops Language Checker -GIJOE- in 2007-03-29 03:36:15
define($constpref.'_ADMENU_MYBLOCKSADMIN','Permissions');

define( $constpref.'_LOADED' , 1 ) ;

// The name of this module
define($constpref."_NAME","ماژول امنيتي پروتکتور");

// A brief description of this module
define($constpref."_DESC","اين ماژول سايت زوپس شما را در برابر حملات ويروسي و لینک های داس نفوذ به پایگاه داده ها و ... محافظت ميکند.");

// Menu
define($constpref."_ADMININDEX","مرکز حفاظت");
define($constpref."_ADVISORY","مشاوره ی امنیتی");
define($constpref."_PREFIXMANAGER","مدیریت پیشوند نام جدول های پایگاه داده ها");

// Configs
define($constpref.'_GLOBAL_DISBL','غیر فعال کردن موقت حفاظت');
define($constpref.'_GLOBAL_DISBLDSC','تمام حفاظت ها به طور موقت غیر فعال میشود.<br />فراموش نکنید بعد از رفع نقص دوباره این گزینه را فعال کنید');

define($constpref.'_RELIABLE_IPS','IP های قابل اطمینان');
define($constpref.'_RELIABLE_IPSDSC','IP های که به آن ها اطمینان دارید به وصیله ی| از هم جدا کنید .علامت ^ ابتدای رشته های همسان را مشخص میکند, علامت $ انتهای رشته های همسان را مشخص میکند.'); 

define($constpref.'_LOG_LEVEL','درجه ثبت کردن وقایع');
define($constpref.'_LOG_LEVELDSC','');

define($constpref.'_LOGLEVEL0','none');
define($constpref.'_LOGLEVEL15','Quiet');
define($constpref.'_LOGLEVEL63','quiet');
define($constpref.'_LOGLEVEL255','full');

define($constpref.'_HIJACK_TOPBIT','تعداد بیت های IP که در هر جلسه محافظت میشود');
define($constpref.'_HIJACK_TOPBITDSC','Anti Session Hi-Jacking( مقابله با دزدی جلسه):<br />به طور پیش فرض 32(bit). (تمام بیت ها حفاظت شده است)<br />وقتی IP شما پایدار نیست, محدوده ی IP خود را باعددی مشخص از بیت ها تنظیم کنید.<br /> اگر IP شما در محدوده ای بین 192.168.0.0 تا 192.168.0.255 میتواند تغییر کنید عدد 24 ( بیت) را انتخواب کنید <br /><br />Session Hi-Jacking(دزدی جلسه): در اصل ترکیب ماهرانه ای است از دو نوع حمله ی دزدین IP و استراق سمع با این روش حمله یک مهاجم خودش را به جای شما جا زده و اقدام به ادامه دادن کار ها و فعالیت های شما در سایت مطابق خواسته ی خود میکند البته در حدی که شما دسترسی دارید');
define($constpref.'_HIJACK_DENYGP','گره های که IP اجازه ی تغییر در جلسه ( بین کاربر و زوپس) را ندارد');
define($constpref.'_HIJACK_DENYGPDSC','Anti Session Hi-Jacking( مقابله با دزدی جلسه)::<br />گروه های که IP شان در جلسه بین زوپس و کاربر نباید تغییر کند انتخواب کنید.<br />(پیشنهاد میشود فقط برای وب مستر ها روشن باشد.)<br /><br />Session Hi-Jacking(دزدی جلسه): در اصل ترکیب ماهرانه ای است از دو نوع حمله ی دزدین IP و استراق سمع با این روش حمله یک مهاجم خودش را به جای شما جا زده و اقدام به ادامه دادن کار ها و فعالیت های شما در سایت مطابق خواسته ی خود میکند البته در حدی که شما دسترسی دارید');
define($constpref.'_SAN_NULLBYTE','پاک سازی بایت ها خالی');
define($constpref.'_SAN_NULLBYTEDSC','اگر در کارکتر های پایان بخش به طور مکرر از "\\0" استفاده شده بود  این حرکت  یک حمله ثبت شود<br />بایت های خالی با  فشار دادن کلید  space تغییر میکند<br />(به شدت توصیه میشود این گزینه روشن باشد)');
define($constpref.'_DIE_NULLBYTE','اگر بایت های خالی پیدا شد کاربر از سایت  بیرون انداخته شود');
define($constpref.'_DIE_NULLBYTEDSC','The terminating character "\\0" is often used in malicious attacks.<br />(قویا توصیه میشود این گزینه روشن باشد)');
define($constpref.'_DIE_BADEXT','اگر کاربر فایل   بد  بارگذای کرد از سایت بیرون انداخته شود');
define($constpref.'_DIE_BADEXTDSC','اگر به فایل بارگذاری شده به وسیله ی کاربر لینک .php بدی الحاق شده بود  , این ماژول کاربر را از سایت زوپس شما بیرون می اندازد.<br />اگر شما بکرات فایل های php  به ماژول های PukiWiki و B-Wiki اضافه میکنید این گزینه را خاموش کنید');
define($constpref.'_CONTAMI_ACTION','نوع عملکرد اگر یک  آلودگی پیدا شد');
define($constpref.'_CONTAMI_ACTIONDS','Select the action when someone tries to contaminate system global variables into your XOOPS.<br />(پیشنهاد میشود بر روی صفحه ی سفید قرار دهید)');
define($constpref.'_ISOCOM_ACTION','Action if an isolated comment-in is found');
define($constpref.'_ISOCOM_ACTIONDSC','جلوگیری ازوارد کردن داده های خطر ناک به SQL:<br />این گزینه را فعال کنید  برای وقتی که  علامت ها "/*" به صورت منفرد پیدا شد<br />معنی " پاک سازی داده ها از کد های خطرناک "در اینجا این است که علامت های "*/" جداگانه در جدول های پایگاه داده ها اضافه شوند<br />(سفارش میشود تنظیمها بر روی ((پاک سازی داده ها از کد های خطرناک)) باشد)');
define($constpref.'_UNION_ACTION','Action if a UNION is found');
define($constpref.'_UNION_ACTIONDSC','جلوگیری از وارد کردن داده های خطر ناک به SQL:<br />نوع عملکرد را وقتی ترکیب هم جنسی از پیوند به SQL پیدا شد مشخص کنید<br />معنی "پاک سازی داده ها از کد های خطرناک" این است کهunion" " را به "uni-on" تغییر میدهد . یعنی اتحاد ترکیبات هم  جنس را  از بین میبرد و مانع ورود داده های خطر ناک به پایگاه داده ها گردد<br />(سفارش میشود تنظیمها بر روی ((پاک سازی داده ها از کد های خطرناک)) باشد)');
define($constpref.'_ID_INTVAL','مقدار های عددی را حتما به متغیر های عددی تفسیر کن');
define($constpref.'_ID_INTVALDSC','تمام در خواست های که نام "*id" را دارند یک عدد صحیح در نظر گرفته شود.یعنی مانع قرار دادن هر چیز به جای عدد در جلوی  id  میشود<br />این گزینه از فرم شما در برابر   وارد کردن بعضی  از داده های XSS و SQL محافظت میکند<br />این گزینه در حالت پیش فرض روشن میباشد اما ممکن است  باعث بروز مشکل در برخی از ماژول ها شود.');
define($constpref.'_FILE_DOTDOT','Protection from Directroy Traversals');
define($constpref.'_FILE_DOTDOTDSC','It eliminates ".." from all requests looks like Directory Traversals');

define($constpref.'_BF_COUNT','Anti Brute Force');
define($constpref.'_BF_COUNTDSC','تعداد دفعاتی را که کاربر مهمان میتواند نام کاربری و پسورد خود رادر مدت 10 دقیقه وارد کند  مشخص کنید اگر او بعد از گذشت این زمان موفق به ورود (login) نشد IP او توسط سیستم بسته شده است<br /><br />این روش هک روشی است که در آن هکر یک سری کلمات را به عنوان پسورددر نرم افزار هک وارد کرده و این کلمات به ترتیب به عنوان پسورد کاربر چک میشود');

define($constpref.'_DOS_SKIPMODS','ماژول های که در برابر حملات DoS/Crawler چک نمیشوند');
define($constpref.'_DOS_SKIPMODSDSC','نام ماژول ها را با | از هم جدا کنید.همچنین این اجازه برای ماژول ها ی چپ مفید خواهد بود.<br />منظور از Crawler روبات های خزنده ی موتور های جستجوگر میباشد');

define($constpref.'_DOS_EXPIRE','Watch time for high loadings (sec)');
define($constpref.'_DOS_EXPIREDSC','This value specifies the watch time for high-frequent reloading (F5 attack) and high loading crawlers.');

define($constpref.'_DOS_F5COUNT','تعداد ریفریش ها با F5 که یک حمله حساب میشود');
define($constpref.'_DOS_F5COUNTDSC','از حملات DoS پیشگیری میکند.<br />تعداد مجاز ((دوباره بارگذاری کردن)) صفحات را مشخص کنید  بیش از این تعداد حمله  حساب میشود.');
define($constpref.'_DOS_F5ACTION','عکس العمل در برابر حمله با F5');

define($constpref.'_DOS_CRCOUNT','شمار غیر صحیح روبات های خزنده');
define($constpref.'_DOS_CRCOUNTDSC','جلو گیری کردن از لود بیش از حد  به وسیله ی روبات های خزنده ی موتور های جستجو.<br />عدد وارد شده تعداد  مناسب ورود ربات های جستگور به سایت میباشد تعداد بیش از این یک حرکت غلط حساب میشود.');
define($constpref.'_DOS_CRACTION','عکس العمل در برابر لود بیش از حد به وسیله ی روبات های خزنده ی موتور های جستجو');

define($constpref.'_DOS_CRSAFE','Welcomed User-Agent');
define($constpref.'_DOS_CRSAFEDSC','A perl regex pattern for User-Agent.<br />If it matches, the crawler is never considered as a high loading crawler.<br />eg) /(msnbot|Googlebot|Yahoo! Slurp)/i');

define($constpref.'_OPT_NONE','هیچکدام( فقط گزارش)');
define($constpref.'_OPT_SAN','پاک سازی داده ها از کد های خطرناک ');
define($constpref.'_OPT_EXIT','صفحه ی سفید');
define($constpref.'_OPT_BIP','بستن IP');

define($constpref.'_DOSOPT_NONE','هیچکدام( فقط گزارش)');
define($constpref.'_DOSOPT_SLEEP','Sleep');
define($constpref.'_DOSOPT_EXIT','صفحه ی سفید');
define($constpref.'_DOSOPT_BIP','بستن IP');
define($constpref.'_DOSOPT_HTA','دفع کردن به وسیله .htaccess(آزمایشی)');

define($constpref.'_BIP_EXCEPT','گروه های که هیچ وقت جز IP بد ثبت نمیشوند');
define($constpref.'_BIP_EXCEPTDSC','کاربرانی که جز گروه انتخوابی شما هستند هیچ وقت بن نمیشوند.<br />(پیشنهاد میشود فقط برای وب مستر ها روشن باشد)');

define($constpref.'_DISABLES','خصوصيات خطرناک در زوپس رو غير فعال کن');

define($constpref.'_BIGUMBRELLA','فعال کردن anti-XSS( محافظ بزرگ)');
define($constpref.'_BIGUMBRELLADSC','این گزینه از شما در برابر اکثر حمله های که  بر اساس آسیب پذیری XSS برنامه ریزی شده اند محافظت میکند. اما 100% نیست<br /><br />حملات XSS شبیه به حملات تزیق اسکریپ میباشد و هدف اصلی از آن هک کردن سایت نیست بلکه حمله به کاربران است در این نوع حمله مهاجم کد های خطر ناکی را در صفحات سایت وارد میکند که این کد ها کامپیوتر کاربر را آلوده میکند');

define($constpref.'_SPAMURI4U','anti-SPAM: تعداد لینک ها برای کابر معمولی');
define($constpref.'_SPAMURI4UDSC','اگر به تعداد عدد مشخص شده در کادر مقابل لینک در پست کاربر پیدا شد با پست او به عنوان هرز نامه برخورد گردد. با انتخاب صفر این گزینه را غیر فعال کنید.');
define($constpref.'_SPAMURI4G','anti-SPAM: تعدا لینک ها برای گروه ها');
define($constpref.'_SPAMURI4GDSC','اگر به تعداد عدد مشخص شده در کادر مقابل لینک در پست گروه ها پیدا شد با پست او به عنوان هرز نامه برخورد گردد. با انتخاب صفر این گزینه را غیر فعال کنید.');

}

?>