<?php

namespace CMD\N11;

use CMD\N11\Helper\N11ApiUrl;
use CMD\N11\Helper\Exception;

class N11Client extends N11ApiUrl
{
    /**
     *
     * @param string $apiKey
     *
     */
    public function setApiKey($apiKey)
    {
        $this->apiKey = $apiKey;
    }

    /**
     *
     * @param string $apiPassword
     *
     */
    public function setApiPassword($apiPassword)
    {
        $this->apiPassword = $apiPassword;
    }

}
