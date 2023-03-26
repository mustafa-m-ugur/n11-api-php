<?php

namespace CMD\N11\Services;

class N11OrderService
{
    public $url = 'https://api.n11.com/ws/OrderService.wsdl';

    public function orderList($client, $data = array())
    {
        $query = array(
            'searchData' => array(
                'productId' => '',
                'status' => '',
                'buyerName' => '',
                'orderNumber' => '',
                'productSellerCode' => '',
                'recipient' => '',
                'period' => '',
                'sortForUpdateDate' => '',
            )
        );
        if (isset($data['productId'])) {
            $query['searchData']['productId'] = $data['productId'];
        }

        if (isset($data['status']) && in_array($data['status'], array('New', 'Approved', 'Rejected', 'Shipped', 'Delivered', 'Completed', 'Claimed', 'LATE_SHIPMENT'))) {
            $query['searchData']['status'] = $data['status'];
        }

        if (isset($data['buyerName'])) {
            $query['searchData']['buyerName'] = $data['buyerName'];
        }

        if (isset($data['orderNumber'])) {
            $query['searchData']['orderNumber'] = $data['orderNumber'];
        }

        if (isset($data['productSellerCode'])) {
            $query['searchData']['productSellerCode'] = $data['productSellerCode'];
        }

        if (isset($data['recipient'])) {
            $query['searchData']['recipient'] = $data['recipient'];
        }

        if (isset($data['period'])) {
            $query['searchData']['period'] = $data['period'];
        }

        if (isset($data['sortForUpdateDate'])) {
            $query['searchData']['sortForUpdateDate'] = $data['sortForUpdateDate'];
        }

        if (isset($data['pagingData'])) {
            $query['pagingData'] = $data['pagingData'];
        }

        return $client->sendRequest('DetailedOrderList', $query);
    }

    public function orderDetail($client, $Id)
    {
        return $client->sendRequest('OrderDetail', array('orderRequest' => array('id' => $Id)));
    }

    public function orderItemAccept($client, $Id)
    {
        return $client->sendRequest('OrderItemAccept', array('orderRequest' => array('id' => $Id, 'numberOfPackages' => 1)));
    }

}
