<?php
declare(strict_types=1);

namespace CatLovers\Service;

use CatApiSdk\TheCatApi;
use CatLovers\Contract\CatImageServiceInterface;
use CatLovers\Dto\CatImage;

final class TheCatApiDotComCatImageService implements CatImageServiceInterface
{
    public function getRandomImage(): CatImage
    {
        return new CatImage(TheCatApi::imagesSearch()->url());
    }
}
