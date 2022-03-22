<?php

class ExpressCrypto
{
    protected $api_key;
    protected $currency;
    protected $user_token;
    protected $api_base = 'https://expresscrypto.io/public-api/v2/';
    public $communication_error = false;

    public $options = array(
    /* if disable_curl is set to true, it'll use PHP's fopen instead of
        * curl for connection */
    'disable_curl' => false,

    /* do not use these options unless you know what you're doing */
    'local_cafile' => false,
    'force_ipv4' => false,
    'verify_peer' => true
    );

    public function __construct($api_key, $currency = "BTC", $user_token = '', $connection_options = null) {
        $this->api_key = $api_key;
        $this->currency = $currency;
        $this->user_token = $user_token;
        if($connection_options) {
            $this->options = array_merge($this->options, $connection_options);
        }
        $this->curl_warning = false;
    }

    public function __execPHP($url, $params = array()) {
        $opts = array(
        'http' => array(
        'method' => 'POST',
        'header' => "Content-type: application/x-www-form-urlencoded\r\nReferer: ".$this->getHost()." (fopen)\r\n",
        'content' => http_build_query($params)
        ),
        'ssl' => array(
        'verify_peer' => $this->options['verify_peer']
        )
        );
        if($this->options['local_cafile']) {
            $opts["ssl"]["cafile"] = dirname(__FILE__) . '/cacert.pem';
        }
        $ctx = stream_context_create($opts);
        $fp = fopen($url, 'rb', null, $ctx);
        $response = stream_get_contents($fp);
        if($response && !$this->options['disable_curl']) {
            $this->curl_warning = true;
        }
        fclose($fp);
        return $response;
    }

    public function __execCURL($url, $params = array()) {

        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, $this->options['verify_peer']);
        curl_setopt($ch, CURLOPT_REFERER, $this->getHost().' (cURL)');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        if($this->options['local_cafile']) {
            curl_setopt($ch, CURLOPT_CAINFO, dirname(__FILE__) . '/cacert.pem');
        }
        if($this->options['force_ipv4']) {
            curl_setopt($ch, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4);
        }

        $response = curl_exec($ch);
        if(!$response) {
            $response = $this->__execPHP($url, $params);
        }
        curl_close($ch);

        return $response;
    }

    public function __exec($method, $params = array()) {
        // dd($_SERVER);
        $this->communication_error = false;
        $url = $this->api_base . $method;
        $params = array_merge(
        $params,
        array(
        'api_key' => $this->api_key,
        'user_token' => $this->user_token,
        'currency' => $this->currency,
        'serverIP' => isset($_SERVER['SERVER_ADDR']) ? $_SERVER['SERVER_ADDR'] : $_SERVER['REMOTE_ADDR'],
        'ip_user' => getIP()
        )
        );
        
        if($this->options['disable_curl']) {
            $response = $this->__execPHP($url, $params);
        } else {
            $response = $this->__execCURL($url, $params);
        }

        if($response) {
            $response = json_decode($response, true);
        }
        if(!$response) {
            $this->communication_error = true;
        }
        return $response;
    }

    public function send($to, $amount, $userip, $referral = 'false') {
        $payment_method = 'sendPayment';
        $payment_type = 'Normal';
        if ($referral=='true') {
            $payment_method = 'sendReferralCommission';
            $payment_type = 'Referral';
        }

        // use v2 API
        $r = $this->__exec($payment_method,
        array(
        'userId' => $to,
        //'dest_tag' => '',
        'amount' => ceil($amount),
        'payment_type' => $payment_type
        )
        );

        if (is_array($r) && array_key_exists('status', $r) && $r['status'] == 200) {
            return array(
            'success' => true,
            'message' => 'Payment sent to you using ExpressCrypto.io',
            'html' => '<div class="alert alert-success">' . htmlspecialchars($amount) . ' satoshi was sent to you on ExpressCrypto.io.</div>',
            'html_coin' => '<div class="alert alert-success">' . htmlspecialchars(rtrim(rtrim(sprintf("%.8f", $amount/100000000), '0'), '.')) . ' '.$this->currency.' was sent to you on ExpressCrypto.io.</div>',
            //'user_hash' => false,
            'balance' => ((isset($r['balance']))?$r['balance']:false),
            'balance_bitcoin' => ((isset($r['balance']))?($r['balance']*0.00000001):false),
            'response' => json_encode($r)
            );
        }

        if (is_array($r) && array_key_exists('message', $r)) {
            return array(
            'success' => false,
            'message' => $r['message'],
            'html' => '<div class="alert alert-danger">' . htmlspecialchars($r["message"]) . '</div>',
            'response' => json_encode($r)
            );
        }

        return array(
        'success' => false,
        'message' => 'Unknown error.',
        'html' => '<div class="alert alert-danger">Unknown error.</div>',
        'response' => json_encode($r)
        );
    }

    private function getHost() {
        if(array_key_exists('HTTP_HOST', $_SERVER)) {
            return $_SERVER['HTTP_HOST'];
        } else {
            return 'Unknown';
        }
    }

    public function sendReferralEarnings($to, $amount, $userip) {
        return $this->send($to, $amount, $userip, 'true');
    }

    public function getPayouts($count) {
        // not supported
        return false;
    }

    public function getCurrencies() {
        // not supported
        return false;
    }

    public function getBalance() {
        $r = $this->__exec('getBalance');
        return $r;
    }
}
