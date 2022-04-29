<?php

namespace App;

class ExchangeRateRepository
{
    public function read($startDate, $stopDate)
    {
        $currency = 'R01235';
        $buildurl = ('https://www.cbr.ru/scripts/XML_dynamic.asp?date_req1=' . $startDate . '&date_req2=' . $stopDate . '&VAL_NM_RQ=' . $currency);
        $xmlString = file_get_contents($buildurl);
        $xml = simplexml_load_string($xmlString, "SimpleXMLElement", LIBXML_NOCDATA);
        $json = json_encode($xml);
        $array = json_decode($json,TRUE);

        $settings = $array["@attributes"];
        unset($array["@attributes"]);
        foreach ($array as $value) {
            foreach ($value as $element) {
                $newarray[] = (int)$element["Value"];
            }
        }
        $json = json_encode($newarray);
        return $json;
    }

}