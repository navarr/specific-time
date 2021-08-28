<?php

/**
 * @author    Navarr Barnier <me@navarr.me>
 * @copyright 2021 Navarr Barnier. All rights reserved.
 */

declare(strict_types=1);

namespace Navarr\SpecificTime;

use DateTimeImmutable;
use Psr\Clock\ClockInterface;

class SpecificTime implements ClockInterface
{
    public function __construct(private DateTimeImmutable $time)
    {
    }

    public function now(): DateTimeImmutable
    {
        return $this->time;
    }
}
