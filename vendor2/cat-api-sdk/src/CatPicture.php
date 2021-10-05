<?php
declare(strict_types=1);

namespace CatApiSdk;

use Assert\Assertion;

final class CatPicture
{
    private string $id;
    private int $width;
    private int $height;
    private string $url;

    /**
     * @param array<mixed> $data
     */
    public function __construct(array $data)
    {
        Assertion::keyExists($data, 'id');
        Assertion::string($data['id']);
        $this->id = $data['id'];

        Assertion::keyExists($data, 'width');
        Assertion::integer($data['width']);
        $this->width = $data['width'];

        Assertion::keyExists($data, 'height');
        Assertion::integer($data['height']);
        $this->height = $data['height'];

        Assertion::keyExists($data, 'url');
        Assertion::string($data['url']);
        $this->url = $data['url'];
    }

    public function id(): string
    {
        return $this->id;
    }

    public function width(): int
    {
        return $this->width;
    }

    public function height(): int
    {
        return $this->height;
    }

    public function url(): string
    {
        return $this->url;
    }
}
