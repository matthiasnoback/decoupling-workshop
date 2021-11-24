<?php
declare(strict_types=1);

use CatLovers\HomepageController;
use CatLovers\Service\AmazingCatService;

require __DIR__ . '/../vendor/autoload.php';

$homepage = new HomepageController(
    new AmazingCatService()
);
echo $homepage->homepageAction();
