<?php
declare(strict_types=1);

use CatLovers\HomepageController;
use CatLovers\Service\CatImageService;

require __DIR__ . '/../vendor/autoload.php';

$homepage = new HomepageController(new CatImageService());
echo $homepage->homepageAction();
