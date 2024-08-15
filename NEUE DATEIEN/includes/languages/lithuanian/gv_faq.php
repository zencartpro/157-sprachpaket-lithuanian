<?php
/**

 * @copyright Copyright 2003-2024 Zen Cart Development Team
 * Zen Cart German Version - www.zen-cart-pro.at
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * @version $Id: gv_faq.php 2022-04-09 12:53:16Z webchills $
 */

define('NAVBAR_TITLE', TEXT_GV_NAME . ' DUK');
define('HEADING_TITLE', TEXT_GV_NAME . ' DUK');

define('TEXT_INFORMATION', '<a id="Top"></a>
  <a href="'.zen_href_link(FILENAME_GV_FAQ,'faq_item=1').'">Pirkimas ' . TEXT_GV_NAMES . '</a><br>
  <a href="'.zen_href_link(FILENAME_GV_FAQ,'faq_item=2').'">Kaip siųsti ' . TEXT_GV_NAMES . '</a><br>
  <a href="'.zen_href_link(FILENAME_GV_FAQ,'faq_item=3').'">Pirkti su ' . TEXT_GV_NAMES . '</a><br>
  <a href="'.zen_href_link(FILENAME_GV_FAQ,'faq_item=4').'">DK kodas ' . TEXT_GV_NAMES . '</a><br>
  <a href="'.zen_href_link(FILENAME_GV_FAQ,'faq_item=5'').'">Kai iškyla problemos</a><br>
');

define('SUB_HEADING_TITLE_1','Pirkimas ' . TEXT_GV_NAMES);
define('SUB_HEADING_TEXT_1', TEXT_GV_NAMES . ' yra perkami kaip bet kuri prekė šioje parduotuvėje. Galima už juos sumokėti naudojantis parduotuvės teikiamais būdais.
  Kai tik nusiperkama, ' . TEXT_GV_NAME . ' vertė bus pridėta prie Jūsų asmeninės
   ' . TEXT_GV_NAME . ' sąskaitos. Jei turite pinigų savo ' . TEXT_GV_NAME . ' sąskaitoje, pastebėsite, kad
 ta suma matosi krepšelyje, o taip pat yra nuoroda
  į puslapį, kur galite išsiųsti kam nors' . TEXT_GV_NAME . ' el. paštu.');

define('SUB_HEADING_TITLE_2','Kaip siųsti ' . TEXT_GV_NAMES);
define('SUB_HEADING_TEXT_2','Norint nusiųsti ' . TEXT_GV_NAME . ' Jums reikia patekti į ' . TEXT_GV_NAME . ' puslapį. Čia Jūs galite rasti nuorodą "Pirkinių krepšelys" puslapyje dešiniame stulpelyje.
  Kai Jūs siunčiate ' . TEXT_GV_NAME . ', Jums reikia nurodyti:
  1.Gavėjo vardą kuriam siunčiate' . TEXT_GV_NAME . ' .
  2.E-pašto adresą gavėjo kuriam siunčiate ' . TEXT_GV_NAME . ' .
  3.Pinigų sumą kurią norite siųsti. (Dėmesio!Jums nebūtina siųsti visą sumą kurią turite ' . TEXT_GV_NAME . ' sąskaitoje.)
  4.Trumpą žinutę kurią matys gavėjas .
  Prašome įsitikinti ar suvedėte teisingą informaciją.Jūs dar galėsite ją pakeisti arba patvirtinti prieš siųsdami žinutę .');
  break;
  case '3':
  define('SUB_HEADING_TITLE_3','Pirkimas naudojant ' . TEXT_GV_NAMES);
  define('SUB_HEADING_TEXT_3','Jei  Jūs turite lėšų ' . TEXT_GV_NAME . ' sąskaitoje, Jūs galite panaudoti jas pirkdami prekes mūsų e-parduotuvėje. Vykdant pirkimo užbaigimo procedūrą , Jūs matysite aplankalą "Dovanų Kuponas" . Įveskite sumą kurią norite panaudoti iš Jūsų ' . TEXT_GV_NAME . ' sąskaitos.
  Prašome atkreipti dėmesį, kad Jums teks panaudit kitą apmokėjimo būdą , jei suma už kurią perkate viršys lėšas turimas ' . TEXT_GV_NAME . ' sąskaitoje.
  Jei pas Jūs yra daugiau lėšų ' . TEXT_GV_NAME . ' sąskaitoje nei prekių suma, likutis bus paliktas Jūsų ' . TEXT_GV_NAME . ' sąskaitoje sekantiems pirkiniams.');

  define('SUB_HEADING_TITLE_4','Panaudijimas ' . TEXT_GV_NAMES);
  define('SUB_HEADING_TEXT_4','Jei Jūs gavote ' . TEXT_GV_NAME . ' e-paštu, jame bus nurodyta siuntėjo informacija su  trumpa žinute  . Šiame  laiške bus   ' . TEXT_GV_NAME . ' kodas' . TEXT_GV_REDEEM . '. Gerai butų atsispausdinti šį laišką dėl saugumo. Jūs dabar galite pasinaudoti ' . TEXT_GV_NAME . ' dviem būdais.<br><br>
  1. Spaudžiant nuorodą gautame e-pašte.  Taip Jūs pateksite tiesiai į parduotuvės ' . TEXT_GV_NAME . ' patvirtinimo puslapį.Jūms reikės prisijungti arba susikūrti sąskaitą , prieš ' . TEXT_GV_NAME . ' bus patvirtintas ir užskaitytas į Jūsų' . TEXT_GV_NAME . ' sąskaitą .<br><br>
  2. Vykdant baigiamąją pirkimo procedūrą, pamatysite aplankalą' . TEXT_GV_REDEEM . '. Įveskite ' . TEXT_GV_REDEEM . ' ir
paspauskite  "Patvirtinti". Šis kodas bus
patvirtintas ir suma užskaityta į ' . TEXT_GV_NAME . ' sąskaitą.Galite naudotis lėšomis pirkimimams ');

  define('SUB_HEADING_TITLE_5','Jei iškylo klausimų.');
  define('SUB_HEADING_TEXT_5','Dėl nesklandamų naudojantis ' . TEXT_GV_NAME . ' prašome kreiptis į mus e-paštu '. STORE_OWNER_EMAIL_ADDRESS . '. Prašome parašyti kiek galime daugiau apie iškilusią problemą. ');

  define('SUB_HEADING_TITLE_0','');
  define('SUB_HEADING_TEXT_0','Prašome išsirinkti Jums rūpimą klausymą.');

  

  define('TEXT_GV_REDEEM_INFO', 'Prašome įvesti ' . TEXT_GV_NAME . ' patvirtinimo kodą: ');
  define('TEXT_GV_REDEEM_ID', 'Patvirtinimo kodas:');