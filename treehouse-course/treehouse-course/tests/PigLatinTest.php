<?php
/**
 * Created by PhpStorm.
 * User: ymihaylov
 * Date: 26.05.19
 * Time: 10:56
 */

class PigLatinTest extends \PHPUnit\Framework\TestCase
{
    /** @test */
    public function convertSingleStartingConsonantWordToPigLatin()
    {
        $word = 'test';
        $expectedResult = 'esttay';

        $pigLatin = new PigLatin;
        $result = $pigLatin->convert($word);

        $this->assertEquals($expectedResult, $result, 'PigLatin conversion did not work correctly.');
    }
}