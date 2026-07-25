<?php
/**
 * DebugBar Module - Module Info Language Constants
 *
 * @copyright       (c) 2000-2026 XOOPS Project (https://xoops.org)
 * @license             GNU GPL 2 (https://www.gnu.org/licenses/gpl-2.0.html)
 * @author              Richard Griffith <richard@geekwright.com>
 */
// _LANGCODE: sl

define('_MI_DEBUGBAR_NAME', 'DebugBar');
define('_MI_DEBUGBAR_DSC', 'Poročanje o napakah in analiza zmogljivosti s PHP DebugBar');

define('_MI_DEBUGBAR_ENABLE', 'Prikaži DebugBar');
define('_MI_DEBUGBAR_SMARTYDEBUG', 'Omogoči Smarty Debug');
define('_MI_DEBUGBAR_FILESDEBUG', 'Omogoči zavihek vključenih datotek');
define('_MI_DEBUGBAR_FILESDEBUG_DSC', 'Prikaži vse PHP datoteke, naložene med zahtevo');
define('_MI_DEBUGBAR_SLOWQUERY', 'Prag počasne poizvedbe (sekunde)');
define('_MI_DEBUGBAR_SLOWQUERY_DSC', 'Poizvedbe, počasnejše od tega, so označene rdeče (npr. 0.05 = 50ms)');

define('_MI_DEBUGBAR_QUERYMODE',      'Beleženje poizvedb');
define('_MI_DEBUGBAR_QUERYMODE_DSC',  'Vse poizvedbe ali samo počasne in napake');
define('_MI_DEBUGBAR_QUERYMODE_ALL',  'Vse poizvedbe');
define('_MI_DEBUGBAR_QUERYMODE_SLOW', 'Samo počasne in napake');

define('_MI_DEBUGBAR_RAY_ENABLE', 'Omogoči integracijo Ray');
define('_MI_DEBUGBAR_RAY_ENABLE_DSC', 'Pošlji podatke za razhroščevanje v aplikacijo Ray');

define('_MI_DEBUGBAR_ADMENU1', 'Domov');
define('_MI_DEBUGBAR_MENU_ABOUT', 'O modulu');

//Help
\define('_MI_DEBUGBAR_DIRNAME', basename(dirname(__DIR__, 2)));
\define('_MI_DEBUGBAR_HELP_HEADER', __DIR__ . '/help/helpheader.tpl');
\define('_MI_DEBUGBAR_BACK_2_ADMIN', 'Nazaj na upravljanje ');
\define('_MI_DEBUGBAR_OVERVIEW', 'Pregled');

//help multipage
\define('_MI_DEBUGBAR_DISCLAIMER', 'Izjava o omejitvi odgovornosti');
\define('_MI_DEBUGBAR_LICENSE', 'Licenca');
\define('_MI_DEBUGBAR_SUPPORT', 'Podpora');
