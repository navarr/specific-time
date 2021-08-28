# Specific Time (PSR-20)

This is an implementation of PSR-20 that provides a constant time, no matter how many times `->now()` is called on the object.

## Installation

    composer require navarr/specific-time:@dev

## Usage

```php
use DateTimeImmutable;
use Navarr\SpecificTime\SpecificTime;

// ...

$date = new DateTimeImmutable('2021-02-20');
$clock = new SpecificTime($date);

// 2021-02-20
echo $clock->now()->format('Y-m-d');
```
