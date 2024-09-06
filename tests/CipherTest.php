<?php

use PHPUnit\Framework\TestCase;
use PG\Algos\Cipher;

class CipherTest extends TestCase
{
    public function testEncryptAtbash()
    {
        $value = Cipher::atbash('SaEED');

        $this->assertSame($value, 'HaVVW');
    }

    public function testDecryptAtbash()
    {
        $value = Cipher::atbash('HaVVW');

        $this->assertSame($value, 'SaEED');
    }
}