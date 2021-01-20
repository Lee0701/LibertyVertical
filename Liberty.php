<?php // @codingStandardsIgnoreLine
if ( function_exists( 'wfLoadSkin' ) ) {
	wfLoadSkin( 'LibertyVertical' );
	$wgMessagesDirs['Liberty'] = __DIR__ . '/i18n';
	return true;
} else {
	die( 'This version of the Liberty skin requires MediaWiki 1.25+' );
}
