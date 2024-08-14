<?php

use PHPUnit\Framework\TestCase;
use PG\Algos\Str;

class StrTest extends TestCase
{
    public function testReverseString()
    {
        $value = Str::reverse('SAEED');

        $this->assertSame($value, 'DEEAS');
    }
}