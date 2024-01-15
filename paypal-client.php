<?php
namespace Sample;

use PayPalCheckoutSdk\Core\PayPalHttpClient;
use PayPalCheckoutSdk\Core\SandboxEnvironment;

ini_set('error_reporting', E_ALL);
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');

class PayPalClient {
    public static function client() {
        return new PayPalHttpClient(self::environment());
    }

    public static function environment() {
        $clientId = "AdqEVqGwcSsXC33IDRMy8tbNr04bOJJc23bUXz8HiivPIQbIQPXsnlsgfVvx6Chp8slXGD4ZmXxaBMrF";
        $clientSecret = "EKdR4C9J-0E_qRuJEGdUKD0yoMClYKgZs4q9F399KPas4St4YDr8im-tKKvsFFjk5cyRcbjTETHjS1-0";
        return new SandboxEnvironment($clientId, $clientSecret);
    }
}

?>