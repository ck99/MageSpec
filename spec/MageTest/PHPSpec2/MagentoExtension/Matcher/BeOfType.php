<?php

namespace spec\MageTest\PHPSpec2\MagentoExtension\Matcher;

use PHPSpec2\Specification;

class BeOfType implements Specification
{
    function it_should_exist()
    {
        $this->object->shouldNotBe(null);
    }
}