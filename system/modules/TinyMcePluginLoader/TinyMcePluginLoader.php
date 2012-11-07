<?php if (!defined('TL_ROOT')) die('You cannot access this file directly!');

/**
* Contao Open Source CMS
* Copyright (C) 2005-2012 Leo Feyer
*
* Formerly known as TYPOlight Open Source CMS.
*
* This program is free software: you can redistribute it and/or
* modify it under the terms of the GNU Lesser General Public
* License as published by the Free Software Foundation, either
* version 3 of the License, or (at your option) any later version.
*
* This program is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
* Lesser General Public License for more details.
*
* You should have received a copy of the GNU Lesser General Public
* License along with this program. If not, please visit the Free
* Software Foundation website at <http://www.gnu.org/licenses/>.
*
* PHP version 5
* @copyright  Cliff Parnitzky 2012
* @author     Cliff Parnitzky
* @package    TinyMcePluginLoader
* @license    LGPL
*/

/**
* Class TinyMcePluginLoader
*
* Load additional TinyMCE plugins.
* @copyright  Cliff Parnitzky 2012
* @author     Cliff Parnitzky
*/
class TinyMcePluginLoader {
	
	private static $REGEX_PLUGIN_CONFIG = "/plugins\s*:\s*\"([A-Za-z0-9]*,?)*\",\n/Us";
	
	/**
	* Adds the plugins to the config.
	*/
	public function outputTemplate($strContent, $strTemplate) {
		if (count($GLOBALS['TINY_PLUGINS']) > 0 && ($strTemplate == 'be_main' || $strTemplate == 'fe_page')) {
			foreach ($GLOBALS['TINY_LOADER_REGEX'] as $regex) {
				if (preg_match($regex, $strContent, $tinyConfig) > 0) {
					$strContent = preg_replace($regex, $this->addPlugins($tinyConfig[0]), $strContent);
				}
			}
		}
		return $strContent;
	}
	
	/**
	 * Adding all additional plugins to the given config.
	 */
	private function addPlugins($tinyConfig) {
		if (preg_match(self::$REGEX_PLUGIN_CONFIG, $tinyConfig, $pluginConfig) > 0) {
			$strPluginConfig = substr($pluginConfig[0], 0, strlen($pluginConfig[0]) - 3);
			foreach ($GLOBALS['TINY_PLUGINS'] as $plugin) {
				$strPluginConfig .= ", " . $plugin;
			}
			$strPluginConfig .= "\",\n";
			return preg_replace(self::$REGEX_PLUGIN_CONFIG, $strPluginConfig, $tinyConfig);
		}
		return $tinyConfig;
	}
}

?>