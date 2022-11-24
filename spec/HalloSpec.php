<?php

namespace spec;

use Hallo;
use PhpSpec\ObjectBehavior;

class HalloSpec extends ObjectBehavior
{
    function it_is_harus_return_text()
    {
        $this->shouldBe("Hello gais");
    }
}
