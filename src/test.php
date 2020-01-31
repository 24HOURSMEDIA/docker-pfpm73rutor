<?php


// test iconv
echo "ICONV TEST\n";

$result = iconv("UTF-8", "ASCII//TRANSLIT", "foobar");
echo $result ? 'Iconv ok, accepts translit' : 'Iconv not ok, does not accept translat';
echo "\n\n";

echo "IMAGICK TEST\n";
$path = __DIR__ . '/test.png';


$image = imagecreatefromstring(file_get_contents($path));
[$gdw, $gdh] = [imagesx($image),imagesy($image)];
echo "gd width, height = $gdw $gdh" . PHP_EOL;
$imageinfo = null;
$size = getimagesize($path, $imageinfo);

$image = new Imagick($path);
[$idw, $idh] = [$image->getImageWidth(), $image->getImageHeight()];
echo "imagick width, height = $idw $idh" . PHP_EOL;
if ($gdw !== $idw || $gdh !== $idh) {
    echo "not ok, imagick size is different" . PHP_EOL;
} else {
    echo "ok, imagick size is equal" . PHP_EOL;
}

