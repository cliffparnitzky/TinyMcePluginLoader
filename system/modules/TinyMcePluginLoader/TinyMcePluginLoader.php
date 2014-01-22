<?php if (!defined('TL_ROOT')) die('You cannot access this file directly!');

/**
* Contao Open Source CMS
* Copyright (C) 2005-2014 Leo Feyer
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
* @copyright  Cliff Parnitzky 2012-2014
* @author     Cliff Parnitzky
* @package    TinyMcePluginLoader
* @license    LGPL
*/

/**
* Class TinyMcePluginLoader
*
* Load additional TinyMCE plugins.
* @copyright  Cliff Parnitzky 2012-2014
* @author     Cliff Parnitzky
*/
class TinyMcePluginLoader extends System {
	
	private static $TINY_LOADER_REGEX = "/tinyMCE.init\(.*\);/Us";
	
	/**
	* Adds the plugins to the config.
	*/
	public function outputTemplate($strContent, $strTemplate) {
		if (count($GLOBALS['TINY_PLUGINS']) > 0 && ($strTemplate == 'be_main' || $strTemplate == 'fe_page')) {
			if (preg_match(self::$TINY_LOADER_REGEX, $strContent, $tinyConfig) > 0) {
				$arrTinyConfig = explode("\n", $tinyConfig[0]);
				
				$startPart = $arrTinyConfig[0];
				$endPart = $arrTinyConfig[count($arrTinyConfig) - 1];
				$arrTinyConfig = $this->getTinyConfigArray($arrTinyConfig);
				
				// adding plugins
				$arrTinyConfig = $this->addConfiguration($arrTinyConfig, "plugins", 'TINY_PLUGINS');
				// adding buttons
				$arrTinyConfig = $this->addConfiguration($arrTinyConfig, "theme_advanced_buttons1", 'TINY_BUTTONS_1');
				$arrTinyConfig = $this->addConfiguration($arrTinyConfig, "theme_advanced_buttons2", 'TINY_BUTTONS_2');
				$arrTinyConfig = $this->addConfiguration($arrTinyConfig, "theme_advanced_buttons3", 'TINY_BUTTONS_3');
				
				// HOOK: Let other extensions modify this array
				if (isset($GLOBALS['TL_HOOKS']['editTinyMcePluginLoaderConfig']) && is_array($GLOBALS['TL_HOOKS']['editTinyMcePluginLoaderConfig'])) {
					foreach ($GLOBALS['TL_HOOKS']['editTinyMcePluginLoaderConfig'] as $callback) {
						$this->import($callback[0]);
						$arrTinyConfig = $this->$callback[0]->$callback[1]($arrTinyConfig);
					}
				}
				
				$strContent = preg_replace(self::$TINY_LOADER_REGEX, $this->rebuildTinyConfig($startPart, $endPart, $arrTinyConfig), $strContent);
			}
		}
		return $strContent;
	}
	
	/**
	 * Creates an associated array containing the tiny config
	 */
	private function getTinyConfigArray($arrTinyConfig) {
		$assocTinyConfig = array();
		
		for ($i = 1; $i < (count($arrTinyConfig) - 1); $i++) {
			$parts = preg_split("/\s*:\s*/Us", $arrTinyConfig[$i]);
			
			if (count ($parts) == 2) {
				$value = $parts[1];
				if (strrpos($parts[1], ",") == (strlen($parts[1]) - 1)) {
					$value = substr($parts[1], 0, strlen($parts[1]) - 1);
				}
				
				$assocTinyConfig[trim($parts[0])] = trim($value);
			}
		}
		
		return $assocTinyConfig;
	}
	
	/**
	 * Rebuild the tiny config to a string
	 */
	private function rebuildTinyConfig ($startPart, $endPart, $arrTinyConfig) {
		$strTinyConfig = $startPart . "\n";
		foreach ($arrTinyConfig as $key=>$value) {
			$strTinyConfig .= "  " . $key . " : " . $value . ",\n";
		}
		$strTinyConfig = substr($strTinyConfig, 0, strlen($parts[1]) - 2);
		$strTinyConfig .= "\n" . $endPart;
		return $strTinyConfig;
	}
	
	/**
	 * Adding all additional configurations to the given config.
	 */
	private function addConfiguration($arrTinyConfig, $key, $lookup) {
		$modifiedTinyConfig = $arrTinyConfig;
		
		if ($modifiedTinyConfig[$key] && count($GLOBALS[$lookup]) > 0) {
			$value = $modifiedTinyConfig[$key];
			$endPart = "";
			
			// remove double quote at end
			if (strrpos($value, "\"") == (strlen($value) - 1)) {
				$value = substr($value, 0, strlen($value) - 1);
				$endPart = "\"";
			}
			
			// adding new configs
			foreach ($GLOBALS[$lookup] as $definition) {
				if (strpos($value, $definition) === false) {
					$value .= ",";
					$value .= $definition;
				}
			}
			
			// append double quote
			$value .= $endPart;
			
			// add ne value into config array
			$modifiedTinyConfig[$key] = $value;
		}

		return $modifiedTinyConfig;
	}
}

?>