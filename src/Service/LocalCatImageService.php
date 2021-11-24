<?php
declare(strict_types=1);

namespace CatLovers\Service;

use CatLovers\Contract\CatImageServiceInterface;
use CatLovers\Dto\CatImage;

final class LocalCatImageService implements CatImageServiceInterface
{
    public function getRandomImage(): CatImage
    {
        $images = [
            '/images/cat1.jpg',
            '/images/cat2.png'
        ];
        $key = array_rand($images);
        $url = $images[$key];

        return new CatImage($url);
    }
}
