<?php

// _LANGCODE: sl
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team

define('_XOOPS_SMARTY4_MIGRATION', 'XOOPS Selitev Smarty4');

define('_XOOPS_SMARTY4_SCANNER_RESULTS', 'Rezultati skenerja');
define('_XOOPS_SMARTY4_SCANNER_RUN', 'Zaženi skeniranje');
define('_XOOPS_SMARTY4_SCANNER_END', 'Zapri Scanner');
define('_XOOPS_SMARTY4_SCANNER_RULE', 'Pravilo');
define('_XOOPS_SMARTY4_SCANNER_MATCH', 'Tekma');
define('_XOOPS_SMARTY4_SCANNER_FILE', 'Datoteka');
define('_XOOPS_SMARTY4_SCANNER_FIXED', 'Popravi štetje');
define('_XOOPS_SMARTY4_SCANNER_MANUAL_REVIEW', 'Potreben je ročni pregled');
define('_XOOPS_SMARTY4_SCANNER_AUTOFIX', 'Lahko se samodejno popravi: vsaka spremenljivka predmeta bo preimenovana z dodajanjem »_item« (npr. »foo« postane »foo_item«).');
define('_XOOPS_SMARTY4_SCANNER_NOT_WRITABLE', 'Ni za pisanje');

define('_XOOPS_SMARTY4_RESCAN_OPTIONS', 'Možnosti ponovnega skeniranja');

define('_XOOPS_SMARTY4_FIX_BUTTON', 'Kliknite spodnje potrditveno polje »Da« in nato kliknite gumb Zaženi skeniranje, da poskusite samodejno odpraviti vse najdene težave.');
define('_XOOPS_SMARTY4_SCANNER_MARK_COMPLETE', 'Označi dokončano');

define('_XOOPS_SMARTY4_TEMPLATE_DIR', 'Imenik predlog (neobvezno)');
define('_XOOPS_SMARTY4_TEMPLATE_EXT', 'Razširitev predloge (neobvezno)');


define(
    '_XOOPS_SMARTY4_SCANNER_OFFER',
    <<<'EOT'
<h3>XOOPS 2.7.0 uvaja pomembno spremembo: Smarty 4</h3>

<p>Na žalost lahko ta sprememba potencialno moti nekatere starejše teme. Zato, preden nadaljujete z nadgradnjo, poskrbite, da sledite tem korakom:

<li>Zaženite preflight.php, da preverite morebitne zastarele teme ali predloge modulov.</li>
<li>Če odkrijete kakršne koli težave, preberite ta dokument, da razumete potrebne spremembe, preden nadaljujete z nadgradnjo.</li>
<li>Ko naredite zahtevane spremembe, znova zaženite preflight.php.</li>
<li>Če ni več težav, lahko začnete postopek nadgradnje.</li>
</p>
EOT,
);
