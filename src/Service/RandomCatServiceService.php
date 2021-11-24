<?php
declare(strict_types=1);

namespace CatLovers\Service;

use Assert\Assertion;
use CatLovers\Contract\CatImageServiceInterface;
use CatLovers\Dto\CatImage;

final class RandomCatServiceService implements CatImageServiceInterface
{
    /**
     * @param array<CatImageServiceInterface> $catImageServices
     */
    public function __construct(
        private array $catImageServices
    ) {
        Assertion::minCount($this->catImageServices, 1);
    }

    public function getRandomImage(): CatImage
    {
        $key = array_rand($this->catImageServices);

        return $this->catImageServices[$key]->getRandomImage();
    }
}
