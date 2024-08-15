<?php
/**
 * Zen Cart German Specific (zencartpro adaptations)
 * @copyright Copyright 2003-2024 Zen Cart Development Team
 * Zen Cart German Version - www.zen-cart-pro.at
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * @version $Id: ot_gv.php 2023-10-29 20:49:16Z webchills $
 */

  define('MODULE_ORDER_TOTAL_GV_TITLE', TEXT_GV_NAMES);
  define('MODULE_ORDER_TOTAL_GV_HEADER', TEXT_GV_NAMES . '/Nuolaidų Kuponai');
  define('MODULE_ORDER_TOTAL_GV_DESCRIPTION', TEXT_GV_NAMES);
  define('MODULE_ORDER_TOTAL_GV_USER_PROMPT', 'Apply Amount: ');
  define('MODULE_ORDER_TOTAL_GV_TEXT_ENTER_CODE', TEXT_GV_REDEEM);
  define('TEXT_INVALID_REDEEM_AMOUNT', 'Panašu,kad suma kurią įvedėte yra didesne nei likutis.');
  define('MODULE_ORDER_TOTAL_GV_USER_BALANCE', 'Likutis: ');
  define('MODULE_ORDER_TOTAL_GV_REDEEM_INSTRUCTIONS', '<p>Norint pasinaudoti "Dovanu Kuponas", įveskite sumą kurią norite išnaudoti į laukelį\'Įvesti sumą\'. Jums reikės pasirinkt apmokėjimo metodą, ir po to DK lėšos bus įtrauktos i Jūsų krepšelio sąskaitą .</p><p>Jei Jūs norite panaudoti naują<em></em> Dovanu Kuponą , Jūs turite įvesti kodą į laukelį "Doavanų Kupono kodas". Lėšos bus įtrauktos į sąskaitą kai paspausite "Tęsti".</p>');
  define('MODULE_ORDER_TOTAL_GV_INCLUDE_ERROR', ' Setting Include tax = true, should only happen when recalculate = None');