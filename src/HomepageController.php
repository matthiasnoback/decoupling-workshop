<?php
declare(strict_types=1);

namespace CatLovers;

use CatApiSdk\TheCatApi;

final class HomepageController
{
    public function homepageAction(): string
    {
        $catImage = TheCatApi::imagesSearch();

        return Render::view(__DIR__ . '/view/homepage.php', [
            'catImage' => $catImage
        ]);
    }
}
