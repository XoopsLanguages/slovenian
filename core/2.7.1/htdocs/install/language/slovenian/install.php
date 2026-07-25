<?php
/**
 * Installer main english strings declaration file
 *
 * @copyright    (c) 2000-2026 XOOPS Project (https://xoops.org)
 * @license          GNU GPL 2.0 or later (https://www.gnu.org/licenses/gpl-2.0.html)
 * @package          installer
 * @since            2.3.0
 * @author           Haruki Setoyama  <haruki@planewave.org>
 * @author           Kazumi Ono <webmaster@myweb.ne.jp>
 * @author           Skalpa Keo <skalpa@xoops.org>
 * @author           Taiwen Jiang <phppp@users.sourceforge.net>
 * @author           dugris <dugris@frxoops.org>
 */
// _LANGCODE: sl
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team
define('SHOW_HIDE_HELP', 'Pokaži/skrij besedilo pomoči');
// License
//define('LICENSE_NOT_WRITEABLE', 'Licenčna datoteka "%s" NI zapisljiva!');
//define('LICENSE_IS_WRITEABLE', '%s Licenca je zapisljiva.');
// Configuration check page
define('SERVER_API', 'Strežnik API');
define('PHP_EXTENSION', '%s razširitev');
define('CHAR_ENCODING', 'Kodiranje znakov');
define('XML_PARSING', 'XML razčlenjevanje');
define('REQUIREMENTS', 'Zahteve');
define('_PHP_VERSION', 'Različica PHP');
define('RECOMMENDED_SETTINGS', 'Priporočene nastavitve');
define('RECOMMENDED_EXTENSIONS', 'Priporočene razširitve');
define('SETTING_NAME', 'Ime nastavitve');
define('RECOMMENDED', 'Priporočeno');
define('CURRENT', 'Trenutno');
define('RECOMMENDED_EXTENSIONS_MSG', 'Te razširitve niso potrebne za normalno uporabo, so pa morda potrebne za raziskovanje
 nekaterih posebnih funkcij (kot je podpora za več jezikov ali RSS). Zato jih je priporočljivo namestiti.');
define('NONE', 'Brez');
define('SUCCESS', 'Uspeh');
define('WARNING', 'Opozorilo');
define('FAILED', 'Neuspešno');
// Titles (main and pages)
define('XOOPS_INSTALL_WIZARD', 'Čarovnik za namestitev XOOPS');
define('LANGUAGE_SELECTION', 'Izbira jezika');
define('LANGUAGE_SELECTION_TITLE', 'Izberite vaš jezik');        // L128
define('INTRODUCTION', 'Uvod');
define('INTRODUCTION_TITLE', 'Dobrodošli v čarovniku za namestitev XOOPS');        // L0
define('CONFIGURATION_CHECK', 'Preverjanje konfiguracije');
define('CONFIGURATION_CHECK_TITLE', 'Preverjanje konfiguracije strežnika');
define('PATHS_SETTINGS', 'Nastavitve poti');
define('PATHS_SETTINGS_TITLE', 'Nastavitve poti');
define('DATABASE_CONNECTION', 'Povezava z bazo podatkov');
define('DATABASE_CONNECTION_TITLE', 'Povezava z bazo podatkov');
define('DATABASE_CONFIG', 'Konfiguracija baze podatkov');
define('DATABASE_CONFIG_TITLE', 'Konfiguracija baze podatkov');
define('CONFIG_SAVE', 'Shrani konfiguracijo');
define('CONFIG_SAVE_TITLE', 'Shranjevanje konfiguracije sistema');
define('TABLES_CREATION', 'Ustvarjanje tabel');
define('TABLES_CREATION_TITLE', 'Ustvarjanje tabel baze podatkov');
define('INITIAL_SETTINGS', 'Začetne nastavitve');
define('INITIAL_SETTINGS_TITLE', 'Vnesite svoje začetne nastavitve');
define('DATA_INSERTION', 'Vstavljanje podatkov');
define('DATA_INSERTION_TITLE', 'Shranjevanje vaših nastavitev v zbirko podatkov');
define('WELCOME', 'Dobrodošli');
define('WELCOME_TITLE', 'Dobrodošli na vaši strani XOOPS');        // L0
// Settings (labels and help text)
define('XOOPS_PATHS', 'XOOPS fizične poti');
define('XOOPS_URLS', 'Spletne lokacije');
define('XOOPS_ROOT_PATH_LABEL', 'XOOPS koren fizične poti dokumentov');
define('XOOPS_ROOT_PATH_HELP', 'Fizična pot do imenika dokumentov XOOPS (servirano) BREZ končne poševnice');
define('XOOPS_LIB_PATH_LABEL', 'imenik knjižnice XOOPS');
define('XOOPS_LIB_PATH_HELP', 'Physical path to the XOOPS library directory WITHOUT trailing slash, for forward compatibility. Locate the folder out of ' . XOOPS_ROOT_PATH_LABEL . ' to make it secure.');
define('XOOPS_DATA_PATH_LABEL', 'XOOPS imenik podatkovnih datotek');
define('XOOPS_DATA_PATH_HELP', 'Physical path to the XOOPS data files (writable) directory WITHOUT trailing slash, for forward compatibility. Locate the folder out of ' . XOOPS_ROOT_PATH_LABEL . ' to make it secure.');
define('XOOPS_URL_LABEL', 'Lokacija spletnega mesta (URL)'); // L56
define('XOOPS_URL_HELP', 'Glavni URL, ki bo uporabljen za dostop do vaše namestitve XOOPS'); // L58
define('LEGEND_CONNECTION', 'Strežniška povezava');
define('LEGEND_DATABASE', 'Baza podatkov'); // L51
define('DB_HOST_LABEL', 'Ime gostitelja strežnika');    // L27
define('DB_HOST_HELP', 'Ime gostitelja strežnika baze podatkov. Če niste prepričani, <em>localhost</em> deluje v večini primerov'); // L67
define('DB_USER_LABEL', 'Uporabniško ime');    // L28
define('DB_USER_HELP', 'Ime uporabniškega računa, ki bo uporabljen za povezavo s strežnikom baze podatkov'); // L65
define('DB_PASS_LABEL', 'Geslo');    // L52
define('DB_PASS_HELP', 'Geslo vašega uporabniškega računa baze podatkov'); // L68
define('DB_NAME_LABEL', 'Ime podatkovne baze');    // L29
define('DB_NAME_HELP', 'Ime baze podatkov na gostitelju. Namestitveni program bo poskusil ustvariti bazo podatkov, če ne obstaja'); // L64
define('DB_CHARSET_LABEL', 'Nabor znakov podatkovne baze');
define('DB_CHARSET_HELP', 'MySQL vključuje podporo za nabor znakov, ki vam omogoča shranjevanje podatkov z uporabo različnih naborov znakov in izvajanje primerjav v skladu z različnimi primerjavami.');
define('DB_COLLATION_LABEL', 'Razvrščanje podatkovne baze');
define('DB_COLLATION_HELP', 'Primerjava je nabor pravil za primerjavo znakov v naboru znakov.');
define('DB_PREFIX_LABEL', 'Predpona tabele');    // L30
define('DB_PREFIX_HELP', 'Ta predpona bo dodana vsem novim ustvarjenim tabelam, da bi se izognili konfliktom imen v bazi podatkov. Če niste prepričani, samo obdržite privzeto'); // L63
define('DB_PCONNECT_LABEL', 'Uporabi trajno povezavo');    // L54
define('DB_PCONNECT_HELP', "Privzeto je 'Ne'. Če niste prepričani, pustite prazno"); // L69
define('DB_DATABASE_LABEL', 'Baza podatkov');
define('LEGEND_ADMIN_ACCOUNT', 'Skrbniški račun');
define('ADMIN_LOGIN_LABEL', 'Prijava skrbnika'); // L37
define('ADMIN_EMAIL_LABEL', 'E-pošta skrbnika'); // L38
define('ADMIN_PASS_LABEL', 'Skrbniško geslo'); // L39
define('ADMIN_CONFIRMPASS_LABEL', 'Potrdi geslo'); // L74
// Buttons
define('BUTTON_PREVIOUS', 'Nazaj'); // L42
define('BUTTON_NEXT', 'Nadaljuj'); // L47
// Messages
define('XOOPS_FOUND', '%s najden');
define('CHECKING_PERMISSIONS', 'Preverjanje dovoljenj za datoteke in imenike ...'); // L82
define('IS_NOT_WRITABLE', '%s NI zapisljiv.'); // L83
define('IS_WRITABLE', '%s je zapisljiv.'); // L84
define('XOOPS_PATH_FOUND', 'Pot najdena.');
//define('READY_CREATE_TABLES', 'Zaznana ni bila nobena tabela XOOPS.<br>Namestitveni program je zdaj pripravljen za ustvarjanje sistemskih tabel XOOPS.');
define('XOOPS_TABLES_FOUND', 'Sistemske tabele XOOPS že obstajajo v vaši bazi podatkov.'); // L131
define('XOOPS_TABLES_CREATED', 'XOOPS sistemskih tabel je bilo ustvarjenih.');
//define('READY_INSERT_DATA', 'Namestitveni program je zdaj pripravljen za vstavljanje začetnih podatkov v vašo bazo podatkov.');
//define('READY_SAVE_MAINFILE', 'Namestitveni program je zdaj pripravljen za shranjevanje navedenih nastavitev v <em>mainfile.php</em>.');
define('SAVED_MAINFILE', 'Nastavitve shranjene');
define('SAVED_MAINFILE_MSG', 'Namestitveni program je navedene nastavitve shranil v <em>mainfile.php</em> in <em>secure.php</em>.');
define('DATA_ALREADY_INSERTED', 'XOOPS podatki najdeni v bazi podatkov.');
define('DATA_INSERTED', 'Začetni podatki so bili vstavljeni v bazo podatkov.');
// %s is database name
define('DATABASE_CREATED', 'Baza podatkov %s ustvarjena!'); // L43
// %s is table name
define('TABLE_NOT_CREATED', 'Ni mogoče ustvariti tabele %s'); // L118
define('TABLE_CREATED', 'Tabela %s ustvarjena.'); // L45
define('ROWS_INSERTED', '%d vnosov vstavljenih v tabelo %s.'); // L119
define('ROWS_FAILED', 'Vstavljanje %d vnosov v tabelo %s ni uspelo.'); // L120
define('TABLE_ALTERED', 'Tabela %s posodobljena.'); // L133
define('TABLE_NOT_ALTERED', 'Posodabljanje tabele %s ni uspelo.'); // L134
define('TABLE_DROPPED', 'Tabela %s je padla.'); // L163
define('TABLE_NOT_DROPPED', 'Brisanje tabele %s ni uspelo.'); // L164
// Error messages
define('ERR_COULD_NOT_ACCESS', 'Do navedene mape ni bilo mogoče dostopati. Preverite, ali obstaja in ali ga strežnik lahko prebere.');
define('ERR_NO_XOOPS_FOUND', 'V navedeni mapi ni bilo mogoče najti namestitve XOOPS.');
define('ERR_INVALID_EMAIL', 'Neveljavna e-pošta'); // L73
define('ERR_REQUIRED', 'Informacija je obvezna.'); // L41
define('ERR_PASSWORD_MATCH', 'Gesli se ne ujemata');
define('ERR_NEED_WRITE_ACCESS', 'Strežnik mora imeti dostop za pisanje do naslednjih datotek in map<br>(tj. <em>chmod 775 ime_imenika</em> na strežniku UNIX/LINUX)<br>Če niso na voljo ali niso pravilno ustvarjene, jih ustvarite ročno in nastavite ustrezna dovoljenja.');
define('ERR_NO_DATABASE', 'Ni bilo mogoče ustvariti baze podatkov. Za podrobnosti se obrnite na skrbnika strežnika.'); // L31
define('ERR_NO_DBCONNECTION', 'Ni mogoče vzpostaviti povezave s strežnikom podatkovne baze.'); // L106
define('ERR_WRITING_CONSTANT', 'Neuspelo pisanje konstante %s.'); // L122
define('ERR_COPY_MAINFILE', 'Distribucijske datoteke ni bilo mogoče kopirati v %s');
define('ERR_WRITE_MAINFILE', 'Ni bilo mogoče pisati v %s. Preverite dovoljenje za datoteko in poskusite znova.');
define('ERR_READ_MAINFILE', 'Ni bilo mogoče odpreti %s za branje');
define('ERR_INVALID_DBCHARSET', "Nabor znakov '%s' ni podprt.");
define('ERR_INVALID_DBCOLLATION', "Primerjava '%s' ni podprta.");
define('ERR_CHARSET_NOT_SET', 'Privzeti nabor znakov ni nastavljen za bazo podatkov XOOPS.');
define('_INSTALL_CHARSET', 'UTF-8');
define('SUPPORT', 'Podpora');
define('LOGIN', 'Avtentikacija');
define('LOGIN_TITLE', 'Avtentikacija');
define('USER_LOGIN', 'Prijava skrbnika');
define('USERNAME', 'Uporabniško ime:');
define('PASSWORD', 'Geslo :');
define('ICONV_CONVERSION', 'Pretvorba nabora znakov');
define('ZLIB_COMPRESSION', 'Zlib stiskanje');
define('IMAGE_FUNCTIONS', 'Funkcije slike');
define('IMAGE_METAS', 'Metapodatki slike (exif)');
define('FILTER_FUNCTIONS', 'Funkcije filtra');
define('ADMIN_EXIST', 'Skrbniški račun že obstaja.');
define('CONFIG_SITE', 'Konfiguracija spletišča');
define('CONFIG_SITE_TITLE', 'Konfiguracija spletišča');
define('MODULES', 'Namestitev modulov');
define('MODULES_TITLE', 'Namestitev modulov');
define('THEME', 'Izberi temo');
define('THEME_TITLE', 'Izberi privzeto temo');
define('INSTALLED_MODULES', 'Naslednji moduli so bili nameščeni.');
define('NO_MODULES_FOUND', 'Ni najdenih modulov.');
define('NO_INSTALLED_MODULES', 'Ni nameščenih modulov.');
define('THEME_NO_SCREENSHOT', 'Posnetek zaslona ni najden');
define('IS_VALOR', ' => ');
// password message
define('PASSWORD_LABEL', 'Moč gesla');
define('PASSWORD_DESC', 'Geslo ni vneseno');
define('PASSWORD_GENERATOR', 'Generator gesel');
define('PASSWORD_GENERATE', 'Ustvari');
define('PASSWORD_COPY', 'Kopiraj');
define('PASSWORD_VERY_WEAK', 'Zelo šibko');
define('PASSWORD_WEAK', 'Šibko');
define('PASSWORD_BETTER', 'Boljše');
define('PASSWORD_MEDIUM', 'Srednje');
define('PASSWORD_STRONG', 'Močno');
define('PASSWORD_STRONGEST', 'Najmočnejše');
//2.5.7
define('WRITTEN_LICENSE', 'Napisal XOOPS %s Licenčni ključ: <strong>%s</strong>');
//2.5.8
define('CHMOD_CHGRP_REPEAT', 'Poskusi znova');
define('CHMOD_CHGRP_IGNORE', 'Uporabi vseeno');
define('CHMOD_CHGRP_ERROR', 'Namestitveni program morda ne bo mogel napisati konfiguracijske datoteke %1$s.<p>PHP piše datoteke pod uporabnikom %2$s in skupino %3$s.<p>Imenik %4$s/ ima uporabnika %5$s in skupino %6$s');
//2.5.9
define("CURL_HTTP", "Knjižnica odjemalca URL (cURL)");
define('XOOPS_COOKIE_DOMAIN_LABEL', 'Domena piškotkov za spletno stran');
define('XOOPS_COOKIE_DOMAIN_HELP', 'Domena za nastavitev piškotkov. Lahko je prazno, celoten gostitelj iz URL (www.example.com) ali registrirana domena brez poddomen (example.com) za skupno rabo med poddomenami (www.example.com in blog.example.com.)');
define('INTL_SUPPORT', 'Funkcije internacionalizacije');
define('XOOPS_SOURCE_CODE', "XOOPS na GitHub");
define('XOOPS_INSTALLING', 'Nameščanje');
define('XOOPS_ERROR_ENCOUNTERED', 'Napaka');
define('XOOPS_ERROR_SEE_BELOW', 'Za sporočila glejte spodaj.');
define('MODULES_AVAILABLE', 'Razpoložljivi moduli');
define('INSTALL_THIS_MODULE', 'Dodaj %s');
//2.5.11
define('ERR_COPY_CONFIG_FILE', 'Ni bilo mogoče kopirati konfiguracijske datoteke %s');
//2.7.0
// website name and slogan
define('_WEBSITE_NAME', 'XOOPS Spletno mesto');
define('_WEBSITE_SLOGAN', 'Samo uporabi!');
define('_WEBSITE_META_KEYWORDS', 'xoops, ogrodje spletnih aplikacij, cms, sistem za upravljanje vsebin');
define('_WEBSITE_FOOTER', "Poganja XOOPS © 2001-{X_YEAR} <a href='https://xoops.org' rel='external' title='The XOOPS Project'>Projekt XOOPS</a>");
define('_WEBSITE_COPYRIGHT', 'Copyright © 2001-{X_YEAR}');
define('_WEBSITE_DESCRIPTION', 'XOOPS je dinamičen, objektno usmerjen odprtokodni portalski skript, napisan v PHP.');
define('_WEBSITE_CENSOR_REPLACE', 'Ups');
// 2.7.1
define('MISSING_REQUIRED_EXTENSIONS', 'Required PHP extensions are missing');
define('MISSING_REQUIRED_EXTENSIONS_MSG', 'XOOPS cannot be installed because the following mandatory PHP extension(s) are not available: %s. Enable them in your PHP configuration (php.ini) and restart your web server, then reload this page.');
