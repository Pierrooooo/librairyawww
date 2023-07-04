<?php

use PierreCours\Librairyawww\Api;
use PHPUnit\Framework\TestCase;

class ApiTest extends TestCase
{
    public function testGetDatas()
    {
        $api = new Api();
        $api->getCardsInfos();
    }
}