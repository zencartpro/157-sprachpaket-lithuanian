<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2024 Zen Cart Development Team
 * Zen Cart German Version - www.zen-cart-pro.at
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * @version $Id: rl.vat_info.php 2024-08-15 17:45:57Z webchills $
 */
 
define('VAT_SHOW_TEXT_VERSANDKOSTENFREI','<br><span class="taxAddon">su %s PVM</span>');

if(DISPLAY_PRICE_WITH_TAX=='true')
define('VAT_SHOW_TEXT','<br><span class="taxAddon">su %s PVM<br> plus <a href="' . zen_href_link(FILENAME_SHIPPING) . '">Pristatymo išlaidos</a></span>');
else
define('VAT_SHOW_TEXT','<br><span class="taxAddon">plus %s PVM<br> plius <a href="' . zen_href_link(FILENAME_SHIPPING) . '">Pristatymo išlaidos</a></span>');