<?php
/**
 * Zen Cart German Specific (158 code in 157)
 * @copyright Copyright 2003-2024 Zen Cart Development Team
 * Zen Cart German Version - www.zen-cart-pro.at
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * @version $Id: time_out.php 2023-10-29 07:49:16Z webchills $
 */

define('NAVBAR_TITLE', 'Jūsų sesija baigėsi');
define('HEADING_TITLE', 'Ehemm! Jūsų sesija baigėsi.');
define('HEADING_TITLE_LOGGED_IN', 'Ehemm! Atsiprašome, bet Jums neleidžiama atlikti šio veiksmo. ');
define('TEXT_INFORMATION', '<p>Jei Jūs norėjote padaryti užsakymą, prašome prisijungti ir Jūsų krepšelis bus atstatytas. Jūs tada glite grįžti prie sąskaitos išrašymo ir užbaigti apsipirkimą.</p><p>Jei Jūs baigėti apsipirkimą ir norite pažiūrėti savo užsakymą' . (DOWNLOAD_ENABLED == 'true' ? ', arba jau siuntėte bylą ir norite pratęsti' : '') . ', prašome eiti į <a href="' . zen_href_link(FILENAME_ACCOUNT, '', 'SSL') . '">Mano sąskaitos</a> puslapį, kad pamatyti savo užsakymą.</p>');

define('TEXT_INFORMATION_LOGGED_IN', 'Jūs vis dar esate prisijungės ir galite tęsti apsipirkimą. Prašome pasirinkti ką pirksite iš menu.');

define('HEADING_RETURNING_CUSTOMER', 'Prisijungti');