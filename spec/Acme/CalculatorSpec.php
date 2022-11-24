<?php

namespace spec\Acme;

use Acme\Calculator;
use PhpSpec\ObjectBehavior;

class CalculatorSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(Calculator::class);
    }

    function it_can_nambah_dua_bilangan(){
        $this->add(2,3)->shouldReturn(5);
        $this->add(10,0)->shouldReturn(10);
    }
}
