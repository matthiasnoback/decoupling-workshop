<?php
declare(strict_types=1);

namespace CatLovers\Service;

use CatApiSdk\ImagesSearchResponse;
use CatApiSdk\TheCatApi;

final class CatImageService
{
    public function getRandomImage(): ImagesSearchResponse
    {
        if (rand(0, 9) >= 5) {
            return TheCatApi::imagesSearch();
        }

        $images = [
            '/images/cat1.jpg',
            '/images/cat2.png'
        ];
        $key = array_rand($images);
        $url = $images[$key];

        return new ImagesSearchResponse(
            [
                'id' => '',
                'width' => 0,
                'height' => 0,
                'url' => $url,
                'breeds' => []
            ]
        );
    }
}
