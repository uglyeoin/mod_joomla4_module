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

$name           = $params->get('myName');
$salutation     = $params->get('salutation');
$allOfTheCats   = $params->get('repeatable_fields');

if($salutation == 0)
{
    $salutation = "Mr";
}
else
{
    $salutation = "Mrs";
}

?>

<div class="<?php echo $module->module; ?>">
    <p>Hello <?php echo $salutation . " " . $name; ?></p>
    <p>Look at <?php echo $salutation . " " . $name; ?>'s beautiful cats</p>
    <?php
        foreach($allOfTheCats as $cat)
        {

            echo '<img src="' . $cat->cat_images . '" alt="cats">';
        }
    ?>

</div>
