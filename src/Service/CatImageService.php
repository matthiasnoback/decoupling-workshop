<?php
declare(strict_types=1);

namespace CatLovers\Service;

use CatApiSdk\ImagesSearchResponse;
use CatApiSdk\TheCatApi;

final class CatImageService
{
    public function getRandomImage(): ImagesSearchResponse
    {
        return TheCatApi::imagesSearch();
    }
}
