<?php
/**
 * Zen Cart German Specific (158 code in 157 /zencartpro adaptations)
 * @copyright Copyright 2003-2024 Zen Cart Development Team
 * Zen Cart German Version - www.zen-cart-pro.at
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * @version $Id: checkout_confirmation.php 2024-08-15 15:02:16Z webchills $
 */

define('NAVBAR_TITLE_1', 'Sąskaitos išrašymas');
define('NAVBAR_TITLE_2', 'Patvirtinimas');

define('HEADING_TITLE', 'Žingsnis 3 iš 3 - Užsakymo patvirtinimas');
define('TEXT_ZUSATZ_SCHRITT3','Patikrinkite savo užsakymą ir patvirtinkite paspausdami mygtuką „Patvirtinti pirkimą“, esantį šio puslapio apačioje.');
define('BRAINTREE_MESSAGE_PLEASE_CONFIRM_ORDER', '<b>Jūsų kredito kortelė buvo sėkmingai patikrinta, tačiau mokėjimas dar neatliktas. Patvirtinkite savo užsakymą toliau nurodytu mygtuku. Tik tada mokėjimas ir užsakymas bus įvykdytas.</b>');


define('HEADING_PRODUCTS', 'Krepšelyje esančios prekės');

define('NO_COMMENTS_TEXT', 'Komentarų nėra');
define('TITLE_CONTINUE_CHECKOUT_PROCEDURE', '<strong>Paskutinis žingsnis</strong>');
define('TEXT_CONTINUE_CHECKOUT_PROCEDURE', '- tęskite norėdami patvirtinti savo užsakymą. Dėkojame!');

// buttonloesung
define('TABLE_HEADING_SINGLEPRICE','Price');
define('TABLE_HEADING_PRODUCTIMAGE','Image');
define('TEXT_CONDITIONS_ACCEPTED_IN_LAST_STEP','Aš perskaičiau ir sutikau su <a href="' . zen_href_link(FILENAME_CONDITIONS, '', 'SSL') . '" target="_blank"><u>terminai ir sąlygos</u></a>.');
define('TEXT_NON_EU_COUNTRIES','Pastaba:<br>Jūsų užsakymas bus išsiųstas į ne Europos Sąjungos šalį. Jūsų siuntoms gali būti taikomi šalies, į kurią siunčiamas užsakymas, muitinės mokesčiai ir importo muitai. Už šiuos mokesčius visada atsako gavėjas.');
