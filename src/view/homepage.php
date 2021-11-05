<?php
declare(strict_types=1);

use CatApiSdk\TheCatApi;

?>
<html lang="en">
<head>
    <title>CatLovers</title>
</head>
<body>
<img src="<?php echo htmlspecialchars(TheCatApi::imagesSearch()->url(), ENT_QUOTES); ?>" alt="Nice cat" style="width: 400px; height: auto;"/>
</body>
</html>
