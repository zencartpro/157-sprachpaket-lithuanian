<?php
/**
 * Zen Cart German Specific (158 code in 157)
 * @copyright Copyright 2003-2024 Zen Cart Development Team
 * Zen Cart German Version - www.zen-cart-pro.at
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * @version $Id: checkout_payment.php 2024-08-21208:49:16Z webchills $
 */

define('NAVBAR_TITLE_1', 'Sąskaitos išrašymas - Žingsnis 1');
define('NAVBAR_TITLE_2', 'Apmokėjimo būdas - Žingsnis 2');

define('HEADING_TITLE', 'Žingsnis 2 iš 3 - Apmokėjimo informacija');


define('TEXT_SELECTED_BILLING_DESTINATION', 'Jūsų sąskaitos išrašymo adresas rodomas kairėje. Sąskaitos išrašymo adresas turėtų atitikti Jūsų kreditinės kortelės adresą. Jūs galite pakeisti sąskaitos išrašymo adresą paspausdami mygtuką <em>Pakeisti adresą</em>.');
define('TITLE_BILLING_ADDRESS', 'Sąskaitos išrašymo adresas:');


define('TEXT_SELECT_PAYMENT_METHOD', 'Prašome pasirinkti apmokėjimo būdą šiam užsakymui.');
define('TITLE_PLEASE_SELECT', 'Prašome pasirinkti');



define('TEXT_NO_PAYMENT_OPTIONS_AVAILABLE','<span class="alert">Atsiprašome, bet Mes negalime priimti apmokėjimo iš šio regiono.</span><br>Prašome susisiekti su mumis dėl kitokio apmokėjimo būdo.');

define('TITLE_CONTINUE_CHECKOUT_PROCEDURE', '<strong>Tęsti į žingsnį 3</strong>');
define('TEXT_CONTINUE_CHECKOUT_PROCEDURE', '- norint patvirtinti Jūsų užsakymą.');

define('TABLE_HEADING_CONDITIONS', '<span class="termsconditions">Sąlygos ir nuostatos</span>');
define('TEXT_CONDITIONS_DESCRIPTION', '<span class="termsdescription">Prašome sutikti su sąlygomis ir nuostatomis šiam užsakymui pažymint sekantį langelį. Sąlygos ir nuostatos gali būti perskaitytos <a href="' . zen_href_link(FILENAME_CONDITIONS, '', 'SSL') . '"><span class="pseudolink">čia</span></a>.');
define('TEXT_CONDITIONS_CONFIRM', '<span class="termsiagree">Aš perskaičiau ir sutinku su sąlygomis ir nuostatomis šiam užsakymui.</span>');


define('TEXT_YOUR_TOTAL','Jūsų suma:');