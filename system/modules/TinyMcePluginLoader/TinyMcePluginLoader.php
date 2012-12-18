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
	
	private static $TINY_LOADER_REGEX = "/tinyMCE.init\(.*\);/s";
	
	private static $REGEX_PLUGIN_CONFIG = "/plugins\s*:\s*\"([0-9a-zA-Z]*,?)*\",\n/Us";
	
	private static $REGEX_BUTTONS_1_CONFIG = "/theme_advanced_buttons1\s*:\s*\"[0-9a-zA-Z,]*\",\n/Us";
	private static $REGEX_BUTTONS_2_CONFIG = "/theme_advanced_buttons2\s*:\s*\"[0-9a-zA-Z,]*\",\n/Us";
	private static $REGEX_BUTTONS_3_CONFIG = "/theme_advanced_buttons3\s*:\s*\"[0-9a-zA-Z,]*\",\n/Us";
	
	/**
	* Adds the plugins to the config.
	*/
	public function outputTemplate($strContent, $strTemplate) {
		if (count($GLOBALS['TINY_PLUGINS']) > 0 && ($strTemplate == 'be_main' || $strTemplate == 'fe_page')) {
			if (preg_match(self::$TINY_LOADER_REGEX, $strContent, $tinyConfig) > 0) {
				$strToReplace = $tinyConfig[0];
				// adding plugin
				$strToReplace = $this->addConfiguration($strToReplace, self::$REGEX_PLUGIN_CONFIG, 'TINY_PLUGINS');
				// adding buttons
				$strToReplace = $this->addConfiguration($strToReplace, self::$REGEX_BUTTONS_1_CONFIG, 'TINY_BUTTONS_1');
				$strToReplace = $this->addConfiguration($strToReplace, self::$REGEX_BUTTONS_2_CONFIG, 'TINY_BUTTONS_2');
				$strToReplace = $this->addConfiguration($strToReplace, self::$REGEX_BUTTONS_3_CONFIG, 'TINY_BUTTONS_3');
				
				$strContent = preg_replace(self::$TINY_LOADER_REGEX, $strToReplace, $strContent);
			}
		}
		return $strContent;
	}
	
	/**
	 * Adding all additional buttons in row 1 to the given config.
	 */
	private function addConfiguration($strToReplace, $regex, $lookup) {
		if (preg_match($regex, $strToReplace, $config) !== FALSE && count($GLOBALS[$lookup]) > 0) {
			$strConfig = substr($config[0], 0, strlen($config[0]) - 3);
			foreach ($GLOBALS[$lookup] as $definition) {
				$strConfig .= "," . $definition;
			}
			$strConfig .= "\",\n";
			return preg_replace($regex, $strConfig, $strToReplace);
		}
		return $strToReplace;
	}
}

?>