<?php
/**
 * Zen Cart German Specific (158 code in 157)
 * @copyright Copyright 2003-2024 Zen Cart Development Team
 * Zen Cart German Version - www.zen-cart-pro.at
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * @version $Id: gv_send.php 2023-10-29 09:49:16Z webchills $
 */

define('HEADING_TITLE', 'Siųsti ' . TEXT_GV_NAME);
define('HEADING_TITLE_CONFIRM_SEND', 'Siųsti ' . TEXT_GV_NAME . ' Patvirtinimas');
define('HEADING_TITLE_COMPLETED', TEXT_GV_NAME . ' Išsiųstas');
define('NAVBAR_TITLE', 'Sųsti ' . TEXT_GV_NAME);
define('EMAIL_SUBJECT', 'Žinutė nuo ' . STORE_NAME);
define('HEADING_TEXT','Prašome įvesti vardą, e-pašto adresą ir sumą ' . TEXT_GV_NAME . ' kurą norie nusiųsti. Daugiau info: <a href="' . zen_href_link(FILENAME_GV_FAQ, '', 'NONSSL').'">' . GV_FAQ . '.</a>');
define('ENTRY_NAME', 'Gavėjo vardas:');

define('ENTRY_AMOUNT', 'Siunčiama suma:');
define('ERROR_ENTRY_TO_NAME_CHECK', 'Neįvedėte Gavėjo vardo. ');
define('ERROR_ENTRY_AMOUNT_CHECK', 'Šio ' . TEXT_GV_NAME . ' suma neteisinga.Prašome patikrinti.');
define('ERROR_ENTRY_EMAIL_ADDRESS_CHECK', 'Ar šis e-paštas teisingas? Prašome patikrinti.');
define('MAIN_MESSAGE', 'Jūs siunčiate ' . TEXT_GV_NAME . ' vertą %s gavėjui %s,  kurio e-paštas yra%s. Jei šie duomenys neteisingi, ištaisymui spauskite <strong>Taisyti</strong> ..<br><br>Žinutė kurią siunčiate yra:<br><br>');
define('SECONDARY_MESSAGE', 'Gerb. %s,<br><br>' . 'Jums siunčiamas ' . TEXT_GV_NAME . ' vertas %s nuo %s');
define('PERSONAL_MESSAGE', '%s rašo:');
define('TEXT_SUCCESS', 'Sveikiname, Jūsų ' . TEXT_GV_NAME . ' išsiustas.');
define('TEXT_SEND_ANOTHER', 'Ar norite siųsti kitą ' . TEXT_GV_NAME . '?');


define('EMAIL_GV_TEXT_SUBJECT', 'Dovana nuo %s');
define('EMAIL_SEPARATOR', '----------------------------------------------------------------------------------------');
define('EMAIL_GV_TEXT_HEADER', 'Sveikiname, Jūs gavote ' . TEXT_GV_NAME . ' vertą %s');
define('EMAIL_GV_FROM', 'Šis ' . TEXT_GV_NAME . ' atsiųstas jums nuo %s');
define('EMAIL_GV_MESSAGE', 'su žinute: ');
define('EMAIL_GV_SEND_TO', 'Labas, %s');
define('EMAIL_GV_REDEEM', 'Kad panaudoti ' . TEXT_GV_NAME . ', prašome spausti nuorodą . Prašome užsirašyti šį kodą ' . TEXT_GV_REDEEM . ': %s  jei iškiltų nesklandumų.');
define('EMAIL_GV_LINK', 'Kad panaudoti kodą įveskite');

define('EMAIL_GV_FIXED_FOOTER', 'Jei iškilo klausimų  , paskaitykite' . TEXT_GV_NAME . ' pasinaudodami nuoroda, ' . "\n" .
                                'Jūs galie įvesti kodą ' . TEXT_GV_NAME . ' ' . TEXT_GV_REDEEM . ' apsipirkimo metu.');
define('EMAIL_GV_SHOP_FOOTER', '');