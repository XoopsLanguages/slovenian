xoopseditor ponuja skupino urejevalnikov za XOOPS

uporabniški priročnik:

1 preverite datoteke xoops_version.php pod /xoopseditor/ in se prepričajte, da je novejša od vaših trenutnih

2 naloži /xoopseditor/ v /XOOPS/class/ => /XOOPS/class/xoopseditor/:
  XOOPS/class/xoopseditor/dhtmlext
  XOOPS/class/xoopseditor/dhtmltextarea
  XOOPS/razred/xoopseditor/fckeditor
  XOOPS/razred/xoopseditor/koivi
  XOOPS/class/xoopseditor/textarea
  XOOPS/razred/xoopseditor/tinymce

3 konfigurirajte nastavitve, kjer je primerno
3.1 ./dhtmlext(vsi urejevalniki)/jezik/: naredite svojo lokalno jezikovno datoteko na podlagi english.php
3.3 ./dhtmlext(vsi urejevalniki)/editor_registry.php: nastavi konfiguracije za urejevalnik: vrstni red - vrstni red prikaza v primeru, da je uporabljena izbira urejevalnika, 0 za onemogočeno; nohtml - deluje za sintakso, ki ni html
3.3 ./FCKeditor/module/: kopirajte datoteke v mape modulov, če so potrebna dovoljenja za nalaganje, shranjevanje in urejevalnik, specifična za modul
3.3.1 ./FCKeditor/module/fckeditor.config.js: za možnosti urejevalnika vam jih običajno ni treba spremeniti
3.3.2 ./FCKeditor/module/fckeditor.connector.php: za določitev mape za brskanje po datotekah (in shranjevanje za nalaganje) => XOOPS/uploads/XOOPS_FCK_FOLDER/, mapo je treba ustvariti ročno
3.3.3 ./FCKeditor/module/fckeditor.upload.php: določite dovoljenje za nalaganje in shrambo za nalaganje
3.4 XOOPS/uploads/fckeditor/: za ustvarjanje mape, če je FCKeditor omogočen, uporablja se za nalaganja, kjer mapa za nalaganje ni določena
3.5 ./tinymce/tinymce/jscripts/: prenesite lokalne jezikovne datoteke iz http://tinymce.moxiecode.com/language.php

4 preverite imena datotek: za sistem imen datotek, ki razlikuje med velikimi in malimi črkami, se prepričajte, da so imena datotek dobesedno pravilna, tj. »FCKeditor« ni identičen »fckeditor«

5 preverite /xoopseditor/sampleform.inc.php za razvojni vodnik
