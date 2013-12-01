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
        $this->assertPrimeFactors([2, 2], 4);
        $this->assertPrimeFactors([2, 3], 6);
        $this->assertPrimeFactors([7], 7);
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
    $list = [];
    if ($n > 1) {
        if ($n % 2 == 0) {
            $list[] = 2;
            $n /= 2;
        }
        if ($n > 1) {
            $list[] = $n;
        }
    }
    return $list;
}
