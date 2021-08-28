<?php

/**
 * @author    Navarr Barnier <me@navarr.me>
 * @copyright 2021 Navarr Barnier. All rights reserved.
 */

declare(strict_types=1);

namespace Navarr\SpecificTime\Test;

use Navarr\SpecificTime\SpecificTime;
use PHPUnit\Framework\TestCase;

class SpecificTimeTest extends TestCase
{
    public function provideTestDates()
    {
        return [
            'March 3rd, 2021' => ['2021-03-03', '2021-03-03'],
            'February 29th, 2024' => ['2024-02-29', '2024-02-29'],
            'February 29th, 2021' => ['2021-02-29', '2021-03-01'],
        ];
    }

    /**
     * @dataProvider provideTestDates
     */
    public function testSpecificTime(string $provideToConstruct, string $receiveFromNow): void
    {
        $date = new \DateTimeImmutable($provideToConstruct);
        $clock = new SpecificTime($date);

        $this->assertEquals($receiveFromNow, $clock->now()->format('Y-m-d'));
    }
}
