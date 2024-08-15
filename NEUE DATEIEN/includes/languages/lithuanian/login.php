<?php
/**
 * Zen Cart German Specific (158 code in 157) 
 * @copyright Copyright 2003-2024 Zen Cart Development Team
 * Zen Cart German Version - www.zen-cart-pro.at
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * @version $Id: login.php 2024-08-15 17:49:16Z webchills $
 */

define('NAVBAR_TITLE', 'Prisijungti');
define('HEADING_TITLE', 'Sveiki atvykę, Prašome prisijungti');

define('HEADING_NEW_CUSTOMER', 'Esate naujas vartotojas? Prašome pateikti sąskaitos informaciją');
define('HEADING_NEW_CUSTOMER_SPLIT', 'Nauji klientai');

define('TEXT_NEW_CUSTOMER_INTRODUCTION', 'Susikurkite sąskaitą <strong>' . STORE_NAME . '</strong> sistemoje. Tai leis Jums greičiau apsipirkti, stebėti prekių užsakymo būseną, peržiūrėti ankstesnius užsakymus ir pasinaudoti kitais tik nariams teikiamais privalumais.');
define('TEXT_NEW_CUSTOMER_INTRODUCTION_SPLIT', 'Ar turite PayPal sąskaitą? Norite greitai sumokėti kreditine kortele? Naudokite PayPal mygtuką norint pasinaudoti Express Checkout paslauga.');
define('TEXT_NEW_CUSTOMER_POST_INTRODUCTION_DIVIDER', '<span class="larger">arba</span><br>');
define('TEXT_NEW_CUSTOMER_POST_INTRODUCTION_SPLIT', 'Sukurkite sąskaitą <strong>' . STORE_NAME . '</strong> sistemoje. Tai leis Jums greičiau apsipirkti, stebėti prekių užsakymo būseną, peržiūrėti ankstesnius užsakymus ir pasinaudoti kitais tik nariams teikiamais privalumais.');

define('HEADING_RETURNING_CUSTOMER', 'Sveiki: Prašome prisijungti');
define('HEADING_RETURNING_CUSTOMER_SPLIT', 'Esamiems klientams');

define('TEXT_RETURNING_CUSTOMER_SPLIT', 'Norint tęsti, prašome prisijungti prie <strong>' . STORE_NAME . '</strong> sąskaitos.');

define('TEXT_LOGIN_ERROR', 'KLAIDA: Atsiprašome, bet toks el. pašto adresas ir/ar slaptažodis nerastas.');
define('TEXT_VISITORS_CART', '<strong>Dėmesio:</strong> Jūsų &quot;lankytojo krepšelio&quot; prekės bus sujungtos su &quot;kliento krepšelio&quot; prekėmis kai tik prisijungsite. <a href="javascript:session_win();">[Daugiau informacijos]</a>');

define('TABLE_HEADING_PRIVACY_CONDITIONS', '<span class="privacyconditions">Privatumo politika</span>');
define('TEXT_PRIVACY_CONDITIONS_DESCRIPTION', '<span class="privacydescription">Prašome pažymėti, kad sutinkate su Mūsų privatumo politika pažymint žemiau esantį langelį. Privatumo politika gali būti perskaityta </span> <a href="' . zen_href_link(FILENAME_PRIVACY, '', 'SSL') . '"><span class="pseudolink">čia</span></a>.');
define('TEXT_PRIVACY_CONDITIONS_CONFIRM', '<span class="privacyagree">Perskaičiau ir sutinku su Jūsų privatumo politika.</span>');

define('ERROR_SECURITY_ERROR', 'There was a security error when trying to login.');

define('TEXT_LOGIN_BANNED', 'Klaida: Prieiga uždrausta.');
define('HEADING_PAYPAL_CUSTOMER_SPLIT', 'Prisijunkite ir mokėkite per PayPal');
define('TEXT_PAYPAL_CUSTOMER_SPLIT', 'Express Checkout su PayPal: Kai prisijungiate prie PayPal naudodami PayPal Express mygtuką, jūsų PayPal kontaktiniai duomenys naudojami kliento paskyrai mūsų internetinėje parduotuvėje. Jums nereikia įvesti savo duomenų ir mokėti per PayPal.');