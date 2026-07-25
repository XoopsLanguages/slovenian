<?php
//
// _LANGCODE: sl
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team

$content = '
<p>
    <abbr title="eXtensible Object-Oriented Portal System">XOOPS</abbr> je odprtokoden
    Objektno usmerjen sistem spletnega objavljanja, napisan v PHP. Je idealno orodje za
    razvoj majhnih do velikih dinamičnih spletnih mest skupnosti, portalov znotraj podjetja, korporativnih portalov, spletnih dnevnikov in še veliko več.
</p>
<p>
    XOOPS je izdan pod pogoji
    <a href="https://www.gnu.org/licenses/gpl-2.0.html" rel="external">GNU Splošna javna licenca (GPL)</a>
    različica 2 ali novejša in je brezplačna za uporabo in spreminjanje.
    Nadaljnja distribucija je brezplačna, če upoštevate pogoje distribucije GPL.
</p>
<h3>Zahteve</h3>
<ul>
    <li>WWW strežnik (<a href="https://www.apache.org/" rel="external">Apache</a>, <a href="https://www.nginx.com/" rel="external">NGINX</a>, IIS itd.)</li>
    <li><a href="https://www.php.net/" rel="external">PHP</a> 8.2 ali višje, priporočeno 8.4+</li>
    <li><a href="https://www.mysql.com/" rel="external">MySQL</a> 5.7.8 ali višje, priporočeno 8.4.5+ </li>
</ul>
<h3>Pred vami install</h3>
<ol>
    <li>Pravilno nastavite strežnik WWW, PHP in strežnik baze podatkov.</li>
    <li>Pripravite bazo podatkov za vaše spletno mesto XOOPS.</li>
    <li>Pripravite uporabniški račun in mu omogočite dostop do baze podatkov.</li>
    <li>Omogoči zapisovanje v te imenike in datoteke: %s</li>
    <li>Zaradi varnostnih razlogov vam toplo priporočamo, da spodnja dva imenika premaknete iz <a href="https://privacyaustralia.net/phpsec/projects/guide/php-security-guide-databases-and-sql/" rel="external">koren dokumenta</a> in spremenite imena map: %s</li>
    <li>Ustvarite (če še niso prisotni) in omogočite zapisovanje v te imenike: %s</li>
    <li>V brskalniku vklopite piškotek in JavaScript.</li>
</ol>
<h3>Posebne opombe</h3>
<ol>
    <li>Nekatere posebne kombinacije sistemske programske opreme lahko zahtevajo nekaj dodatnih konfiguracij za delovanje
    z XOOPS. Če se katera od teh tem nanaša na vaše okolje, si oglejte celotno vsebino
    <a href="https://xoops.gitbook.io/xoops-install-upgrade/" rel="external">XOOPS
    priročnik za namestitev</a> za več informacij.<br><br>

    <li><strong>SELinux</strong> omogočeni sistemi (kot npr <strong>CentOS</strong>  in <strong>RHEL</strong>) lahko zahteva spremembe varnostnega konteksta
    za imenike XOOPS poleg običajnih dovoljenj za datoteke, da omogočite zapisovanje v imenike.
    Posvetujte se s sistemsko dokumentacijo in/ali sistemskim skrbnikom.
</ol>
';

return $content;

