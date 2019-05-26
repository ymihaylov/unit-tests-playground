<?php
/**
 * Created by PhpStorm.
 * User: ymihaylov
 * Date: 24.05.19
 * Time: 23:46
 */

class FirstTest extends \PHPUnit\Framework\TestCase
{
    public function firstAssertion()
    {
        $this->assertTrue(false);
    }

    public function testSecondAssertion()
    {
        $this->assertTrue(false);
    }
    
    /** @test */
    public function thirdAssertion()
    {
        $this->assertTrue(true);
    }
}