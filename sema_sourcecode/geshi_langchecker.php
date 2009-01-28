<?php
/**
 * This script checks a folder for GeSHi language files and outputs a list of language and file names.
 * Used when new releases of GeSHi is made public, and the list of available languages needs to be updated.
 */

function browseFolder($path) {
	set_include_path(get_include_path() . PATH_SEPARATOR . $path);
	$dir = opendir($path);
	
	while ($file = readdir($dir)) {
		
		if ($file != '..' && $file != '.')
		{
			_checkFile($file);
		}
		
	}
	
	_render();
}

function _checkFile($file) {
	include($file);
	if (isset($language_data)) {
		_saveLanguage($language_data['LANG_NAME'], substr($file, 0, strpos($file, '.')));
	}
}

$languages = array();

function _saveLanguage($language, $id) {
	global $languages;
	
	$languages[$id] = $language;
}

function _render() {
	global $languages;

	natcasesort($languages);

	foreach($languages as $id => $lang) {
		_renderLanguage($lang, $id);
	}
	
}

$count = 0;

function _renderLanguage($language, $id) {
	global $count;
	
	echo "\t\t\t\t\t\t<numIndex index=\"".$count."\">\n";
	echo "\t\t\t\t\t\t\t<numIndex index=\"0\">".$language."</numIndex>\n";
	echo "\t\t\t\t\t\t\t<numIndex index=\"1\">".$id."</numIndex>\n";
	echo "\t\t\t\t\t\t</numIndex>\n";
						
	$count++;
}

browseFolder('/path/to/geshi/language/folder/');