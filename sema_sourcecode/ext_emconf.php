<?php

########################################################################
# Extension Manager/Repository config file for ext: "sema_sourcecode"
#
# Auto generated 14-12-2007 01:29
#
# Manual updates:
# Only the data in the array - anything else is removed by next write.
# "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Source Code Highlighter',
	'description' => 'The source code highlighter is capable of highlighting 70+ different languages making it easy to publish source code in typo3. The highlighting is done using the GeSHi (http://qbnz.com/highlighter/) highlighting engine. Source code formatted using this extension can be seen at http://www.semaprojects.net/my-projects/typo3/source-code/.',
	'category' => 'plugin',
	'shy' => 0,
	'version' => '1.0.0',
	'dependencies' => '',
	'conflicts' => '',
	'priority' => '',
	'loadOrder' => '',
	'module' => '',
	'state' => 'stable',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => '',
	'clearcacheonload' => 0,
	'lockType' => '',
	'author' => 'Casper Jensen',
	'author_email' => 'sema@semaprojects.net',
	'author_company' => '',
	'CGLcompliance' => '',
	'CGLcompliance_note' => '',
	'constraints' => array(
		'depends' => array(
			'geshilib' => '',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:105:{s:9:"ChangeLog";s:4:"abdb";s:10:"README.txt";s:4:"bc53";s:12:"ext_icon.gif";s:4:"e295";s:17:"ext_localconf.php";s:4:"9b47";s:14:"ext_tables.php";s:4:"d543";s:12:"flexform.xml";s:4:"7b8b";s:9:"geshi.php";s:4:"ae8f";s:21:"geshi_langchecker.php";s:4:"92f3";s:34:"icon_tx_semasourcecode_content.gif";s:4:"8ebf";s:14:"pi1/ce_wiz.gif";s:4:"8ebf";s:45:"pi1/class.tx_semasourcecode_evalhighlight.php";s:4:"cd74";s:35:"pi1/class.tx_semasourcecode_pi1.php";s:4:"b64f";s:43:"pi1/class.tx_semasourcecode_pi1_wizicon.php";s:4:"391d";s:17:"pi1/locallang.php";s:4:"93d2";s:14:"doc/manual.sxw";s:4:"f16d";s:19:"doc/wizard_form.dat";s:4:"cb04";s:20:"doc/wizard_form.html";s:4:"31bd";s:14:"geshi/abap.php";s:4:"af05";s:22:"geshi/actionscript.php";s:4:"c965";s:13:"geshi/ada.php";s:4:"57bb";s:16:"geshi/apache.php";s:4:"110b";s:21:"geshi/applescript.php";s:4:"1633";s:13:"geshi/asm.php";s:4:"3a36";s:13:"geshi/asp.php";s:4:"5ea0";s:16:"geshi/autoit.php";s:4:"c091";s:14:"geshi/bash.php";s:4:"a59d";s:20:"geshi/blitzbasic.php";s:4:"fc84";s:13:"geshi/bnf.php";s:4:"6f58";s:11:"geshi/c.php";s:4:"04eb";s:15:"geshi/c_mac.php";s:4:"0ae3";s:16:"geshi/caddcl.php";s:4:"3709";s:17:"geshi/cadlisp.php";s:4:"f613";s:14:"geshi/cfdg.php";s:4:"f71c";s:13:"geshi/cfm.php";s:4:"607c";s:16:"geshi/cpp-qt.php";s:4:"7eec";s:13:"geshi/cpp.php";s:4:"e725";s:16:"geshi/csharp.php";s:4:"ba37";s:17:"geshi/css-gen.cfg";s:4:"d41d";s:13:"geshi/css.php";s:4:"44ee";s:11:"geshi/d.php";s:4:"2796";s:16:"geshi/delphi.php";s:4:"0aaf";s:14:"geshi/diff.php";s:4:"3ae8";s:13:"geshi/div.php";s:4:"d6c4";s:13:"geshi/dos.php";s:4:"f705";s:13:"geshi/dot.php";s:4:"f6e9";s:16:"geshi/eiffel.php";s:4:"f9bc";s:17:"geshi/fortran.php";s:4:"0c08";s:19:"geshi/freebasic.php";s:4:"d915";s:16:"geshi/genero.php";s:4:"2ab6";s:13:"geshi/gml.php";s:4:"4fe7";s:16:"geshi/groovy.php";s:4:"312b";s:17:"geshi/haskell.php";s:4:"2749";s:21:"geshi/html4strict.php";s:4:"1d7c";s:13:"geshi/idl.php";s:4:"c21e";s:13:"geshi/ini.php";s:4:"5db5";s:14:"geshi/inno.php";s:4:"a5f8";s:12:"geshi/io.php";s:4:"3740";s:14:"geshi/java.php";s:4:"a57f";s:15:"geshi/java5.php";s:4:"1e21";s:20:"geshi/javascript.php";s:4:"f233";s:15:"geshi/latex.php";s:4:"2a97";s:14:"geshi/lisp.php";s:4:"1693";s:13:"geshi/lua.php";s:4:"4b15";s:14:"geshi/m68k.php";s:4:"3d63";s:16:"geshi/matlab.php";s:4:"fcdf";s:14:"geshi/mirc.php";s:4:"d38d";s:15:"geshi/mpasm.php";s:4:"6498";s:15:"geshi/mysql.php";s:4:"4318";s:14:"geshi/nsis.php";s:4:"a401";s:14:"geshi/objc.php";s:4:"6912";s:21:"geshi/ocaml-brief.php";s:4:"4dcb";s:15:"geshi/ocaml.php";s:4:"ed51";s:15:"geshi/oobas.php";s:4:"2314";s:17:"geshi/oracle8.php";s:4:"9717";s:16:"geshi/pascal.php";s:4:"0235";s:13:"geshi/per.php";s:4:"6d3b";s:14:"geshi/perl.php";s:4:"c863";s:19:"geshi/php-brief.php";s:4:"420b";s:13:"geshi/php.php";s:4:"3c47";s:15:"geshi/plsql.php";s:4:"bbe5";s:16:"geshi/python.php";s:4:"e162";s:16:"geshi/qbasic.php";s:4:"33c6";s:15:"geshi/rails.php";s:4:"f88d";s:13:"geshi/reg.php";s:4:"a75d";s:16:"geshi/robots.php";s:4:"c172";s:14:"geshi/ruby.php";s:4:"ff81";s:13:"geshi/sas.php";s:4:"c297";s:16:"geshi/scheme.php";s:4:"14a3";s:18:"geshi/sdlbasic.php";s:4:"21cc";s:19:"geshi/smalltalk.php";s:4:"5b0c";s:16:"geshi/smarty.php";s:4:"7f89";s:13:"geshi/sql.php";s:4:"db2e";s:13:"geshi/tcl.php";s:4:"9dba";s:14:"geshi/text.php";s:4:"feaa";s:19:"geshi/thinbasic.php";s:4:"1106";s:14:"geshi/tsql.php";s:4:"f7ee";s:20:"geshi/typoscript.php";s:4:"9431";s:12:"geshi/vb.php";s:4:"3411";s:15:"geshi/vbnet.php";s:4:"2fbe";s:14:"geshi/vhdl.php";s:4:"9879";s:22:"geshi/visualfoxpro.php";s:4:"a7d6";s:18:"geshi/winbatch.php";s:4:"c0ce";s:13:"geshi/xml.php";s:4:"94bb";s:13:"geshi/xpp.php";s:4:"e2e9";s:13:"geshi/z80.php";s:4:"ddf0";}',
);

?>
