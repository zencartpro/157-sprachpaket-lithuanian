<?php
/**
* Zen Cart German Specific (zencartpro adaptations)
* @copyright Copyright 2003-2024 Zen Cart Development Team
* Zen Cart German Version - www.zen-cart-pro.at
* @copyright Portions Copyright 2003 osCommerce
* @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0 
* @version $Id: ot_coupon.php 2024-08-15 20:57:14Z webchills $
*/

define('MODULE_ORDER_TOTAL_COUPON_TITLE', 'Nuolaidos Kuponas');
define('MODULE_ORDER_TOTAL_COUPON_HEADER', 'Dovanų sertifikatas / nuolaidų kuponas');
define('MODULE_ORDER_TOTAL_COUPON_DESCRIPTION', 'Nuolaidos Kuponas');
define('MODULE_ORDER_TOTAL_COUPON_TEXT_ENTER_CODE', 'Išpirkimo kodas');
define('MODULE_ORDER_TOTAL_COUPON_REDEEM_INSTRUCTIONS', '<p>Įveskite kupono kodą į šalia esantį laukelį Atpirkimo kodas. Jūsų kuponas bus pritaikytas ir atsispindės jūsų krepšelyje po to, kai spustelėsite tęsti.</p><p>Atkreipkite dėmesį: viename užsakyme galite naudoti tik vieną kuponą.</p>');
define('MODULE_ORDER_TOTAL_COUPON_TEXT_CURRENT_CODE', 'Jūsų dabartinis atpirkimo kodas: ');
define('TEXT_COMMAND_TO_DELETE_CURRENT_COUPON_FROM_ORDER', 'REMOVE');
define('TEXT_REMOVE_REDEEM_COUPON', 'Dovanų Kuponas pašalintas!');
define('MODULE_ORDER_TOTAL_COUPON_INCLUDE_ERROR', ' Setting Include tax = true, should only happen when recalculate = None');
define('MODULE_ORDER_TOTAL_COUPON_REMOVE_INSTRUCTIONS', '<p>Norėdami pašalinti nuolaidos kuponą iš šio užsakymo, pakeiskite kupono kodą į: ' . TEXT_COMMAND_TO_DELETE_CURRENT_COUPON_FROM_ORDER . '</p>');