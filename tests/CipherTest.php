<?php

use PHPUnit\Framework\TestCase;
use PG\Algos\Cipher;

class CipherTest extends TestCase
{
    public function testEncryptAtbash()
    {
        $value = Cipher::atbash('SAEED');

        $this->assertSame($value, 'HZVVW');
    }

    public function testDecryptAtbash()
    {
        $value = Cipher::atbash('HZVVW');

        $this->assertSame($value, 'SAEED');
    }
}