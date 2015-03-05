<?php
/**
 * Created by PhpStorm.
 * Original Concept: Bernardo M
 * Author: degaray
 * Date: 3/5/15
 * Time: 11:47 M
 */
namespace m;


class mTest extends \PHPUnit_Framework_TestCase
{
    /** @var m m */
    protected $m;

    public function setup()
    {
        $this->m = new m();
    }

    public function testMSum()
    {
        $m = $this->m->mSum(1);

        $this->assertTrue(true);
    }
}