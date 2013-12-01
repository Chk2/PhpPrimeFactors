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
        $this->assertPrimeFactors([], 1);
        $this->assertPrimeFactors([2], 2);
        $this->assertPrimeFactors([3], 3);
    }

    /**
     * @param $primeFactors
     * @param $n
     */
    private function assertPrimeFactors($primeFactors, $n)
    {
        $this->assertEquals($primeFactors, of($n));
    }
}

/**
 * @param int $n
 * @return int[]
 */
function of($n)
{
    if ($n > 1) {
        return [$n];
    }
    return [];
}
