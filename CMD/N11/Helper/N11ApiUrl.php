<?php

namespace CMD\N11\Helper;

class N11ApiUrl
{
    public $apiKey;
    public $apiPassword;

    protected $serviceClasses = array(
        'city' => 'N11CityService',
        'shipmentcompany' => 'N11ShipmentCompanyService',
        'shipment' => 'N11ShipmentService',
        'category' => 'N11CategoryService',
        'product' => 'N11ProductService',
        'selling' => 'N11ProductSellingService',
        'stock' => 'N11ProductStockService',
        'order' => 'N11OrderService',
    );

    /**
     *
     * @param string
     * @return service
     *
     */
    public function __get($name)
    {
        if (!isset($this->serviceClasses[$name])) {
            throw new Exception("Invalid!");
        }
        if (isset($this->$name)) {
            return $this->$name;
        }
        $this->$name = new N11BaseApiCall($this->serviceClasses[$name], $this->apiKey, $this->apiPassword);
        return $this->$name;
    }

}
