<?php

require 'src/Status.php';

use PHPUnit\Framework\TestCase;

class StatusTest extends TestCase
{
    protected function runAsserts(int $firstDigit)
    {
        $this->assertGreaterThanOrEqual(1, $firstDigit);
        $this->assertLessThanOrEqual(5, $firstDigit);

        switch ($firstDigit) {
            case 1:
                $f = 'informational';
                break;
            case 2:
                $f = 'successful';
                break;
            case 3:
                $f = 'redirection';
                break;
            case 4:
                $f = 'clientError';
                break;
            case 5:
                $f = 'serverError';
                break;
        }

        $initialCode = $firstDigit * 100;

        $this->assertTrue(\iaretedd\Http\Status::$f($initialCode));
        $this->assertTrue(\iaretedd\Http\Status::$f($initialCode + 1));
        $this->assertTrue(\iaretedd\Http\Status::$f($initialCode + 99));
        $this->assertFalse(\iaretedd\Http\Status::$f($initialCode + 100));
        $this->assertFalse(\iaretedd\Http\Status::$f($initialCode - 1));
        $this->assertFalse(\iaretedd\Http\Status::$f($initialCode - 2));
    }

    public function testInformational()
    {
        $this->runAsserts(1);
    }

    public function testSuccessful()
    {
        $this->runAsserts(2);
    }

    public function testRedirection()
    {
        $this->runAsserts(3);
    }

    public function testClientError()
    {
        $this->runAsserts(4);
    }

    public function testServerError()
    {
        $this->runAsserts(5);
    }
}
