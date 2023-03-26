<?php

namespace CMD\N11\Services;

class N11ProductStockService
{
    public $url = 'https://api.n11.com/ws/ProductStockService.wsdl';

    public function getProductStockByProductId($client, $productId)
    {
        return $client->sendRequest('GetProductStockByProductId', array('productId' => $productId));
    }

    public function updateStockByStockSellerCode($client, $product = array())
    {
        return $client->sendRequest('UpdateStockByStockSellerCode', $product);
    }
}
