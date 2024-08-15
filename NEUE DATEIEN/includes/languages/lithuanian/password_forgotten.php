<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2024 Zen Cart Development Team
 * Zen Cart German Version - www.zen-cart-pro.at
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * @version $Id: password_forgotten.php 2018-04-01 10:49:16Z webchills $
 */

define('NAVBAR_TITLE_1', 'Prisijungti');
define('NAVBAR_TITLE_2', 'Pamiršote slaptažodį');

define('HEADING_TITLE', 'Pamiršote slaptažodį');

define('TEXT_MAIN', 'Įveskite žemiau savo el. pašto adresą ir Mes Jums išsiųsime laišką el. paštu su nauju slaptažodžiu.');



define('EMAIL_PASSWORD_REMINDER_SUBJECT', STORE_NAME . ' - Naujas slaptažodis');
define('EMAIL_PASSWORD_REMINDER_BODY', 'Buvo pareikalautas naujas slaptažodis iš ' . $_SERVER['REMOTE_ADDR']  . '.' . "\n\n" . 'Jūsų naujas slaptažodis \'' . STORE_NAME . '\' yra:' . "\n\n" . '   %s' . "\n\nPo to kai prisijungsite panaudoję naują slaptažodį, Jūs jį galite pakeisti nueidami į skyrelį 'Mano sąskaita'.");

define('SUCCESS_PASSWORD_SENT', 'Naujas slaptažodis buvo išsiųstas Jūsų nurodytu el. pašto adresu.');