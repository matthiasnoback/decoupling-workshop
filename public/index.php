<?php
declare(strict_types=1);

use CatLovers\HomepageController;

require __DIR__ . '/../vendor/autoload.php';

$homepage = new HomepageController();
echo $homepage->homepageAction();
