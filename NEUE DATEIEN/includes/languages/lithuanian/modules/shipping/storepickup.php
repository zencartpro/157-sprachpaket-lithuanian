<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2024 Zen Cart Development Team
 * Zen Cart German Version - www.zen-cart-pro.at
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * @version $Id: storepickup.php 2024-08-15 17:08:57Z webchills $
 */

define('MODULE_SHIPPING_STOREPICKUP_TEXT_TITLE', 'Savarankiškas surinkimas');
define('MODULE_SHIPPING_STOREPICKUP_TEXT_DESCRIPTION', 'Savarankiškas surinkimas');
define('MODULE_SHIPPING_STOREPICKUP_TEXT_WAY', 'Kolekcija');

// The following is for defining multiple locations/methods on a per-language basis. It is only used if the shopper has selected a language other than the store's default.
// The content of the MODULE_SHIPPING_STOREPICKUP_MULTIPLE_WAYS definition should be the same as the multiple locations in the shipping module's settings in your admin, just with names changed.
// Typical formats are:
// "Location One, 5.00; Location Two, 3.50; Location Three, 0.00"
// "Location One, Location Two, Location Three"
// or leave it blank to simply use the same text as defined in the Admin, regardless of language
// TIP: This should really be left blank for the default language, otherwise the Admin settings field is never used.
define('MODULE_SHIPPING_STOREPICKUP_MULTIPLE_WAYS', '');
