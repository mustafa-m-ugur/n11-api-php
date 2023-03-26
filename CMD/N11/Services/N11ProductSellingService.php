<?php

namespace CMD\N11\Services;

class N11ProductSellingService
{
    public $url = 'https://api.n11.com/ws/ProductSellingService.wsdl';

    public function stopSellingProductByProductId($client, $productId)
    {
        return $client->sendRequest('StopSellingProductByProductId', array('productId' => $productId));
    }

    public function startSellingProductBySellerCode($client, $productSellerCode)
    {
        return $client->sendRequest('StartSellingProductBySellerCode', array('productSellerCode' => $productSellerCode));
    }

    public function startSellingProductByProductId($client, $productId)
    {
        return $client->sendRequest('StartSellingProductByProductId', array('productId' => $productId));
    }

    public function stopSellingProductBySellerCode($client, $productSellerCode)
    {
        return $client->sendRequest('StopSellingProductBySellerCode', array('productSellerCode' => $productSellerCode));
    }

}
