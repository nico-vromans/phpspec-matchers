<?php

declare(strict_types=1);

namespace PhpSpecMatchers;

use PhpSpec\ServiceContainer;
use PhpSpecMatchers\Matchers\BeFinalMatcher;

class Extension implements \PhpSpec\Extension
{
    public function load(ServiceContainer $container, array $params): void
    {
        $container->define(
            'php_spec_matchers.matchers.be_final',
            function () {
                return new BeFinalMatcher();
            },
            ['matchers']
        );
    }
}
