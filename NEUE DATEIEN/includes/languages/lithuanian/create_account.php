<?php
/**
 * Zen Cart German Specific (158 code in 157)
 * @copyright Copyright 2003-2024 Zen Cart Development Team
 * Zen Cart German Version - www.zen-cart-pro.at
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * @version $Id: create_account.php 2023-10-29 20:50:16Z webchills $
 */

define('NAVBAR_TITLE', 'Sukurti sąskaitą');

define('HEADING_TITLE', 'Mano sąskaitos informacija');

define('TEXT_ORIGIN_LOGIN', '<strong class="note">DĖMESIO:</strong> Jei Jūs jau turite sąskaitą pas Mus, prašome <a href="%s">prisijungti</a>.');

define('ERROR_CREATE_ACCOUNT_SPAM_DETECTED', 'Thank you, your account request has been submitted for review.');
define('EMAIL_SUBJECT', 'Sveiki atvykę į parduotuvę' . STORE_NAME);
define('EMAIL_GREET_MR', 'Gerb. %s,' . "\n\n");
define('EMAIL_GREET_MS', 'Gerb. %s,' . "\n\n");
define('EMAIL_GREET_NONE', 'Gerb. %s' . "\n\n");


define('EMAIL_WELCOME', 'Sveiki atvykę į parduotuvę <strong>' . STORE_NAME . '</strong>.');
define('EMAIL_SEPARATOR', '--------------------');
define('EMAIL_COUPON_INCENTIVE_HEADER', 'Sveikiname! Norint padaryti Jūsų sekančius vizitus Mūsų parduotuvėje kuo naudingesnius, žemiau yra informacija apie nuolaidų kuponus, kurie buvo sukurti būtent Jums!' . "\n\n");

define('EMAIL_COUPON_REDEEM', 'Norint pasinaudoti  ' . TEXT_GV_REDEEM . ' ,įveskite kodą pirkimo patvirtinimo metu:  <strong>%s</strong>' . "\n\n");

define('EMAIL_GV_INCENTIVE_HEADER', 'Dėkodami už  šios dienos pirkinius mes siunčiame Jums ' . TEXT_GV_NAME . ' vertą %s!' . "\n");
define('EMAIL_GV_REDEEM', 'The ' . TEXT_GV_NAME . ' ' . TEXT_GV_REDEEM . ' yra: %s ' . "\n\n" . 'Jūs galite įvesti kodą pirkimo  ' . TEXT_GV_REDEEM . ' patvirtinimo metu, . ');
define('EMAIL_GV_LINK', ' arba galite pasinaudoti juo spausdami ant nuorodos: ' . "\n");


define('EMAIL_GV_LINK_OTHER','Jūs jau turite ' . TEXT_GV_NAME . ' savo sąskaitoje, tad galite panaudoti ' . TEXT_GV_NAME . ' sau , arba nusiųsti darugui(ei)!' . "\n\n");

define('EMAIL_TEXT', 'Turėdami sąskaitą, Jūs galite gauti įvairias Mūsų siūlomas <strong>paslaugas</strong>. Štai keletas iš jų:' . "\n\n" . '<li><strong>Pirkimas</strong> - Galėsite pirkti internetu .Prekes mes pristatysime paštu.'. "\n\n" . '<li><strong>Naujienlaiškis</strong> - Gausite straipsnius su informacija apie peilius, peilių galandinimą,  geležtėms naudojamų plienų  savybes.' . "\n\n" . '<li><strong>Adresų knygelė</strong> - Galime pristatyti prekes bet kokiu Jūsų nurodytu adresu! Tai puiki proga nusiųsti gimtadienio dovanas tiesiai patiems laimingiesiems.' . "\n\n" . '<li><strong>Naujienos</strong> - naujos, katik gautos prekės.' . "\n\n" . '<li><strong>Prekių apžvalgos</strong> - Pasidalinkite savo nuomone apie prekes su kitais pirkėjais.' . "\n\n". '<li><strong>Dėmesio!!!</strong> - Jūsų registraciją dar turi patikrinti administratorius. Kol nebus patvirtinimo , negalėsite atlikti pirkimo veiksmų. Tai gali užtrukti iki 24 val.Šis procesas reikalingas , nes peiliams taikomi pardavimo apribojimai- tik nuo 18 m .');
define('EMAIL_CONTACT', 'Norint gauti pagalbą, prašome rašyti parduotuvės savininkui: <a href="mailto:' . STORE_OWNER_EMAIL_ADDRESS . '">'. STORE_OWNER_EMAIL_ADDRESS ." </a>\n\n");
define('EMAIL_GV_CLOSURE','Pagarbiai,' . "\n\n" . STORE_OWNER . "\nParduotuvės savininkas\n\n". '<a href="' . HTTP_SERVER . DIR_WS_CATALOG . '">'.HTTP_SERVER . DIR_WS_CATALOG ."</a>\n\n");


define('EMAIL_DISCLAIMER_NEW_CUSTOMER', 'Šis el. pašto adresas buvo gautas iš Jūsų arba vieno iš Mūsų klientų. Jei Jūs nebandėti susikurti sąskaitos arba manote, kad gavote šį laišką per klaidą, prašome siųsti laišką adresu %s ');