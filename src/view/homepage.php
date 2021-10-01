<?php
declare(strict_types=1);

use CatApiSdk\CatPicture;

/** @var CatPicture $catPicture */

?>
<html lang="en">
<head>
    <title>CatLovers</title>
</head>
<body>
<?php
?><img src="<?php echo htmlspecialchars($catPicture['url'], ENT_QUOTES); ?>" alt="Nice cat" style="width: 400px; height: auto;"/>
</body>
</html>
