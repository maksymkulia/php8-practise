# Practise new features of PHP 8

## Install
* In terminal run: ``docker-compose up -d``
* Open [localhost:8001](http://localhost:8001)
## Union Types
Now you can use multiple types as arguments and returns.
```php
public array $someArr;
public int|string $someIntOrString;
...
public final function convertAll(): array|string
```
## Named Arguments

## Match Expressions

## Attributes

## Constructor Property Promotion

## Nullsafe operator

## New static return type

## New mixed type

## Allowing ::class on objects