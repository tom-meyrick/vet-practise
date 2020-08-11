<?php

namespace App;

use PHPUnit\Framework\TestCase;

class BananaTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testHaveWeBananas()
    {
        $number = -12; 

        $this->assertSame(Owner::haveWeBananas(0), "No we have no bananas");
        $this->assertSame(Owner::haveWeBananas($number), "Yes we have {$number} bananas");
    }
}
