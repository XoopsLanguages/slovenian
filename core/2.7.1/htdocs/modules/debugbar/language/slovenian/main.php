<?php
/**
 * DebugBar Module - Main Language Constants
 *
 * @copyright       (c) 2000-2026 XOOPS Project (https://xoops.org)
 * @license             GNU GPL 2 (https://www.gnu.org/licenses/gpl-2.0.html)
 * @author              trabis <lusopoemas@gmail.com>
 * @author              Richard Griffith <richard@geekwright.com>
 */
// _LANGCODE: sl

define('_MD_DEBUGBAR_DEBUG', 'Razhroščevanje');
define('_MD_DEBUGBAR_INCLUDED_FILES', 'Vključene datoteke');
define('_MD_DEBUGBAR_PHP_VERSION', 'Različica PHP');
define('_MD_DEBUGBAR_NONE', 'Nič');
define('_MD_DEBUGBAR_ERRORS', 'Napake');
define('_MD_DEBUGBAR_DEPRECATED', 'Zastarelo');
define('_MD_DEBUGBAR_QUERIES', 'Poizvedbe');
define('_MD_DEBUGBAR_BLOCKS', 'Bloki');
define('_MD_DEBUGBAR_EXTRA', 'Dodatno');
define('_MD_DEBUGBAR_TIMERS', 'Časovniki');
define('_MD_DEBUGBAR_TIMETOLOAD', '%s se je naložil v %s sekundah.');
define('_MD_DEBUGBAR_TOTAL', 'Skupaj');
define('_MD_DEBUGBAR_NOT_CACHED', 'Ni predpomnjeno');
define('_MD_DEBUGBAR_CACHED', 'Predpomnjeno (se obnovi vsakih %s sekund)');

// Value display labels (Smarty/DebugBar panels)
define('_MD_DEBUGBAR_EMPTY_STRING', '(prazen niz)');
define('_MD_DEBUGBAR_NULL', 'NULL');
define('_MD_DEBUGBAR_BOOL_TRUE', 'bool TRUE');
define('_MD_DEBUGBAR_BOOL_FALSE', 'bool FALSE');

// Extra panel labels
define('_MD_DEBUGBAR_DATABASE_QUERIES', 'Poizvedbe baze podatkov');
define('_MD_DEBUGBAR_MEMORY_USAGE', 'Poraba pomnilnika');
define('_MD_DEBUGBAR_QUERY_SUMMARY', '%d poizvedb');
define('_MD_DEBUGBAR_QUERY_DUPLICATES', '(%d dvojniki)');
define('_MD_DEBUGBAR_BYTES', '%s bajtov');
define('_MD_DEBUGBAR_DB_VERSION', '%s različica');

// Query error formatting
define('_MD_DEBUGBAR_QUERY_ERROR', '-- Številka napake: %s Sporočilo o napaki: %s');
define('_MD_DEBUGBAR_QUERY_ERROR_RAY', "
-- Napaka #%s: %s");

// Ray labels
define('_MD_DEBUGBAR_RAY_EXCEPTION', 'Izjema');
define('_MD_DEBUGBAR_RAY_QUERY', 'Poizvedba #%d');
define('_MD_DEBUGBAR_RAY_DUP', '[DUP x%d]');
define('_MD_DEBUGBAR_RAY_SLOW', 'POČASI');
define('_MD_DEBUGBAR_RAY_BLOCK_CACHED', 'Blokiraj (predpomnjeno %ds)');
define('_MD_DEBUGBAR_RAY_BLOCK_NOT_CACHED', 'Blokiraj (ni predpomnjeno)');
define('_MD_DEBUGBAR_RAY_DUMP', 'Izvoz');
define('_MD_DEBUGBAR_RAY_TEMPLATE_CONTEXT', 'Kontekst predloge');
define('_MD_DEBUGBAR_RAY_NO_VARS', '(ni spremenljivk predloge)');
define('_MD_DEBUGBAR_RAY_VARS_COUNT', '%s (%d vars)');

// Install error messages
define('_MD_DEBUGBAR_ERR_DIR_CREATE', 'Imenik "modules/debugbar/%s" ni bil ustvarjen');
define('_MD_DEBUGBAR_ERR_DIR_COPY', 'Med kopiranjem sredstva ni bilo mogoče ustvariti imenika "%s".');
