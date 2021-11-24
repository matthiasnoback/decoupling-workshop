<?php
declare(strict_types=1);

namespace CatLovers;

use CatLovers\Service\CatImageService;

final class HomepageController
{
    public function __construct(private CatImageService $catImageService)
    {
    }

    public function homepageAction(): string
    {
        return Render::view(__DIR__ . '/view/homepage.php', [
            'catImage' => $this->catImageService->getRandomImage()
        ]);
    }
}
