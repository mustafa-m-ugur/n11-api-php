<?php

namespace CMD\N11\Services;

class N11CategoryService
{
    public $url = 'https://api.n11.com/ws/CategoryService.wsdl';

    public function getTopLevelCategories($client)
    {
        return $client->sendRequest('GetTopLevelCategories');
    }

    public function GetCategoryAttributes($client, $categoryId, $pagination = array())
    {
        return $client->sendRequest('GetCategoryAttributes', array('categoryId' => $categoryId, 'pagingData' => $pagination));
    }

    public function GetCategoryAttributesId($client, $categoryId)
    {
        return $client->sendRequest('GetCategoryAttributesId', array('categoryId' => $categoryId));
    }

    public function GetCategoryAttributeValue($client, $attributeId, $pagination = array())
    {
        return $client->sendRequest('GetCategoryAttributeValue', array('categoryProductAttributeId' => $attributeId, 'pagingData' => $pagination));
    }

    public function getParentCategory($client, $categoryId)
    {
        return $client->sendRequest('GetParentCategory', array('categoryId' => $categoryId));
    }

    public function getSubCategories($client, $categoryId)
    {
        return $client->sendRequest('GetSubCategories', array('categoryId' => $categoryId));
    }

}
