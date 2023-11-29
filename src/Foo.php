<?php

declare(strict_types=1);

class Foo
{
    public function __construct(
        private readonly string $name,
        private readonly int $foo,
    ) {
    }

    public function getFoo(): int
    {
        return $this->foo;
    }

    public function getName(): string
    {
        return $this->name;
    }
}
