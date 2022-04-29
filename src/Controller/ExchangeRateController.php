<?php

namespace App\Controller;

use App\Service\ExchangeRateService;

class ExchangeRateController
{
    private $postData;

    public function __construct( $postData)
    {
        $this->postData = $postData;
    }

    public function main( $postData)
        {
            $ExchangeRateService = new ExchangeRateService($postData);
            $result = $ExchangeRateService->read($postData);
            return $result;
        }
}