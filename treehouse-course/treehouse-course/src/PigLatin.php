<?php
/**
 * Created by PhpStorm.
 * User: ymihaylov
 * Date: 26.05.19
 * Time: 11:03
 */

class PigLatin
{
    public function convert($word)
    {
        $firstLetter = substr($word, 0, 1);
        $newWord = substr($word, 1);

        $newWord .= $firstLetter.'ay';

        return $newWord;
    }
}