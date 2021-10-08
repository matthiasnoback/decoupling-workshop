<?php
declare(strict_types=1);

namespace CatApiSdk;

use Assert\Assertion;

final class Breed
{
    private string $name;

    /**
     * @param array<string,mixed> $data
     */
    public function __construct(array $data)
    {
        Assertion::keyExists($data, 'name');
        Assertion::string($data['name']);
        $this->name = $data['name'];
    }

    public function name(): string
    {
        return $this->name;
    }
}
