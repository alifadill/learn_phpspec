<?php

namespace spec;

use Markdown;
use PhpSpec\ObjectBehavior;

class MarkdownSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->toHtml("Hallo Gais")->shouldreturn("<p>Hallo Gais</p>");
    }
}
