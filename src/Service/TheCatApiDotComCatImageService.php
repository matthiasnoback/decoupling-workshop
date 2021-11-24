<?php
declare(strict_types=1);

namespace CatLovers\Service;

use CatApiSdk\TheCatApi;
use CatLovers\Contract\CatImageServiceInterface;
use CatLovers\Dto\CatImage;
use Symfony\Component\Cache\Adapter\FilesystemAdapter;

final class TheCatApiDotComCatImageService implements CatImageServiceInterface
{
    public function getRandomImage(): CatImage
    {
        $cachePool = new FilesystemAdapter('random_cat_picture', 3, __DIR__ . '/../../cache');

        $url = $cachePool->get('random_url', function () {
            return TheCatApi::imagesSearch()->url();
        });

        return new CatImage($url);
    }
}
