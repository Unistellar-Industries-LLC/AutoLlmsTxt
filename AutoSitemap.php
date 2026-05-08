<?php
if ( function_exists( 'wfLoadExtension' ) ) {
	wfLoadExtension( 'AutoLlmsTxt' );
	wfWarn(
		'Deprecated PHP entry point used for AutoLlmsTxt extension. Please use wfLoadExtension instead, ' .
		'see https://www.mediawiki.org/wiki/Extension_registration for more details.'
	);
	return;
} else {
	die( 'This version of the AutoLlmsTxt extension requires MediaWiki 1.25+' );
}
