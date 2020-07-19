<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_joomla4_module
 *
 * @copyright   Copyright (C) 2005 - 2019 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

use Joomla\CMS\Helper\ModuleHelper;

require ModuleHelper::getLayoutPath('mod_joomla4_module', $params->get('layout', 'default'));
