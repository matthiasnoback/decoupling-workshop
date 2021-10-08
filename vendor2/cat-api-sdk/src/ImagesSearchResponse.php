<?php
declare(strict_types=1);

namespace CatApiSdk;

use Assert\Assertion;

final class ImagesSearchResponse
{
    private string $id;
    private int $width;
    private int $height;
    private string $url;

    /**
     * @var array<Breed>
     */
    private array $breeds;

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

        Assertion::keyExists($data, 'breeds');
        Assertion::isArray($data['breeds']);

        $this->breeds = array_map(fn (array $breed) => new Breed($breed), $data['breeds']);
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

    /**
     * @return array<Breed>
     */
    public function breeds(): array
    {
        return $this->breeds;
    }
}
