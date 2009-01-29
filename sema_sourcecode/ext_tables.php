<?php
if (!defined ('TYPO3_MODE'))	die ('Access denied.');

if (TYPO3_MODE=="BE") {
	include_once(t3lib_extMgm::extPath($_EXTKEY).'class.tx_sema_sourcecode_addFieldsToFlexForm.php');
}

t3lib_div::loadTCA('tt_content');

$TCA['tt_content']['types']['list']['subtypes_excludelist'][$_EXTKEY.'_pi1']='layout,select_key,pages,recursive';
$TCA['tt_content']['types']['list']['subtypes_addlist'][$_EXTKEY.'_pi1']='pi_flexform';

t3lib_extMgm::addPlugin(array('LLL:EXT:sema_sourcecode/pi1/locallang.php:ext_title', $_EXTKEY.'_pi1'),'list_type');

t3lib_extMgm::addPiFlexFormValue($_EXTKEY.'_pi1', 'FILE:EXT:'.$_EXTKEY.'/flexform.xml');

if (TYPO3_MODE=="BE") {
	$TBE_MODULES_EXT["xMOD_db_new_content_el"]["addElClasses"]["tx_semasourcecode_pi1_wizicon"] = t3lib_extMgm::extPath($_EXTKEY)."pi1/class.tx_semasourcecode_pi1_wizicon.php";
}

?>
