# Practise new features of PHP 8
_Note: Poor support by PHPStorm IDE._

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
Something like switch/case but more compact
```php
$statusCode = 400;

$msg = match($statusCode) {
    200, 300 => 'ok',
    400 => 'Not found',
    500 => 'Server error',
    default => 'ups'
};

echo $msg;
```

## Attributes
or annotations. 

More time needed.

## Constructor Property Promotion
Not working for Abstract Classes
```php
public function __construct(
        public string $a,
        public int $b
    ) {}
```

## Nullsafe operator
Was:
```php
if($user !== null) {
    $res = $user->getAge();
}
```
Now:
```php
$res = $user?->getAge();
```

## New static return type

## New mixed type

## Allowing ::class on objects