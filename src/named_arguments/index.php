<?php

declare(strict_types=1);

/**
 * @param int|string $first
 * @param string|null $second
 * @param bool $third
 * @return array
 */
function namedArguments(
    string|int $first,
    ?string $second = null,
    bool $third
): array
{
    return [
        $first,
        $second,
        $third
    ];
}

print_r(namedArguments(first: 22, third: true));