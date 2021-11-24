<?php
declare(strict_types=1);

use CatLovers\HomepageController;
use CatLovers\Service\LocalCatImageService;
use CatLovers\Service\RandomCatServiceService;
use CatLovers\Service\TheCatApiDotComCatImageService;

require __DIR__ . '/../vendor/autoload.php';

$homepage = new HomepageController(
    new RandomCatServiceService([
        new LocalCatImageService(),
        new TheCatApiDotComCatImageService()
    ])
);
echo $homepage->homepageAction();
