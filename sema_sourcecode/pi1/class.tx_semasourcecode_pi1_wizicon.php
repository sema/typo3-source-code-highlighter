<?php
/***************************************************************
*  Copyright notice
*
*  (c) 2007 Casper Jensen <sema@semaprojects.net>
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

/**
 * Plugin 'Source Code Highlighter' for the 'sema_sourcecode' extension.
 *
 * @author	Casper Jensen <sema@semaprojects.net>
 * @package	TYPO3
 * @subpackage	tx_semasourcecode
 */
class tx_semasourcecode_pi1_wizicon {
	
	function proc($wizardItems)	{
		global $LANG;
		
		// get language file
		include(t3lib_extMgm::extPath('sema_sourcecode').'pi1/locallang.php');	
		
		$wizardItems["plugins_tx_semasourcecode_pi1"] = array(
			"icon"=>t3lib_extMgm::extRelPath("sema_sourcecode")."pi1/ce_wiz.gif",
			"title"=>$LANG->getLLL('ext_title',$LOCAL_LANG),
			"description"=>$LANG->getLLL('ext_desc',$LOCAL_LANG),
			"params"=>"&defVals[tt_content][CType]=list&defVals[tt_content][list_type]=sema_sourcecode_pi1"
		);

		return $wizardItems;
	}
	
}

if (defined("TYPO3_MODE") && $TYPO3_CONF_VARS[TYPO3_MODE]["XCLASS"]["ext/sema_sourcecode/pi1/class.tx_semasourcecode_pi1_wizicon.php"])	{
	include_once($TYPO3_CONF_VARS[TYPO3_MODE]["XCLASS"]["ext/sema_sourcecode/pi1/class.tx_semasourcecode_pi1_wizicon.php"]);
}

?>