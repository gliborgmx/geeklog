<?php

###############################################################################
# estonian.php
# This is the estonian language page for GeekLog!
#
# Copyright (C) 2000 Jason Whittenburg
# jwhitten@securitygeeks.com
#
# Estonian translation by Artur R�pp <rtr AT planet DOT ee>
#
# This program is free software; you can redistribute it and/or
# modify it under the terms of the GNU General Public License
# as published by the Free Software Foundation; either version 2
# of the License, or (at your option) any later version.
#
# This program is distributed in the hope that it will be useful,
# but WITHOUT ANY WARRANTY; without even the implied warranty of
# MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
# GNU General Public License for more details.
#
# You should have received a copy of the GNU General Public License
# along with this program; if not, write to the Free Software
# Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.
#
###############################################################################

$LANG_CHARSET = 'iso-8859-1';

###############################################################################
# Array Format:
# $LANGXX[YY]:  $LANG - variable name
#               XX    - file id number
#               YY    - phrase id number
###############################################################################

###############################################################################
# USER PHRASES - These are file phrases used in end user scripts
###############################################################################

###############################################################################
# lib-common.php

$LANG01 = array(
    1 => 'Postitajaks:',
    2 => 'loe lisaks',
    3 => 'kommentaari',
    4 => 'Toimeta',
    5 => 'H��leta',
    6 => 'Tulemused',
    7 => 'H��letuse tulemused',
    8 => 'h��letanut',
    9 => 'Admini funktsioonid:',
    10 => 'Sisestused',
    11 => 'Lugu',
    12 => 'Blokid',
    13 => 'Rubriigid',
    14 => 'Lingid',
    15 => 'S�ndmused',
    16 => 'K�sitlused',
    17 => 'Kasutajad',
    18 => 'SQL p�ring',
    19 => 'Logi v�lja',
    20 => 'Kasutaja info',
    21 => 'Kasutajanimi',
    22 => 'Kasutaja ID',
    23 => 'Turvatase',
    24 => 'Anon��mne',
    25 => 'Vasta',
    26 => 'J�rgnevate kommentaaride omanikuks on need, kes iganes need postitas. See leht ei vastuta nende poolt �eldu eest.',
    27 => 'V�rskeim postitus',
    28 => 'Kustuta',
    29 => 'Pole kommentaare.',
    30 => 'Vanemad lood',
    31 => 'Lubatud HTML sildid:',
    32 => 'Viga, sobimatu kasutajanimi',
    33 => 'Viga, ei saanud kirjutada logifaili',
    34 => 'Viga',
    35 => 'Logi v�lja',
    36 => 'Aeg',
    37 => 'Pole kasutaja lugusid',
    38 => 'Sisu jagamine',
    39 => 'V�rskenda',
    40 => 'Sul on <tt>php.ini</tt> failis <tt>register_globals = Off</tt>. Kuid Geeklogi jaoks peab olema <tt>register_globals</tt> = <strong>on</strong>. Enne j�tkamist sea selle v��rtuseks <strong>"on"</strong> ja taask�ivita veebiserver.',
    41 => 'K�laliskasutajaid',
    42 => 'Autoriks:',
    43 => 'Vasta sellele',
    44 => 'Tase k�rgemal',
    45 => 'MySQL vea number',
    46 => 'MySQL veateade',
    47 => 'Lehe kasutajale',
    48 => 'Konto info',
    49 => 'eelistused',
    50 => 'Viga SQL lauses',
    51 => 'abi',
    52 => 'Uus',
    53 => 'Admin avaleht',
    54 => 'Ei saanud avada faili.',
    55 => 'Viga: koht',
    56 => 'H��leta',
    57 => 'Salas�na',
    58 => 'Logi sisse',
    59 => "Pole veel kontot? Logi sisse <a href=\"{$_CONF['site_url']}/users.php?mode=new\">uue kasutajana</a>",
    60 => 'Postita kommentaar',
    61 => 'Loo uus kasutajakonto',
    62 => 's�na',
    63 => 'Kommentaaride eelistused',
    64 => 'Saada artikkel s�brale E-postiga',
    65 => 'N�ita printversiooni',
    66 => 'Minu kalender',
    67 => 'Tere siia - ',
    68 => 'Avaleht',
    69 => 'Kontakt',
    70 => 'Otsi',
    71 => 'Lisa lehele lugu',
    72 => 'Veebi kohad',
    73 => 'Vanemad k�sitlused',
    74 => 'Kalender',
    75 => 'Otsing', // t�psem otsing
    76 => 'Lehe statistika',
    77 => 'Pluginad',
    78 => 'Tulevased s�ndmused',
    79 => 'Mida uut',
    80 => 'viimased lood',
    81 => 'viimane lugu',
    82 => 'tundi',
    83 => 'KOMMENTAARE',
    84 => 'LINKE',
    85 => 'viimased 48 t',
    86 => 'Pole uusi kommentaare',
    87 => 'viimased 2 n',
    88 => 'Pole uusi linke',
    89 => 'Pole tulevasi s�ndmusi',
    90 => 'Avaleht',
    91 => 'Leht valmis',
    92 => 'sekundiga',
    93 => '(C)', // copyright
    94 => 'K�ik sellel lehel olevad kaubam�rgid ja autorikaitsega materjalid kuuluvad nende �igustatud omanikele.',
    95 => 'Mootoriks on',
    96 => 'Grupid',
    97 => 'S�nade loetelu',
    98 => 'Pluginad',
    99 => 'LOOD',
    100 => 'Pole uusi lugusid',
    101 => 'Sinu s�ndmused',
    102 => 'S�ndmused',
    103 => 'DB Backupid',
    104 => '',// by
    105 => 'E-post kasutajatele',
    106 => 'Vaatamisi',
    107 => 'GL versiooni test',
    108 => 'T�hjenda puhverm�lu',
    109 => 'Teata kuritahtlikkusest',
    110 => 'Teata sellest postitusest lehe administraatorile',
    111 => 'Vaata PDF versiooni',
    112 => 'Registreeritud kasutajaid',
    113 => 'Dokumentatsioon',
    114 => 'TRACKBACKID',
    115 => 'Pole uusi trackback kommentaare',
    116 => 'Trackback',
    117 => 'Lood ajalises j�rjekorras',
    118 => 'Palun j�tka lugemist j�rgmisel lehel:',
    119 => "Kaotasid oma <a href=\"{$_CONF['site_url']}/users.php?mode=getpassword\">salas�na?</a>",
    120 => 'P�silink sellele kommentaarile',
    121 => 'Kommentaare (%d)',
    122 => 'Trackbacke (%d)',
    123 => 'Kogu HTML on lubatud',
    124 => 'Kl�psa k�igi m�rgitute kustutamiseks',
    125 => 'Kas oled kindel, et soovid k�iki neid kustutada?',
    126 => 'M�rgi/eemalda m�rge k�igilt'
);

###############################################################################
# comment.php

$LANG03 = array(
    1 => 'Postita kommentaar',
    2 => 'Postituse viis',
    3 => 'Logi v�lja',
    4 => 'Loo konto',
    5 => 'Kasutajanimi',
    6 => 'Sellel lehel peate kommentaaride postitamiseks eelnevalt sisse logima. Kui sul ei ole veel kasutajakontot, v�id alloleva vormi abiga endale konto luua.',
    7 => 'Sinu viimane kommentaar oli ',
    8 => " sekundit tagasi.  Sellel lehel  peab kommentaaride vahe olema v�hemalt {$_CONF['commentspeedlimit']} sekundit",
    9 => 'kommentaar',
    10 => 'Saada raport',
    11 => 'Saada kommentaar',
    12 => 'Palun t�ida tiitli ja kommentaari v�ljad. Need on kommentaari postitamisel kohustuslikud.',
    13 => 'Info sinu kohta',
    14 => 'Eelvaade',
    15 => 'Teata sellest postitusest',
    16 => 'Tiitel',
    17 => 'Viga',
    18 => 'Oluline',
    19 => 'Hoia s�num vastavuses teemaga.',
    20 => 'Proovi uue teema algatamise asemel pigem vastata teiste postitustele',
    21 => 'Loe enne postitamist teiste poolt �eldut, v�ltides nii juba �eldu kordamist.',
    22 => 'Kasuta sinu s�numit selgelt kirjeldavat tiitlit.',
    23 => 'Sinu E-postiaadressi ei tehta avalikuks.',
    24 => 'Anon��mne kasutaja',
    25 => 'Kas oled kindel, et soovid teatada sellest postitusest lehe administraatorile?',
    26 => '%s teatas j�rgmisest kuritahtlikust postitusest:',
    27 => 'Kuritahtlikkusest teatamine'
);

###############################################################################
# usersettings.php

$LANG04 = array(
    1 => 'Kasutaja profiil, omanik',
    2 => 'Kasutajanimi',
    3 => 'T�isnimi',
    4 => 'Salas�na',
    5 => 'E-postiaadress',
    6 => 'Koduleht',
    7 => 'Bio',
    8 => 'PGP v�ti',
    9 => 'Salvesta info',
    10 => 'Viimased 10 kommentaari, kommenteerijaks',
    11 => 'Pole kasutaja kommentaare',
    12 => 'Kasutaja eelistused, kasutaja -',
    13 => 'Saada ��siti kokkuv�tted',
    14 => 'See salas�na on genereeritud juhusliku s�mbolite kombinatsioonina. On soovitav, et sa vahetad koheselt salas�na. Salas�na muutmiseks logi oma kasutajanime ja salas�na abil sisse ja ava "Lehe kasutajale" alt "Konto info".',
    15 => "Sinu {$_CONF['site_name']} konto on edukalt loodud. Selle kasutamiseks pead sa allpool oleva info abil sisse logima. Palun salvesta see kiri edaspidiseks kasutamiseks.",
    16 => 'Sinu kasutajakonto info',
    17 => 'Kontot ei ole',
    18 => 'Sisestatud E-postiaadress tundub olevat ebakorrektne E-postiaadress',
    19 => 'Kasutajanimi v�i E-postiaadress on juba olemas',
    20 => 'Sisestatud E-postiaadress tundub olevat ebakorrektne E-postiaadress',
    21 => 'Viga',
    22 => "Registreeri {$_CONF['site_name']} lehel!",
    23 => "Kasutajakonto loomine annab sulle k�ik {$_CONF['site_name']} lehe poolt kasutajale pakutavad v�imalused. Sa v�id postitada oma nimega  kommentaare ja uusi lugusid. Kui sul ei ole kontot, ei saa sa neid postitada. Sinu E-postiaadressi <i><b>ei n�idata kunagi</b></i> sellel lehel avalikult.",
    24 => 'Sinu salas�na saadetakse siin sisestatud E-postiaadressil.',
    25 => 'Kas unustasid oma salas�na?',
    26 => 'Sisesta <em>kas</em> oma kasutajanimi <em> v�i </em> registreerimisel antud E-postiaadress ning kl�psa Saada salas�na. Antud E-postiaadressile saadetakse juhendid, kuidas m��rata uus salas�na.',
    27 => 'Registreeri n��d!',
    28 => 'Saada salas�na',
    29 => 'v�lja logitud',
    30 => 'logitud sisse lehelt',
    31 => 'Sinu valitud k�sk vajab, et oleksid sisse logitud',
    32 => 'Allkiri',
    33 => 'Ei n�idata kunagi avalikel lehtedel',
    34 => 'See on sinu tegelik nimi',
    35 => 'Sisesta uus salas�na',
    36 => 'Koos http://',
    37 => 'Rakendatakse sinu kommentaaridele',
    38 => 'See on k�ik sinu kohta! K�ik saavad seda lugeda',
    39 => 'Sinu avalik/public PGP v�ti levitamiseks',
    40 => 'Pole rubriikide ikoone',
    41 => 'Soovid modereerida',
    42 => 'Kuup�eva formaat',
    43 => 'Lugude maksimum',
    44 => 'pole kaste',
    45 => 'N�ita eelistusi - kasutaja',
    46 => 'V�ljaarvatud asjad - kasutaja',
    47 => 'Uudistekasti h��lestus - kasutaja',
    48 => 'Rubriigid',
    49 => 'Lugudes pole ikoone',
    50 => 'Eemalda m�rge, kui pole huvitatud',
    51 => 'Ainult uudislood',
    52 => 'Vaikimisi on',
    53 => 'Saada igal ��sel p�eval postitatud lood .',
    54 => 'M�rgi (rubriigid/autorid), mida sa ei soovi n�ha',
    55 => 'Kui sa j�tad k�ik m�rkimata, siis rakendatakse s�steemi vaikimisi h��lestust. Kui aga alustad m�rkimist, siis m�rgi kindlasti k�ik soovitud, sest s�steemi vaikeseadistust sinule ei rakendata. S�steemi vaikevalikud on rasvases kirjas.',
    56 => 'Autorid',
    57 => 'N�itamise viis',
    58 => 'Sorteerimisj�rjekord',
    59 => 'Kommentaaride limiit',
    60 => 'Kuidas soovid, et kommentaare n�itan?',
    61 => 'Uuemad v�i vanemad enne',
    62 => 'Vaikimisi on 100',
    63 => "Sinu salas�na saadeti sulle E-postiga ja peaks kohe kohale j�udma. Palun j�rgi s�numis olevaid juhendeid. Me t�name sind {$_CONF['site_name']} kasutamise eest.",
    64 => 'Kommentaaride eelistused - kasutaja',
    65 => 'Proovi uuesti sisse logida',
    66 => "V�ib-olla kirjutasid kasutajatunnuse v�i salas�na valesti. Palun proovi alloleva vormi abil uuesti. V�i oled <a href=\"{$_CONF['site_url']}/users.php?mode=new\">uus kasutaja?</a>",
    67 => 'Liige alates',
    68 => 'M�leta mind',
    69 => 'Kui kaua peale sisselogimist peaksin sind m�letama?',
    70 => "Kohanda {$_CONF['site_name']} sisu ja v�limust",
    71 => "{$_CONF['site_name']} lehe �ks headest omadustest on see, et sa v�id m��rata, millist sisu sulle n�idatakse ja sa saad muuta lehe �ldist v�limust. Selle kasutamiseks pead sa k�igepealt <a href=\"{$_CONF['site_url']}/users.php?mode=new\">registreeruma</a> {$_CONF['site_name']} lehel.   Kui sa oled juba registreerinud, siis logi palun sisse.",
    72 => 'Teema',
    73 => 'Keel',
    74 => 'Saidi v�limus',
    75 => 'Rubriigid E-postiga kasutajale',
    76 => 'Kui valid allpool olevast loetelust rubriigi, saadetakse p�eva l�pus sulle k�ik antud teemas postitatud lood. Vali ainult sind huvitavad teemad!',
    77 => 'Foto',
    78 => 'Lisa pilt endast!',
    79 => 'tee m�rge selle pilti kustutamiseks', //'Check here to delete this picture',
    80 => 'Logi sisse',
    81 => 'Saada E-kiri',
    82 => 'Viimased 10 lugu, postitajaks',
    83 => 'Postituste statistika, autor',
    84 => 'Artiklite koguarv:',
    85 => 'Kommentaaride koguarv:',
    86 => 'Leia k�ik postitused - autoriks',
    87 => 'Sinu kasutajanimi',
    88 => "Keegi, v�imalik, et sa ise, tellis {$_CONF['site_name']} lehel aadressiga {$_CONF['site_url']}\n\n asuva kasutajakonto \"%s\" jaoks uue salas�na. Kui sa soovid seda t�esti teha, siis kliki alloleval lingil v�i ava see leht oma veebilehitsejas:\n\n",
    89 => "Kui sa ei soovi salas�na vahetada, siis ignoreeri seda E-kirja ning salas�na vahetuse tellimus t�histatakse (sinu salas�na j��b muutmata)\n\n",
    90 => 'Sa v�id allpool sisestada oma konto jaoks uue salas�na. Pane t�hele, et vana salas�na on kehtiv kuni oled selle vormi t�itnud ja uus salas�na on serveri poolt kinnitatud.',
    91 => 'Kinnita uus salas�na',
    92 => 'Sisesta uus salas�na',
    93 => 'Sinu viimane uue salas�na tellimine toimus %d sekundit tagasi. Sellel lehel peab aga salas�na tellimiste vahe olema v�hemalt %d sekundit.',
    94 => 'Kustuta konto "%s"',
    95 => 'Oma kasutajakonto kustutamiseks kl�psa allpool nupul Kustuta konto. Pane t�hele, et koos sellega ei kustutata selle kasutajakonto alt postitatud kommentaare ega jutte. Neid n�idatakse edaspidi kui anon��mse kasutaja poolt postitatuid.',
    96 => 'kustuta konto',
    97 => 'Kinnita kasutajakonto kustutamine',
    98 => 'Kas oled kindel, et soovid oma kasutajakonto kustutada? P�rast kustutamist ei saa sa enam sellel lehel kasutajana sisse logida (kuni sa pole uut kasutajakontot loonud). Kui oled kindel, kl�psa uuesti allpool olevat nuppu "Kustuta konto"',
    99 => 'Privaatsusvalikud - kasutaja',
    100 => 'E-kiri administraatorilt',
    101 => 'Luba lehe administraatoritelt E-kirju',
    102 => 'E-kirjad kasutajatelt',
    103 => 'Luba teistelt kasutajatelt E-kirju',
    104 => 'N�ita online staatust',
    105 => 'N�ita "Kes on online" blokis',
    106 => 'Asukoht',
    107 => 'N�idatakse sinu avalikus profiilis',
    108 => 'Kontrolliks uus salas�na uuesti',
    109 => 'Kirjuta siia uuesti oma uus salas�na',
    110 => 'Praegune salas�na',
    111 => 'Palun sisesta oma praegune salas�na',
    112 => 'Liiga mitu j�rjestikust eba�nnestunud sisselogimist. Palun proovi hiljem uuesti.',
    113 => 'Eba�nnestunud sisselogimine',
    114 => 'Kontole on ligip��s t�kestatud',
    115 => 'Ligip��s sinu kasutajakontole on t�kestatud. Palun kontakteeru administraatoriga.',
    116 => 'Konto ootab aktiveerimist',
    117 => 'Sinu konto ootab hetkel administraatoripoolt aktiveerimist. Sa ei saa enne konto aktiveerimist sisse logida.',
    118 => "Sinu {$_CONF['site_name']} lehe konto on n��d administraatori poolt aktiveeritud. Sa saad n��d alloleval aadressil oma kasutajanime <username>) ja eelnevalt saadetud salas�naga sisse logida.",
    119 => "Kui sa unustasid oma salas�na v�id tellida uue salas�na URL-ilt",
    120 => 'Konto on aktiveeritud',
    121 => 'Teenus',
    122 => 'Kahjuks uute kasutajate registreerimine on suletud',
    123 => "Kas sa oled <a href=\"{$_CONF['site_url']}/users.php?mode=new\">uus kasutaja?</a>",
    124 => 'Kinnita E-postiaadress',
    125 => 'Sa pead sisestama sama E-postiaadressi m�lemale v�ljale!',
    126 => 'Palun korda vigade v�ltimiseks',
    127 => 'Neist seadistustest �ksk�ik millise muutmiseks pead sa sisestama oma kehtiva salas�na.',
    128 => 'Sinu nimi',
    129 => 'Salas�na ja E-post',
    130 => 'Sinust',
    131 => 'P�eva kokkuv�ttekirjade valikud',
    132 => 'P�eva kokkuv�ttekirjade v�imalused',
    133 => 'Kommentaaride n�itamine',
    134 => 'Kommentaaride valikud',
    135 => '<li>Vaikimisi seatud kommentaaride n�itamisviis</li><li>Kommentaaride sorteerimise vaikej�rjekord</li><li>Sea kommentaaride maksimumarv, vaikimisi on 100</li>',
    136 => 'Arva v�lja rubriigid ja autorid',
    137 => 'Filtreeri lugusid',
    138 => 'Mitmesugused valikud',
    139 => 'V�limus ja keel',
    140 => '<li>Pole ikoone, Kui m�rgitud, ei n�idata rubriikide ikoone</li><li>Pole kaste, kui m�rgitud n�idatakse ainult Kasutaja valikuid, rubriike ja administraatoritele administraatori valikuid</li><li>M��ra �hel lehel maksimaalselt n�idatavate lugude arv</li><li>M��ra kasutatav v�limuse teema ja kuup�eva formaat</li>',
    141 => 'Privaatsusseadistused',
    142 => 'Vaikimisi on m��ratud, et kasutajad ja administraatorid v�ivad saata "lehekaaslastele" E-kirju ja lehel n�idatakse kui sa oled online. Eemalda m�rked, et kaitsta oma privaatsust.',
    143 => 'Filtreeri kaste',
    144 => 'N�ita/peida kaste',
    145 => 'Sinu avalik profiil',
    146 => 'Salas�na ja E-post',
    147 => 'Muuda oma salas�na, E-postiaadressi v�i autologimist. Salas�na ja E-postiaadressi muutmisel pead sa vigade v�ltimiseks sisestama need topelt.',
    148 => 'Kasutaja info',
    149 => 'Muuda teistele kasutajatele n�htavat kasutajainfot. <li>Allkiri lisatakse sinu kommentaaridele</li><li>Bio on l�hike sinu kirjeldus teistele</li><li>Jaga oma PGP v�tit</li>',
    150 => 'M�rkus: mugavamaks kasutamiseks on soovitav JavaScript.',
    151 => 'Eelvaade',
    152 => 'Kasutajanimi ja salas�na',
    153 => 'V�limus ja keel',
    154 => 'Sisu',
    155 => 'Privaatsus',
    156 => 'Kustuta konto',
);

###############################################################################
# index.php

$LANG05 = array(
    1 => 'Pole midagi n�idata',
    2 => 'Pole midagi n�idata. V�imalik, et selles rubriigis pole �htegi lugu, mida n�idata v�i on sinu kasutajaeelistused liiga kitsendavad, et n�idata neid',
    3 => " rubriigis %s",
    4 => 'T�nane peaartikkel',
    5 => 'J�rgmine',
    6 => 'Eelmine',
    7 => 'Esimene',
    8 => 'Viimane'
);

###############################################################################
# profiles.php

$LANG08 = array(
    1 => 'Sinu kirja saatmisel tekkis viga. Palun proovi uuesti.',
    2 => 'S�num on edukalt saadetud.',
    3 => 'Palun veendu, et saatja E-postiaadressiks oleks toimiv E-postiaadress.',
    4 => 'Palun t�ida "Sinu nimi", "Sinu E-postiaadress", "Teema" ja s�numi v�ljad.',
    5 => 'Viga: pole sellist kasutajat.',
    6 => 'Oli viga..',
    7 => 'Kasutajaprofiil, omanik ',
    8 => 'Kasutaja nimi',
    9 => 'Kasutaja URL',
    10 => 'Saada E-post, kirja saajaks',
    11 => 'Sinu nimi:',
    12 => 'Sinu E-postiaadress:',
    13 => 'Teema:',
    14 => 'S�num:',
    15 => 'HTML-i ei transleerita .',
    16 => 'Valmis',
    17 => 'Saada lugu s�brale',
    18 => 'Saaja nimi',
    19 => 'E-postiaadress',
    20 => 'Saatja nimi',
    21 => 'Saatja E-postiaadress',
    22 => 'K�ik v�ljad on kohustuslikud',
    23 => "See E-kiri saadeti sulle %s %s poolt, sest ta arvas, et sa oled huvitatud artiklist {$_CONF['site_url']} lehel.  See ei ole r�mpskiri. Antud kirjaga seotud E-postiaadresseid ei s�ilitata hilisemaks kasutamiseks!",
    24 => 'Kommenteeri seda lugu aadressil',
    25 => 'Selle v�imaluse kasutamiseks pead sa lehele sisse logima. See n�ue aitab meil kaitsta lehte v��rkasutuste eest.',
    26 => 'Selle vormi abil saad saata E-kirja valitud inimesele. K�ik v�ljad on kohustuslikud.',
    27 => 'L�hike s�num',
    28 => "%s kirjutas: ",
    29 => "See on p�evane kokkuv�te {$_CONF['site_name']} lehelt kasutajale.",
    30 => 'Igap�evane uudiskiri kasutajale  ',
    31 => 'Tiitel',
    32 => 'P�ev',
    33 => 'Loe kogu artiklit aadressil',
    34 => 'S�numi l�pp',
    35 => 'Kahjuks see kasutaja ei soovi kirju saada.',
);

###############################################################################
# search.php

$LANG09 = array(
    1 => 'Otsing', // t�psem otsing
    2 => 'M�rks�nad',
    3 => 'Rubriik',
    4 => 'K�ik',
    5 => 'T��p',
    6 => 'Lood',
    7 => 'Kommentaarid',
    8 => 'Autorid',
    9 => 'K�ik',
    10 => 'Otsi',
    11 => 'Otsingu tulemused',
    12 => 'Sobivaid',
    13 => 'Otsingu tulemused: ei leitud sobivaid',
    14 => 'Ei leitud sobivat otsitavale',
    15 => 'Palun proovi uuesti.',
    16 => 'Tiitel',
    17 => 'p�ev',
    18 => 'Postitaja',
    19 => "Otsi k�igist {$_CONF['site_name']} praegustest ja eelmistest lugudest",
    20 => 'kuup�ev',
    21 => 'kuni',
    22 => '(kuup�eva formaat AAAA-KK-PP)',
    23 => 'Vaatamisi',
    24 => 'Leidsin %d sobivat',
    25 => 'Otsiti',
    26 => 'asja ',
    27 => 'sekundit',
    28 => '�kski lugu ega kommentaar ei sobinud otsitavaga',
    29 => 'Lugude ja kommentaaride tulemus',
    30 => '�kski link ei sobinud otsitavaga',
    31 => 'See plugin ei leidnud sobivaid',
    32 => 'S�ndmus',
    33 => 'URL',
    34 => 'Asukoht',
    35 => 'Kogu p�ev',
    36 => '�kski s�ndmus ei sobinud otsinguga',
    37 => 'S�ndmuste tulemus',
    38 => 'Linkide tulemus',
    39 => 'Linke',
    40 => 'S�ndmused',
    41 => 'Otsitav peab olema v�hemalt 3 m�rki pikk',
    42 => 'Palun kasuta kuup�eva kujul AAAA-KK-PP(aasta-kuu-p�ev)',
    43 => 't�pne fraas',
    44 => 'K�ik need s�nad',
    45 => 'v�hemalt �ks neist s�nadest',
    46 => 'J�rgmine',
    47 => 'Eelmine',
    48 => 'Autor',
    49 => 'P�ev',
    50 => 'Klikke',
    51 => 'Link',
    52 => 'Asukoht',
    53 => 'Lugude tulemus',
    54 => 'Kommentaaride tulemus',
    55 => 'fraasi',
    56 => 'JA',
    57 => 'V�I',
    58 => 'Rohkem tulemusi &gt;&gt;',
    59 => 'Tulemused',
    60 => 'lehel',
    61 => ' t�psusta otsingut'
);

###############################################################################
# stats.php

$LANG10 = array(
    1 => 'Lehe statistika',
    2 => 'Klikkide koguarv lehtedel',
    3 => 'Lugusid (kommentaare lehtedel',
    4 => 'K�sitlusi (vastuseid)',
    5 => 'Linke (klikke)',
    6 => 'S�ndmusi',
    7 => '10 enim vaadatud lugu',
    8 => 'Loo tiitel',
    9 => 'Vaatamisi',
    10 => 'N�ib, et saidil pole �htegi lugu v�i mitte keegi pole neid vaadanud.',
    11 => '10 enim kommenteeritud lugu',
    12 => 'Kommentaare',
    13 => 'N�ib, et saidil pole �htegi lugu v�i mitte keegi pole neile postitanud �htegi kommentaari.',
    14 => 'Top 10 k�sitlust',
    15 => 'K�sitluse k�simus',
    16 => 'H��li',
    17 => 'N�ib, et saidil pole �htegi k�sitlust v�i mitte keegi pole neil h��letanud.',
    18 => 'Top 10 linki',
    19 => 'Linke',
    20 => 'Klikke',
    21 => 'N�ib, et saidil pole �htegi linki v�i mitte keegi pole �helgi neist kl�psanud.',
    22 => 'Top 10 E-postiga saadetud lugu',
    23 => 'E-kirju',
    24 => 'N�ib, et mitte keegi pole saidil saatnud �htegi lugu E-postiga.',
    25 => 'Top 10 trackback abil kommenteeritud lugu',
    26 => 'Ei leidnud trackback kommentaare.',
    27 => 'Aktiivseid kasutajaid',
    28 => 'Top 10 s�ndmust',
    29 => 'S�ndmus',
    30 => 'Klikke',
    31 => ''
);

###############################################################################
# article.php

$LANG11 = array(
    1 => 'Seotud',
    2 => 'Saada lugu s�brale',
    3 => 'Lugu prinditaval kujul',
    4 => 'Loo valikud',
    5 => 'PDF lugude formaat'
);

###############################################################################
# submit.php

$LANG12 = array(
    1 => "Selleks et lisada %s pead sa kasutajana sisse logima.",
    2 => 'Logi sisse',
    3 => 'Uus kasutaja',
    4 => 'Lisa s�ndmus',
    5 => 'Lisa link',
    6 => 'Lisa lugu',
    7 => 'N�utav on sisselogimine',
    8 => 'Sisesta',
    9 => 'Kui lisad meie saidile uut infot, palume j�rgida j�rgmisi soovitusi ...<ul><li>T�ida k�ik v�ljad, mis on kohustuslikud</li><li>Anna t�ielik ja t�pne info</li><li>Kontrolli hoolikalt kirjutatud URL-id (veebiaadressid)</li></ul>',
    10 => 'Tiitel',
    11 => 'Link',
    12 => 'Alguskuup�ev',
    13 => 'L�pukuup�ev',
    14 => 'Asukoht',
    15 => 'Kirjeldus',
    16 => 'Kui "Muu", siis t�psusta',
    17 => 'Kategooria',
    18 => 'Muu',
    19 => 'Loe enne',
    20 => 'Viga: kategooria on puudu',
    21 => 'Kui valisid Muu, sisesta palun ka kategooria nimi.',
    22 => 'Viga: puuduvad v�ljad',
    23 => 'Palun t�ida k�ik vormi v�ljad. K�ik v�ljad on kohustuslikud.',
    24 => 'Sisestus on salvestatud',
    25 => "Sinu sisestatud %s on edukalt salvestatud.",
    26 => 'Kiiruse piirang',
    27 => 'Kasutajanimi',
    28 => 'Rubriik',
    29 => 'Lugu',
    30 => 'Sinu viimane postitus oli',
    31 => " sekundit tagasi.  Sellel lehel   peab sisestuste vahe olema v�hemalt {$_CONF['speedlimit']} sekundit.",
    32 => 'Eelvaade',
    33 => 'Loo eelvaade',
    34 => 'Logi v�lja',
    35 => 'HTML sildid pole lubatud',
    36 => 'Postituse t��p',
    37 => "Lisades {$_CONF['site_name']} lehele s�ndmuse, paigutub see peakalendrisse, kust kasutajad saavad soovi korral lisada selle oma enda isiklikku kalendrisse. Lehe kalender <b>ei ole </b> m�eldud teieisiklike s�ndmuste, nagu s�nnip�evade v�i t�htp�evade jaoks.<br><br>S�ndmuse lisamisel saadetakse see meie administraatoritele. P�rast administraatorite poolset kinnitamist ilmub lisatud s�ndmus peakalendrisse.",
    38 => 'Lisa s�ndmus',
    39 => 'peakalender',
    40 => 'Isiklik kalender',
    41 => 'l�puaeg',
    42 => 'algusaeg',
    43 => 'Kogu p�ev',
    44 => 'aadressrida 1',
    45 => 'aadressrida 2',
    46 => 'linn',
    47 => 'Piirkond',
    48 => 'postiindeks',
    49 => 'S�ndmuse t��p',
    50 => 'Toimeta s�ndmuste t��pe',
    51 => 'Asukoht',
    52 => 'Kustuta',
    53 => 'Loo konto'
);

###############################################################################
# ADMIN PHRASES - These are file phrases used in admin scripts
###############################################################################

###############################################################################
# admin/auth.inc.php

$LANG20 = array(
    1 => 'N�utav on autoriseerimine',
    2 => 'T�kestatud! Ebakorrektne info logimisel',
    3 => 'vigane salas�na, kasutajanimi',
    4 => 'Kasutajanimi:',
    5 => 'Salas�na:',
    6 => 'K�ik katsed p��seda ligi selle lehe administreerimisosadele logitakse ja vaadatakse l�bi. <br> See leht on m�eldud ainult autoriseeritud kasutajatele.',
    7 => 'logi sisse'
);

###############################################################################
# admin/block.php

$LANG21 = array(
    1 => 'Ebapiisavalt administreerimis�iguseid',
    2 => 'Sul ei ole piisavalt �igusi selle bloki toimetamiseks.',
    3 => 'Bloki toimetaja',
    4 => 'Tekkis probleem selle l�ime lugemisel. T�psemalt loe error.log failist.',
    5 => 'Bloki tiitel',
    6 => 'rubriik',
    7 => 'K�ik',
    8 => 'Bloki turvatase',
    9 => 'Bloki j�rjekord',
    10 => 'Bloki t��p',
    11 => 'Portaalblokk',
    12 => 'Normaalblokk',
    13 => 'Portaalbloki valikud',
    14 => 'RSS URL',
    15 => 'Viimane RSS uuendus',
    16 => 'Normaalbloki valikud',
    17 => 'Bloki sisu',
    18 => 'Palun t�ida bloki tiitli ja sisu v�ljad',
    19 => 'Bloki haldur',
    20 => 'Bloki tiitel',
    21 => 'Bloki turva..',
    22 => 'Bloki t��p',
    23 => 'Bloki j�rjekord',
    24 => 'Bloki rubriik',
    25 => 'Bloki toimetamiseks v�i kustutamiseks kl�psa allpool selle tiitlil. Uue bloki loomiseks kl�psa Tee uus �lal.',
    26 => 'Kujundusblokk',
    27 => 'PHP blokk',
    28 => 'PHP bloki valikud',
    29 => 'Bloki funktsioon',
    30 => 'Kui sa soovid oma blokis kasutada PHP k�ske, sisesta allolevasse kasti PHP funktsiooni nimi. See peab algama eesliitega "phpblock_" (n. phpblock_getweather). Ilma selle eesliiteta funktsiooni ei k�ivitata. Me oleme lisanud selle kitsenduse kaitsmaks sinu saiti juhuks, kui keegi on sellele sisse h�kkinud ja lisanud lehe koodi kontrollimata k�ske. J�lgi, et sa ei lisaks funktsiooni nime l�ppu sulge "()". On soovitav panna oma PHP blokkide jaoks m�eldud funktsioonid faili /path/to/geeklog/system/lib-custom.php. See lubab s�ilitada lisatud PHP blockide funktsioonid ka Geeklogi uuendamisel.',
    31 => 'Viga PHP blokis.  Funktsiooni %s pole olemas.',
    32 => 'Viga: puuduvad v�ljad',
    33 => 'Sa pead portaalbloki jaoks sisestama RSS faili URL-i.',
    34 => 'Sa pead sisestama PHP bloki tiitli ja funktsiooni',
    35 => 'Sa pead normaalbloki jaoks sisestama tiitli ja sisu',
    36 => 'Sa pead kujundusblokkide jaoks sisestama bloki sisu',
    37 => 'Sobimatu PHP bloki funktsiooni nimi',
    38 => 'PHP blokkide jaoks m�eldud funktsioonid peavad algama \'phpblock_\' (n. phpblock_getweather).  \'phpblock_\' algus on kasutuses turvakaalutlustel, takistamaks kontrollimata koodi k�ivitamist',
    39 => 'K�lg',
    40 => 'Vasak',
    41 => 'Parem',
    42 => 'Sa pead Geeklogi vaikeblokkide jaoks sisestama bloki tiitli ja j�rjekorra.',
    43 => 'Ainult avaleht',
    44 => 'Ligip��s t�kestatud',
    45 => "Sa �ritasid ligi p��seda blokile, milleks polnud sul �igust. See katse logiti. Palun <a href=\"{$_CONF['site_admin_url']}/block.php\">mine tagasi blokkide administreerimislehele. </a>",
    46 => 'Uus blokk',
    47 => 'Admin avaleht',
    48 => 'Bloki nimi',
    49 => ' (ilma t�hikuteta ja erinev teistest)',
    50 => 'Abifaili URL',
    51 => 'koos http://',
    52 => 'Kui sa j�tad selle v�lja t�hjaks, siis selle bloki jaoks ei n�idata abiikooni.',
    53 => 'kasutuses',
    54 => 'salvesta',
    55 => 't�hista',
    56 => 'kustuta',
    57 => 'vii allapoole',
    58 => 'Vii �lespoole',
    59 => 'Vii blokk paremale',
    60 => 'Vii blokk vasakule',
    61 => 'Pole tiitlit',
    62 => 'Artikli limiit',
    63 => 'Sobimatu bloki tiitel',
    64 => 'Tiitel peab olema ja ei tohi sisaldada HTML-i!',
    65 => 'J�rjekord',
    66 => 'Autosildid',
    67 => 'Autosiltide lubamiseks tee m�rge',
);

###############################################################################
# admin/story.php

$LANG24 = array(
    1 => 'Eelmised lood',
    2 => 'J�rgmised lood',
    3 => 'laad',
    4 => 'Postituse viis',
    5 => 'Lugude toimetaja',
    6 => 'S�steemis pole lugusid',
    7 => 'Autor',
    8 => 'Salvesta',
    9 => 'eelvaade',
    10 => 't�hista',
    11 => 'kustuta',
    12 => 'ID',
    13 => 'Tiitel',
    14 => 'Rubriik',
    15 => 'P�ev',
    16 => 'Tutvustustekst',
    17 => 'Sisutekst',
    18 => 'Klikke',
    19 => 'Kommentaare',
    20 => '',
    21 => '',
    22 => 'Lugude nimekiri',
    23 => 'Loo toimetamiseks v�i kustutamiseks kl�psa allpool loo numbril. Loo vaatamiseks kl�psa selle tiitlil. Uue loo tegemiseks kl�psa Tee uus �lal.',
    24 => 'Loo jaoks valitud ID on juba kasutuses. Palun vali loo jaoks teine ID.',
    25 => '',
    26 => 'Loo eelvaade',
    27 => '',
    28 => '',
    29 => '',
    30 => 'Faili �leslaadimise vead',
    31 => 'Palun t�ida loo tiitli ja tutvustusteksti v�ljad',
    32 => 'Pealugu',
    33 => 'Korraga saab olla vaid �ks pealugu',
    34 => 'Mustand',
    35 => 'Ja',
    36 => 'Ei',
    37 => 'Rohkem postitajalt',
    38 => 'Rohkem rubriigis',
    39 => 'E-kirju',
    40 => 'Ligip��s t�kestatud',
    41 => "Sa proovisid ligi p��seda loole, millele pole sul �igust. See katse on logitud. Sa v�id vaadata seda artiklit allpool ainult loetaval kujul. Palun <a href=\"{$_CONF['site_admin_url']}/story.php\">mine p�rast lugemist tagasi lugude administreerimislehele. </a>",
    42 => "Sa proovisid ligi p��seda loole, millele pole sul �igust. See katse on logitud. Palun <a href=\"{$_CONF['site_admin_url']}/story.php\">mine tagasi lugude administreerimislehele. </a>",
    43 => 'Uus lugu',
    44 => 'Admin avaleht',
    45 => 'Ligip��s',
    46 => '<b>M�RKUS:</b> Kui sa m��rad selle kuup�eva tulevikku, siis seda artiklit ei avaldata enne seda p�eva. See t�hendab ka seda, et seda artiklit ei lisata varem sinu RSS voogu ja seda ignoreeritakse otsingu ja statistika lehtede poolt.',
    47 => 'Pildid',
    48 => 'pilt',
    49 => 'parem',
    50 => 'vasak',
    51 => 'Loosse lisatud piltide lehel n�htavaks tegemiseks pead sa teksti kirjutama spetsiaalsed t�histused. Need t�histused on kujul: [imageX], [imageX_right] v�i [imageX_left], kus t�he X asemele tuleb panna lisatava pildi j�rjenumber. M�rkus: sa pead iga lisatud pildi jaoks kirjutama vastava t�histuse. Kui sa ei m��ra laetud piltidele asukohta, ei saa sa lugu salvestada. <p><b>Eelvaade</b>: Piltidega loo puhul on Eelvaate nupul kl�psamise asemel parem lugu salvestada mustandina. Kasuta eelvaate nuppu vaid siis, kui loos pole pilte.',
    52 => 'Kustuta',
    53 => 'pole kasutuses. Sa pead enne muudatuste salvestamist lisama selle pildi kas tutvustusteksti v�i sisu teksti.',
    54 => 'Lisatud pildid pole kasutuses',
    55 => 'Loo salvestamisel tekkisid j�rgmised vead. Palun paranda need enne loo salvestamist',
    56 => 'N�ita rubriigi ikooni',
    57 => 'Vaata originaalsuuruses pilti',
    58 => 'Lugude haldamine',
    59 => 'Valik',
    60 => 'Kasutuses',
    61 => 'Autoarhiiv',
    62 => 'Autokustuta',
    63 => '',
    64 => '',
    65 => '',
    66 => '',
    67 => 'Laienda sisu toimetamise ala suurust',
    68 => 'V�henda sisu toimetamise ala suurust',
    69 => 'Publish Story Date', // t�lkimata
    70 => 'T��riistariba valik',
    71 => 'Lihtne t��riistariba',
    72 => 'Harilik t��riistariba',
    73 => 'Suur t��riistariba',
    74 => 'Suur II t��riistariba',
    75 => 'T�is p�hilugu',
    76 => 'Avaldamise valikud',
    77 => 'Keerukama toimetaja jaoks peab lubatud olema JavaScript. Valiku saab v�lja l�litada saidi pea config.php failis.',
    78 => '<a href="%s/story.php?mode=edit&sid=%s&editopt=default">vaiketoimetaja kasutamiseks kl�psa siia</a>',
    79 => 'Eelvaade',
    80 => 'Toimetaja',
    81 => 'Avaldamise valikud',
    82 => 'Pildid',
    83 => 'Arhiveerimisvalikud',
    84 => '�igused', // permissions
    85 => 'N�ita k�ik',
    86 => 'Keerukam toimetaja',
    87 => 'Lugude statistika'
);


###############################################################################
# admin/topic.php

$LANG27 = array(
    1 => 'Rubriikide toimetaja',
    2 => 'Rubriigi ID',
    3 => 'Rubriigi nimi',
    4 => 'Rubriigi pilt',
    5 => '(�ra kasuta t�hikuid)',
    6 => 'Kustutades rubriigi, kustutatakse ka k�ik sellega seotud lood ja blokid.',
    7 => 'Palun t�ida rubriigi ID ja kirjelduse v�ljad',
    8 => 'Rubriikide haldaja',
    9 => 'Rubriigi toimetamiseks v�i kustutamiseks kl�psa selle nimel. Uue rubriigi lisamiseks kl�psa Tee uus �lal. Sa n�ed iga rubriigi k�rval sulgudes antud rubriigi jaoks oma ligip��su�iguseid. T�rn (*) m�rgib vaikimisi valitud rubriiki.',
    10 => 'Sorteerimise j�rjekord',
    11 => 'Lugusid lehel',
    12 => 'Ligip��s t�kestatud',
    13 => "Sa proovisid p��seda ligi rubriigile, milleks polnud sul �igust. See ligip��sukatse on logitud. Palun <a href=\"{$_CONF['site_admin_url']}/topic.php\">mine tagasi rubriikide administreerimislehele. </a>",
    14 => 'Sorteerimismeetod',
    15 => 't�hestikuline',
    16 => 'vaikimisi',
    17 => 'Uus rubriik',
    18 => 'Admin avaleht',
    19 => 'salvesta',
    20 => 't�hista',
    21 => 'kustuta',
    22 => 'Vaikimisi',
    23 => 'M��ra see uute lugude jaoks vaikerubriigiks',
    24 => '(*)',
    25 => 'Arhiivi rubriik',
    26 => 'm��ra see rubriik arhiveeritud lugude  jaoks vaikerubriigiks. Ainult �ks rubriik on lubatud.',
    27 => 'v�i lae rubriigi ikoon',
    28 => 'Maksimum',
    29 => 'Vead faili �leslaadimisel'
);

###############################################################################
# admin/user.php

$LANG28 = array(
    1 => 'Kasutajate toimetaja',
    2 => 'Kasutaja ID',
    3 => 'kasutaja nimi',
    4 => 'T�isnimi',
    5 => 'Salas�na',
    6 => 'Turvatase',
    7 => 'E-postiaadress',
    8 => 'Koduleht',
    9 => '(�ra kasuta t�hikuid)',
    10 => 'Palun t�ida kasutajanime ja E-postiaadressi v�ljad',
    11 => 'Kasutajate haldur',
    12 => 'Kasutaja andmete toimetamiseks v�i konto kustutamiseks kl�psa allpool soovitud kasutajal. Uue kasutajakonto loomiseks kl�psa �lal Tee uus. V�id teha kasutajate lihtotsingut sisestades otsingukasti osa nende kasutajanimest, E-postiaadressist v�i t�isnimest (n�iteks: mart* v�i *.com).',
    13 => 'Turva..',
    14 => 'Reg. aeg',
    15 => 'Uus kasutaja',
    16 => 'Admin avaleht',
    17 => 'muuda',
    18 => 't�hista',
    19 => 'kustuta',
    20 => 'salvesta',
    21 => 'See kasutajanimi on juba olemas',
    22 => 'Viga',
    23 => 'Masslisamine',
    24 => 'Mass kasutajate importimine',
    25 => 'Sa v�id Geeklogi importida korraga mitu kasutajat. Imporditavas tekstifailis peab v�ljade eraldajaks olema tabulaator ja selles peavad v�ljad olema j�rgmises j�rjekorras: t�isnimi, kasutajanimi, E-postiaadress. Igale imporditud kasutajale saadetakse E-postiga salas�nageneraatoriga genereeritud juhuslik salas�na. �hel real tohib olla vaid t�pselt �ks kasutaja. Selle reegli rikkumine toob kaasa probleeme, mille k�rvaldamine n�uab lehe k�sitsi h��lestamist, nii et kontrolli hoolikalt ja mitu korda imporditava faili sissekandeid!',
    26 => 'Otsi',
     27 => 'Piira tulemused',
    28 => 'Pildi kustutamiseks m�rgi see',
    29 => 'tee',
    30 => 'Import',
    31 => 'Uued kasutajad',
    32 => 'T��tlus l�petatud. Imporditi %d ja oli %d t�rget',
    33 => 'sisesta',
    34 => 'Viga: pead m��rama laetava faili.',
    35 => 'Viimati logitud',
    36 => '(pole)',
    37 => 'UID',
    38 => 'Gruppide nimekiri',
    39 => 'salas�na (uuesti)',
    40 => 'Registreerimise aeg',
    41 => 'Viimane logimisaeg',
    42 => 'Blokeeritud',
    43 => 'Ootab aktiveerimist',
    44 => 'Ootab autoriseerimist',
    45 => 'Aktiivne',
    46 => 'Kasutaja staatus',
    47 => 'Toimeta',
    48 => 'N�ita administreerimisgruppe',
    49 => 'Administreerimisgrupp',
    50 => 'M�rgi, et seda gruppi filtreeritaks administreerimisgrupina',
    51 => 'Online p�evad',
    52 => '<br>M�rkus: Online p�evad on p�evade arv  registreerimisest viimase sisselogimiseni.',
    53 => 'registreeritud',
    54 => 'Masskustutamine',
    55 => "See t��tab vaid siis kui sul on config.php failis <code>\$_CONF['lastlogin'] = true;</code>",
    56 => 'Palun vali kasutajate r�hm, mida soovid kustutada ja kl�psa seej�rel "Uuenda loetelu". Avanenud lehel  eemalda m�rge nende kasutajate eest, keda sa ei soovi kustutada ning vajuta "Kustuta". Pane t�hele, et kui kasutajate loetelu on jaotatud mitmele lehele, kustutad sa ainult neid kasutajaid, mis on n�htavad antud lehel.',
    57 => 'Fantoomkasutajad',
    58 => 'L�hiaegsed kasutajad',
    59 => 'Vanad kasutajad',
    60 => 'Kasutajad, kes on registreerunud rohkem kui',
    61 => ' kuud tagasi kuid pole kunagi sisse loginud.',
    62 => 'Kasutajad, kes on registreerunud rohkem kui ',
    63 => ' kuud tagasi, seej�rel loginud sisse 24 tunni jooksul kuid pole p�rast seda enam kordagi sinu lehele naasnud.',
    64 => 'Tavalised kasutajad, kes lihtsalt pole sinu lehele tulnud juba ',
    65 => ' kuud.',
    66 => 'Uuenda loetelu',
    67 => 'Kuud registreerimisest',
    68 => 'Online tunde',
    69 => 'Offline kuud',
    70 => 'Ei kustutatud',
    71 => 'Edukalt kustutatud',
    72 => 'Kustutamiseks pole �htegi kasutajat valitud',
    73 => 'Kas sa oled kindel, et soovid l�plikult kustutada k�ik valitud kasutajad?',
    74 => 'Viimased registreerijad',
    75 => 'Kasutajad, kes on viimati registreerunud ',
    76 => ' kuud'
);

###############################################################################
# admin/moderation.php

$LANG29 = array(
    1 => 'Kinnita',
    2 => 'Kustuta',
    3 => 'Toimeta',
    4 => 'Profiil',
    10 => 'Tiitel',
    11 => 'Algusp�ev',
    12 => 'URL',
    13 => 'Kategooria',
    14 => 'P�ev',
    15 => 'Rubriik',
    16 => 'Kasutajanimi',
    17 => 'T�isnimi',
    18 => 'E-post',
    34 => 'Kontrolli ja otsusta',
    35 => 'Sisestatud lood',
    36 => 'Sisestatud lingid',
    37 => 'Sisestatud s�ndmused',
    38 => 'Sisesta',
    39 => 'Hetkel pole �levaatamist (modereerimist) vajavaid sisestusi.',
    40 => 'Kasutajate sisestused'
);

###############################################################################
# admin/mail.php

$LANG31 = array(
    1 => "{$_CONF['site_name']} E-posti t��riist",
    2 => 'Kellelt',
    3 => 'Vasta',
    4 => 'Teema',
    5 => 'Sisu',
    6 => 'Saada :',
    7 => 'K�ik kasutajad',
    8 => 'Administraator',
    9 => 'Valikud',
    10 => 'HTML',
    11 => 'Oluline teade!',
    12 => 'Saada',
    13 => 'Puhasta',
    14 => 'Ignoreeri kasutaja seadistusi',
    15 => 'Viga saatmisel: ',
    16 => 'Edukalt saadetud: ',
    17 => "<a href={$_CONF['site_admin_url']}/mail.php>Saada j�rgmine kiri</a>",
    18 => 'Kellele',
    19 => 'Kui soovid saata kirja k�igile registreeritud kasutajatele, vali valikukastist Logged-in kasutajagrupp.',
    20 => "Edukalt saadetud <successcount> s�numit ja eba�nnestus saata <failcount> s�numit.  Kui sa vajad iga s�numi kohta detailset infot, siis leiad selle info allpool. Kuid sa v�id <a href=\"{$_CONF['site_admin_url']}/mail.php\">saata j�rgmise s�numi</a> v�i v�id <a href=\"{$_CONF['site_admin_url']}/moderation.php\">mine tagasi administreerimislehele. </a>",
    21 => 'T�rked',
    22 => 'Edukalt',
    23 => 'Polnud t�rkeid',
    24 => 'Polnud �nnestunuid',
    25 => '-- Vali grupp --',
    26 => 'Palun t�ida k�ik v�ljad ja vali valikukastist kasutajate grupp.'
);

###############################################################################
# admin/plugins.php

$LANG32 = array(
    1 => 'Pluginate installeerimine v�ib kahjustada sinu Geeklogi installatsiooni ja lisaks kahjustada ka sinu s�steemi. On oluline, et sa installeeriksid vaid <a href="http://www.geeklog.net">Geeklogi kodulehelt</a> laetud pluginaid, sest me kontrollime hoolikalt meie lehele laetud pluginaid erinevates operatsioonis�steemides. On oluline m�ista, et plugina installeerimine n�uab mitmete s�steemik�skude kasutamist, mis v�ib kaasa tuua turvalisusprobleeme, eriti siis, kui sa kasutad kolmandatelt lehtedelt laetud pluginaid. Sellest hoiatusest hoolimata ei taga me plugina installeerimise edukust ega vastuta selle installeerimise tagaj�rjena p�hjustatud kahju eest. Teiste s�nadega - installeeri oma vastutusel. Lisaks on iga plugina paketi juures juhend, kuidas installeerida plugin k�sitsi.',
    2 => 'Plug-in Installation Disclaimer', // t�lkida
    3 => 'Plugina installeerimisvorm',
    4 => 'Plugina fail',
    5 => 'Pluginate loetelu',
    6 => 'Hoiatus, plugin on juba installeeritud!',
    7 => 'Plugin, mida sa soovid installeerida, on juba installeeritud. Palun kustuta see plugin enne taasinstalleerimist.',
    8 => 'Plugina sobivuse kontroll  eba�nnestus',
    9 => 'See plugin vajab uuemat Geeklogi versiooni. Kas uuenda <a href="http://www.geeklog.net">Geeklog</a> v�i hangi plugina sobiv versioon.',
    10 => '<br><b>Hetkel pole installeeritud �htegi pluginat.</b><br><br>',
    11 => 'Plugina muutmiseks v�i kustutamiseks kl�psa allpool selle nimel. Sulle n�idatakse plugina kohta t�psemat infot koos autori veebilehe aadressiga. N�idatakse nii installeeritud versiooni numbrit kui ka plugina koodist saadud plugina versioon. Selle p�hjal saad otsustada, kas plugin vajab uuendamist v�i mitte. Plugina installeerimise v�i uuendamise kohta loe t�psemalt plugina dokumentatsioonist.',
    12 => 'plugineditor () ei saanud plugina nime',
    13 => 'Plugina toimetaja',
    14 => 'Uus plugin',
    15 => 'Admin avaleht',
    16 => 'Plugina nimi',
    17 => 'Plugina versioon',
    18 => 'Geeklogi versioon',
    19 => 'Kasutuses',
    20 => 'Ja',
    21 => 'Ei',
    22 => 'Installeeri',
    23 => 'Salvesta',
    24 => 'T�hista',
    25 => 'Kustuta',
    26 => 'Plugina nimi',
    27 => 'Plugina koduleht',
    28 => 'Installeeritud versioonid',
    29 => 'Geeklogi versioon',
    30 => 'Kustuta plugin?',
    31 => 'Kas sa oled kindel, et soovid  kustutada  selle plugina?  J�tkates kustutad sa ka k�ik selle pluginaga seotud andmed ja andmestruktuurid. Kui sa oled kindel, siis kl�psa uuesti allpool "kustuta" nuppu.',
    32 => '<p><b>Viga: AutoLink silt on ebakorrektse formaadiga</b></p>',
    33 => 'Koodi versioon',
    34 => 'Uuenda',
    35 => 'Toimeta',
    36 => 'Kood',
    37 => 'andmed', // data
    38 => 'Uuenda!'
);

###############################################################################
# admin/syndication.php

$LANG33 = array(
    1 => 'loo l�im',
    2 => 'salvesta',
    3 => 'kustuta',
    4 => 't�hista',
    10 => 'Sisu jagamine',
    11 => 'Uus l�im',
    12 => 'Admin avaleht',
    13 => 'L�ime toimetamiseks v�i kustutamiseks kl�psa allpool selle nimel. Uue l�ime loomiseks kl�psa Tee uus �lalpool.',
    14 => 'Tiitel',
    15 => 'T��p',
    16 => 'Faili nimi',
    17 => 'Formaat',
    18 => 'viimati uuendatud',
    19 => 'Kasutuses',
    20 => 'Ja',
    21 => 'Ei',
    22 => '<i>(pole l�imi)</i>',
    23 => 'k�ik lood',
    24 => 'L�ime toimetaja',
    25 => 'L�ime tiitel',
    26 => 'Limiit',
    27 => 'Kannete pikkus',
    28 => '(0 = pole  teksti, 1 = t�istekst, muu = piira antud m�rkide arvuni.)',
    29 => 'Kirjeldus',
    30 => 'Viimane uuendus',
    31 => 'kooditabel',
    32 => 'Keel',
    33 => 'Sisu',
    34 => 'Kanded',
    35 => 'tundi',
    36 => 'Vali l�ime t��p',
    37 => 'Sa oled installeerinud v�hemalt �he plugina, mis toetab sisu jaotamist. Allpool pead sa valima, kas lood Geeklogi l�ime v�i m�ne plugina poolt toetatud l�ime.',
    38 => 'Viga: puuduvad v�ljad',
    39 => 'Palun t�ida l�ime tiitli, kirjelduse ja faili nime v�ljad.',
    40 => 'Palun sisesta lugude  v�i tundide arv.',
    41 => 'Sisesta',
    42 => 'S�ndmused',
    43 => 'Igas rubriigis.',
    44 => 'Mitte �heski.',
    45 => 'Rubriigi lehep�ises on link?',
    46 => 'Piira tulemused',
    47 => 'Otsi',
    48 => 'Toimeta',
    49 => 'L�ime logo',
    50 => "Suhteline saidi urli suhtes ({$_CONF['site_url']})",
    51 => 'Sinu valitud l�imefailinimi on juba teise l�ime poolt kasutuses. Palun vali teine nimi.',
    52 => 'Viga: failinimi on juba kasutuses'
);

###############################################################################
# confirmation and error messages

$MESSAGE = array(
    1 => "Sinu salas�na saadeti sulle E-postiga ja peaks kohe kohale j�udma. Palun j�rgi kirjas olevaid juhiseid ja me t�name sind {$_CONF['site_name']} lehe kasutamise eest",
    2 => "T�name sind {$_CONF['site_name']} lehele loo sisestamise eest. See saadeti meie meeskonnale kinnitamiseks. P�rast meie lehe meeskonna poolset kinnitamist saavad k�ik seda meie lehel lugeda.",
    3 => "T�name sind {$_CONF['site_name']} lehele lingi lisamise eest.  See saadeti meie meeskonnale kinnitamiseks. Kui see kinnitatakse, v�id sa seda n�ha <a href={$_CONF['site_url']}/links.php>linkide</a> osas.",
    4 => "T�name sind {$_CONF['site_name']} lehele s�ndmuse sisestamise eest.  See saadeti meie meeskonnale kinnitamiseks. P�rast kinnitamist on see s�ndmus n�ha <a href={$_CONF['site_url']}/calendar.php>kalendri</a> osas.",
    5 => 'Sinu konto info on edukalt salvestatud.',
    6 => 'Sinu eelistused on edukalt salvestatud.',
    7 => 'Sinu kommentaaride eelistused on edukalt salvestatud.',
    8 => 'Sa oled edukalt v�lja logitud.',
    9 => 'Sinu lugu on edukalt salvestatud.',
    10 => 'Lugu on edukalt kustutatud.',
    11 => 'Sinu blokk on edukalt salvestatud.',
    12 => 'Blokk on edukalt kustutatud.',
    13 => 'Rubriik on edukalt salvestatud.',
    14 => 'Rubriik ja k�ik sellega seotud lood ja blokid on edukalt kustutatud.',
    15 => 'Sinu link on edukalt salvestatud.',
    16 => 'Link on edukalt kustutatud.',
    17 => 'S�ndmus on edukalt salvestatud.',
    18 => 'S�ndmus on edukalt kustutatud.',
    19 => 'K�sitlus on edukalt salvestatud.',
    20 => 'K�sitlus on edukalt kustutatud.',
    21 => 'Kasutaja on edukalt salvestatud.',
    22 => 'Kasutaja on edukalt kustutatud.',
    23 => 'Sinu kalendrisse s�ndmuse lisamisel tekkis viga. Ei olnud s�ndmuse ID-d.',
    24 => 'S�ndmus on sinu kalendrisse salvestatud.',
    25 => 'Ei saa enne sinu sisselogimist isiklikku kalendrit avada',
    26 => 'S�ndmus on sinu isiklikust kalendrist edukalt eemaldatud',
    27 => 'S�num on edukalt saadetud.',
    28 => 'plugin on edukalt salvestatud',
    29 => 'Sellel lehel pole kahjuks isiklikud kalendrid kasutuses.',
    30 => 'Ligip��s t�kestatud',
    31 => 'Kahjuks pole sul ligip��su lugude haldamise lehele. Pane t�hele, et k�ik sellised lubamatud katsed logitakse',
    32 => 'Kahjuks pole sul ligip��su rubriikide haldamise lehele. Pane t�hele, et k�ik sellised lubamatud katsed logitakse',
    33 => 'Kahjuks pole sul ligip��su blokkide haldamise lehele. Pane t�hele, et k�ik sellised lubamatud katsed logitakse',
    34 => 'Kahjuks pole sul ligip��su linkide haldamise lehele. Pane t�hele, et k�ik sellised lubamatud katsed logitakse',
    35 => 'Kahjuks pole sul ligip��su s�ndmuste haldamise lehele. Pane t�hele, et k�ik sellised lubamatud katsed logitakse',
    36 => 'Kahjuks pole sul ligip��su k�sitluste haldamise lehele. Pane t�hele, et k�ik sellised lubamatud katsed logitakse',
    37 => 'Kahjuks pole sul ligip��su kasutajate haldamise lehele. Pane t�hele, et k�ik sellised lubamatud katsed logitakse',
    38 => 'Kahjuks pole sul ligip��su pluginate haldamise lehele. Pane t�hele, et k�ik sellised lubamatud katsed logitakse',
    39 => 'Kahjuks pole sul ligip��su E-posti haldamise lehele. Pane t�hele, et k�ik sellised lubamatud katsed logitakse',
    40 => 'S�steemi teade',
    41 => 'Kahjuks pole sul ligip��su s�nade asendamise lehele. Pane t�hele, et k�ik sellised lubamatud katsed logitakse',
    42 => 'S�na on edukalt salvestatud',
    43 => 'S�na on edukalt kustutatud.',
    44 => 'Plugin on edukalt installeeritud!',
    45 => 'Plugin on edukalt kustutatud.',
    46 => 'Kahjuks pole sul ligip��su  andmebaasi bakupi t��riista juurde. Pane t�hele, et k�ik sellised lubamatud katsed logitakse',
    47 => 'Selliseid v�imalusi saab kasutada vaid *nix keskkonnas. Kui s�steem t��tab *nix operatsioonis�steemis, siis puhverm�lu on edukalt t�hjendatud. Kui operatsioonis�steemiks on Windows, pead sa otsima faile nimekujuga adodb_*.php ja need failid k�sitsi kustutama.',
    48 => "T�name sind oma liikmelisuse kinnitamise eest {$_CONF['site_name']} lehel. Meie meeskond vaatab sinu taotluse l�bi. Kui see kinnitatakse, saadetakse sinu poolt antud E-postiaadressile E-kirjaga sinu salas�na.",
    49 => 'Grupp on edukalt salvestatud.',
    50 => 'Grupp on edukalt kustutatud.',
    51 => 'See kasutajanimi on juba kasutuses. Palun vali m�ni teine.',
    52 => 'Sisestatud E-postiaadress tundub olevat ebakorrektne.',
    53 => 'Sinu uus salas�na on aktsepteeritud. Palun logi uut salas�na kasutades allpool oleva vormi kaudu sisse.',
    54 => 'Sinu tellimus uue salas�na saamiseks on aegunud. Palun proovi alloleva vormi abil uuesti.',
    55 => 'Sulle saadeti E-kiri, mis peaks kohe sinu postkasti j�udma. Uue salas�na m��ramiseks j�rgi selles olevaid juhiseid.',
    56 => 'Sisestatud E-postiaadress on juba kasutuses teises kasutajakontos.',
    57 => 'Sinu kasutajakonto on edukalt kustutatud.',
    58 => 'L�im on edukalt salvestatud.',
    59 => 'L�im on edukalt kustutatud.',
    60 => 'Plugin on edukalt uuendatud.',
    61 => 'Plugin %s: Tundmatu teate j�rjenumber',
    62 => 'Trackback kommentaar on kustutatud.',
    63 => 'Trackback kommentaari kustutamisel tekkis viga.',
    64 => 'Sinu trackback kommentaar on edukalt saadetud.',
    65 => 'Veebilogi kataloogi teenus on edukalt salvestatud.',
    66 => 'See Veebilogi kataloogi teenus on kustutatud.',
    67 => 'Uus salas�na ei kattu kontrolliks sisestatud teise salas�naga!',
    68 => 'Sa pead sisestama praeguse kehtiva salas�na.',
    69 => 'Sinu kasutajakonto on blokeeritud!',
    70 => 'Sinu konto ootab administraatori kinnitust.',
    71 => 'Sinu kasutajakonto loomise soov on n��d kinnitatud ja ootab administraatoripoolset kinnitamist.',
    72 => 'Plugina installeerimisel tekkis viga. T�psemalt vaata error.log failist.',
    73 => 'Plugina eemaldamisel tekkis viga. T�psemalt vaata error.log failist.',
    74 => 'Pingback on edukalt saadetud.',
    75 => 'Trackbackid tuleb saata post meetodiga.',
    76 => 'Kas sa t�esti soovid seda kustutada?',
    77 => 'Hoiatus: <br>sa m��rasid vaikekooditabeliks UTF-8, kuid sinu server ei toeta mitmebaidilist kooditabelit. Palun installeeri PHP jaoks mbstring funktsioonid v�i vali m�ni teine kooditabel/keel.',
    78 => 'Palun kontrolli, et E-postiaadress ja kontrolliks sisestatud E-postiaadress oleksid samad.',
    79 => 'Leht, mida soovid avada, vajab t��ks funktsiooni, mida kahjuks sellel saidil enam kasutuses ei ole.',
    80 => 'Selle l�ime teinud plugina t�� on hetkel v�lja l�litatud. Sa ei saa seda l�ime toimetada enne kui oled antud plugina uuesti t��le l�litanud.',
    81 => 'V�imalik, et sa kirjutasid oma sisselogimisinfo valesti. Palun proovi alloleva vormi abil  uuesti sisse logida.',
    82 => 'Sa oled �letanud lubatud sisselogimiskatsete limiidi. Palun proovi hiljem uuesti.',
    83 => 'Et muuta oma salas�na, E-postiaadressi v�i kui kaua sind peaks sait m�letama, pead sa sisestama oma kehtiva salas�na.',
    84 => 'Oma konto kustutamiseks sisesta oma kehtiv salas�na.'
);

###############################################################################

$LANG_ACCESS = array(
    'access' => 'Ligip��s',
    'ownerroot' => 'omanik (root)',
    'group' => 'Grupp',
    'readonly' => 'Ainult loetav',
    'accessrights' => 'Ligip��su�igused',
    'owner' => 'Omanik',
    'grantgrouplabel' => 'Grant Above Group Edit Rights', // t�lkida
    'permmsg' => 'M�rkus: liikmed on k�ik lehele sisse loginud lehe kasutajad ja anon��msed on k�ik lehel olevad ja mitte sisse loginud lehe lugejad.',
    'securitygroups' => 'Turvalisusgrupid',
    'editrootmsg' => "Kuigi sa oled kasutajate administraator, ei saa sa muuta root kasutajate andmeid, kui sa ei ole ise root kasutaja. Sa v�id toimetada k�iki teisi kasutajaid, v�lja arvatud root kasutajaid. Pane t�hele, et k�ik �igustamata katsed muuta root kasutajate andmeid logitakse.  Palun mine tagasi <a href=\"{$_CONF['site_admin_url']}/user.php\">Kasutajate administreerimislehele. </a>",
    'securitygroupsmsg' => 'M�rgi grupid, millesse soovid, et see kasutaja kuuluks.',
    'groupeditor' => 'Grupi toimetaja',
    'description' => 'Kirjeldus',
    'name' => 'Nimi',
    'rights' => '�igused',
    'missingfields' => 'Puuduvad v�ljad',
    'missingfieldsmsg' => 'Sa pead grupi jaoks sisestama grupi nime ja kirjelduse',
    'groupmanager' => 'Grupi haldur',
    'newgroupmsg' => 'Grupi toimetamiseks v�i kustutamiseks kl�psa selle nimel allpool. Uue grupi loomiseks kl�psa Tee uus �lal. Pane t�hele, et p�higruppe (core group) ei saa kustutada, sest need on s�steemis kasutusel.',
    'groupname' => 'Grupi nimi',
    'coregroup' => 'P�higrupp',
    'yes' => 'Ja',
    'no' => 'Ei',
    'corerightsdescr' => "See grupp on {$_CONF['site_name']} p�higrupp (Core Group).  Seet�ttu selle grupi �igusi ei saa muuta. Allpool on ainult loetaval kujul loetelu antud grupi �igustest.",
    'groupmsg' => 'Sellel lehel on turvalisusgrupid hierarhilised.  Lisades antud grupi m�nda alloleva grupi koosseisu, annad sa antud grupile samad �igused kui neilgi gruppidel. On eelistatavam kasutada allolevaid gruppe antud grupile �iguste m��ramisel.  Kui vajad kohandatud �igustega gruppi, siis saad sa selle lehe "�igused" osas m��rata mitmeid �igusi. �iguste m��ramiseks m�rgi lihtsalt vastava grupi v�i �iguse juures olev m�rkeruut.',
    'coregroupmsg' => "See grupp on {$_CONF['site_name']} p�higrupp (Core Group).  Seet�ttu ei saa selle grupi kuulumist teistesse gruppidesse muuta. Allpool on ainult loetaval kujul loetelu gruppidest, kuhu see grupp kuulub.",
    'rightsdescr' => 'Grupile v�ib m��rata �igusi otse, m��rates neid just antud grupile,  v�i andes vastavad �igused m�nele neist gruppidest, kuhu antud grupp kuulub. Need �igused, mis on ilma m�rkeruuduta, on antud grupile juba m��ratud nende gruppide kaudu, kuhu see hetkel kuulub. Neid �igusi, mille k�rval on m�rkeruut, v�ib m��rata otse antud grupile.',
    'lock' => 'Lukk',
    'members' => 'Liikmed',
    'anonymous' => 'Anon��mne',
    'permissions' => 'Lubatud',
    'permissionskey' => 'R =lugemis-, E = toimetamis-, toimetamis�igus annab ka  lugemis�iguse', // t�lkida
    'edit' => 'Toimeta',
    'none' => 'Mitte midagi',
    'accessdenied' => 'Ligip��s t�kestatud',
    'storydenialmsg' => "Sul ei ole �igust seda lugu vaadata. Selle p�hjuseks v�ib olla, et sa ei ole {$_CONF['site_name']} lehel registreerunud kasutaja.  Palun <a href=\"users.php?mode=new\"> registreeru {$_CONF['site_name']} lehe kasutajaks </a>, et saada k�iki registreerunud kasutaja �igusi",
    'nogroupsforcoregroup' => 'See grupp ei kuulu �htegi teise gruppi',
    'grouphasnorights' => 'Sellel grupil pole ligip��su �helegi administreerimisfunktsioonile antud saidil',
    'newgroup' => 'Uus grupp',
    'adminhome' => 'Admin avaleht',
    'save' => 'salvesta',
    'cancel' => 't�hista',
    'delete' => 'kustuta',
    'canteditroot' => 'Sa �ritasid toimetada root gruppi, kuid sa pole ise root grupi liige. Sellet�ttu t�kestati sinu ligip��s antud grupile. Kui sa arvad, et tegu on veaga, siis palun kontakteeru lehe administraatoriga.',
    'listusers' => 'N�ita kasutajad',
    'listthem' => 'loetelu',
    'usersingroup' => 'Kasutajad grupis "%s"',
    'usergroupadmin' => 'Kasutajagrupi administreerimine',
    'add' => 'Lisa',
    'remove' => 'Eemalda',
    'availmembers' => 'V�imalikud liikmed',
    'groupmembers' => 'Grupi liikmed',
    'canteditgroup' => 'Grupi toimetamiseks pead sa ise olema selle grupi liige. Kui arvad, et tegu on veaga, siis palun kontakteeru lehe administraatoriga.',
    'cantlistgroup' => 'Grupi liikmete n�gemiseks pead sa ise olema selle grupi liige. Kui sa arvad, et tegu on veaga, palun kontakteeru lehe administraatoriga.',
    'editgroupmsg' => 'Grupi liikmeskonna muutmiseks kl�psa kasutaja nimel ja kasuta kas Lisa v�i Eemalda nuppu. Kui kasutaja on grupi liige, on tema nimi ainult parempoolses loetelus. Kui oled l�petanud, kl�psa grupi koosseisu uuendamiseks ja gruppide haldamise pealehele j�udmiseks <b>Salvesta</b> nuppu.',
    'listgroupmsg' => 'Loetelu k�igist grupi <b>%s</b> hetke liikmetest:',
    'search' => 'Otsi',
    'submit' => 'Sisesta',
    'limitresults' => 'Piira tulemused',
    'group_id' => 'Grupi ID',
    'plugin_access_denied_msg' => 'Sa �ritasid ligi p��seda pluginate administreerimislehele, milleks polnud sul �igust. Pane t�hele, et k�ik �igustamata katsed sellele lehele ligi p��seda logitakse.',
    'groupexists' => 'Grupi nimi on juba olemas',
    'groupexistsmsg' => 'Sama nimega grupp on juba olemas. Grupi nimed peavad olema �ksteisest erinevad.',
);

###############################################################################
# admin/database.php

$LANG_DB_BACKUP = array(
    'last_ten_backups' => 'Viimased 10 bakupit',
    'do_backup' => 'Tee bakkup',
    'backup_successful' => 'Andmebaasi bakkup oli edukas.',
    'db_explanation' => 'Sinu Geeklogist uue bakupi tegemiseks kl�psa allolevat nuppu',
    'not_found' => "Ebakorrektne tee programmini v�i mysqldump pole k�ivitatav.<br>Kontrolli config.php failis <strong>\$_DB_mysqldump_path</strong> definitsiooni.<br>Hetkel on muutuja v��rtuseks: <var>{$_DB_mysqldump_path}</var>",
    'zero_size' => 'Bakkup eba�nnestus, faili suurus on 0 baiti',
    'path_not_found' => "{$_CONF['backup_path']} pole olemas v�i pole kataloog.",
    'no_access' => "Viga: bakkupkataloog, {$_CONF['backup_path']}, pole ligip��setav.",
    'backup_file' => 'Backupfail',
    'size' => 'suurus',
    'bytes' => 'baiti',
    'total_number' => 'Bakupite �ldarv: %d'
);

###############################################################################erefo$

$LANG_BUTTONS = array(
    1 => 'Avaleht',
    2 => 'Kontakt',
    3 => 'Avalda',
    4 => 'Lingid',
    5 => 'K�sitlused',
    6 => 'Kalender',
    7 => 'Lehe statistika',
    8 => 'Kohanda',
    9 => 'Otsi',
    10 => 't�psem otsing',
    11 => 'Artiklid'
);

###############################################################################
# 404.php

$LANG_404 = array(
    1 => 'Viga/Error 404',
    2 => 'Ma otsisin igalt poolt, kuid ei leidnud otsitud lehte: <b>%s</b>.',
    3 => "<p>Mul on kahju, kuid soovitud  faili ei ole. Palun vaata kindlasti <a href=\"{$_CONF['site_url']}\">pealehele </a> v�i <a href=\"{$_CONF['site_url']}/search.php\">otsimislehele,</a> et otsitavat leida.",
);

###############################################################################

$LANG_LOGIN = array(
    1 => 'N�utav sisselogimine',
    2 => 'Selle lehe osa vaatamiseks pead kasutajana sisse logima.',
    3 => 'Logi sisse',
    4 => 'Uus kasutaja'
);

$LANG_PDF = array(
    1 => 'PDF oskused on v�lja l�litatud',
    2 => 'Etteantud faili ei teisendatud. Dokument laeti korrektselt, kuid seda ei suudetud t��delda. J�lgi hoolikalt, et laeksid vaid XHTML standardile vastavaid HTML dokumente. Pea meeles, et keeruka kujundusega HTML dokumente v�idakse teisendada ebakorrektselt v�i �ldse mitte teisendada. Sinu faili t��tluse tulemusena loodi 0 baidi suurusega fail ja see kustutati. Kui sa oled kindel, et sinu faili saab edukalt t��delda, siis lae see uuesti.',
    3 => 'PDF-i genereerimisel tekkis tundmatu viga',
    4 => 'No page data was given or you want to use the ad-hoc PDF generation tool below.  If you think you are getting this page in error then please contact the system administrator.  Otherwise, you may use the form below to generate PDF\'s in an ad-hoc fashion.',// t�lkida
    5 => 'Laen dokumenti.',
    6 => 'Palun oota, kuni sinu dokumenti laetakse.',
    7 => 'Sa v�id oma dokumendi salvestamiseks teha alloleval lingil hiirega paremkl�psu ning valida men��st kas "Save target...", "Salvesta sihtm�rk...", "Save Link location..." vms.',
    8 => 'Konfiguratsioonis m��ratud tee HTMLDoc rakenduseni on kas vale v�i seda rakendust ei saa k�ivitada. Palun p��rdu probleemi p�simisel lehe administraatori poole.',
    9 => 'PDF-i genereerija',
    10 => 'This is the Ad-hoc PDF Generation tool. It will attempt to convert any URL you give into a PDF.  Please note that some web pages will not render properly with this feature.  This is a limitation of the HTMLDoc PDF generation tool and such errors should not be reported to the administrators of this site', // t�lkida
    11 => 'URL',
    12 => 'Genereeri PDF!',
    13 => 'Selle lehe h��lestus ei luba kasutada PHP funktsiooni fopen(). S�steemiadministraator peab selle funktsiooni lubamiseks muutma php.ini faili ning selles allow_url_fopen sisse l�litama.',
    14 => 'PDF faili, mida soovid vaadata kas pole olemas v�i �ritad sa seda vaadata ilma selleks piisavaid �igusi omamata.',
);

###############################################################################
# trackback

$LANG_TRB = array (
    'trackback'          => 'Trackback',
    'from'               => 'kust',
    'tracked_on'         => 'Kommenteeritud', // Tracked on
    'read_more'          => '[loe lisaks]',
    'intro_text'         => 'Siin on see, mida teised �tlevad "%s" kohta:',
    'no_comments'        => 'Selle sisestuse kohta pole trackbackkommentaare.',
    'this_trackback_url' => 'Selle sisestuse trackback URL:',
    'num_comments'       => '%d trackbackkommentaari',
    'send_trackback'     => 'Saada Ping',
    'preview'            => 'Eelvaade',
    'editor_title'       => 'Saada trackbackkommentaar',
    'trackback_url'      => 'Trackbacki URL',
    'entry_url'          => 'Sisestuse URL',
    'entry_title'        => 'Sisestuse tiitel',
    'blog_name'          => 'Saidi nimi',
    'excerpt'            => 'katkend',
    'truncate_warning'   => 'M�rkus: vastuv�ttev leht v�ib sinu katkendit l�hendada.',
    'button_send'        => 'Saada',
    'button_preview'     => 'Eelvaade',
    'send_error'         => 'Viga',
    'send_error_details' => 'Viga trackbackkommentaari saatmisel:',
    'url_missing'        => 'Puudub sisestuse URL',
    'url_required'       => 'Palun kirjuta sisestuse jaoks v�hemalt URL.',
    'target_missing'     => 'Pole Trackback URL-i',
    'target_required'    => 'Palun kirjuta trackbacki URL',
    'error_socket'       => 'Ei saanud avada v�ratit.',
    'error_response'     => 'Serveri vastus oli arusaamatu.',
    'error_unspecified'  => 'M��ratlemata viga.',
    'select_url'         => 'Vali trackbacki URL',
    'not_found'          => 'Ei leidnud trackback URL-i',
    'autodetect_failed'  => 'Geeklog ei suutnud tuvastada saadetava kommentaari jaoks trackback URL-i. Palun kirjuta see k�sitsi allolevasse vormi.',
    'trackback_explain'  => 'Vali allolevast loetelust link, kuhu soovid oma trackback kommentaari saata. P�rast seda �ritab Geeklog tuvastada trackback kommentaari jaoks �ige URL-i. Kui sa tead �iget URL-i, v�id sa <a href="%s">sisestada selle k�sitsi. </a>',
    'no_links_trackback' => 'Ei leidnud linke. Sa ei saa selle sisestuse kohta saata trackback kommentaari.',
    'pingback'           => 'Pingback',
    'pingback_results'   => 'Pingback tulemused',
    'send_pings'         => 'Saada Ping-id',
    'send_pings_for'     => 'Saada Ping-id "%s"', // t�lkida
    'no_links_pingback'  => 'Ei leidnud linke. Selle sisestuse kohta ei saadetud  pingbacke.',
    'pingback_success'   => 'Pingback on saadetud.',
    'no_pingback_url'    => 'Ei leidnud pingback URL-i.',
    'resend'             => 'Saada uuesti',
    'ping_all_explain'   => 'Sa v�id teavitada lehti, millele sinu leht viitab saates (<a href="http://en.wikipedia.org/wiki/Pingback"> Pingbacki</a>), teavitada lehe uuendamisest saates pingi veebi logikataloogidesse (weblog directory) v�i saata <a href="http://en.wikipedia.org/wiki/Trackback"> Trackbackkommentaari,</a> viimast juhul, kui oled oma lehel kommenteerinud m�nel teisel saidil olnud kellegi teise kirjutist.',
    'pingback_button'    => 'Saada Pingback',
    'pingback_short'     => 'Saada pingback k�igile k�esolevalt  lehelt lingitud lehtedele.',
    'pingback_disabled'  => '(Pingback on v�lja l�litatud)',
    'ping_button'        => 'Saada Ping',
    'ping_short'         => 'Pingi veebi logikatalooge',
    'ping_disabled'      => '(Ping on v�lja l�litatud)',
    'trackback_button'   => 'Saada Trackback',
    'trackback_short'    => 'Saada trackbackkommentaar.',
    'trackback_disabled' => '(Trackback on v�lja l�litatud)',
    'may_take_a_while'   => 'Pane t�hele, et pingi ja pingbacki saatmine v�ib v�tta aega.',
    'ping_results'       => 'Ping tulemused',
    'unknown_method'     => 'Tundmatu ping meetod',
    'ping_success'       => 'Ping on saadetud.',
    'error_site_name'    => 'Palun kirjuta saidi nimi.',
    'error_site_url'     => 'Palun sisesta lehe URL.',
    'error_ping_url'     => 'Palun kirjuta toimiv ping URL.',
    'no_services'        => 'Pole h��lestatud veebi logikataloogide kasutamine (weblog directory services).',
    'services_headline'  => 'Veebi logikataloogide teenused',
    'service_explain'    => 'Veebi logikataloogi teenusepakkuja andmete toimetamiseks kl�psa allpool vastavat nuppu logikataloogi nime k�rval. Uue logikataloogi lisamiseks kl�psa Tee uus �lal.',
    'service'            => 'Teenus',
    'ping_method'        => 'Ping meetod',
    'service_website'    => 'Veebileht',
    'service_ping_url'   => 'Pingi URL',
    'ping_standard'      => 'Standard Ping',
    'ping_extended'      => 'Laiendatud ping',
    'ping_unknown'       => '(tundmatu meetod)',
    'edit_service'       => 'Toimeta veebi logikataloogi andmeid',
    'trackbacks'         => 'Trackbackid',
    'editor_intro'       => 'Valmista oma trackbackkommentaar  <a href="%s">%s jaoks ette</a>.',
    'editor_intro_none'  => 'Valmista trackback kommentaar ette.',
    'trackback_note'     => 'Trackbakkommentaari saatmiseks mine lugude loetelusse ja kl�psa loo juures "' . $LANG24[21] . '". Kl�psa j�rgmisel lingil, et <a href="%s"> saata lugudega sidumata trackbackkommentaari.</a>',
    'pingback_explain'   => 'Kirjuta URL, kuhu pingback saata. Pingback viitab tagasi sinu saidi pealehele.',
    'pingback_url'       => 'Pingbacki URL',
    'site_url'           => 'Antud saidi URL',
    'pingback_note'     => 'Pingbacki saatmiseks mine lugude loetelusse ja kl�psa loo juures "' . $LANG24[21] . '". Kl�psa j�rgmisel lingil, et <a href="%s"> saata lugudega sidumata pingbacki.</a>',
    'pbtarget_missing'   => 'Pole pingbacki URL-i',
    'pbtarget_required'  => 'Palun kirjuta pingbacki URL',
    'pb_error_details'   => 'Pingbacki saatmisel tekkis viga:',
    'delete_trackback'   => 'Selle trackbacki kustutamiseks kl�psa: ',
);

###############################################################################
# directory.php

$LANG_DIR = array (
    'title'            => 'Artiklite kataloog',
    'title_year'       => '%d artiklid',
    'title_month_year' => '%s %d artiklid',
    'nav_top'          => 'Tagasi peakataloogi',
    'no_articles'      => 'Pole artikleid'
);

################################################################################
# "What's New" Time Strings

$LANG_WHATSNEW = array (
    # This here determines the order of the sentence "No new stories in 2 hrs"
    # order it so it makes sense in your language:
    # %i    item, "Stories"
    # %n    amount, "2", "20" etc
    # %t    time, "2" (weeks)
    # %s    scale, "hrs", "weeks"
    'new_string'  => '%n uut %i viimase %t %s jooksul',
    'new_last'    => ' viimase %t %s jooksul',
    # other strings
    'minutes'     => 'minuti',
    'hours'       => 'tunni',
    'days'        => 'p�eva',
    'weeks'       => 'n�dala',
    'months'      => 'kuu',
    'minute'      => 'minut',
    'hour'        => 'tund',
    'day'         => 'p�eva',
    'week'        => 'n�dala',
    'month'       => 'kuu'
);

$LANG_MONTH = array(
    1 => 'Jaanuar',
    2 => 'Veebruar',
    3 => 'M�rts',
    4 => 'Aprill',
    5 => 'Mai',
    6 => 'Juuni',
    7 => 'Juuli',
    8 => 'August',
    9 => 'September',
    10 => 'Oktoober',
    11 => 'November',
    12 => 'Detsember'
);

$LANG_WEEK = array(
    1 => 'P�hap�ev',
    2 => 'Esmasp�ev',
    3 => 'Teisip�ev',
    4 => 'Kolmap�ev',
    5 => 'Neljap�ev',
    6 => 'Reede',
    7 => 'Laup�ev'
);

################################################################################
# Admin - Strings
#
# These are some standard strings used by core functions as well as plugins to
# display administration lists and edit pages

$LANG_ADMIN = array (
    'search'        => 'Otsi',
    'limit_results' => 'Piira tulemused',
    'submit'        => 'Valmis',
    'edit'          => 'Toimeta',
    'edit_adv'      => 'Toimeta lisa',
    'admin_home'    => 'Admin avaleht',
    'create_new'    => 'Tee uus',
    'create_new_adv' => 'Tee uus (lisa)',
    'enabled'       => 'Kasutuses',
    'title'         => 'Tiitel',
    'type'          => 'T��p',
    'topic'         => 'Rubriik',
    'help_url'      => 'Abifaili URL',
    'save'          => 'Salvesta',
    'cancel'        => 'T�hista',
    'delete'        => 'Kustuta',
    'delete_sel'    => 'Kustuta valitud',
    'copy'          => 'Koopia',
    'no_results'    => '- Ei leidnud midagi -',
    'data_error'    => 'Liitumiste andmetega tekkis viga. Palun kontrolli algandmeid.',
    'preview'       => 'Eelvaade',
    'records_found' => 'Leitud kirjed'
);

# Localisation of the texts for the various drop-down menus that are actually
# stored in the database. If these exist, they override the texts from the
# database.

$LANG_commentcodes = array(
    0   => 'On kommentaarid',
    -1  => 'Pole kommentaare'
);

$LANG_commentmodes = array(
    'flat'      => 'lihtne',
    'nested'    => '�ksteise sees',
    'threaded'  => 'L�imedena',
    'nocomment' => 'pole kommentaare'
);

$LANG_cookiecodes = array(
    0       => '�ra m�leta',
    3600    => '1 tund',
    7200    => '2 tundi',
    10800   => '3 tundi',
    28800   => '8 tundi',
    86400   => '1 p�ev',
    604800  => '1 n�dal',
    2678400 => '1 kuu'
);

$LANG_dateformats = array(
    0   => 'S�steemi seadistus'
);

$LANG_featurecodes = array(
    0 => 'Pole pealugu',
    1 => 'Pealugu'
);

$LANG_frontpagecodes = array(
    0 => 'Ainult rubriigis',
    1 => 'Avalehel ja rubriigis'
);

$LANG_postmodes = array(
    'plaintext' => 'Puhas tekst',
    'html'      => 'HTML kujundusega'
);

$LANG_sortcodes = array(
    'ASC'  => 'Vanemad enne',
    'DESC' => 'Uuemad enne'
);

$LANG_trackbackcodes = array(
    0   => 'Trackback lubatud',
    -1  => 'Trackback keelatud'
);

?>
