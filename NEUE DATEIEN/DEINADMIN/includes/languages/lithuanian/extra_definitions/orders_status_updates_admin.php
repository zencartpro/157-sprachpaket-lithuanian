<?php
/**
 * Zen Cart German Specific
 * Constants used by the zen_update_orders_history function.
 * 
 * @copyright Copyright 2003-2024 Zen Cart Development Team
 * Zen Cart German Version - www.zen-cart-pro.at
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * @version $Id: orders_status_updates_admin.php 2024-08-15 08:31:14Z webchills $
 */
define('OSH_EMAIL_SEPARATOR', '------------------------------------------------------');
define('OSH_EMAIL_TEXT_SUBJECT', 'Atnaujinta užsakymo būsena');
define('OSH_EMAIL_TEXT_ORDER_CUSTOMER_GENDER_MALE', 'Gerbiamasis ponas ');
define('OSH_EMAIL_TEXT_ORDER_CUSTOMER_GENDER_FEMALE', 'Gerbiama ponia');
define('OSH_EMAIL_TEXT_ORDER_CUSTOMER_NEUTRAL', 'Sveiki');
define('OSH_EMAIL_TEXT_UPDATEINFO', 'Apie užsakymo būklę jus informuosime adresu ');
define('OSH_EMAIL_TEXT_ORDER_NUMBER', 'Užsakymo numeris:');
define('OSH_EMAIL_TEXT_INVOICE_URL', 'Order details:');
define('OSH_EMAIL_TEXT_DATE_ORDERED', 'Užsakymo data:');
define('OSH_EMAIL_TEXT_COMMENTS_UPDATE', '<em>Comments: </em>');
define('OSH_EMAIL_TEXT_STATUS_UPDATED', 'Jūsų užsakymo būsena atnaujinta.' . "\n");
define('OSH_EMAIL_TEXT_STATUS_NO_CHANGE', 'Jūsų užsakymo būsena nepasikeitė:' . "\n");
define('OSH_EMAIL_TEXT_STATUS_LABEL', '<strong>Dabartinė būklė:</strong> %s' . "\n\n");
define('OSH_EMAIL_TEXT_STATUS_CHANGE', '<strong>Senasis statusas:</strong> %1$s, <strong>Naujas statusas:</strong> %2$s' . "\n\n");
define('OSH_EMAIL_TEXT_STATUS_PLEASE_REPLY', 'Jei turite klausimų, atsakykite į šį el. laišką.' . "\n");