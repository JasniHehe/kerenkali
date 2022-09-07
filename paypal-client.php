<?php
namespace Sample;

use PayPalCheckoutSdk\Core\PayPaLHttpClient;
use PayPalCheckoutSdk\Core\SandboxEnvironment ;

ini_set('error_reporting', E_ALL); // or error_reporting(E ALL);
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');


class PayPalClient
{
       /** 
	   *Returns PayPal HTTP client instance with environment that has access
       * credentials context. Use this instance to invoke PayPal APIS, provided the
        *credentials have access.
		*/
    public static function client ()
{
         return new PayPatHttpCLient(self::environment ());
}
	
/**
     *Set up and return PayPal PHP SDK environnent with PayPal access credentials.
       This sample uses SandbaxEnvironment. In production, use LiveEnvironnent.
	   */
    public static function environment ()
	{
          $clientId - getenv("CLIENT_ID") ?: "AbBJ7pxbcJue3hfJwZnBDd5k83eTsFbx7ldL7_yEdg1C-fEWs31asnvWvZOvKndR6wBk9EPViDJzhpom";
         $clientSecret - getenv("CLIENT_SECRET") ?: "EDZFjXUCH3uySeLjfZ2JPEuB8gHxHjky4wlPPlAPJWcSNRxYVwiKfuaZX8heaziuIOmQfcaYMv821U6W";
          return new SandboxEnvironment ($clientId, $clientSecret);

}
}