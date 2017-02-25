<?php
declare(strict_types=1);

namespace spec;

use PhpSpec\ObjectBehavior;

class KataSpec extends ObjectBehavior
{
    function it_accepts_a_lowercase_letter()
    {
        $this->print_diamond('a')->shouldBe('A');
    }

    function it_prints_A_given_A()
    {
        $this->print_diamond('A')->shouldBe('A');
    }

    function it_prints_ABBA_given_B()
    {
        $this->print_diamond('B')->shouldBe(' A'.PHP_EOL.'B B'.PHP_EOL.' A');
    }
}
