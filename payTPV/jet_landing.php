<?php
/**
 * Created by PhpStorm.
 * User: Pablo
 * Date: 04/06/2018
 * Time: 12:26
 */
/**
 * PAYTPV JET callback
 * Tracking ID: SSX-7MS-JX3J
 *
 * @author PAYTPV ONLINE, S.L.
 * @copyright Copyright (c) 2016, PAYTPV ONLINE, S.L.
 * @version 1.0 2016-05-01
 */

date_default_timezone_set("Europe/Madrid");

$token = $_POST["paytpvToken"];

if ($token && strlen($token) == 64) {

    $endPoint		= "https://secure.paytpv.com/gateway/xml-bankstore?wsdl";
    $merchantCode	= "************";
    $terminal		= "************";
    $password		= "************";
    $jetID			= "************";

    $signature		= sha1($merchantCode.$token.$jetID.$terminal.$password);

    $ip				= $_SERVER["REMOTE_ADDR"];

    try {

        $clientSOAP = new SoapClient($endPoint);

        $addUserTokenResponse = $clientSOAP->add_user_token($merchantCode, $terminal, $token, $jetID, $signature, $ip);

        var_dump($addUserTokenResponse);

    } catch(SoapFault $e){
        var_dump($e);
    }

} else {
    var_dump("Error, no se ha obtenido token");
}

die()