<?php

namespace Tests\Unit;

use App\Helper\MathHelper;
use PHPUnit\Framework\TestCase;

class MathHelperTest extends TestCase
{
    /**
     * A basic unit test bilangan .
     *
     * @return void
     */
    public function testBilangan()
    {
        $hasil = MathHelper::pangkat(2, 3);
        $this->assertEquals(8, $hasil);
    }

    public function testBilanganKedua()
    {
        $hasil = MathHelper::pangkat(3, 3);
        $this->assertEquals(27, $hasil);
    }

    // casenya bilangan pangkat negatif
    public function testBilanganNegatif()
    {
        $hasil = MathHelper::pangkat(2, -2);
        $this->assertEquals(0.25, $hasil);
    }
}
