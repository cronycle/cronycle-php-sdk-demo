<?php

require_once 'vendor/autoload.php';

try
{
	$API = new \Cronycle\Api();
	$API->logInWithTwitter( 'http://phpsdk-demo.dev/twitterSignInHandler.php' );
}
catch ( \Exception $e )
{
	echo sprintf( 'Error occurred: %d - %s', $e->getCode(), $e->getMessage() );
}