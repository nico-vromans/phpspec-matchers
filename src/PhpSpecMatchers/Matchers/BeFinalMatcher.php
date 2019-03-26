<?php

declare(strict_types=1);

namespace PhpSpecMatchers\Matchers;

use PhpSpec\Exception\Example\FailureException;
use PhpSpec\Matcher\BasicMatcher;

class BeFinalMatcher extends BasicMatcher
{
    public function supports(string $name, $subject, array $arguments): bool
    {
        return 'beFinal' === $name;
    }

    public function getPriority(): int
    {
        return 101;
    }

    protected function matches($subject, array $arguments): bool
    {
        $reflection = new \ReflectionClass($subject);

        return $reflection->isFinal();
    }

    protected function getFailureException(string $name, $subject, array $arguments): FailureException
    {
        return new FailureException('Expected subject to be final, but it is not.');
    }

    protected function getNegativeFailureException(string $name, $subject, array $arguments): FailureException
    {
        return new FailureException('Expected subject to not be final, but it is.');
    }
}
