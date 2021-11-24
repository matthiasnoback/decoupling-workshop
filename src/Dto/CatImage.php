<?php
declare(strict_types=1);

namespace CatLovers\Dto;

final class CatImage
{
    public function __construct(private string $url)
    {
    }

    public function url(): string
    {
        return $this->url;
    }
}
