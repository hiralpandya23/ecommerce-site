<?php

use PayPal\Rest\ApiContext;
use PayPal\Auth\OAuthTokenCredential;

require 'vendor/autoload.php';
include 'define.php';

// For test payments we want to enable the sandbox mode. If you want to put live
// payments through then this setting needs changing to `false`.
$enableSandbox = false;

// PayPal settings. Change these to your account details and the relevant URLs
// for your site.
$paypalConfig = [
    'client_id' => 'AVb8Rat4flrRXOMxWuNA25kR_bqGQfdpoVbLONHvv7z_1PBUGWQLGkPsOq7_dPnIscyNSZpOFAaXALwj',
    'client_secret' => 'ENg9TCmNNCo8yLKZkwHfdPm1Ng4uzbwm3nVGXWdKhxid715xhNU2oQF_e2lg-Z-2heZuy3A1g0YuZxYY',
    'return_url' => $siteurl.'response.php',
    'cancel_url' => $siteurl.'index.php'
];

// Database settings. Change these for your database configuration.
$dbConfig = [
    'host' => 'localhost',
    'username' => 'kalikrjk_sedraka',
    'password' => ')Yw;GlCBawb0',
    'name' => 'kalikrjk_sedrakaterji'
];

$apiContext = getApiContext($paypalConfig['client_id'], $paypalConfig['client_secret'], $enableSandbox);

/**
 * Set up a connection to the API
 *
 * @param string $clientId
 * @param string $clientSecret
 * @param bool   $enableSandbox Sandbox mode toggle, true for test payments
 * @return \PayPal\Rest\ApiContext
 */
function getApiContext($clientId, $clientSecret, $enableSandbox = false)
{
    $apiContext = new ApiContext(
        new OAuthTokenCredential($clientId, $clientSecret)
    );

    $apiContext->setConfig([
        'mode' => $enableSandbox ? 'sandbox' : 'live'
    ]);

    return $apiContext;
}
