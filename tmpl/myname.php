<?php
/**
 * @package    [PACKAGE_NAME]
 *
 * @author     [AUTHOR] <[AUTHOR_EMAIL]>
 * @copyright  [COPYRIGHT]
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 * @link       [AUTHOR_URL]
 */

// No direct access to this file
defined('_JEXEC') or die;

$name       = $params->get('myName');
$salutation = $params->get('salutation');
?>

<div class="<?php echo $module->module; ?>">
    Hello <?php echo $salutation . " " . $name; ?>
</div>
