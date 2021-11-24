<?php
declare(strict_types=1);

namespace CatLovers\Service;

use CatLovers\Dto\CatImage;

final class AmazingCatService
{
    public function getRandomImage(): CatImage
    {
        if (rand(0, 9) >= 5) {
            return (new TheCatApiDotComCatImageService())->getRandomImage();
        }

        return (new LocalCatImageService())->getRandomImage();
    }
}
