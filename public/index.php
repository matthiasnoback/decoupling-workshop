<?php
declare(strict_types=1);

use CatLovers\HomepageController;
use CatLovers\Service\CacheImageService;
use CatLovers\Service\LocalCatImageService;
use CatLovers\Service\RandomCatServiceService;
use CatLovers\Service\TheCatApiDotComCatImageService;
use Symfony\Component\Cache\Adapter\FilesystemAdapter;

require __DIR__ . '/../vendor/autoload.php';

$cachePool = new FilesystemAdapter('random_cat_picture', 3, __DIR__ . '/../cache');

$homepage = new HomepageController(
    new CacheImageService(new RandomCatServiceService([
        new LocalCatImageService(),
        new TheCatApiDotComCatImageService(),
    ]), $cachePool)
);
echo $homepage->homepageAction();
