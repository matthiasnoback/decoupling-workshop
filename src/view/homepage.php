<?php
declare(strict_types=1);

/** @var \CatApiSdk\ImagesSearchResponse $catImage */

?>
<html lang="en">
<head>
    <title>CatLovers</title>
</head>
<body>
<img src="<?php
echo htmlspecialchars($catImage->url(), ENT_QUOTES); ?>" alt="Nice cat" style="width: 400px; height: auto;"/>
</body>
</html>
