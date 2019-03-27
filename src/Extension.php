<?php

declare(strict_types=1);

namespace NicoVromans\PhpSpecMatchers;

use NicoVromans\PhpSpecMatchers\Matchers\BeFinalMatcher;
use PhpSpec\ServiceContainer;

class Extension implements \PhpSpec\Extension
{
    public function load(ServiceContainer $container, array $params): void
    {
        $container->define(
            'nico_vromans.matchers.be_final',
            function () {
                return new BeFinalMatcher();
            },
            ['matchers']
        );
    }
}
