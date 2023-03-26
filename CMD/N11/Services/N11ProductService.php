<?php

namespace CMD\N11\Services;

class N11ProductService
{
    public $url = 'https://api.n11.com/ws/ProductService.wsdl';

    public function getProductByProductId($client, $productId)
    {
        return $client->sendRequest('GetProductByProductId', array('productId' => $productId));
    }

    public function getProductBySellerCode($client, $sellerCode)
    {
        return $client->sendRequest('GetProductBySellerCode', array('sellerCode' => $sellerCode));
    }

    public function getProductList($client, $pagination = array())
    {
        return $client->sendRequest('GetProductList', array('pagingData' => $pagination));
    }

    public function saveProduct($client, $product = array())
    {
        return $client->sendRequest('SaveProduct', array('product' => $product));
    }

    public function updateProductBasic($client, $product = array())
    {
        return $client->sendRequest('UpdateProductBasic', array('product' => $product));
    }

    public function deleteProductById($client, $productId)
    {
        return $client->sendRequest('DeleteProductById', array('productId' => $productId));
    }

    public function deleteProductBySellerCode($client, $productSellerCode)
    {
        return $client->sendRequest('DeleteProductBySellerCode', array('productSellerCode' => $productSellerCode));
    }

    /*public function productApprovalStatus($client)
    {
        return $client->sendRequest('productApprovalStatus');
    }*/

    /*public function searchProducts($client, $data = array())
    {
        $searchData = array();
        if (isset($data['pagingData'])) {
            $searchData['pagingData'] = $data['pagingData'];
        }
        if (isset($data['productSearch'])) {
            $searchData['productSearch'] = $data['productSearch'];
        }
        if (isset($data['approvalStatus'])) {
            $searchData['approvalStatus'] = $data['approvalStatus'];
        }
        return $client->sendRequest('searchProducts', $searchData);
    }*/
}
