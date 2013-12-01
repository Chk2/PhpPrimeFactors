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
        $this->assertPrimeFactors([2, 2, 2], 8);
        $this->assertPrimeFactors([3, 3], 9);

        // integration test
        $this->assertPrimeFactors([2, 2, 3, 3, 5, 7, 11, 11, 13], 2 * 2 * 3 * 3 * 5 * 7 * 11 * 11 * 13);
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
 * Uncle Bob's style
 *
 * @param int $n
 * @return int[]
 */
function of($n)
{
    $list = [];

    for ($divisor = 2; $n > 1; $divisor++)
        for (; $n % $divisor == 0; $n /= $divisor)
            $list[] = $divisor;

    return $list;
}
