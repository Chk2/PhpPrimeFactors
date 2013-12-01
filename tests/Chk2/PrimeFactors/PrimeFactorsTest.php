<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 01/12/13
 * Time: 19:35
 */

namespace Chk2\PrimeFactors;

class PrimeFactorsTest extends \PHPUnit_Framework_TestCase {

    public function testCanFactorIntoPrimes()
    {
        $this->assertEquals([], of(1));
        $this->assertEquals([2], of(2));
    }
}

/**
 * @param int $n
 * @return int[]
 */
function of($n)
{
    if ($n > 1) {
        return [2];
    }
    return [];
}
