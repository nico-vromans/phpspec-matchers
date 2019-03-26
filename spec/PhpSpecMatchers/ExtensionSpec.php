<?php

declare(strict_types=1);

namespace spec\PhpSpecMatchers;

use PhpSpec\ObjectBehavior;
use PhpSpec\ServiceContainer;
use PhpSpecMatchers\Extension;
use Prophecy\Argument;

class ExtensionSpec extends ObjectBehavior
{
    private const PARAMS = ['dummyParam'];

    function it_is_initializable()
    {
        $this->shouldHaveType(Extension::class);
    }

    function it_is_a_PhpSpec_extension()
    {
        $this->shouldImplement(\PhpSpec\Extension::class);
    }

    function it_should_define(ServiceContainer $serviceContainer)
    {
        $this->load($serviceContainer, self::PARAMS);

        $serviceContainer->define(
            'php_spec_matchers.matchers.be_final',
            Argument::type('callable'),
            ['matchers']
        )->shouldHaveBeenCalledOnce();
    }
}
