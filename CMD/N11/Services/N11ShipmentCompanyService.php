<?php

namespace CMD\N11\Services;

Class N11ShipmentCompanyService
{
	public $url = 'https://api.n11.com/ws/ShipmentCompanyService.wsdl';

	public function getShipmentCompanies($client)
	{
		return $client->sendRequest('GetShipmentCompanies');
	}
}
