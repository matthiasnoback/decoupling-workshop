<?php
declare(strict_types=1);

namespace CatLovers;

final class HomepageController
{
    public function homepageAction(): string
    {
        return Render::view(__DIR__ . '/view/homepage.php');
    }
}
