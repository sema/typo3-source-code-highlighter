To add source code to your page, create a new content element and select "insert plugin" -> SourceCode, 
then select your language and paste your code to the content field.

Typoscript parameters

// examples

plugin.tx_semasourcecode_pi1 {
	default.linenumbers.enable = 1
	default.linenumbers.overwrite = 1
	default.linenumbers = background-color: #003300;
	default.linenumbers.fancy = font-weight: bold;
	default.strings = font-size: 110%;
	default.strings.overwrite = 1
	
	latex.strings.overwrite = 0
}

// generic
lang.subject[.option]

lang is either "default" or a specific language.

The following subjects are available:
source
linenumbers
strings
keywords.[0-9]
methods.[0-9]
symbols
escape
comments.[0-9]/multi

Options are:
For all overwrite is used, and for linenumbers mode and fancy are available.