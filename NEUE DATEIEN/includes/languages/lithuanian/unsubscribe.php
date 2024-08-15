<?php
/**
 
 * @copyright Copyright 2003-2024 Zen Cart Development Team
 * Zen Cart German Version - www.zen-cart-pro.at
 * @copyright Portions Copyright 2003 osCommerce
 * @copyright Originally Programmed By: Christopher Bradley (www.wizardsandwars.com) for OsCommerce
 * @copyright Modified by Jim Keebaugh for OsCommerce
 * @copyright Adapted for Zen Cart
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * @version $Id: unsubscribe.php 2020-02-29 20:49:16Z webchills $
 */

define('NAVBAR_TITLE', 'Atsisakyti');
define('HEADING_TITLE', 'Atsisakyti Mūsų naujienlaiškio');

define('UNSUBSCRIBE_TEXT_INFORMATION', '<br>Mes apgailestaujame, kad Jūs norite atsisakyti Mūsų naujienlaiškio. Jei Jus domina Jūsų privatumas, prašome žiūrėti čia <a href="' . zen_href_link(FILENAME_PRIVACY,'','NONSSL') . '"><span class="pseudolink">privatumo žinutė</span></a>.<br><br>Užsisakę Mūsų naujienlaiškį gausite informaciją apie naujus produktus, nuolaidas bei svetainės naujienas.<br><br>Jei vis dėl to nusprendėte atsisakyti naujienlaiškio, prašome spausti žemiau esantį mygtuką. ');
define('UNSUBSCRIBE_TEXT_NO_ADDRESS_GIVEN', '<br>Mes apgailestaujame, kad Jūs norite atsisakyti Mūsų naujienlaiškio. Jei Jus domina Jūsų privatumas, prašome žiūrėti čia <a href="' . zen_href_link(FILENAME_PRIVACY,'','NONSSL') . '"><span class="pseudolink">privatumo žinutė</span></a>.<br><br>Užsisakę Mūsų naujienlaiškį gausite informaciją apie naujus produktus, nuolaidas bei svetainės naujienas.<br><br>Jei vis dėl to nusprendėte atsisakyti naujienlaiškio, prašome spausti žemiau esantį mygtuką. Jums bus parodyti Jūsų duomenys, kur galėsite pakeisti savo užsakymus. Pirmiausia gali tekti prisijungti.');
define('UNSUBSCRIBE_DONE_TEXT_INFORMATION', '<br>Jūsų elektrinio pašto adresas, rodomas žemiau, buvo pašalintas iš Mūsų užsakymū sąrašo, kaip Jūs ir norėjote. <br><br>');
define('UNSUBSCRIBE_ERROR_INFORMATION', '<br>Toks elektroninio pašto adresas nebuvo rastas naujienlaiškių užsakymų sąrašę, arba šis adresas jau buvo pašalintas iš sąrašo. <br><br>');