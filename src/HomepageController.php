<?php
declare(strict_types=1);

namespace CatLovers;

use CatLovers\Contract\CatImageServiceInterface;

final class HomepageController
{
    public function __construct(private CatImageServiceInterface $catImageService)
    {
    }

    public function homepageAction(): string
    {
        return Render::view(__DIR__ . '/view/homepage.php', [
            'catImage' => $this->catImageService->getRandomImage()
        ]);
    }
}
