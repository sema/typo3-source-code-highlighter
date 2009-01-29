<?php
/***************************************************************
*  Copyright notice
*
*  (c) 2008 Rob Vonk <typo3 at robvonk.com>
*  All rights reserved
*
*  This script is part of the TYPO3 project. The TYPO3 project is
*  free software; you can redistribute it and/or modify
*  it under the terms of the GNU General Public License as published by
*  the Free Software Foundation; either version 2 of the License, or
*  (at your option) any later version.
*
*  The GNU General Public License can be found at
*  http://www.gnu.org/copyleft/gpl.html.
*
*  This script is distributed in the hope that it will be useful,
*  but WITHOUT ANY WARRANTY; without even the implied warranty of
*  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
*  GNU General Public License for more details.
*
*  This copyright notice MUST APPEAR in all copies of the script!
***************************************************************/

class tx_sema_sourcecode_addFieldsToFlexForm {
	function addFields($config) {
		$languagesPath = t3lib_extMgm::extPath('geshilib').'res/geshi';

		$dirHandle = opendir($languagesPath) 
		                    or die("ERROR: Invalid directory path - [$languagesPath], Modify the value of \$languagesPath'");

		$pattern = "^(.*)\.php$";
		$filenames = array();

		while ($file = readdir($dirHandle))     
		{       
			if (eregi($pattern, $file)) { 
				$languagename = eregi_replace($pattern, "\\1", $file);
				$filenames[] = $languagename;
			}         
		}
		closedir($dirHandle);
		sort($filenames);
		$optionList = array();
		$optionList[] = array(0 => '-', 1 => '-');
		foreach ($filenames as $languagename) {
			$optionList[] = array(0 => $languagename, 1 => $languagename);
		}

	   	$config['items'] = array_merge($config['items'], $optionList);
		
		return $config;
  	}
}

if (defined('TYPO3_MODE') && $TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/sema_sourcecode/class.tx_sema_sourcecode_addFieldsToFlexForm.php']) {
    include_once($TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/sema_sourcecode/class.tx_sema_sourcecode_addFieldsToFlexForm.php']);
}
?>
