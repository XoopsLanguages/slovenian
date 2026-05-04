<?php
// mymenu
define('_MD_A_MYMENU_MYTPLSADMIN','');
define('_MD_A_MYMENU_MYBLOCKSADMIN','Dovoljenja');
define('_MD_A_MYMENU_MYPREFERENCES','Nastavitve');
// index.php
define('_AM_TH_DATETIME', 'Čas');
define('_AM_TH_USER', 'Uporabnik');
define('_AM_TH_IP', 'IP');
define('_AM_TH_AGENT', 'AGENT');
define('_AM_TH_TYPE', 'Tip');
define('_AM_TH_DESCRIPTION', 'Opis');
define('_AM_TH_BADIPS','Slabi IP-ji<br><br><span style="font-weight:normal;">Napišite vsako IP vrstico<br>prazno pomeni, da so dovoljeni vsi IP-ji</span>');
define('_AM_TH_GROUP1IPS','Dovoljeni IP-ji za skupino=1<br><br><span style="font-weight:normal;">Napišite vsako IP vrstico.<br>192.168. pomeni 192.168.*<br>prazno pomeni, da so dovoljeni vsi IP-ji</span>');
define('_AM_LABEL_COMPACTLOG', 'Kompakten dnevnik');
define('_AM_BUTTON_COMPACTLOG', 'Stisni!');
define('_AM_JS_COMPACTLOGCONFIRM', 'Podvojeni (IP,Vrsta) zapisi bodo odstranjeni');
define('_AM_LABEL_REMOVEALL', 'Odstrani vse zapise');
define('_AM_BUTTON_REMOVEALL', 'Odstrani vse!');
define('_AM_JS_REMOVEALLCONFIRM', 'Vsi dnevniki so popolnoma odstranjeni. Si res v redu?');
define('_AM_LABEL_REMOVE', 'Odstrani preverjene zapise:');
define('_AM_BUTTON_REMOVE', 'Odstrani!');
define('_AM_JS_REMOVECONFIRM', 'Odstrani OK?');
define('_AM_MSG_IPFILESUPDATED', 'Datoteke za IP so posodobljene');
define('_AM_MSG_BADIPSCANTOPEN', 'Datoteke za slab IP ni mogoče odpreti');
define('_AM_MSG_GROUP1IPSCANTOPEN', 'Datoteke za dovoljenje group=1 ni mogoče odpreti');
define('_AM_MSG_REMOVED', 'Zapisi so odstranjeni');
define('_AM_MSG_DELFAILED', 'Brisanje zapisov ni uspelo');
define('_AM_FMT_CONFIGSNOTWRITABLE', 'Omogoči zapisovanje v imenik konfiguracij: %s');
// prefix_manager.php
define('_AM_H3_PREFIXMAN', 'Upravljalnik predpon');
define('_AM_MSG_DBUPDATED', 'Baza podatkov uspešno posodobljena!');
define('_AM_CONFIRM_DELETE', 'Vsi podatki bodo izpuščeni. OK?');
define('_AM_TXT_HOWTOCHANGEDB',"Če želite spremeniti predpono,<br> ročno uredite %s/data/secure.php.<br><br>define('XOOPS_DB_PREFIX', '<b>%s</b>');");
// advisory.php
define('_AM_ADV_NOTSECURE', 'Ni varno');
define('_AM_ADV_TRUSTPATHPUBLIC', 'Če vidite sliko -NG- ali povezava vrne normalno stran, vaša XOOPS_TRUST_PATH ni pravilno postavljena. Najboljše mesto za XOOPS_TRUST_PATH je zunaj DocumentRoot. Če tega ne morete storiti, morate dati .htaccess (DENY FROM ALL) tik pod XOOPS_TRUST_PATH kot drugi najboljši način.');
define('_AM_ADV_TRUSTPATHPUBLICLINK', 'Preverite, ali so datoteke PHP znotraj TRUST_PATH nastavljene samo za branje (mora biti napaka 404,403 ali 500)');
define('_AM_ADV_REGISTERGLOBALS',"Če je »ON«, ta nastavitev vabi k različnim napadom z vbrizgavanjem. Če lahko, nastavite 'register_globals off' v php.ini ali, če ni mogoče, ustvarite ali uredite .htaccess v svojem imeniku XOOPS:");
define('_AM_ADV_ALLOWURLFOPEN',"Če je »ON«, ta nastavitev dovoljuje napadalcem izvajanje poljubnih skriptov na oddaljenih strežnikih.<br>Samo skrbnik lahko spremeni to možnost.<br>Če ste skrbnik, uredite php.ini ali httpd.conf.<br><b>Vzorec httpd.conf:<br> &nbsp; php_admin_flag &nbsp; dovoli_url_fopen &nbsp; off</b><br>Sicer pa ga zahtevajte svojim skrbnikom.");
define('_AM_ADV_USETRANSSID',"Če je »ON«, bo vaš ID seje prikazan v sidrnih oznakah itd.<br>Če želite preprečiti ugrabitev seje, dodajte vrstico v .htaccess v XOOPS_ROOT_PATH.<br><b>php_flag session.use_trans_sid off</b>");
define('_AM_ADV_DBPREFIX',"Ta nastavitev vabi k 'injekcijam SQL'.<br>Ne pozabite v nastavitvah tega modula VKLOPITI 'Prisilno čiščenje *'.");
define('_AM_ADV_LINK_TO_PREFIXMAN', 'Pojdi na upravitelja predpon');
define('_AM_ADV_MAINUNPATCHED', 'Uredite svoj mainfile.php, kot je zapisano v README.');
define('_AM_ADV_DBFACTORYPATCHED', 'Vaša tovarna baze podatkov je pripravljena za DBLayer Trapping anti-SQL-Injection');
define('_AM_ADV_DBFACTORYUNPATCHED', 'Vaša tovarna baze podatkov ni pripravljena za DBLayer Trapping anti-SQL-Injection. Potrebnih je nekaj popravkov.');
define('_AM_ADV_SUBTITLECHECK', 'Preverite, ali Protector deluje dobro');
define('_AM_ADV_CHECKCONTAMI', 'Kontaminacija');
define('_AM_ADV_CHECKISOCOM', 'Izolirani komentarji');
//XOOPS 2.5.4
define('_AM_ADV_REGISTERGLOBALS2', 'in vanjo postavite spodnjo vrstico:');
//XOOPS 2.5.8
define('_AM_PROTECTOR_PREFIX', 'Predpona');
define('_AM_PROTECTOR_TABLES', 'Tabele');
define('_AM_PROTECTOR_UPDATED', 'Posodobljeno');
define('_AM_PROTECTOR_COPY', 'Kopiraj');
define('_AM_PROTECTOR_ACTIONS', 'Dejanja');
// XOOPS 2.5.10 v Protector 3.60
define('_AM_LABEL_BAN_BY_IP', 'Prepoved IP-jev na preverjenih zapisih:');
define('_AM_BUTTON_BAN_BY_IP', 'IP Prepoved!');
define('_AM_JS_BANCONFIRM', 'IP Prepovedi OK?');
define('_AM_MSG_BANNEDIP', 'IP-ji so prepovedani');
define('_AM_ADMINSTATS_TITLE', 'Povzetek dnevnika Protector');
// XOOPS 2.5.11
define('_AM_ADMINSTATS_LAST_MONTH', 'Prejšnji mesec');
define('_AM_ADMINSTATS_LAST_WEEK', 'Prejšnji teden');
define('_AM_ADMINSTATS_LAST_DAY', 'Prejšnji dan');
define('_AM_ADMINSTATS_LAST_HOUR', 'Zadnja ura');
