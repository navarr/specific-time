# Specific Time (PSR-20)
[![Latest Stable Version](http://poser.pugx.org/navarr/specific-time/v)](https://packagist.org/packages/navarr/specific-time)
[![Total Downloads](http://poser.pugx.org/navarr/specific-time/downloads)](https://packagist.org/packages/navarr/specific-time)
[![Latest Unstable Version](http://poser.pugx.org/navarr/specific-time/v/unstable)](https://packagist.org/packages/navarr/specific-time)
[![License](http://poser.pugx.org/navarr/specific-time/license)](https://packagist.org/packages/navarr/specific-time)  
![Tests](https://github.com/navarr/specific-time/actions/workflows/commit.yml/badge.svg)
![Code Coverage](https://codecov.io/gh/navarr/specific-time/branch/main/graph/badge.svg?token=BHTKOZZDR3)

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
