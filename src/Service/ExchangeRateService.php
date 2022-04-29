<?php

namespace App\Service;

use App\ExchangeRateRepository;

class ExchangeRateService
{
    private $postData;

    public function __construct( $postData)
    {
        $this->postData = $postData;
    }
    public function read( $postData) {
        $ExchangeRateRepository = new ExchangeRateRepository();
        $startDate = $postData['startDate'];
        $stopDate = $postData['stopDate'];
        $result = $ExchangeRateRepository->read($startDate, $stopDate);
        return $result;
    }
}