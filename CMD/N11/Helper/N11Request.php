<?php

namespace CMD\N11\Helper;

class N11Request
{
    protected $apiKey;
    protected $apiPassword;
    protected $serviceUrl;
    protected $client = false;

    /**
     *
     * @param string
     *
     */
    public function __construct($serviceUrl, $apiKey, $apiPassword)
    {
        $this->apiKey = $apiKey;
        $this->apiPassword = $apiPassword;
        $this->serviceUrl = $serviceUrl;
    }

    /**
     *
     * @param string
     * @return SoapClient
     *
     */
    public function connectSoap()
    {
        try {
            $this->client = new \SoapClient($this->serviceUrl, array("trace" => 1, "exception" => false, 'cache_wsdl' => WSDL_CACHE_NONE));
            return true;
        } catch (\Exception $e) {
            throw new Exception("SOAP Session Failed");
        }
    }

    /**
     *
     * @param string
     * @return SoapClient
     *
     */
    public function sendRequest($method, $data = array())
    {
        if (isset($data['auth'])) {
            unset($data['auth']);
        }
        try {
            return $this->client->$method(array_merge(array('auth' => array('appKey' => $this->apiKey, 'appSecret' => $this->apiPassword)), $data));
        } catch (\Exception $e) {
            throw new Exception($e->getMessage());
        }
    }
}
