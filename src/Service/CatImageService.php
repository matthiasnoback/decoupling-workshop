<?php
declare(strict_types=1);

namespace CatLovers\Service;

use CatApiSdk\TheCatApi;
use CatLovers\Contract\CatImageServiceInterface;
use CatLovers\Dto\CatImage;

final class CatImageService implements CatImageServiceInterface
{
    public function getRandomImage(): CatImage
    {
        if (rand(0, 9) >= 5) {
            return new CatImage(TheCatApi::imagesSearch()->url());
        }

        $images = [
            '/images/cat1.jpg',
            '/images/cat2.png'
        ];
        $key = array_rand($images);
        $url = $images[$key];

        return new CatImage($url);
    }
}
