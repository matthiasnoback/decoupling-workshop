<?php
declare(strict_types=1);

namespace CatLovers\Service;

use CatLovers\Contract\CatImageServiceInterface;
use CatLovers\Dto\CatImage;
use Symfony\Contracts\Cache\CacheInterface;

final class CacheImageService implements CatImageServiceInterface
{
    public function __construct(private CatImageServiceInterface $catImageService, private CacheInterface $cache)
    {
    }

    public function getRandomImage(): CatImage
    {
        return new CatImage($this->getRandomImageUrl($this->catImageService::class));
    }

    private function getRandomImageUrl(string $key): string
    {
        return $this->cache->get($key, function () {
            return $this->catImageService->getRandomImage();
        });
    }
}
