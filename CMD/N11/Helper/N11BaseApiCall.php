<?php

namespace CMD\N11\Helper;

Class N11BaseApiCall
{
    protected $service = null;
    protected $request = null;
    protected $clientStatus = false;

    /**
     *
     * @param string
     * @return service
     *
     */
    public function __construct($serviceName, $apiKey, $apiPassword)
    {
        $soapServiceName = "CMD\N11\Services\\" . $serviceName;
        $this->service = new $soapServiceName();
        $this->request = new N11Request($this->service->url , $apiKey, $apiPassword);
    }

    /**
     *
     * @param string
     * @param array
     * @return string
     *
     */
    public function __call($methodName, $arguments)
    {
        if(!$this->clientStatus) {
            $this->clientStatus = $this->request->connectSoap();
        }
        if (!method_exists($this->service, $methodName)) {
            throw new Exception("Method Not Found");
        }
        return call_user_func_array(array($this->service, $methodName), array_merge(array($this->request), $arguments));
    }
}
