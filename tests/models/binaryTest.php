<?php
/**
 * Created by PhpStorm.
 * User: degaray
 * Date: 3/5/15
 * Time: 12:30 PM
 */

namespace m\models;


class binaryTest extends \PHPUnit_Framework_TestCase
{
    /** @var binary $Binary */
    protected $mBinary;

    public function setup()
    {
        $this->mBinary = new binary();
    }

    public function testTextToBinary()
    {
        $binary = $this->mBinary->textToBinary('Stack');

        $this->assertEquals('101001101110100011000010110001101101011', $binary);
    }

    public function testBinaryToText()
    {
        $binary = $this->mBinary->binaryToText('101001101110100011000010110001101101011');

        $this->assertEquals('Stack', $binary);
    }
}