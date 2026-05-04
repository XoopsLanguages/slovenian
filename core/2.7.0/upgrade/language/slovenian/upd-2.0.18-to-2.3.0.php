<?php
// _LANGCODE: sl
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team

define('LEGEND_XOOPS_PATHS', 'XOOPS fizične poti');
define('LEGEND_DATABASE', 'Nabor znakov baze podatkov');

define('XOOPS_LIB_PATH_LABEL', 'imenik knjižnice XOOPS');
define('XOOPS_LIB_PATH_HELP', 'Physical path to the XOOPS library directory WITHOUT trailing slash, for forward compatibility. Locate the folder out of ' . XOOPS_ROOT_PATH . ' to make it secure.');
define('XOOPS_DATA_PATH_LABEL', 'XOOPS imenik podatkovnih datotek');
define('XOOPS_DATA_PATH_HELP', 'Physical path to the XOOPS datafiles (writable) directory WITHOUT trailing slash, for forward compatibility. Locate the folder out of ' . XOOPS_ROOT_PATH . ' to make it secure.');

define('DB_COLLATION_LABEL', 'Nabor znakov in primerjava zbirke podatkov');
define('DB_COLLATION_HELP', "Od 4.12 MySQL podpira nabor znakov po meri in primerjanje. Vendar je bolj zapleteno od pričakovanega, zato NE spreminjajte, razen če niste prepričani v svojo izbiro.");
define('DB_COLLATION_NOCHANGE', 'Ne spreminjaj se');

define('XOOPS_PATH_FOUND', 'Pot najdena.');
define('ERR_COULD_NOT_ACCESS', 'Do navedene mape ni bilo mogoče dostopati. Preverite, ali obstaja in ali ga strežnik lahko prebere.');
define('CHECKING_PERMISSIONS', 'Preverjanje dovoljenj za datoteke in imenike ...');
define('ERR_NEED_WRITE_ACCESS', 'Strežnik mora imeti dostop za pisanje do naslednjih datotek in map <br>(tj. <em>chmod 777 ime_imenika</em> na strežniku UNIX/LINUX)');
define('IS_NOT_WRITABLE', '%s NI zapisljiv.');
define('IS_WRITABLE', '%s je zapisljiv.');
define('ERR_COULD_NOT_WRITE_MAINFILE', 'Napaka pri pisanju vsebine v mainfile.php, zapišite vsebino v mainfile.php ročno.');
