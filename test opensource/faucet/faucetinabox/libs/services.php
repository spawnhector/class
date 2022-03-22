<?php

require('C:/xampp/htdocs/xampp/test opensource/cryptoPub/resources/views/faucet/faucetinabox/libs/services/expresscrypto.php');
require('C:/xampp/htdocs/xampp/test opensource/cryptoPub/resources/views/faucet/faucetinabox/libs/services/cedsonhub.php');
require('C:/xampp/htdocs/xampp/test opensource/cryptoPub/resources/views/faucet/faucetinabox/libs/services/kswallet.php');
require('C:/xampp/htdocs/xampp/test opensource/cryptoPub/resources/views/faucet/faucetinabox/libs/services/cryptoome.php');
require('C:/xampp/htdocs/xampp/test opensource/cryptoPub/resources/views/faucet/faucetinabox/libs/services/faucetfly.php');
require('C:/xampp/htdocs/xampp/test opensource/cryptoPub/resources/views/faucet/faucetinabox/libs/services/faucetpay.php');
require('C:/xampp/htdocs/xampp/test opensource/cryptoPub/resources/views/faucet/faucetinabox/libs/services/microwallet.php');
require('C:/xampp/htdocs/xampp/test opensource/cryptoPub/resources/views/faucet/faucetinabox/libs/services/walcrypt.php');
require('C:/xampp/htdocs/xampp/test opensource/cryptoPub/resources/views/faucet/faucetinabox/libs/services/microcoinpay.php');

class Service {
    public static $services = array(
        'expresscrypto' => array(
            'name' => 'ExpressCrypto.io',
            'currencies' => array('BTC', 'ADA', 'BCH', 'BCN', 'DASH',
                                  'DGB', 'DOGE', 'ETC', 'ETH', 'EXG',
                                  'EXS', 'LSK', 'LTC', 'NEO', 'POT',
                                  'PPC', 'RDD', 'STRAT', 'TRX', 'WAVES',
                                  'XMR', 'XRP', 'XTZ', 'ZEC')
        ),
        'cedsonhub' => array(
            'name' => 'CedsonHub.site',
            'currencies' => array('BTC', 'DOGE', 'LTC')
        ),
        'kswallet' => array(
            'name' => 'ksWallet.net',
            'currencies' => array('BTC', 'DGB', 'EOS', 'ETC', 'LSK', 'LTC', 'QTUM', 'STRAT', 'ZEC')
        ),
        'cryptoome' => array(
            'name' => 'Cryptoo.me',
            'currencies' => array('BTC')
        ),
        'faucetfly' => array(
            'name' => 'FaucetFly.com',
            'currencies' => array('BTC', 'ETH')
        ),
        'faucetpay' => array(
            'name' => 'FaucetPay.io',
            'currencies' => array('BTC', 'BCH', 'DASH', 'DGB', 'DOGE', 'ETH', 'LTC', 'TRX')
        ),
        'microwallet' => array(
            'name' => 'MicroWallet.co',
            'currencies' => array('BTC', 'BCH', 'DOGE', 'ETH', 'LTC')
        ),
        'walcrypt' => array(
            'name' => 'WalCrypt.com',
            'currencies' => array('BTC', 'BCH', 'DOGE', 'DASH', 'ETH', 'LTC', 'XMR')
        ),
        'microcoinpay' => array(
            'name' => 'MicroCoinPay.com',
            'currencies' => array('BTC', 'BCH', 'ETH', 'BSV', 'XMR', 'DASH', 'LTC', 'ZEC', 'DCR', 'BTG', 'ETC', 'XZC', 'OMNI', 'USD', 'WAVES', 'LSK', 'VTC',
            'PPC', 'MAID', 'CURE', 'BLK', 'GAME', 'TRX', 'DGB', 'MUE', 'POT', 'DOGE')
        )
    );
    protected $service;
    protected $api_key;
    protected $user_token;
    protected $service_instance;
    protected $currency;
    public $communication_error = false;
    public $curl_warning = false;

    public $options = array(
        /* if disable_curl is set to true, it'll use PHP's fopen instead of
         * curl for connection */
        'disable_curl' => false,

        /* do not use these options unless you know what you're doing */
        'local_cafile' => false,
        'force_ipv4' => false,
        'verify_peer' => true
    );

    public function __construct($service, $api_key, $currency = 'BTC', $user_token = '', $connection_options = null) {
        $this->service = $service;
        $this->api_key = $api_key;
        $this->user_token = $user_token;
        $this->currency = $currency;
        if($connection_options) {
            $this->options = array_merge($this->options, $connection_options);
        }

        switch($this->service) {
            case 'expresscrypto':
            case 'cedsonhub':
            case 'kswallet':
            case 'cryptoome':
            case 'faucetfly':
            case 'faucetpay':
            case 'microwallet':
            case 'walcrypt':
            case 'microcoinpay':
            break;
            default:
                $this->service = 'expresscrypto';
            break;
        }

        switch($this->service) {
        case 'expresscrypto':
            $this->service_instance = new ExpressCrypto($api_key, $currency, $user_token, $connection_options);
            break;
        case 'cedsonhub':
            $this->service_instance = new CedsonHub($api_key, $currency, $connection_options);
            break;
        case 'kswallet':
            $this->service_instance = new ksWallet($api_key, $currency, $connection_options);
            break;
        case 'cryptoome':
            $this->service_instance = new CryptooMe($api_key, $currency, $connection_options);
            break;
        case 'faucetfly':
            $this->service_instance = new FaucetFly($api_key, $currency, $connection_options);
            break;
        case 'faucetpay':
            $this->service_instance = new FaucetPay($api_key, $currency, $connection_options);
            break;
        case 'microwallet':
            $this->service_instance = new MicroWallet($api_key, $currency, $connection_options);
            break;
        case 'walcrypt':
            $this->service_instance = new WalCrypt($api_key, $currency, $connection_options);
            break;
        case 'microcoinpay':
            $this->service_instance = new MicroCoinPay($api_key, $currency, $connection_options);
            break;
        default:
            trigger_error('Invalid service '.$service);
        }
    }

    public function getServices($currency = null) {
        if(!$currency) {
            $all_services = [];
            foreach(self::$services as $service => $details) {
                $all_services[$service] = $details['name'];
            }
            return $all_services;
        }

        $services = [];
        foreach(self::$services as $service => $details) {
            if(in_array($service, $details['currencies'])) {
                $services[$service] = $details['name'];
            }
        }

        return $services;
    }

    public function send($to, $amount, $userip, $referral = 'false') {
        if($this->currency === 'DOGE') {
            $amount *= 100000000;
        }
        switch($this->service) {
        case 'expresscrypto':
            $r = $this->service_instance->send($to, $amount, $userip, $referral);
            $check_url = 'https://expresscrypto.io/dashboard';
            $success = $r['success'];
            if (!empty($r['balance'])) {
                $balance = $r['balance'];
            } else {
                $balance = null;
            }
            $error = $r['message'];
            $this->communication_error = $this->service_instance->communication_error;
            $this->curl_warning = $this->service_instance->curl_warning;
            break;
        case 'cedsonhub':
            $r = $this->service_instance->send($to, $amount, $userip, $referral);
            $check_url = 'https://cedsonhub.site/microwallet-service/balance';
            $success = $r['success'];
            if (!empty($r['balance'])) {
                $balance = $r['balance'];
            } else {
                $balance = null;
            }
            $error = $r['message'];
            $this->communication_error = $this->service_instance->communication_error;
            $this->curl_warning = $this->service_instance->curl_warning;
            break;
        case 'kswallet':
            $r = $this->service_instance->send($to, $amount, $userip, $referral);
            $check_url = 'https://www.kswallet.net/dashboard';
            $success = $r['success'];
            if (!empty($r['balance'])) {
                $balance = $r['balance'];
            } else {
                $balance = null;
            }
            $error = $r['message'];
            $this->communication_error = $this->service_instance->communication_error;
            $this->curl_warning = $this->service_instance->curl_warning;
            break;
        case 'cryptoome':
            $r = $this->service_instance->send($to, $amount, $userip, $referral);
            $check_url = 'https://cryptoo.me/check/' . rawurlencode($to);
            $success = $r['success'];
            if (!empty($r['balance'])) {
                $balance = $r['balance'];
            } else {
                $balance = null;
            }
            $error = $r["message"];
            $this->communication_error = $this->service_instance->communication_error;
            $this->curl_warning = $this->service_instance->curl_warning;
            break;
        case 'faucetfly':
            $r = $this->service_instance->send($to, $amount, $userip, $referral);
            $check_url = 'https://www.faucetfly.com/check/' . rawurlencode($to);
            $success = $r['success'];
            if (!empty($r['balance'])) {
                $balance = $r['balance'];
            } else {
                $balance = null;
            }
            $error = $r['message'];
            $this->communication_error = $this->service_instance->communication_error;
            $this->curl_warning = $this->service_instance->curl_warning;
            break;
        case 'faucetpay':
            $r = $this->service_instance->send($to, $amount, $userip, $referral);
            $check_url = 'https://faucetpay.io/page/user-admin';
            $success = $r['success'];
            if (!empty($r['balance'])) {
                $balance = $r['balance'];
            } else {
                $balance = null;
            }
            $error = $r['message'];
            $this->communication_error = $this->service_instance->communication_error;
            $this->curl_warning = $this->service_instance->curl_warning;
            break;
        case 'microwallet':
            $r = $this->service_instance->send($to, $amount, $userip, $referral);
            $check_url = 'https://www.microwallet.co/dashboard';
            $success = $r['success'];
            if (!empty($r['balance'])) {
                $balance = $r['balance'];
            } else {
                $balance = null;
            }
            $error = $r['message'];
            $this->communication_error = $this->service_instance->communication_error;
            $this->curl_warning = $this->service_instance->curl_warning;
            break;
        case 'walcrypt':
            $r = $this->service_instance->send($to, $amount, $userip, $referral);
            $check_url = 'https://www.walcrypt.com/dashboard/';
            $success = $r['success'];
            if (!empty($r['balance'])) {
                $balance = $r['balance'];
            } else {
                $balance = null;
            }
            $error = $r['message'];
            $this->communication_error = $this->service_instance->communication_error;
            $this->curl_warning = $this->service_instance->curl_warning;
            break;
        case 'microcoinpay':
            $r = $this->service_instance->send($to, $amount, $userip, $referral);
            $check_url = 'https://microcoinpay.com/balance/' . rawurlencode($to);
            $success = $r['success'];
            if (!empty($r['balance'])) {
                $balance = $r['balance'];
            } else {
                $balance = null;
            }
            $error = $r['message'];
            $this->communication_error = $this->service_instance->communication_error;
            $this->curl_warning = $this->service_instance->curl_warning;
            break;
        }

        $sname = self::$services[$this->service]['name'];
        $result = [];
        $result['success'] = $success;
        $result['response'] = json_encode($r);
        if($success) {
            if (!empty($r['user_hash'])) {
                $result['user_hash'] = $r['user_hash'];
            }
            $result['message'] = 'Payment sent to you using '.$sname;
            if (!empty($check_url)) {
                $result['html'] = '<div class="alert alert-success">' . htmlspecialchars($amount) . " satoshi was sent to you <a target=\"_blank\" href=\"$check_url\">on $sname</a>.</div>";
                $result['html_coin'] = '<div class="alert alert-success">' . htmlspecialchars(rtrim(rtrim(sprintf("%.8f", $amount/100000000), '0'), '.')) . " " . $this->currency . " was sent to you <a target=\"_blank\" href=\"$check_url\">on $sname</a>.</div>";
            } else {
                $result['html'] = '<div class="alert alert-success">' . htmlspecialchars($amount) . " satoshi was sent to you on $sname.</div>";
                $result['html_coin'] = '<div class="alert alert-success">' . htmlspecialchars(rtrim(rtrim(sprintf("%.8f", $amount/100000000), '0'), '.')) . " " . $this->currency . " was sent to you on $sname.</div>";
            }
            $result['balance'] = $balance;
            if($balance) {
                $result['balance_bitcoin'] = sprintf("%.8f", $balance/100000000);
            } else {
                $result['balance_bitcoin'] = null;
            }
        } else {
            $result['message'] = $error;
            $result['html'] = '<div class="alert alert-danger">'.htmlspecialchars($error).'</div>';
        }
        return $result;
    }

    public function sendReferralEarnings($to, $amount, $userip) {
        return $this->send($to, $amount, $userip, 'true');
    }

    public function getPayouts($count) {
        return [];
    }

    public function getCurrencies() {
        return self::$services[$this->service]['currencies'];
    }

    public function getBalance() {
        switch($this->service) {
        case 'expresscrypto':
            $balance = $this->service_instance->getBalance();
            $this->communication_error = $this->service_instance->communication_error;
            $this->curl_warning = $this->service_instance->curl_warning;
            return $balance;
        case 'cedsonhub':
            $balance = $this->service_instance->getBalance();
            $this->communication_error = $this->service_instance->communication_error;
            $this->curl_warning = $this->service_instance->curl_warning;
            return $balance;
        case 'kswallet':
            $balance = $this->service_instance->getBalance();
            $this->communication_error = $this->service_instance->communication_error;
            $this->curl_warning = $this->service_instance->curl_warning;
            return $balance;
        case 'cryptoome':
            $balance = $this->service_instance->getBalance();
            $this->communication_error = $this->service_instance->communication_error;
            $this->curl_warning = $this->service_instance->curl_warning;
            return $balance;
        case 'faucetfly':
            $balance = $this->service_instance->getBalance();
            $this->communication_error = $this->service_instance->communication_error;
            $this->curl_warning = $this->service_instance->curl_warning;
            return $balance;
        case 'faucetpay':
            $balance = $this->service_instance->getBalance();
            $this->communication_error = $this->service_instance->communication_error;
            $this->curl_warning = $this->service_instance->curl_warning;
            return $balance;
        case 'microwallet':
            $balance = $this->service_instance->getBalance();
            $this->communication_error = $this->service_instance->communication_error;
            $this->curl_warning = $this->service_instance->curl_warning;
            return $balance;
        case 'walcrypt':
            $balance = $this->service_instance->getBalance();
            $this->communication_error = $this->service_instance->communication_error;
            $this->curl_warning = $this->service_instance->curl_warning;
            return $balance;
        case 'microcoinpay':
            $balance = $this->service_instance->getBalance();
            $this->communication_error = $this->service_instance->communication_error;
            $this->curl_warning = $this->service_instance->curl_warning;
            return $balance;
        }
        die('Database is broken. Please reinstall the script.');
    }

    public function fiabVersionCheck() {
        return 0;
    }
}
