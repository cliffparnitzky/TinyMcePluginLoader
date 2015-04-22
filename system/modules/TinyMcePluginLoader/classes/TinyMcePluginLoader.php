<?php

/**
* Contao Open Source CMS
* Copyright (C) 2005-2015 Leo Feyer
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
* @copyright  Cliff Parnitzky 2012-2015
* @author     Cliff Parnitzky
* @package    TinyMcePluginLoader
* @license    LGPL
*/

/**
 * Run in a custom namespace, so the class can be replaced
 */
namespace TinyMcePluginLoader; 

/**
* Class TinyMcePluginLoader
*
* Load additional TinyMCE plugins.
* @copyright  Cliff Parnitzky 2012-2015
* @author     Cliff Parnitzky
*/
class TinyMcePluginLoader extends \System {
	
	private static $TINY_LOADER_REGEX = "/<script>\nwindow.tinymce && tinymce.init\(\{.*\}\);\n<\/script>/Us";
	
	/**
	* Adds the plugins to the config.
	*/
	public function outputTemplate($strContent, $strTemplate) {
		if (count($GLOBALS['TINY_PLUGINS']) > 0 && ($strTemplate == 'be_main' || $strTemplate == 'fe_page')) {
			if (preg_match(static::$TINY_LOADER_REGEX, $strContent, $tinyConfig) > 0) {
				$arrTinyConfig = explode("\n", $tinyConfig[0]);
				
				$arrStartParts = array();
				$arrStartParts[] = $arrTinyConfig[0];
				$arrStartParts[] = $arrTinyConfig[1];
				
				$arrEndParts = array();
				$arrEndParts[] = $arrTinyConfig[count($arrTinyConfig) - 2];
				$arrEndParts[] = $arrTinyConfig[count($arrTinyConfig) - 1];
				
				$arrTinyConfig = $this->getTinyConfigArray($arrTinyConfig, array_merge($arrStartParts, $arrEndParts));
				
				// adding plugins
				$arrTinyConfig = $this->addConfiguration($arrTinyConfig, "plugins", 'TINY_PLUGINS');
				// adding buttons
				$arrTinyConfig = $this->addConfiguration($arrTinyConfig, "toolbar1", 'TINY_BUTTONS_1');
				$arrTinyConfig = $this->addConfiguration($arrTinyConfig, "toolbar2", 'TINY_BUTTONS_2');
				$arrTinyConfig = $this->addConfiguration($arrTinyConfig, "toolbar3", 'TINY_BUTTONS_3');
				
				// HOOK: Let other extensions modify this array
				if (isset($GLOBALS['TL_HOOKS']['editTinyMcePluginLoaderConfig']) && is_array($GLOBALS['TL_HOOKS']['editTinyMcePluginLoaderConfig'])) {
					foreach ($GLOBALS['TL_HOOKS']['editTinyMcePluginLoaderConfig'] as $callback) {
						$this->import($callback[0]);
						$arrTinyConfig = $this->$callback[0]->$callback[1]($arrTinyConfig);
					}
				}
				
				$strContent = preg_replace(static::$TINY_LOADER_REGEX, $this->rebuildTinyConfig($arrStartParts, $arrEndParts, $arrTinyConfig), $strContent);
			}
		}
		return $strContent;
	}
	
	/**
	 * Creates an associated array containing the tiny config
	 */
	private function getTinyConfigArray($arrTinyConfig, $arrExcludedRows) {
		$assocTinyConfig = array();
		
		$lastPart = "";
		foreach ($arrTinyConfig as $row) {
			if (!in_array($row, $arrExcludedRows)) {
				$parts = explode(":", $row, 2);
				
				if (count($parts) == 2 && preg_match('/^[a-zA-Z0-9_-]+$/', trim($parts[0]))) {
					$value = $parts[1];
					$lastPart = trim($parts[0]);
					$assocTinyConfig[$lastPart] = trim($value);
				}
				else {
					if (strlen($lastPart) > 0) {
						$assocTinyConfig[$lastPart] = $assocTinyConfig[$lastPart] . "\n" . $row;
					}
				}
			}
		}
		return $assocTinyConfig;
	}
	
	/**
	 * Rebuild the tiny config to a string
	 */
	private function rebuildTinyConfig ($arrStartParts, $arrEndParts, $arrTinyConfig) {
		$strTinyConfig = "";
		foreach ($arrStartParts as $part) {
			$strTinyConfig .= $part . "\n";
		}
		
		foreach ($arrTinyConfig as $key=>$value) {
			if (strrpos($value, ",") === false) {
				$value .= ",";
			}
			$strTinyConfig .= "  " . $key . ": " . $value . "\n";
		}
		
		foreach ($arrEndParts as $part) {
			$strTinyConfig .= $part . "\n";
		}
		
		return $strTinyConfig;
	}
	
	/**
	 * Adding all additional configurations to the given config.
	 */
	private function addConfiguration($arrTinyConfig, $key, $lookup) {
		$modifiedTinyConfig = $arrTinyConfig;
		
		if ($key == "toolbar1" && strlen($modifiedTinyConfig["toolbar"]) > 0 && strlen($modifiedTinyConfig[$key]) == 0) {
			// replace toolbar key with toolbar1
			$modifiedTinyConfig[$key] = $modifiedTinyConfig["toolbar"];
			unset($modifiedTinyConfig["toolbar"]);
		}
		
		if (count($GLOBALS[$lookup]) > 0) {
			$value = $modifiedTinyConfig[$key];
			$value = substr($value, 1, strlen($value) - 3);
			
			$arrParts = explode(" ", $value);
			
			// adding new configs
			foreach ($GLOBALS[$lookup] as $definition) {
				if (!in_array($definition, $arrParts)) {
					if(strlen($modifiedTinyConfig[$key]) == 0) {
						// removing the separators at the beginning
						$definition = trim($definition);
						if (strpos("|", $definition) == 0) {
							$definition = substr($definition, 1);
							$definition = trim($definition);
						}
					}
					
					$arrParts[] = $definition;
				}
			}
			
			// add new value into config array
			$modifiedTinyConfig[$key] = "\"" . implode(" ", $arrParts) . "\",";
		}

		return $modifiedTinyConfig;
	}
}

?>