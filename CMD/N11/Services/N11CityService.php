<?php

namespace CMD\N11\Services;

Class N11CityService
{
	public $url = 'https://api.n11.com/ws/CityService.wsdl';

	public function getCities($client)
	{
		return $client->sendRequest('GetCities');
	}

	/**
	 *
	 * @param int City Id
	 *
	 */
	public function getCity($client, $cityId)
	{
		return $client->sendRequest('GetCity', array('cityCode' => $cityId));
	}

	/**
	 *
	 * @param int City Id
	 *
	 */
	public function getDistrict($client, $cityId)
	{
		return $client->sendRequest('GetDistrict', array('cityCode' => $cityId));
	}

	/**
	 *
	 * @param int Neighborhood Id
	 *
	 */
	public function getNeighborhoods($client, $districtId)
	{
		return $client->sendRequest('GetNeighborhoods', array('districtId' => $districtId));
	}

}
