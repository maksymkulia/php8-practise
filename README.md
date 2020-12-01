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
Now it is possible to pass arguments to function by their names:
```php
function namedArguments(
    string|int $first,
    ?string $second = null,
    bool $third
): array
...
namedArguments(first: 22, third: true)
```

## Match Expressions

## Attributes

## Constructor Property Promotion

## Nullsafe operator

## New static return type

## New mixed type

## Allowing ::class on objects