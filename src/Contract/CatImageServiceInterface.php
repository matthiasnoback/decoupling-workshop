<?php
declare(strict_types=1);

namespace CatLovers\Contract;

use CatLovers\Dto\CatImage;

interface CatImageServiceInterface
{
    public function getRandomImage(): CatImage;
}
