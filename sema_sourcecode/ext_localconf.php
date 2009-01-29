<?php
if (!defined ('TYPO3_MODE')) 	die ('Access denied.');

// for cache remove for debug / testing
t3lib_extMgm::addPItoST43($_EXTKEY,'pi1/class.tx_semasourcecode_pi1.php','_pi1','list_type',1);

$TYPO3_CONF_VARS['SC_OPTIONS']['tce']['formevals']['tx_semasourcecode_evalhighlight'] = 'EXT:sema_sourcecode/pi1/class.tx_semasourcecode_evalhighlight.php';
?>
