<?php
declare(strict_types=1);

namespace CatLovers;

use CatApiSdk\CatApi;

final class HomepageController
{
    public function homepageAction(): string
    {
        $catPicture = CatApi::getRandomCatPicture();

        return Render::view(__DIR__ . '/view/homepage.php', compact('catPicture'));
    }
}
