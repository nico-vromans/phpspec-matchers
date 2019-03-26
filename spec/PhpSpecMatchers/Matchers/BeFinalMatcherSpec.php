<?php

declare(strict_types=1);

namespace spec\PhpSpecMatchers\Matchers;

use PhpSpec\ObjectBehavior;
use PhpSpecMatchers\Matchers\BeFinalMatcher;

class BeFinalMatcherSpec extends ObjectBehavior
{
    private const PRIORITY = 101;
    private const SUBJECT = '';
    private const NAME_VALID = 'beFinal';
    private const NAME_INVALID = 'dummyName';
    private const ARGUMENTS = ['dummyArgument'];

    function it_is_initializable()
    {
        $this->shouldHaveType(BeFinalMatcher::class);
    }

    function it_supports_the_proper_matcher()
    {
        $this->supports(self::NAME_VALID, self::SUBJECT, self::ARGUMENTS)->shouldReturn(true);
    }

    function it_does_not_support_an_incorrect_matcher()
    {
        $this->supports(self::NAME_INVALID, self::SUBJECT, self::ARGUMENTS)->shouldReturn(false);
    }

    function it_has_the_proper_priority()
    {
        $this->getPriority()->shouldReturn(self::PRIORITY);
    }
}
